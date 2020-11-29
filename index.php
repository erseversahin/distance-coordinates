<?php

require __DIR__.'/vendor/autoload.php';

use CalcCoordinate\Coordinate\{Distance};

$Distance = new Distance();


$lat1 = 41.01408;
$lon1 = 28.63621;

$lat2 =41.01287324447978;
$lon2 =29.233217944188606;


echo $Distance->distance($lat1,$lon1,$lat2,$lon2)->km();

echo "<br><br>";
echo $Distance->distance($lat1,$lon1,$lat2,$lon2)->mile();
echo "<br><br>";
echo $Distance->distance($lat1,$lon1,$lat2,$lon2)->meter();


