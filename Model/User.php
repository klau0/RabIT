<?php

/**
 * This class represents a User.
 */
class User {
    private int $id;
    private string $name;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name){
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
    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $name){
        $this->name = $name;
    }
}