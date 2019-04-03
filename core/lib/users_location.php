<?php

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$city =  $details->city;
$country =  $details->country;

echo json_encode(array("city" => $city, "country" => $country))

?>