<?php

require_once "ConnectionToDB.php";
require_once "User.php";
require_once "Advertisement.php";

class applicationDAO {
    private mysqli $conn;
    private static applicationDAO $instance;

    private function __construct(){
        $this->conn = &ConnectionToDB::getConnection();
    }

    public static function getInstance(): applicationDAO{
        if (!isset(self::$instance)){
            self::$instance = new applicationDAO();
        }
        return self::$instance;
    }

    public function getUsers(): array{
        $users = array();

        $select = "SELECT * FROM ads.users";
        $result = $this->conn->query($select);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $users[] = new User($row['id'], $row['name']);
            }
        }

        return $users;
    }

    public function getAds(): array{
        $ads = array();

        $select = "SELECT * FROM ads.advertisements";
        $result = $this->conn->query($select);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ads[] = new Advertisement($row['id'], $row['userid'], $row['title']);
            }
        }

        return $ads;
    }

    public function getUser($uid): User{
        $user = null;

        $select = "SELECT * FROM ads.users WHERE id = $uid";
        $result = $this->conn->query($select);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user = new User($row['id'], $row['name']);
        }

        return $user;
    }

}