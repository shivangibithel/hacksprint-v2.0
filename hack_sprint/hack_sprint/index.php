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
	        	.col-md-4 img{
				width: 201px;
				height: 201px;
			}
			.li_img{
				margin-top: 20px;
			}
.col-md-4 li{
padding-bottom: 51px;
list-style-type: none;
}

.overflow{
	background-color:black;
	width:100%;
	height:100%;
	position:fixed;
	display:none;
	z-index: 10;
}
.maindiv{
	width: 80%;
height: 84%;
background-color: white;
margin-left: 10%;
margin-top: 3%;
position: fixed;
display: none;
}
.main_img{
	width: 100%;
    height: 554px;
	display:none;
	/*background-image:url("");*/
	background-repeat:no-repeat;
	 background-size: 100% 100%
}
.main_img img
{
	width: 100%;
	height: 100%;
/*margin-left: -97px;*/
}
.main_img i:hover{
	cursor: pointer;
}
.content{
	    margin-left: 15%;
}
</style>
</head>
<body>
<div class = "overflow">
		<div class = "maindiv">
				<div class = "main_img">
				 <i class = "fa fa-close fa-4x pull-right"></i>			
				</div>
		</div>

</div>


<nav class = "navbar navbar-inverse navbar-fixed-top">
		<div class = "navbar-header">
			<a href = "" class = "navbar-brand">
			<img src = "images/logo.png"/>
			</a>

			<button class = "navbar-toggle" data-toggle = "collapse" data-target= "#abc">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>

			</button>
		</div>

	<div class = "navbar-collapse" id = "abc">
		<ul class = "nav navbar-nav navbar-right">
			<li style = "color:white;"><a href = "admin_login.php">Admin Login</a></li>
			<li style = "color:white;"><a href = "user_login.php">User Login</a></li>
		
			
		
		</ul>

	</div>

</nav>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" id = "carousel_img">

      <div class="item active">
        <img src="images/image_21.jpg" alt="Los Angeles" style="width:100%;">

        			<div class = "carousel-caption">
        					
        			</div>
      </div>

      <div class="item">
        <img src="images/image_23.jpg" alt="Chicago" style="width:100%;">
        		<div class = "carousel-caption">

        					
        		</div>
      </div>
    
      <div class="item">
        <img src="images/image_24.jpg" alt="New york" style="width:100%;">
        	<div class = "carousel-caption">

        					
        		</div>
      </div>
    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

    </div>

    <div class = "container">
    	<div class = "row">
    		<center><h2> PU@CANTEEN </h2></center>
    	</div>

    	<div class = "row ">
    		<div class = "content">
					<div class = "col-md-4 col-md-offset-3">
					<p>Canteen bills are always a headache and keeping a track of the same is a <strong>Boring </strong> task . This website helps us to manage our Canteen account and at the same time will also helps the contractor to be tension free . </p>
					</div>
    		</div>
    	</div>








    </div>

    <div class = "li_img">
			
				<ul>		
					<div class = "row">
						<div class = "col-md-4">
								<li><a href = "#"><img src = "images/cold.jpg" /></a></li>
						</div>
						<div class = "col-md-4">

								<li><a href = "#"><img src = "images/cold1.png" /></a></li>
						</div>		
						<div class = "col-md-4">		
								<li><a href = "#"><img src = "images/cold2.png" /></a></li>
						</div>
					</div>

						<div class = "row">
							<div class = "col-md-4">
									<li><a href = "#"><img src = "images/cold4.jpg" /></a></li>
							</div>
							<div class = "col-md-4">

									<li><a href = "#"><img src = "images/cold5.jpg" /></a></li>
							</div>		
							<div class = "col-md-4">		
									<li><a href = "#"><img src = "images/cold6.jpg" /></a></li>
							</div>
					</div>

				</ul>
			</div>


		</div>


<script type="text/javascript">
	$('.col-md-4 li img').on("click",function(){
			var s = $(this).attr("src");
			$('.main_img img').attr("src",s);
			$('.overflow').fadeIn(1000);
			$('.maindiv').fadeIn(1000);
			$('.main_img').fadeIn(1000);
	});
	$('.col-md-4 li img').on("click",function(){
			var s = $(this).attr("src");
			$('.main_img').css({backgroundImage:"url('" + s + "')"});
			$('.overflow').fadeIn(1000);
			$('.maindiv').fadeIn(1000);
			$('.main_img').fadeIn(1000);
	});
	$('.main_img i').on("click",function(){
		$('.overflow').hide(1000);
		$('.maindiv').hide(1000);
		$('.main_img').hide(1000);
	});
	



</script>

</body>
</html>