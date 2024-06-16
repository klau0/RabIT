<?php

require_once "../Model/ApplicationDAO.php";
require_once "../Model/User.php";

/**
 * This class is used to list the advertisements in the View layer when the user visits the Advertisements page.
 *
 * It has access to the DAO and uses its methods to get the information from the database.
 * It implements a singleton pattern.
 */
class AdvertisementController {
    private applicationDAO $dao;
    private static AdvertisementController $instance;

    private function __construct(){
        $this->dao = applicationDAO::getInstance();
    }

    /**
     * This method gets the single instance of this class
     *
     * @return AdvertisementController
     */
    public static function getInstance(): AdvertisementController{
        if (!isset(self::$instance)){
            self::$instance = new AdvertisementController();
        }
        return self::$instance;
    }

    /**
     * @return Advertisement[] Containing every advertisement in the database
     */
    public function getAds(): array{
        return $this->dao->getAds();
    }

    /**
     * @param int $uid The id of a User
     * @return User The User with the given id
     */
    public function getTheUser(int $uid): User{
        return $this->dao->getUser($uid);
    }

}