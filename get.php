<?php

if(!$_GET)
{
    $message['error'] = 'true';
    $message['message'] = 'Must provide url data';
    echo json_encode($message);
}

$qry_str = $_GET['tag'];
$ch = curl_init();

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, 'https://api.vineapp.com/timelines/tags/' . $qry_str); 

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, '3');
$content = trim(curl_exec($ch));
curl_close($ch);
print $content;

?>