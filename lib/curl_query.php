<?php 
function curl_get($url, $referer = 'http://www.google.com') {
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Opera");
    curl_setopt ($ch, CURLOPT_REFERER, $referer);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

?>