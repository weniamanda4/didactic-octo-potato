<?php
$ch = curl_init($url);
$url = "https://denaro-node.gaetano.eu.org";
curl_setopt($ch, CURLOPT_PROXY, '128.0.0.3');
curl_setopt($ch, CURLOPT_PROXYPORT, '8080');

// Perform the request, and save content to $result
$result = curl_exec($ch);
echo $result;


?>
