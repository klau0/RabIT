<?php

class ConnectionToDB {
    private const servername = "localhost";
    private const username = "user";
    private const password = "01478965";

    public static function &getConnection(){
        $conn = new mysqli(self::servername, self::username, self::password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}