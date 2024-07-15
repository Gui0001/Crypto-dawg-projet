<?php

$url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Clitecoin&vs_currencies=eur';

// Initialiser cURL
$curl = curl_init($url);

// Options de cURL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// executer cURL
$response = curl_exec($curl);

// Vérifier potentielles erreurs
if(curl_error($curl)){
    echo 'Error: ' . curl_error($curl);
}

// On décode le JSON
$decoded = json_decode($response, true);

// On nomme nos variables
$btcToEur = $decoded['bitcoin']['eur'];
$ethToEur = $decoded['ethereum']['eur'];
$ltcToEur = $decoded['litecoin']['eur'];

curl_close($curl);