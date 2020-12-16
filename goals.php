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
	
		<div class="col-lg-4 col-sm-6">
			<img src="./images/logo.png" class="img-responsive" alt="Fitness Images" width="304" height="236" />
		</div>
		
	</div>
<form action="goals.php" method="POST">	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div><h3>Select Your Training Mode</h3></div>
			<ul>
				<li><label class="radio-inline">
					<input type="radio" name="training_mode" value="extreme"> Extreme
				</label></li>
				<li><label class="radio-inline">
					<input type="radio" name="training_mode" value="hard"> Hard
					</label></li>
				<li><label class="radio-inline">
					<input type="radio" name="training_mode" value="medium"> Medium
					<label></li>
				<li><label class="radio-inline">
					<input type="radio" name="training_mode" value="easy"> Easy
					</label></li>
			</ul>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div><h3>Select Your Training Time Interval</h3></div>
			<ul>
				<li><label class="radio-inline">
					<input type="radio" name="interval_time" value="hour"> One Hour
					</label></li>
				<li><label class="radio-inline">
					<input type="radio" name="interval_time" value="half_hour">Half Hour
					</label></li>
				<li><label class="radio-inline">
					<input type="radio" name="interval_time" value="quarter_hour">Fifteen Minutes
					</label></li>
			</ul>
		</div>
		
		<div class="col-lg-4">
		<div><h3>Select Your Training Days</h3></div>
			<ul>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="monday"> Monday
					</div></li>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="tuesday"> Tuesday
					</div></li>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="wednesday"> Wednesday
					</div></li>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="thursday"> Thursday
					</div></li>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="friday"> Friday
					</div></li>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="saturday"> Saturday
					</div></li>
				<li><div class="checkbox">
						<input type="checkbox" name="training_days" value="sunday"> Sunday
					</div></li>
			</ul>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<center>
				<input type="submit" class="btn btn-primary" value="Set Training Mode">
			</center>
		</div>
	</div>
</form>	
	
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<h4>App Created By The Soggy Waffles</h4>
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Members:
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Daniel Vasquez
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Jessie Reyes
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Alazne Gallegos
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Emilio Lopez
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Kaitlyn Lozano
		</div>
		<div class="col-lg-3 col-sm-12">
			<p>Coach: Ms. Ortega
		</div>			
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </body>
</html>