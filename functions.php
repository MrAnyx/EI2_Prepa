<?php

use App\User;
use App\UserRepository;
use App\Repository;

function isAdmin($name){
    $base = Repository::connect();
    $response = $base->prepare('SELECT * FROM users WHERE name = :name');
    $response->bindValue(':name', $name, PDO::PARAM_STR);
    $response->execute();
    $row = $response->fetch(PDO::FETCH_ASSOC);
    if($row['admin'] == 0){
        return false;
    }else{
        return true;
    }
}

?>
