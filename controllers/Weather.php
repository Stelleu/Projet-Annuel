<?php
include __DIR__."/../models/WeatherModel.php";


class Weather
{
    public static function insert($jsondata)
    {

        $lon = $jsondata['coord']['lon'];
        $lat = $jsondata['coord']['lat'];
        $location = $lon.' '.$lat;
        $name =  $jsondata['name'];
        $degree_min =  $jsondata['main']['temp_min'];
        $degree_max =  $jsondata['main']['temp_max'];
        $weather =  $jsondata['weather']['0']['main'];


        echo $location."<br>";
        echo $name."<br>";
        echo $degree_min."<br>";
        echo $degree_max."<br>";
        echo $weather."<br>";


        WeatherModel::inse4rtJsonData([
            "location" => $location,
            "city_name" => $name,
            "degree_min" => $degree_min,
            "degree_max" => $degree_max,
            "weather" => $weather,


        ]);
    }
}