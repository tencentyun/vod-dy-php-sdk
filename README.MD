# 简介
为方便 PHP 开发者调试和接入腾讯云产品 API，这里向您介绍适用于 PHP 的腾讯云开发工具包，并提供首次使用开发工具包的简单示例。让您快速获取腾讯云 PHP SDK 并开始调用。
# 依赖环境
1. PHP 5.6.0 版本及以上
2. 从腾讯云控制台 开通相应产品
3. 获取 SecretID、SecretKey 以及调用地址（endpoint），endpoint 一般形式为*.tencentcloudapi.com，VOD 的调用地址为 vod.tencentcloudapi.com，具体参考各产品说明。

# 获取安装
安装 PHP SDK 前，先获取安全凭证。在第一次使用云API之前，用户首先需要在腾讯云控制台上申请安全凭证，安全凭证包括 SecretID 和 SecretKey， SecretID 是用于标识 API 调用者的身份，SecretKey是用于加密签名字符串和服务器端验证签名字符串的密钥。SecretKey 必须严格保管，避免泄露。
## 通过 Composer 安装
通过 Composer 获取安装是使用 PHP SDK 的推荐方法，Composer 是 PHP 的依赖管理工具，支持您项目所需的依赖项，并将其安装到项目中。关于 Composer 详细可参考 Composer 官网 。
1. 安装Composer：
    windows环境请访问[Composer官网](https://getcomposer.org/download/)下载安装包安装。
    
    unix环境在命令行中执行以下命令安装。
    > curl -sS https://getcomposer.org/installer | php

    > sudo mv composer.phar /usr/local/bin/composer
2. 建议中国大陆地区的用户设置腾讯云镜像源：`composer config -g repos.packagist composer https://mirrors.tencent.com/composer/`
3. 执行命令 `composer require qcloud/vod-dy-php-sdk` 添加依赖。
4. 在代码中添加以下引用代码。注意：如下仅为示例，composer 会在项目根目录下生成 vendor 目录，`/path/to/`为项目根目录的实际绝对路径，如果是在当前目录执行，可以省略绝对路径。
    
    > require '/path/to/vendor/autoload.php';

# 示例

更多详细示例可以参考 SDK 仓库中 [examples](https://github.com/tencentyun/vod-dy-php-sdk/tree/master/examples) 目录中的示例。

下面以发起视频处理(ProcessMediaForDY)为例进行说明:

```php
<?php
require_once '/path/to/vendor/autoload.php';
use TencentCloudForDY\Common\Credential;
// 导入可选配置类
use TencentCloudForDY\Common\Profile\ClientProfile;
use TencentCloudForDY\Common\Profile\HttpProfile;
use TencentCloudForDY\Common\Exception\TencentCloudSDKException;
// 导入 vod 产品的 client
use TencentCloudForDY\Vod\V20180717\VodClient;
// 导入要请求接口对应的 Request 类
use TencentCloudForDY\Vod\V20180717\Models\ProcessMediaForDYRequest;

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户 secretId，secretKey
    $cred = new Credential("secretId", "secretKey");
   
    // 实例化一个 http 选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    // 配置代理
    // $httpProfile->setProxy("https://ip:port");
    $httpProfile->setEndpoint("vod.tencentcloudapi.com");

    // 实例化一个 client 选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $httpProfile->setReqMethod("GET");  // GET 请求(默认为 post 请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $clientProfile->setHttpProfile($httpProfile);
    $client = new VodClient($cred, "ap-guangzhou", $clientProfile);

    // 实例化一个发起视频处理请求对象,每个接口都会对应一个 request 对象。
    $req = new ProcessMediaForDYRequest();

    // 构造 API 请求参数
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

    // 通过 client 对象调用 ProcessMediaForDY 方法发起请求。注意请求方法名与请求对象是对应的
    // 返回的 resp 是一个 ProcessMediaForDYResponse 类的实例，与请求对象对应
    $resp = $client->ProcessMediaForDY($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());

    // 也可以取出单个值。
    // 你可以通过跳转到 response 对象的定义处查看返回字段的定义
    print_r($resp->TaskId);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
```

# 常见问题

## 代理

如果是有代理的环境下，需要设置系统环境变量 `https_proxy` ，否则可能无法正常调用，抛出连接超时的异常。

或者使用 GuzzleHttp 代理配置:
```php
$cred = new Credential("secretId", "secretKey");

$httpProfile = new HttpProfile();
$httpProfile->setProxy('https://ip:port');

$clientProfile = new ClientProfile();
$clientProfile->setHttpProfile($httpProfile);

$client = new OcrClient($cred, 'ap-beijing', $this->clientProfile);
```

## 证书问题

如果你的 PHP 环境证书有问题，可能会遇到报错，类似于 `cURL error 60: See http://curl.haxx.se/libcurl/c/libcurl-errors.html`，请尝试按如下步骤解决：

1. 到 [https://curl.haxx.se/ca/cacert.pem](https://curl.haxx.se/ca/cacert.pem) 下载证书文件 `cacert.pem`，将其保存到 PHP 安装路径下。
2. 编辑 `php.ini` 文件，删除 `curl.cainfo` 配置项前的分号注释符（;），值设置为保存的证书文件 `cacert.pem` 的绝对路径。
3. 重启依赖 PHP 的服务。

## php_curl 扩展

此 SDK 依赖的 GuzzleHttp 需要开启 php_curl 扩展，查看环境上的 php.ini 环境确认是否已启用，例如在 Linux 环境下，PHP 7.1 版本，托管在 apache 下的服务，可以打开 /etc/php/7.1/apache2/php.ini 中查看 extension=php_curl.dll 配置项是否已被注释，请删除此项配置前的注释符并重启 apache。

## Web 访问异常

命令行下执行正常，但是放在 Web 服务器执行则报错：

cURL error 0: The cURL request was retried 3 times and did not succeed. The most likely reason for the failure is that cURL was unable to rewind the body of the request and subsequent retries resulted in the same error. Turn on the debug option to see what went wrong. See https://bugs.php.net/bug.php?id=47204 for more information. (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)

此问题出现情况不一。可以运行 `php -r "echo sys_get_temp_dir();"` 打印系统默认临时目录绝对路径，然后在 `php.ini` 配置 `sys_temp_dir` 为这个值尝试是否能解决。
