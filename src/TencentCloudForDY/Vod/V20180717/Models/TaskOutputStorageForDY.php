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
 * 视频处理输出对象信息。
 *
 * @method string getType() 获取视频处理输出对象存储位置的类型，现在仅支持 COS。
 * @method void setType(string $Type) 设置视频处理输出对象存储位置的类型，现在仅支持 COS。
 * @method CosOutputStorageForDY getCosOutputStorage() 获取当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosOutputStorage(CosOutputStorageForDY $CosOutputStorage) 设置当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskOutputStorageForDY extends AbstractModel
{
    /**
     * @var string 视频处理输出对象存储位置的类型，现在仅支持 COS。
     */
    public $Type;

    /**
     * @var CosOutputStorageForDY 当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosOutputStorage;

    /**
     * @param string $Type 视频处理输出对象存储位置的类型，现在仅支持 COS。
     * @param CosOutputStorageForDY $CosOutputStorage 当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosOutputStorage",$param) and $param["CosOutputStorage"] !== null) {
            $this->CosOutputStorage = new CosOutputStorageForDY();
            $this->CosOutputStorage->deserialize($param["CosOutputStorage"]);
        }
    }
}
