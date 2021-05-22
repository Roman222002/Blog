<?php

namespace Core;

use mysqli;

class DB
{
    /**
     * @return mysqli
     */
    public static function getConnection(): mysqli
    {
        $dbConfig = parse_ini_file(".env");

        $host = $dbConfig["DB_HOST"];
        $user = $dbConfig["DB_USERNAME"];
        $password = $dbConfig["DB_PASSWORD"];
        $dbName = $dbConfig["DB_DATABASE"];
        $port = $dbConfig["DB_PORT"];

        $connection = mysqli_connect($host, $user, $password, $dbName, $port);

        if (!$connection) {
            echo "Cannot connect to Database";
            die;
        }
        return $connection;
    }
}