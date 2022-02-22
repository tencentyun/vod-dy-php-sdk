<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * RestoreMediaForDY请求参数结构体
 *
 * @method string getCosBucket() 获取文件所在的 COS Bucket 名，如 bucket-xxx。
 * @method void setCosBucket(string $CosBucket) 设置文件所在的 COS Bucket 名，如 bucket-xxx。
 * @method string getCosRegion() 获取文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method void setCosRegion(string $CosRegion) 设置文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method string getObject() 获取文件的 COS 完整路径。
 * @method void setObject(string $Object) 设置文件的 COS 完整路径。
 * @method integer getRestoreDay() 获取解冻出的临时媒体文件的可访问持续时长，单位为“天”。默认为1天。
 * @method void setRestoreDay(integer $RestoreDay) 设置解冻出的临时媒体文件的可访问持续时长，单位为“天”。默认为1天。
 * @method string getSourceContext() 获取来源上下文，用于透传用户请求信息，最长 1000 个字符。
 * @method void setSourceContext(string $SourceContext) 设置来源上下文，用于透传用户请求信息，最长 1000 个字符。
 */
class RestoreMediaForDYRequest extends AbstractModel
{
    /**
     * @var string 文件所在的 COS Bucket 名，如 bucket-xxx。
     */
    public $CosBucket;

    /**
     * @var string 文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     */
    public $CosRegion;

    /**
     * @var string 文件的 COS 完整路径。
     */
    public $Object;

    /**
     * @var integer 解冻出的临时媒体文件的可访问持续时长，单位为“天”。默认为1天。
     */
    public $RestoreDay;

    /**
     * @var string 来源上下文，用于透传用户请求信息，最长 1000 个字符。
     */
    public $SourceContext;

    /**
     * @param string $CosBucket 文件所在的 COS Bucket 名，如 bucket-xxx。
     * @param string $CosRegion 文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     * @param string $Object 文件的 COS 完整路径。
     * @param integer $RestoreDay 解冻出的临时媒体文件的可访问持续时长，单位为“天”。默认为1天。
     * @param string $SourceContext 来源上下文，用于透传用户请求信息，最长 1000 个字符。
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("RestoreDay",$param) and $param["RestoreDay"] !== null) {
            $this->RestoreDay = $param["RestoreDay"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }
    }
}
