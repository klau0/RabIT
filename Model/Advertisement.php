<?php

/**
 * This class represents an Advertisement.
 */
class Advertisement{
    private int $id;
    private int $userid;
    private string $title;

    /**
     * @param int $id
     * @param int $userid The id of the User who created the Advertisement
     * @param string $title
     */
    public function __construct(int $id, int $userid, string $title){
        $this->id = $id;
        $this->userid = $userid;
        $this->title = $title;
    }

// getters
    public function getId(): int{
        return $this->id;
    }

    public function getUserid(): int{
        return $this->userid;
    }

    public function getTitle(): string{
        return $this->title;
    }

// setters
    public function setId(int $id){
        $this->id = $id;
    }

    public function setUserid(int $userid){
        $this->userid = $userid;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }
}