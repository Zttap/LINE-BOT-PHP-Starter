<?php
$access_token = 'Q2b0TVZoM5MPcJ3GUNeiiueDlO7Vs5uuggARwpCqWZjR22fmoU8dHsI9+LSB1cYvFOm2tuc0gc2BHABHHrkOt/5yjTizsKRWqFC+/mC4+BQV6v0DYQPIbBF02uJsY5Z36D4cAP5jhu2r59OBXTc6agdB04t89/1O/w1cDnyilFU=
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
