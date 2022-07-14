<?php
include __DIR__."/../database/setting.php";

class WeatherModel
{
    public static function insertJsonData($data)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        echo "bdd";
        $newWeatherQuery = $databaseConnection->prepare("INSERT INTO cities(location,city_name,degree_min,degree_max,weather) VALUES(:location,:city_name,:degree_min,:degree_max,:weather);");
        //,:degree_max,:weather
        $newWeatherQuery->execute($data);
        echo "fini";

    }

}