<?php


namespace model;


class User
{
    private $id;
    private $username;
    private $password;
    private $role;

    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }
}