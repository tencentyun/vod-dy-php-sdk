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
 * EditMediaForDY请求参数结构体
 *
 * @method array getFileInfos() 获取输入的视频文件信息。
 * @method void setFileInfos(array $FileInfos) 设置输入的视频文件信息。
 * @method TaskOutputStorageForDY getOutputStorage() 获取视频处理输出文件的目标存储。
 * @method void setOutputStorage(TaskOutputStorageForDY $OutputStorage) 设置视频处理输出文件的目标存储。
 * @method string getOutputObjectPath() 获取视频处理输出文件的目标路径。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置视频处理输出文件的目标路径。
 * @method EditMediaOutputConfigForDY getOutputConfig() 获取编辑后生成的文件配置。
 * @method void setOutputConfig(EditMediaOutputConfigForDY $OutputConfig) 设置编辑后生成的文件配置。
 * @method integer getTasksPriority() 获取任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 */
class EditMediaForDYRequest extends AbstractModel
{
    /**
     * @var array 输入的视频文件信息。
     */
    public $FileInfos;

    /**
     * @var TaskOutputStorageForDY 视频处理输出文件的目标存储。
     */
    public $OutputStorage;

    /**
     * @var string 视频处理输出文件的目标路径。
     */
    public $OutputObjectPath;

    /**
     * @var EditMediaOutputConfigForDY 编辑后生成的文件配置。
     */
    public $OutputConfig;

    /**
     * @var integer 任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     */
    public $TasksPriority;

    /**
     * @var string 保留字段，特殊用途时使用。
     */
    public $ExtInfo;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @param array $FileInfos 输入的视频文件信息。
     * @param TaskOutputStorageForDY $OutputStorage 视频处理输出文件的目标存储。
     * @param string $OutputObjectPath 视频处理输出文件的目标路径。
     * @param EditMediaOutputConfigForDY $OutputConfig 编辑后生成的文件配置。
     * @param integer $TasksPriority 任务优先级，数值越大优先级越高，取值范围是-10到 10，不填代表0。
     * @param string $ExtInfo 保留字段，特殊用途时使用。
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new EditMediaFileInfoForDY();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorageForDY();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new EditMediaOutputConfigForDY();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
