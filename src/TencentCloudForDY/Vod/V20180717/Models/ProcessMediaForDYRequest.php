<?php
/*
 * Copyright (c) 2017-2018 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloudForDY\Vod\V20180717\Models;
use TencentCloudForDY\Common\AbstractModel;

/**
 * ProcessMediaForDY请求参数结构体
 *
 * @method MediaInputInfoForDY getInputInfo() 获取视频处理的文件输入信息。
 * @method void setInputInfo(MediaInputInfoForDY $InputInfo) 设置视频处理的文件输入信息。
 * @method TaskOutputStorageForDY getOutputStorage() 获取视频处理输出文件的目标存储。
当 InputInfo 的输入类型是 COS 时可以不填，不填代表继承 InputInfo 中的存储位置。
 * @method void setOutputStorage(TaskOutputStorageForDY $OutputStorage) 设置视频处理输出文件的目标存储。
当 InputInfo 的输入类型是 COS 时可以不填，不填代表继承 InputInfo 中的存储位置。
 * @method string getOutputDir() 获取视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与 InputInfo 中文件所在的目录一致。
 * @method void setOutputDir(string $OutputDir) 设置视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与 InputInfo 中文件所在的目录一致。
 * @method MediaProcessTaskInputForDY getMediaProcessTask() 获取视频处理类型任务参数。
 * @method void setMediaProcessTask(MediaProcessTaskInputForDY $MediaProcessTask) 设置视频处理类型任务参数。
 * @method integer getTasksPriority() 获取任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 */
class ProcessMediaForDYRequest extends AbstractModel
{
    /**
     * @var MediaInputInfoForDY 视频处理的文件输入信息。
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorageForDY 视频处理输出文件的目标存储。
当 InputInfo 的输入类型是 COS 时可以不填，不填代表继承 InputInfo 中的存储位置。
     */
    public $OutputStorage;

    /**
     * @var string 视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与 InputInfo 中文件所在的目录一致。
     */
    public $OutputDir;

    /**
     * @var MediaProcessTaskInputForDY 视频处理类型任务参数。
     */
    public $MediaProcessTask;

    /**
     * @var integer 任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     */
    public $TasksPriority;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @param MediaInputInfoForDY $InputInfo 视频处理的文件输入信息。
     * @param TaskOutputStorageForDY $OutputStorage 视频处理输出文件的目标存储。
当 InputInfo 的输入类型是 COS 时可以不填，不填代表继承 InputInfo 中的存储位置。
     * @param string $OutputDir 视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与 InputInfo 中文件所在的目录一致。
     * @param MediaProcessTaskInputForDY $MediaProcessTask 视频处理类型任务参数。
     * @param integer $TasksPriority 任务流的优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfoForDY();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorageForDY();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInputForDY();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
