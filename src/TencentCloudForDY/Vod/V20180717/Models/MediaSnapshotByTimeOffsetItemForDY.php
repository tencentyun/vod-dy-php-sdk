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
 * 媒体文件指定时间点截图信息
 *
 * @method integer getDefinition() 获取指定时间点截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method void setDefinition(integer $Definition) 设置指定时间点截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
 * @method array getPicInfoSet() 获取同一规格的截图信息集合，每个元素代表一张截图。
 * @method void setPicInfoSet(array $PicInfoSet) 设置同一规格的截图信息集合，每个元素代表一张截图。
 * @method TaskOutputStorageForDY getStorage() 获取指定时间点截图文件的存储位置。
 * @method void setStorage(TaskOutputStorageForDY $Storage) 设置指定时间点截图文件的存储位置。
 */
class MediaSnapshotByTimeOffsetItemForDY extends AbstractModel
{
    /**
     * @var integer 指定时间点截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     */
    public $Definition;

    /**
     * @var array 同一规格的截图信息集合，每个元素代表一张截图。
     */
    public $PicInfoSet;

    /**
     * @var TaskOutputStorageForDY 指定时间点截图文件的存储位置。
     */
    public $Storage;

    /**
     * @param integer $Definition 指定时间点截图规格，参见[指定时间点截图参数模板](https://cloud.tencent.com/document/product/266/33480#.E6.97.B6.E9.97.B4.E7.82.B9.E6.88.AA.E5.9B.BE.E6.A8.A1.E6.9D.BF)。
     * @param array $PicInfoSet 同一规格的截图信息集合，每个元素代表一张截图。
     * @param TaskOutputStorageForDY $Storage 指定时间点截图文件的存储位置。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("PicInfoSet",$param) and $param["PicInfoSet"] !== null) {
            $this->PicInfoSet = [];
            foreach ($param["PicInfoSet"] as $key => $value){
                $obj = new MediaSnapshotByTimePicInfoItemForDY();
                $obj->deserialize($value);
                array_push($this->PicInfoSet, $obj);
            }
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorageForDY();
            $this->Storage->deserialize($param["Storage"]);
        }
    }
}
