<?php

//id	email	password	name	admin
namespace App;

class User{
    private $id;
    private $email;
    private $password;
    private $name;
    private $admin;

    public static function load($id, $email, $password, $name, $admin){
        $user = new self();
        $user->setId($id);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setName($name);
        $user->setAdmin($admin);

        return $user;
    }

    //Getters & Setters id
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    //Getters & Setters email
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }


    //Getters & Setters password
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

    //Getters & Setters name
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
        return $this;
    }


    //Getters & Setters admin
    public function getAdmin(){
        return $this->admin;
    }
    public function setAdmin($admin){
        $this->admin = $admin;
        return $this;
    }

}

?>
