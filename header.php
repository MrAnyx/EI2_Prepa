<?php

session_start();

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/functions.php';

$base = new PDO('mysql:host=$dbhost;dbname=$dbname', $dbuser, $dbpass);
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);



?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Kaaris vs Booba</title>
    </head>
    <body>

        <?php if(isset($_SESSION['user'])){ ?>
            <strong>Vous etes connecté</strong>
        <?php } ?>

        <nav>
            <ul>
                <?php if(isset($_SESSION['user'])){ ?> <li><a href="poster.php">poster</a></li> <?php } ?>
                <?php if(isset($_SESSION['user'])){ ?> <li><a href="post.php">Tous les articles</a></li> <?php } ?>

                <?php if(isset($_SESSION['user']) && isAdmin($_SESSION['user'])){ ?> <li><a href="gestion.php">Gérer</a></li> <?php } ?>
                <?php if(isset($_SESSION['user'])){ ?> <li><a href="deconnection.php">Deconnection</a></li> <?php } ?>
            </ul>
        </nav>
