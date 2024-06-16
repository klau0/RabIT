<?php

require_once "../Model/ApplicationDAO.php";

/**
 * This class is used to list the users in the View layer when the user visits the Users page.
 *
 * It has access to the DAO and uses its methods to get the information from the database.
 * It implements a singleton pattern.
 */
class UserController {
    private applicationDAO $dao;
    private static UserController $instance;

    private function __construct(){
        $this->dao = applicationDAO::getInstance();
    }

    /**
     * This method gets the single instance of this class
     *
     * @return UserController
     */
    public static function getInstance(): UserController{
        if (!isset(self::$instance)){
            self::$instance = new UserController();
        }
        return self::$instance;
    }

    /**
     * @return User[] Containing every user in the database
     */
    public function getUsers(): array{
        return $this->dao->getUsers();
    }

}