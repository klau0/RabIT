<?php

class User {
    private int $id;
    private string $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

// getters
    public function getId(): int{
        return $this->id;
    }

    public function getName(): string{
        return $this->name;
    }

// setters
    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }
}