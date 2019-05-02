<?php

namespace App;

use App\Repository;
use PDO;

class UserRepository{

    public function add(User $user){
        $base = Repository::connect();
        $response = $base->prepare('INSERT INTO users (email, password, name, admin) VALUES(:email, :password, :name, :admin)');
        $response->bindValue(':email', $user->getEmail());
        $response->bindValue(':password', $user->getPassword());
        $response->bindValue(':name', $user->getName());
        $response->bindValue(':admin', $user->getAdmin());
        $response->execute();
    }

    public static function findByName($name){
        $base = Repository::connect();
        $response = $base->prepare('SELECT * FROM users WHERE name = :name');
        $response->bindValue(':name', $name, PDO::PARAM_STR);
        $response->execute();
        return $response;
    }
}

?>
