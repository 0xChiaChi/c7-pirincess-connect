<!DOCTYPE html>
<html>
<head>
	<?php include("header.php"); ?>	
	<style>
	@import url('css/i18n.css');
	[onclick] {cursor:pointer;}
	</style>
</head>
<body>
<?php include("navbar.php"); ?>	
	<div class="container my-5">
		 <div class="carousel-item active">
		 		<img src="img/index_img/1.jpg" class="d-block w-100">
		 </div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/index_img/1.jpg" class="d-block w-100" alt="img/index_img/2.jpg">
		    </div>
		    <div class="carousel-item">
		      <img src="img/index_img/2.jpg" class="d-block w-100" alt="img/index_img/3.jpg">
		    </div>
		    <div class="carousel-item">
		      <img src="img/index_img/3.jpg" class="d-block w-100" alt="img/index_img/4.jpg">
		    </div>
		    <div class="carousel-item">
		      <img src="img/index_img/4.jpg" class="d-block w-100" alt="img/index_img/5.jpg">
		    </div>
		    <div class="carousel-item">
		      <img src="img/index_img/5.jpg" class="d-block w-100" alt="img/index_img/1.jpg">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="py-3 text-center">
		    <div class="btn-group" role="group" aria-label="Basic example">
		      <button type="button" onclick="transiation('tw')" class="btn btn-outline-secondary">繁體</button>
		      <button type="button" onclick="transiation('cn')" class="btn btn-outline-secondary">简体</button>
		      <button type="button" onclick="transiation('en')" class="btn btn-outline-secondary">English</button>
		      <button type="button" onclick="transiation('jp')" class="btn btn-outline-secondary">日本語</button>
		    </div>
		</div>
	</div>
	
</body>
</html>
<script type="text/javascript">
function transiation(Language) {
	var clear=document.querySelectorAll(".clear");
	for (var i = 0; i < clear.length; i++) {
		clear[i].innerHTML = "";
	}
	$('body').attr('Language',Language);
}
</script>