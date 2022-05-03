<?php

class DatabaseSettings
{
    static $driver = "mysql";
    static $name = "u486471496_easyscooter";
    static $host = "185.166.188.1";
    static $user = "u486471496_admeasyscooter";
    static $password = "3HsbMJXtF7rLGfaq";

    static $pdoSettings = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public static function getConnection()
    {
        $driver = DatabaseSettings::$driver;
        $databaseName = DatabaseSettings::$name;
        $host = DatabaseSettings::$host;
        $user = DatabaseSettings::$user;
        $password = DatabaseSettings::$password;
        return new PDO("$driver:dbname=$databaseName;host=$host", $user, $password, DatabaseSettings::$pdoSettings);
    }
}