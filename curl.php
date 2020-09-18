<?php
//获取IP对应的地理位置
function get_region() {
    $ip = $_SERVER["REMOTE_ADDR"];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.ip.sb/geoip/{$ip}");
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_ENCODING, '');
    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($curl);
    return json_decode($data, true);
}
$geoip = get_region()
