<?php
require_once("db.php");



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
	.total{
		    margin-left: 43%;
	}


</style>
</head>
<body>
	<table class = "table">
					<thead>
							<tr> 


									<th>Roll No</th>
									<th> Item</th>
									<th> Price</th>

									
							</tr>
					</thead>
					<tbody>

							<?php
									$res = mysqli_query($con,"select * from item_ordered where roll_no = '$_GET[edit]'");
									while($row = mysqli_fetch_array($res)){
										if(isset($_GET['edit'])){

										?>
									

							<tr><?php if(isset($_GET['edit'])){?>
						
									<td><?php  echo $_GET['edit'];} ?></td> <?php  } ?>
									<td> <?php echo $row['item'];    ?></td>
									<td> <?php echo $row['price'];    ?> </td>
							</tr>



							
							<?php } ?>
					</tbody>
			</table>

	<div class = "row">
				<div class = "total">
				
			 <?php 
			 	
			 	$query = "SELECT sum(`price`) as total from item_ordered where roll_no = '$_GET[edit]'";
				//echo $query;
				$res2 = mysqli_query($con,$query);
				while($row2 = mysqli_fetch_array($res2)){
						
								?>
							<label style = "font-size:32px;">Total : </label>	<span style = "font-size:32px;"><?php echo $row2['total']; ?></span>

							<?php	} ?>
							</div>
			</div>

</body>
</html> 