<?php

class User {

    private $email;
    private $password;
    private $name;
    private $age;
    private $cpf;
    private $picture;
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setPassword($pass) {
        $this->password = $pass;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}