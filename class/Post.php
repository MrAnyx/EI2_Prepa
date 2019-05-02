<?php

//id	title	contenu	user_id	date_post
namespace App;

class Post{
    private $id;
    private $title;
    private $contenu;
    private $userId;
    private $datePost;

    public static function load($id, $title, $contenu, $userId, $datePost){
        $post = new self();
        $post->setId($id);
        $post->setTitle($title);
        $post->setContenu($contenu);
        $post->setUserId($userId);
        $post->setDatePost($datePost);

        return $post;
    }

    //Getters & Setters id
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    //Getters & Setters title
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
        return $this;
    }


    //Getters & Setters contenu
    public function getContenu(){
        return $this->contenu;
    }
    public function setContenu($contenu){
        $this->contenu = $contenu;
        return $this;
    }

    //Getters & Setters userId
    public function getUserId(){
        return $this->userId;
    }
    public function setUserId($userId){
        $this->userId = $userId;
        return $this;
    }


    //Getters & Setters datePost
    public function getDatePost(){
        return $this->datePost;
    }
    public function setDatePost($datePost){
        $this->datePost = $datePost;
        return $this;
    }

}

?>
