<?php

if(isset($_POST['submit'])){  //if form is submitted...

	$username = $_POST['username']; // assign $username and $pw to username and pw data from form..
	$password = $_POST['password'];


	$connection = mysqli_connect('default_server', 'default_username', 'deafult_pw', 'tablename_to_check')//fill in default server, username, pw

		if($connection){
			echo "We are connected";
		}else {
			die("Database connection failed");
		}





		/*
		if($username && $password) {
			echo $username; 
			echo $password;
		} else {
			echo "This field cannot be blank";
		}
		*/




?>







<!DOCTYPE html>
<html lang = 'en'>
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"

  </head>
  <body>

  	<div class="container">
  		<div class ="col-sm-6">

  			<form action="login.php" method="post"> 

  				<div class="form-group">
  				<label for="username">Username</label>
  				<input type="text" name="username" class="form-control">
  				</div>

  				<div class="form-group">
  				<label for="password">Password</label>
  				<input type="password" name="password"class="form-control">
  				</div>

  				<input class="btn btn-primary" type="submit" name="submit" value="Submit">

  			</form>


  		</div>
  	</div>










  
  </body>
</html>