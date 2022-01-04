<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>	
</head>
<body>
<?php include("navbar.php"); ?>	
	<div class="container">
		<div class="row no-gutters mb-5"style="width:100%; ">
			<div class="col" style=" height: 50vh" >
				<img src="img/index_img/background.png"id="getwife" class="d-block w-100 image_center">							
			</div>
		</div>
		<p class="w-100"style="text-align: center;z-index:3">
			<input type="button" class="btn btn-info " value="抽老婆ㄌ" onclick="random_wife();">
		</p>
	</div>
</body>
</html>
<script type="text/javascript">
function random_wife(){
	var n =Math.floor(Math.random()*(12-1+1))+1;
	var s = n.toString();
	$('#getwife').attr('src','img/index_img/'+s+'.jpg' );
}
</script>