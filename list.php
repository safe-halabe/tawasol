<?php
    
    require_once'../classes/db_connect.php';
    require_once '../classes/post_class.php';
    require_once '../classes/data_class.php';

    $data = new Data();
    $arrayOfPostsIDs = $data->getAllPosts();

    


?>


<!DOCTYPE html>
<html lang="heb">
<head>
  <title>Safweb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	
  
  <style>
	
	*{
		direction:rtl; 
		font-size:17px;
		font-weight:600;
	}
  
  
  body,html {
	height: 100%;
 }
      
  h2 {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
      
  button{ 
      font-size:38px;
      opacity: 0.7;
      color: #fff;
      float: left;
      line-height: 1
      }
      

.top-buffer {
    margin-top: 100px; /* define margin-top bitween rows */
}

	
	
  </style>
  
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">  	 <!-------------------/.nav-collapse ------------> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<a class="navbar-brand" href="#myPage">מערכת ניהול</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="form.php">הוסף פוסט</a></li>
        </ul>
    </div>
  </div>
</nav>   <!--/.End nav-collapse -->







<div class="container-fluid">        <!-- Table Of All Posts Starts Here -->
    <h2 class="top-buffer">כל החדשות</h2>
    <div class="table-responsive">
       <table class="table table-striped table-bordered">
           <thead>
               <tr class="danger">
                   <th class="text-center">מס'</th>
                   <th class="text-center">כותרת</th>
                   <th class="text-center">תיאור</th>
                   <th class="text-center">תמונה</th>
                   <th class="text-center">פורסם</th>
               </tr>
           </thead>
           
           <tbody>
              <?php foreach( $arrayOfPostsIDs as $id ) { ?>
              
              <?php                                       
                $news = new Post($id);                                      
               ?>
               <tr>
                   <td><?php echo $news->id ?></td> 
                   <td><a href="form.php?id=<?= $news->id ?>"><?= $news->title ?></a></td> 
                   <td><?php echo $news->description ?></td> 
                   <td><?php echo $news->image ?></td> 
                   <td><?php echo $news->published_on ?></td> 
               </tr>
               <?php } ?>
           </tbody> 
       </table>
    </div>
</div>            <!-- End Of Table Of All Posts -->



		<!-- -------------------------- JavaScript & jQuery -------------------------- -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="JS/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	
	
<script>
	$(document).ready(function(){
	// Initialize Tooltip
	$('[data-toggle="tooltip"]').tooltip(); 
	})
</script>

</body>
</html>