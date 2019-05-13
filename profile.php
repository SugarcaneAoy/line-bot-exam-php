<?php


$access_token = 'uMwL1n9YxG+CBT5dreuPw0c2//kRcfQ14tsyZo7g9d9p7k9MBdVxGx4AM2U4TE5RfpOXLAehAvNe0JsOyGeduC84xiB/wAmbLHKwTm4gPeFxwCnInoen9VI1yy0CmCF1yHJcTRm/7bS8rQJ9tPi8tQdB04t89/1O/w1cDnyilFU=';

$userId = 'U83a6506cf7b871147b5e082b82985ff9';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

