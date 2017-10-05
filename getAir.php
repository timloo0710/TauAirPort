<?php
header('Access-Control-Allow-Origin: *'); 
header("Content-Type: text/html; charset=utf-8");

$text = file_get_contents('http://www.taoyuan-airport.com/uploads/flightx/a_flight_v4.txt');
$tt = mb_convert_encoding($text, 'UTF-8',
          mb_detect_encoding($text, 'UTF-8, big5', true));
echo $tt;


?>