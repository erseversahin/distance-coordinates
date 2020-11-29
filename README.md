## About
Distance Coordinates is calculating distance between two coordinates with **Haversine Formula**
## Requires
php: >= 7.0
## Installation & Loading
Distance Coordinates is available on [Packagist](https://packagist.org/packages/sahinersever/distance-coordinates) (using semantic versioning), and installation via [Composer](https://getcomposer.org) is the recommended way to install Distance Coordinates. Just add this line to your `composer.json` file:
```sh
composer require sahinersever/distance-coordinates
```
## Simple Usage
```php
require __DIR__.'/vendor/autoload.php';

use CalcCoordinate\Coordinate\{Distance};

$Distance = new Distance();

$lat1 = 41.01408;
$lon1 = 28.63621;

$lat2 = 41.01287;
$lon2 = 29.23321;

echo $Distance->distance($lat1,$lon1,$lat2,$lon2)->km();

echo $Distance->distance($lat1,$lon1,$lat2,$lon2)->mile();

echo $Distance->distance($lat1,$lon1,$lat2,$lon2)->meter();

```
### Result
```
50.090005392239
31.124486357862
50090.005392239
```
