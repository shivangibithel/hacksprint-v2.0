<?php
require_once("db.php");

if(isset($_POST['submit'])){
$res = mysqli_query($con,"select * from admin_data");
while($row = mysqli_fetch_array($res)){
if(($_POST['admin_id']) == $row['admin_id'] ){

header('Location:admin_panel.php');

}	
}





}




?>











<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel = "stylesheet" href = "style.css">
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<style type="text/css">
	body{
		background-image: url("images/back.jpg");
		background-repeat: no-repeat;

	}


</style>
</head>
<body>
<div class = "container col-md-4 col-md-offset-4">
<form action = "" method = "post">
	<div class = "form-group">
		<label> Admin Id : </label> 
		<input type = "text" name = "admin_id" class = "form-control"/> </div>
	<div class = "form-group">
		<label>Password:</label>
		<input type = "password" name = "pass" class = "form-control"/>
	</div>
	<div class = "form-group">
		<input type = "submit" class = "btn btn-primary" name = "submit">
	</div>


</form>
</div>







</body>
</html>