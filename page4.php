<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>	
</head>
<body>
<?php include("navbar.php"); ?>	
	</nav>
	<div class="container mt-5">
		<div class="row">
			<div class="col-3 mt-5">
				<div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text">畫筆顏色:</div>
			        </div>
			        <div style="margin: auto;">
			        	<input type="color" class="color_picker"value="#000000" >
			        </div>		
			     </div>
				<p>
			     <div class="form-group range-wrap">
				    <label for="Range">方格圖大小</label>
				    <input type="range" class="form-control-range range" id="Range" min="1" max="50"value="25">
				    <output class="bubble"></output>
				  </div>
				</p>
				<p>
					<input type="button" class="btn btn-primary form-control"onclick="gtvalue()" value="方格圖生成">
				</p>
				<p>
					<input type="button" class="btn btn-primary form-control quick_fill"value="清空畫布">
				</p>
				<p>
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" checked="checked" id="check">
					  <label class="form-check-label" for="defaultCheck1">
					    是否需要線格
					  </label>
					</div>
				</p>
				<p>
					<input type="button" class="btn btn-primary form-control" onclick="block_capture()"value="存取圖片">
				</p>
			</div>
			<div class="col-9">
				<table class="pixel_canvas"></table>
			</div>
		</div>
</body>
<script src="js/pixel.js"></script>
<script type="text/javascript">
	aRanges.forEach(wrap => {
	  const range = wrap.querySelector(".range");
	  const bubble = wrap.querySelector(".bubble");

	  range.addEventListener("input", () => {
	    setBubble(range, bubble);
	  });
	  setBubble(range, bubble);
	});
	function setBubble(range, bubble) {
	  const val = range.value;
	  const min = range.min ? range.min : 1;
	  const max = range.max ? range.max : 50;
	  const newVal = Number(((val - min) * 100) / (max - min));
	  bubble.innerHTML = val;
	  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
	}
	mkgrid(25,25);
	function gtvalue(){
	let num=$('#Range').val();
	mkgrid(num,num);
	}
var tr_ = document.getElementsByTagName("tr");
var td_ = document.getElementsByTagName("td");
 $("#check").click(function () {
        if ($(this).prop("checked")) {
        	for (let i = 0; i < tr_.length; i++) {
        		tr_[i].style.border = "1px dotted silver";
			    for (let j = 0; j < td_.length; j++) {
			    	td_[j].style.border = "1px dotted silver";
				}
			}
        } else {             
  			for (let k = 0; k < tr_.length; k++) {
        		tr_[k].style.border = "0px dotted silver";
			    for (let z = 0; z < td_.length; z++) {
			    td_[z].style.border = "0px dotted silver";
				}
			}
        }
    });

</script>
</html>