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

namespace TencentCloudForDY\Vod\V20180717;

use TencentCloudForDY\Common\AbstractClient;
use TencentCloudForDY\Common\Profile\ClientProfile;
use TencentCloudForDY\Common\Credential;
use TencentCloudForDY\Vod\V20180717\Models as Models;

/**
 * @method Models\DeleteMediaForDYResponse DeleteMediaForDY(Models\DeleteMediaForDYRequest $req) 删除指定文件，如果是 m3u8 文件，会同时删除 ts 文件。
 * @method Models\DescribeMediaMetaDataForDYResponse DescribeMediaMetaDataForDY(Models\DescribeMediaMetaDataForDYRequest $req) 获取媒体的元信息，包括视频画面宽、高、编码格式、时长、帧率等。
 * @method Models\DescribeTaskDetailForDYResponse DescribeTaskDetailForDY(Models\DescribeTaskDetailForDYRequest $req) 通过任务 ID 查询任务的执行状态和结果的详细信息（最多可以查询3天之内提交的任务）。
 * @method Models\EditMediaForDYResponse EditMediaForDY(Models\EditMediaForDYRequest $req) 对视频进行编辑（剪辑、拼接等），生成一个新的点播视频。编辑的功能包括：

1. 对一个文件进行剪辑，生成一个新的视频；
2. 对多个文件进行拼接，生成一个新的视频；
3. 对多个文件进行剪辑，然后再拼接，生成一个新的视频。
 * @method Models\ProcessMediaForDYResponse ProcessMediaForDY(Models\ProcessMediaForDYRequest $req) 对 COS 中的媒体文件发起处理任务，功能包括：
1. 视频转码（带水印）；
2. 视频转动图；
3. 对视频按指定时间点截图；
4. 对视频采样截图；
5. 对视频截图雪碧图；
6. 对视频转自适应码流；
7. 智能内容审核（鉴黄、鉴恐、鉴政）；
8. 智能内容分析（标签、分类、封面、按帧标签）；
9. 智能内容识别（人脸、文本全文、文本关键词、语音全文、语音关键词）。
 * @method Models\RestoreMediaForDYResponse RestoreMediaForDY(Models\RestoreMediaForDYRequest $req) 当媒体文件的存储类型是归档存储或深度归档存储时，是不可访问的。如需访问，则需要调用本接口进行解冻，解冻后可访问的媒体文件是临时的，在有效期过后，则不可访问。
 */

class VodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vod";

    /**
     * @var string
     */
    protected $version = "2018-07-17";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloudForDY"."\\".ucfirst("vod")."\\"."V20180717\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
