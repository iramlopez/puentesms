<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Robotics Bootstrap</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./css/mystyle.css" />

  </head>
  <body>
	<?php include_once('header.php'); ?>
    <div class="background">
		<h1>Robotics Fitness</h1>		
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-sm-12">
		
				<img src="./images/logo.png" class="img-responsive" alt="Fitness Images" width="304" height="236" style="display: inline-block;" />
				<img src="./images/running.png" class="img-responsive" alt="Running" width="104" height="60" style="display: inline-block;" />
			
		</div>
		
		<div class="col-lg-3 col-sm-12">
			<h3>Monday</h3>
				<iframe width="320" height="240" src="https://www.youtube.com/embed/g98g7bMQcbc" frameborder="0" allowfullscreen ng-show="showvideo"></iframe>
		</div>
		<div class="col-lg-3 col-sm-12">
			<h3>Tuesday</h3>
				<iframe width="320" height="240" src="https://www.youtube.com/embed/tYyNM9pmOlA" frameborder="0" allowfullscreen ng-show="showvideo"></iframe>	
		</div>
		<div class="col-lg-3 col-sm-12">
			<h3>Wednesday</h3>
				<iframe width="320" height="240" src="https://www.youtube.com/embed/zXK6oXwRr1U" frameborder="0" allowfullscreen ng-show="showvideo"></iframe>
		</div>
		<div class="col-lg-3 col-sm-12">
			<h3>Thursday</h3>
			    <iframe width="320" height="240" src="https://www.youtube.com/embed/WjoBQsoekgk" frameborder="0" allowfullscreen ng-show="showvideo"></iframe>
		</div>			
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </body>
</html>