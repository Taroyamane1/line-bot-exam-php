<?php
$access_token = 'TRscaHGcqDr4q4qIjuP43963WelKlQfvBa26dAqnDMR1kNW69hHMwYSjAx+PdfBF6RIyYBKh7eLWRo4KaYCS37YqnyEUtS3uPf1kLfCgprDWse1lfl4XUb8g6D8RV/D8JF843kpp3KW22vc3O/qXYQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
