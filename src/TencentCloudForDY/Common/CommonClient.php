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

namespace TencentCloudForDY\Common;

use TencentCloudForDY\Common\AbstractClient;
use TencentCloudForDY\Common\Profile\ClientProfile;
use TencentCloudForDY\Common\Credential;

class CommonClient extends AbstractClient
{
    protected $endpoint;
    protected $service;
    protected $version;

    /**
     * @param string $service
     * @param string $version
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($service, $version, $credential, $region, $profile=null)
    {
        $this->service = $service;
        $this->version = $version;
		$this->endpoint = $service.".tencentcloudapi.com";
        parent::__construct($this->endpoint, $version, $credential, $region, $profile);
    }
}
