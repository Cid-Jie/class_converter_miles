<?php

class Speedometer
{
    public const MILES = 0.621;

    public static function converterKmToMiles($km)
    {
        $result = self::MILES * $km;
        return $result;

    }

    public static function convertMilesToKm($km)
    {
        $result = $km / self::MILES;
        return round($result, 2);
    }
}


echo Speedometer::converterKmToMiles(10) .'</br>';

echo Speedometer::convertMilesToKm(16);
