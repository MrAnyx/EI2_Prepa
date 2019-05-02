<?php

namespace App;

use App\Repository;
use PDO;

class PostRepository{

    public static function add(Post $post){
        $base = Repository::connect();
        $response = $base->prepare('INSERT INTO posts (title, contenu, user_Id, date_post) VALUES(:title, :contenu, :userId, :datePost)');
        $response->bindValue(':title', $post->getTitle());
        $response->bindValue(':contenu', $post->getContenu());
        $response->bindValue(':userId', $post->getUserId());
        $response->bindValue(':datePost', $post->getDatePost());
        $response->execute();
    }
}

?>
