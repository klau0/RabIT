<?php

/**
 * This class is used to open a connection to the MySQL server.
 *
 * Its data members are the login information of a user account on the server.
 */
class ConnectionToDB {
    private const servername = "localhost";
    private const username = "root";
    private const password = "";

    /**
     * @return mysqli|void The connection
     */
    public static function &getConnection(){
        $conn = new mysqli(self::servername, self::username, self::password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}