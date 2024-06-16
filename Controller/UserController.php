<?php

require_once "../Model/ApplicationDAO.php";

class UserController {
    private applicationDAO $dao;
    private static UserController $instance;

    private function __construct(){
        $this->dao = applicationDAO::getInstance();
    }

    public static function getInstance(): UserController{
        if (!isset(self::$instance)){
            self::$instance = new UserController();
        }
        return self::$instance;
    }

    public function getUsers(): array{
        return $this->dao->getUsers();
    }

}