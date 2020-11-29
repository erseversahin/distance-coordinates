<?php
namespace CalcCoordinate\Coordinate;

class Distance
{
    /**
     * @var int $R The radius of earth
     */
    protected $R = 6371;
    public $Distance;
    /**
     * @param float $la Center coordinate of latitude
     * @param float $lo Center coordinate of longitude
     * @param float $la2 To coordinate of latitude
     * @param float $lo2 To  coordinate of longitude
     * @return Distance
     */
    public function distance(float $la, float $lo, float $la2, float $lo2) : Distance
    {
        $this->Distance = $this->R * 2 * asin(sqrt(pow(sin((deg2rad($la2) - deg2rad($la)) / 2), 2) + cos(deg2rad($la)) * cos(deg2rad($la2)) * pow(sin((deg2rad($lo2) - deg2rad($lo)) / 2), 2)));
        return $this;
    }
    public function km() :float
    {
        return $this->Distance;
    }
    public function mile() :float
    {
        return $this->Distance*0.621371192;
    }
    public function meter() :float
    {
        return $this->Distance*1000;
    }

}

