<?php
$access_token = 'qjt61qXecT/hSc+vhEUC4dWJTu2nglzt1DeM8M9TuckNBdF+3XSoE+Tn1oGzAPjjlbhBba5qW9ea+hpIAjKmXJG8ps8cHM4KxO1mUnj+gejLYw2hnRG7hJ66e1yewuXJ7f2jGX6/TQKY6v7/DW/c/gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
