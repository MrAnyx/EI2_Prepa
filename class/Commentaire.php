<?php

//	id	user_id	contenu	date_post	publish	post_id
namespace App;

class Commentaire{
    private $id;
    private $userid;
    private $contenu;
    private $datePost;
    private $publish;
    private $postId;

    public static function load($id, $userId, $contenu, $datePost, $publish, $postId){
        $commentaire = new self();
        $commentaire->setId($id);
        $commentaire->setUserId($userId);
        $commentaire->setContenu($contenu);
        $commentaire->setDatePost($datePost);
        $commentaire->setPublish($publish);
        $commentaire->setPostId($postId);

        return $commentaire;
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
    public function getUserId(){
        return $this->userId;
    }
    public function setUserId($userId){
        $this->userId = $userId;
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
    public function getDatePost(){
        return $this->datePost;
    }
    public function setDatePost($datePost){
        $this->datePost = $datePost;
        return $this;
    }


    //Getters & Setters datePost
    public function getPublish(){
        return $this->publish;
    }
    public function setPublish($publish){
        $this->publish = $publish;
        return $this;
    }

    //Getters & Setters postId
    public function getPostId(){
        return $this->postId;
    }
    public function setPostId($postId){
        $this->postId = $postId;
        return $this;
    }

}

?>
