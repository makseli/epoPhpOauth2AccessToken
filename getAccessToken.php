<?php

$CLIENT_ID = '__Consumer Key__'; // sizin Consumer Key bilginiz
$CLIENT_SECRET = '___Consumer Secret Key__'; // sizin Consumer Secret Key bilginiz
$CALLBACK = 'http://127.0.0.1/epo.php';

$url = 'https://ops.epo.org/3.1/auth/accesstoken';

$request_headers = [];
$request_headers[] = 'Content-Type: application/x-www-form-urlencoded'; 
$request_headers[] = 'Authorization: Basic '.base64_encode($CLIENT_ID . ':' . $CLIENT_SECRET);

$myCurl = curl_init($url);
curl_setopt($myCurl, CURLOPT_HTTPHEADER, $request_headers);
curl_setopt($myCurl, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
curl_setopt($myCurl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($myCurl, CURLOPT_HEADER, 1);
curl_setopt($myCurl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($myCurl, CURLOPT_POST, true);

$result = curl_exec($myCurl);
curl_close($myCurl);

print_r($result);

