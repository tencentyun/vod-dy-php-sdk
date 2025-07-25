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
 * 编辑视频的结果文件输出配置。
 *
 * @method string getContainer() 获取封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
 * @method void setContainer(string $Container) 设置封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
 */
class EditMediaOutputConfigForDY extends AbstractModel
{
    /**
     * @var string 封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
     */
    public $Container;

    /**
     * @param string $Container 封装格式，可选值：mp4、hls、mov、flv、avi。默认是 mp4。
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }
    }
}
