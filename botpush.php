<?php



require "vendor/autoload.php";

$access_token = 'oos/7sT931fiYutcAVJ+amK4ntL4rLVwI5p2ZylUdHRvlp6QbAlJXcTZijRx3NsnMiRRxoNuIUlC5I+sGTTShnJiV637tpjiiotwgvgIQKMceQMKEiNExYZX1sbdzJlvDkW3CiX9AmLrFq7y5ijTRQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '972eda038e3b3d879d3f3edbb9c314ed';

$pushID = 'U299a312eaf887dbd304427744e45778a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







