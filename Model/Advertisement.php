<?php

class Advertisement{
    private int $id;
    private int $userid;
    private string $title;

    public function __construct($id, $userid, $title){
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
    public function setId($id){
        $this->id = $id;
    }

    public function setUserid($userid){
        $this->userid = $userid;
    }

    public function setTitle($title){
        $this->title = $title;
    }
}