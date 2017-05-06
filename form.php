<?php

    require_once '../classes/db_connect.php';
    require_once '../classes/post_class.php';
    require_once '../classes/data_class.php';

    $id = $_GET['id'];

    if(isset($id)) {
        
        $bEditMode = true;
         
        
    } else { 
        
        $bEditMode = false;     //  b stands for boolean
    }


    $post = new Post($id); 

?>


<!DOCTYPE html>
<html lang="heb">
<head>
  <title>Safweb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/form.css" >
    

    
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
  </div>
</nav>   <!--------------/.End nav-collapse -------------->



		<!------------------- RTL COntact Form Container -------------------->
		
<div class="container">	
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 contactForm">
            <button type="button" class="close" onClick=" location.href='list.php'">&times;</button>
			<h2><?= $bEditMode ? "Edit" : "Add" ?> post</h2>
			<hr><br>
			
			<form action="run\save.php" class="form-horizontal" method="POST">
			    <input type="hidden" name="id" value="<?= $post->id ?>" >
				<div class="form-group">
					<div class="col-xs-10">
						<input type="text" name="title" class="form-control" id="title" placeholder="רשום כותרת לפוסט" required value="<?= $post->title ; ?>">
					</div>
					<label for="title" class="col-xs-2 control-label">כותרת</label>
				</div>
				
				<div class="form-group">
					<div class="col-xs-10">
						<textarea class="form-control" name="description" id="description" rows="2" placeholder="תיאור קצר" required><?= $post->description ; ?></textarea>
					</div>
					<label for="description" class="col-xs-2 control-label">תיאור</label>
				</div>
				
				<div class="form-group">
					<div class="col-xs-10">
						<input type="text" name="image" class="form-control" id="image" placeholder="הוסף תמונה">
					</div>
					<label for="image" class="col-xs-2 control-label">תמונה</label>
				</div>
				
				<div class="form-group">
					<div class="col-xs-10">
						<textarea class="form-control" name="content" id="content" rows="5" placeholder="כתוב תוכן הפוסט" required><?= $post->content ; ?></textarea>
					</div>
					<label for="content" class="col-xs-2 control-label">תוכן</label>
				</div>
				
                <div class="form-group">
                    <div class="col-xs-10">                    
                        <input type="submit" class="btn btn-success" name="submit"  value="Save">
                        <input type="button" class="btn btn-default" onClick=" location.href='list.php'" value="Cancel">
                        <input type="<?= $bEditMode ? "button" : "hidden" ?>" class="btn btn-danger"  name="delete" data-toggle="modal" data-target="#alertModal" value="Delete"> 
                         
                    </div>
                    <label for="cancel" class="col-xs-2 control-label">פעולה</label>
                </div>
            </form>
		</div>
	</div>
</div>		<!---------- End RTL Contact Area ---------->


                         
                         
                          
                           
                            <!------------------ Delete Alert Modal ------------------>
                            
<div id="alertModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">התראה לפני מחיקה</h4>
      </div>
      <div class="modal-body">
        <p> האם אתה בטוח שברצונך למחוק פוסט זה</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=" location.href='run/delete.php?id=<?php echo $post->id ?>'">Yes</button>
      </div>
    </div>

  </div>
</div>        <!------------------ End Delete Alert Modal ------------------>



  
    
    
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