<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Vod\V20180717\VodClient;
use TencentCloud\Vod\V20180717\Models\ProcessMediaForDYRequest;
try {
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));
    $httpProfile = new HttpProfile();
    $httpProfile->setEndpoint("vod.tencentcloudapi.com");

    $clientProfile = new ClientProfile();
    $clientProfile->setHttpProfile($httpProfile);
    $client = new VodClient($cred, "ap-guangzhou", $clientProfile);

    $req = new ProcessMediaForDYRequest();

    $params = '{
        "Action": "ProcessMediaForDY",
        "Version": "2018-07-17",
        "InputInfo": {
          "Type": "COS",
          "CosInputInfo": {
            "Bucket": "test-1251234567",
            "Region": "ap-chongqing",
            "Object": "/test/test.mp4"
          }
        },
        "OutputDir": "/test/",
        "MediaProcessTask": {
          "TranscodeTaskSet": [
            {
              "Definition": 20
            }
          ]
        }
      }';
    $req->fromJsonString($params);


    $resp = $client->ProcessMediaForDY($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
