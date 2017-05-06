<?php

    require_once'../../classes/db_connect.php';
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

    $post->editPost();

    header('location:..\list.php');
    

    
    

?>