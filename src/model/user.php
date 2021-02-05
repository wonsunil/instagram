<?php

class User{
    private string $email;
    private string $name;
    private string $password;
    private string $phone;

    public function __construct(string $email, string $name, string $password, string $phone) {
        $this -> email = $email;
        $this -> name = $name;
        $this -> password = $password;
        $this -> phone = $phone;
    }

    public function getEmail(): string {
        return $this -> email;
    }

    public function getName(): string {
        return $this -> name;
    }

    public function getPassword(): string {
        return $this -> password;
    }

    public function getPhone(): string {
        return $this -> phone;
    }
}