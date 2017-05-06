<?php

    require_once '../../classes/db_connect.php';
    require_once '../../classes/post_class.php';
    require_once '../../classes/data_class.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];

    $post = new Post($id);
    $post->title = $title;
    $post->description = $description;
    $post->content = $content;

    $post->save();

        

/*
    if(isset($id) && !empty($id)){
        
        $post = new Post($id);
        $post->title = $title;   
        $post->description = $description;   
        $post->content = $content;   
        
        $post->editPost();
        
    } else {
        
        $post = new Post();
        $post->title = $title;   
        $post->description = $description;   
        $post->content = $content;
        
        $post->insertNewPost();
        
        
    
    }*/


    /**
     *
     *
     
     $post = new Post($id);     //  Even if $id is 0 or not present
     $post->title = $title;
     $post->description = $description;
     ....
     
     $post->save();             // Homework INSTEAD of insertNewPost() AND editPost()
     
     
     */


    header('location:../list.php');


?>