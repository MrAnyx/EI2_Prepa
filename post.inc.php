<?php

require __DIR__ . '/header.php';
//id	title	contenu	user_id	date_post
use App\Post;
use App\PostRepository;
use App\User;
use App\UserRepository;

if(isset($_POST['submit'])){
    $contenu = htmlspecialchars($_POST['contenu']);
    $title = htmlspecialchars($_POST['title']);
    $datePost = date("Y-n-j");
    $tmp = UserRepository::findByName($_SESSION['user']);
    $tmp2 = $tmp->fetch(PDO::FETCH_ASSOC);
    $id = $tmp2['id'];

    $com = Post::load(1, $title, $contenu, $id, $datePost);
    PostRepository::add($com);

    header("Location: index.php");

}

?>
