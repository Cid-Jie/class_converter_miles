<?php

class Speedometer
{
    public const MILES = 0.621;
    public const KM = 1.609;

    public static function converterKmToMiles($km)
    {
        $result = self::MILES * $km;
        return $km . ' km fait ' . $result . ' miles.';

    }

    public static function convertMilesToKm($miles)
    {
        $result = $miles / self::KM;
        return $miles . ' miles fait ' . round($result, 2) . ' km.';
    }
}



