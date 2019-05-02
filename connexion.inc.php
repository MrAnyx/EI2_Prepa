<?php

//important car un require pas le header donc il n'y a pas  l'autoload;
require __DIR__ . '/vendor/autoload.php';


use App\User;
use App\UserRepository;

if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['name']);
    $pass = htmlspecialchars($_POST['password']);

    $response = UserRepository::findByName($username);

    if($response->rowCount() == 0){
        echo 'cet utilisateur n\'existe pas';
    }else{
        $row = $response->fetch(PDO::FETCH_ASSOC);
        $user = User::load($row['id'], $row['email'], $row['password'], $row['name'], $row['admin']);
        if(strcmp($pass, $user->getPassword()) == 0){
            session_start();
            $_SESSION['user'] = $username;
            header("location: index.php");
        }else{
            header("Location: index.php?error=dismatch");
        }
    }
}

?>
