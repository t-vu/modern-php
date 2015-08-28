<?php
require 'vendor/autoload.php';
require 'Geocodable.php';
require 'RetailStore.php';
/* 内部文字エンコーディングをUTF-8に設定 */
mb_internal_encoding("UTF-8");
$geocoderAdapter = new \Geocoder\HttpAdapter\CurlHttpAdapter();
$geocoderProvider = new \Geocoder\Provider\GoogleMapsProvider($geocoderAdapter);
$geocoder = new \Geocoder\Geocoder($geocoderProvider);

$store = new RetailStore("Blue");
//$store->setAddress('420 9th Avenue, New York, NY 10001 USA');
$store->setAddress("Kakemama,Ichikawa, Chiba, Japan");
$store->setGeocoder($geocoder);

$latitude = $store->getLatitude();
$longitude = $store->getLongitude();

echo $latitude, ':', $longitude;
echo "<br>".$store->getColor();
