<?php



require "vendor/autoload.php";

$access_token = 'uMwL1n9YxG+CBT5dreuPw0c2//kRcfQ14tsyZo7g9d9p7k9MBdVxGx4AM2U4TE5RfpOXLAehAvNe0JsOyGeduC84xiB/wAmbLHKwTm4gPeFxwCnInoen9VI1yy0CmCF1yHJcTRm/7bS8rQJ9tPi8tQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7dd1cd6b8d863b5784f915cedb0d1dde';

$pushID = 'U83a6506cf7b871147b5e082b82985ff9';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







