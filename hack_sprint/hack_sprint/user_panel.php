<?php
	require_once("db.php");
	if(isset($_POST['order_now'])){

			$single = $_POST['single'];
			$res1 = mysqli_query($con,"select * from item_data");
			$row1 = mysqli_fetch_assoc($res1);

			mysqli_query($con,"insert into item_ordered set item = '$_POST[single]',price = '$row1[price]',roll_no = '$_SESSION[roll]'") or die(mysqli_error($con));
			header('Location:user_panel.php?msg=You have successfully placed your order');





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
<style>
 .bill{
 	    margin-left: 46%;
 }


</style>



</head>
<body>
<div class = "container">

<form action = "" method = "POST">
			<table class = "table">
					<thead>
							<tr> 


									<th>Selection</th>
									<th> Item</th>
									<th> Price</th>

									
							</tr>
					</thead>
					<tbody>

							<?php
									$res = mysqli_query($con,"select * from item_data");
									while($row = mysqli_fetch_array($res)){

										?>
									

							<tr>
							
									<td><input type = "radio" value = "<?php echo $row['item'];?>" name = "single"></td>
									<td> <?php echo $row['item'];    ?></td>
									<td> <?php echo $row['price'];    ?> </td>
							</tr>



							<?php } ?>
					</tbody>
			</table>
	</div>

	<div class = "row">
		<center><input type = "submit" class = "btn btn-primary" value = "Order Now" name = "order_now"> &nbsp; &nbsp; &nbsp; &nbsp; 
			</center><br><br>

	</div>
	

</form>

<?php 
		if(isset($_GET['msg'])){
			?>
		<div class = "alert alert-success">
			<p><?php echo $_GET['msg']; ?></p>
		</div>
	<?php }?>

<div class = "row">
		<div class = "bill">
		<a href = "bill.php"><button class = "btn btn-primary">View your bill</button></a> 
	</div>
	</div>


</body>
</html>