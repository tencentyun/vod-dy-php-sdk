<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use TencentCloudForDY\Common\Credential;
use TencentCloudForDY\Common\Profile\ClientProfile;
use TencentCloudForDY\Common\Profile\HttpProfile;
use TencentCloudForDY\Common\Exception\TencentCloudSDKException;
use TencentCloudForDY\Vod\V20180717\VodClient;
use TencentCloudForDY\Vod\V20180717\Models\DescribeTaskDetailForDYRequest;
try {
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));
    $httpProfile = new HttpProfile();
    $httpProfile->setEndpoint("vod.tencentcloudapi.com");

    $clientProfile = new ClientProfile();
    $clientProfile->setHttpProfile($httpProfile);
    $client = new VodClient($cred, "ap-guangzhou", $clientProfile);

    $req = new DescribeTaskDetailForDYRequest();

    $params = '{
        "Action": "DescribeTaskDetailForDY",
        "Version": "2018-07-17",
        "TaskId": "1251234567-WorkflowTask-685856cd5b9c71236fcf4d7985ceb96att8"
      }';
    $req->fromJsonString($params);


    $resp = $client->DescribeTaskDetailForDY($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
