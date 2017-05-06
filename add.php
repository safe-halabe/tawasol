<?php


    require_once '../../classes/db_connect.php';
    require_once '../../classes/post_class.php';
    require_once '../../classes/data_class.php';




if(isset ($_POST["submit"])){
    
    $post = new post();
    
        $post->title        = $_POST['title'];
        $post->description  = $_POST['description'];
        $post->image        = $_POST['image'];
        $post->content      = $_POST['content'];
        //$post->published_on = date('Y-m-d');

    $post->insertNewPost();

    header('location: ../list.php');
         
}


?>