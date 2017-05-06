<?php

    require_once'db_connect.php';
    require_once 'post_class.php';
    require_once 'data_class.php';


//    $news = new Post();    
//    $news->id = 2;
//    $news->getPostsById();
//    <h1><?php echo $news->title; </h1> 


/*  $post = new Post();
    $post->title='ניסיון';
    $post->description='סתם בדיקה';
    $post->insertNewPost();
*/

   // $post = new Post(85);
    
    //$post->deletePost();  // צריך לעשות ריפרש פעמיים בשביל שזב יימחק לגמרי 



    $data = new Data();
    $arrayOfPostsIDs = $data->getAllPosts();


    //$post = new Post();   // ברגע שאני כותב את זה עם ה- this זה לא עובד
    //$post->id=8;
    //$post->title='ניסיון ניסיון ניסיון ניסיון ניסיון ניסיון ניסיון';
    //$post->description='סתם בדיקה סתם בדיקה סתם בדיקה סתם בדיקה סתם בדיקה';
    //$post->editPost(81);



?>

<!doctype html>
<html>
<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">   
    

    
    <style>
        .post{
            position: relative;
            max-width: 600px;
            max-height: 500px;
            margin: 5px auto;
            background: #c2c2c2;
            direction:rtl;
          }
        
        .post img{
            width: 20%;
            position: absolute;
            top: 5px;
            left: 5px;
        }
    </style>
    
</head>

<body>
    
 <?php foreach( $arrayOfPostsIDs as $id ) { ?>
 <?php 
    
    $news = new Post( $id );
                            
 ?> 
 <div class="post"> 
     <h2><?php echo $news->title . ' - ' . $news->id; ?></h2>
     <img class="pull-left" src="../<?php echo $news->image; ?>" >
     <p class="text-justify">
        <?php
            echo $news->description . '<br>';
            echo $news->published_on;
        ?>
     </p>
 </div>
 
 <?php } ?>
 
 
 
 
 
 

</body>
</html>