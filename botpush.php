<?php



require "vendor/autoload.php";

$access_token = 'TRscaHGcqDr4q4qIjuP43963WelKlQfvBa26dAqnDMR1kNW69hHMwYSjAx+PdfBF6RIyYBKh7eLWRo4KaYCS37YqnyEUtS3uPf1kLfCgprDWse1lfl4XUb8g6D8RV/D8JF843kpp3KW22vc3O/qXYQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '08808532d96e4aff14377c8457951db2';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







