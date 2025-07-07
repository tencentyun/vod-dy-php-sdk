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
 * DeleteMediaForDY请求参数结构体
 *
 * @method string getCosBucket() 获取文件所在的 COS Bucket 名，如 wsd-tx-ugc-pub。
 * @method void setCosBucket(string $CosBucket) 设置文件所在的 COS Bucket 名，如 wsd-tx-ugc-pub。
 * @method string getCosRegion() 获取文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method void setCosRegion(string $CosRegion) 设置文件所在的 COS Bucket 所属园区，如 ap-chongqing。
 * @method array getObjectSet() 获取文件的 COS 完整路径。
 * @method void setObjectSet(array $ObjectSet) 设置文件的 COS 完整路径。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，删除回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，删除回调将返回该字段值，最长 1000 个字符。
 */
class DeleteMediaForDYRequest extends AbstractModel
{
    /**
     * @var string 文件所在的 COS Bucket 名，如 wsd-tx-ugc-pub。
     */
    public $CosBucket;

    /**
     * @var string 文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     */
    public $CosRegion;

    /**
     * @var array 文件的 COS 完整路径。
     */
    public $ObjectSet;

    /**
     * @var string 来源上下文，用于透传用户请求信息，删除回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @param string $CosBucket 文件所在的 COS Bucket 名，如 wsd-tx-ugc-pub。
     * @param string $CosRegion 文件所在的 COS Bucket 所属园区，如 ap-chongqing。
     * @param array $ObjectSet 文件的 COS 完整路径。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，删除回调将返回该字段值，最长 1000 个字符。
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

        if (array_key_exists("ObjectSet",$param) and $param["ObjectSet"] !== null) {
            $this->ObjectSet = $param["ObjectSet"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
