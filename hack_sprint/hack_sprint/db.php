<?php 
ob_start(); // so that there will be no problem in page redirection 
session_start();
$con = mysqli_connect("localhost","root","") or die(mysqli_error($con));
mysqli_select_db($con,"kart_data") or die(mysqli_error($con));




?>