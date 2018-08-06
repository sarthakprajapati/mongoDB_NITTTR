<!DOCTYPE html>
<html>
<head>
	<title>XYZ</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<?php
require_once ('./MongodbDatabase.php');

   // connect to mongodb
   $db = new MongodbDatabase;
   if(isset($_POST['videoTitle'])){
   		if(! empty($_POST['videoTitle'])){
   			$insertable = $db->insertNewItem([
 			'videoTitle' => $_POST['videoTitle'],
 			'videoLink' => $_POST['videoLink'],
 			'videoID' => $_POST['videoID'],
 			'videoArtist' => $_POST['videoArtist']]);

   		}
   }

   if($insertable){
   	?>
   	<div class="container">
   		<div class="panel">
   			<h3>Video has been added using MongoDB database :p!</h3>
   		</div>
   	</div>
   	<?php
   }

   ?>
   <div class="container">
   	<div class="row">
   <form method="post" action="index.php">
   	<div class="form-group">
   		<input type="text" name="videoTitle" class="form-control" placeholder="VideoTitle">
   	</div>
   	   	<div class="form-group">
   		<input type="text" name="videoLink" class="form-control" placeholder="VideoLink">
   	</div>
   	   	<div class="form-group">
   		<input type="text" name="videoID" class="form-control" placeholder="VideoId">
   	</div>
   	   	<div class="form-group">
   		<input type="text" name="videoArtist" class="form-control" placeholder="VideoArtist">
   	</div>
   	   	<div class="form-group">
   		<input type="submit" name="Add Video" class="btn btn-primary">
   	</div>
   </form>
   </div>
   </div>
   <?php
	
   exit();

?>
</body>
</html>