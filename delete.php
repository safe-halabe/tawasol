<?php

    require_once'../../classes/db_connect.php';
    require_once '../../classes/post_class.php';
    require_once '../../classes/data_class.php';


    $id = $_GET['id'];

    $post = new Post($id);
    
    $post->deletePost();  
    
    header("location: ../list.php");

?>