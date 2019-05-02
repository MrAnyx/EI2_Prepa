<?php

//id	user_id	contenu	date_post	publish	post_id

namespace App;

use App\Repository;
use PDO;

class CommentaireRepository{

    public static function add(Commentaire $post){
        $base = Repository::connect();
        $response = $base->prepare('INSERT INTO commentaires (user_id, contenu, date_post, publish, post_id) VALUES(:user_id, :contenu, :date_post, :publish, :post_id)');
        $response->bindValue(':user_id', $post->getUserId());
        $response->bindValue(':contenu', $post->getContenu());
        $response->bindValue(':date_post', $post->getDatePost());
        $response->bindValue(':publish', $post->getPublish());
        $response->bindValue(':post_id', $post->getPostId());
        $response->execute();
    }
    public static function findAll(){
        $db = Repository::connect();
        $listePost = array();
        $responses = $db->query('SELECT * FROM posts');
        while ($row = $responses->fetch(PDO::FETCH_ASSOC)) {
            array_push($listePost, Post::load($row['id'], $row['title'], $row['contenu'], $row['user_id'], $row['date_post']));
        }
        return $listePost;
    }
}

?>
