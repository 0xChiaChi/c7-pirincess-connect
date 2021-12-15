<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>	
		<style type="text/css">	
	.img {
	    border-radius: 50%;
	    margin: auto;
	    height: 125px;
	    width: 125px;
	    background-size:cover; 
	    background-position: center;
	}
	.img:hover {
	    box-shadow: 0 0 1.5rem rgba(17,17,17,0.7);
	    
	    /*transition: .5s ease-in-out;*/
	    border-radius: 360px;
	}
	.img1{
		background-image: url(img/head/1.jpg);
	}
	.img1:active{
		background-image: url(img/head/6.png);
	}
	.img2{
		background-image: url(img/head/2.jpg);
	}
	.img2:active{
		background-image: url(img/head/6.png);
	}
	.img3{
		background-image: url(img/head/3.jpg);
	}
	.img3:active{
		background-image: url(img/head/6.png);
	}
	.img4{
		background-image: url(img/head/4.jpg);
	}
	.img4:active{
		background-image: url(img/head/6.png);
	}.img5{
		background-image: url(img/head/5.jpg);
	}
	.img5:active{
		background-image: url(img/head/6.png);
	}
	.card:hover {
	    box-shadow: 0 0 1.5rem rgba(17,17,17,0.9);
	    opacity: 0.8;
		transform: translateY(20px) scale(1) rotate(-0.01turn);
	    /*transition: .5s ease-in-out;*/
	}
	/*.card1:active{
		background-image: url(img/2.jpg);
	}*/
</style>
</head>
<body>
<?php include("navbar.php"); ?>	
	<div class="container pt-5" style="height: 50vh;">
		<div class="row ">
			<div class="col card" style="background-color: red;height: 50vh;">
				<div class="img img1">
				</div>
			</div>
			<div class="col card" style="background-color: red;height: 50vh;">
				<div class="img img2">
				</div>
			</div>
			<div class="col card" style="background-color: red;height: 50vh;">
				<div class="img img3">
				</div>
			</div>
			<div class="col card" style="background-color: red;height: 50vh;">
				<div class="img img4">
				</div>
			</div>
			<div class="col card" style="background-color: red;height: 50vh;">
				<div class="img img5">
				</div>
			</div>
		</div>
		<div>
			<p></p>
			<p style="text-align: center;">點選人物頭像可以看到GURA正在為你擔心(擦汗</p>
		</div>
	</div>
</body>
</html>