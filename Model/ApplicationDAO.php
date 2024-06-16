<?php

require_once "ConnectionToDB.php";
require_once "User.php";
require_once "Advertisement.php";

/**
 * The DAO class used to get data from the database.
 *
 * It implements a singleton pattern.
 */
class applicationDAO {
    private mysqli $conn;
    private static applicationDAO $instance;

    private function __construct(){
        $this->conn = &ConnectionToDB::getConnection();
    }

    /**
     * This method gets the single instance of this class
     *
     * @return applicationDAO
     */
    public static function getInstance(): applicationDAO{
        if (!isset(self::$instance)){
            self::$instance = new applicationDAO();
        }
        return self::$instance;
    }

    /**
     * @return User[] All users as a User object
     */
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

    /**
     * @return Advertisement[] All advertisements as an Advertisement object
     */
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

    /**
     * @param int $uid The id of a User
     * @return User The User with the given id
     */
    public function getUser(int $uid): User{
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