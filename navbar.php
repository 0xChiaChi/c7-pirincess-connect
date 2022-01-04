<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<script>
    function validateForm() {
        var x = document.forms["registerForm"]["password-name"].value;
        var y = document.forms["registerForm"]["password_check"].value;
        if(x.length<6){
            alert("密碼長度不足");
            return false;
        }
        if (x != y) {
            alert("請確認密碼是否輸入正確");
            return false;
        }
    }
</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php">
	    <img src="img/LOGO.jpg" class="button_style">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_drop_down" aria-controls="navbar_drop_down" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbar_drop_down">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link clear" i18n=首頁 href="index.php">首頁</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link clear" i18n=抽抽 href="page2.php">抽抽</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link clear" i18n=油油紅包 href="page3.php">油油紅包</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link clear"i18n=點狀圖製作 href="page4.php">點狀圖製作</a>
	      </li>
	      <li class="nav-item ">
	        <a class="nav-link clear" i18n=休息一下 href="page5.php">休息一下</a>
	      </li>
	      <li class="nav-item">
	        <input type="button" value="登入" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
	      </li>
	    </ul>
	    <span class="navbar-text clear" i18n=我不是宅宅>
	      我不是宅宅...真的不是!!
	    </span>
	  </div>
	</nav>
	<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="ModalLabel">登入: )</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    <form method="post" action="login.php">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">帳號:</label>
	            <input type="text" class="form-control" name="username" id="login-name">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">密碼:</label>
	            <input type="password" class="form-control" name="password" id="password">
	          </div>
	      </div>
	      <div class="modal-footer">
	      	<input type="button" class="btn btn-warning" data-target="#registerw" value="註冊" data-toggle="modal" data-dismiss="modal">
	        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="取消">	        
	        <input type="submit" name="submit" class="btn btn-primary" id="login" value="登入">
	      </div>
	    </form>
	    </div>
	   </div>
	</div>
	<div class="modal fade" id="registerw" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="registerModal">註冊</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	    <form method="post" action="register.php" name="registerForm" onsubmit="return validateForm()">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">帳號:</label>
	            <input type="text" class="form-control" name="username" id="login-name">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">密碼:</label>
	            <input type="password" class="form-control" name="password" id="password-name">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">密碼:</label>
	            <input type="password" class="form-control" name="password_check" id="password_check">
	          </div>
	      </div>
	      <div class="modal-footer">
	      	<input type="button" class="btn btn-warning" data-target="#Modal" data-dismiss="modal" value="返回登入" data-toggle="modal">
	        <input type="submit" name="submit" class="btn btn-primary"value="註冊">
	        <input type="reset" name="submit" class="btn btn-secondary"value="重設">
	      </div>
	    </form>
	    </div>
	   </div>
	</div>