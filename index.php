<?php 
echo phpinfo();

$url = 'https://koalabeds.com.hk/en/wp-json/api/v1/hotels';
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
//rewer

curl_close($curl);

echo '<pre>'; print_r($err);die; 
echo '<pre>'; print_r($err);die; 
echo '<pre>'; print_r($err);die; 
