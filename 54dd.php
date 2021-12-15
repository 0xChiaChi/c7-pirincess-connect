<?php
	// 建立MySQL的資料庫連接 
	$link = @mysqli_connect( 
	            'mysql-henako.alwaysdata.net',  // MySQL主機名稱 
	            'henako',       // 使用者名稱 
	            'bomb565634',  // 密碼 
	            'henako_users');  
	if ( !$link ) {
	   echo "MySQL資料庫連接錯誤!<br/>";
	   exit();
	}
	else {
	   echo "MySQL資料庫test連接成功!<br/>";
	}
	mysqli_close($link);  // 關閉資料庫連接
	?>