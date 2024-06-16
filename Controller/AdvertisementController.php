<?php

require_once "../Model/ApplicationDAO.php";
require_once "../Model/User.php";

class AdvertisementController {
    private applicationDAO $dao;
    private static AdvertisementController $instance;

    private function __construct(){
        $this->dao = applicationDAO::getInstance();
    }

    public static function getInstance(): AdvertisementController{
        if (!isset(self::$instance)){
            self::$instance = new AdvertisementController();
        }
        return self::$instance;
    }

    public function getAds(): array{
        return $this->dao->getAds();
    }

    public function getTheUser($uid): User{
        return $this->dao->getUser($uid);
    }

}