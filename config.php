<?php
 define('henako_SERVER','mysql-henako.alwaysdata.net');
 define('henako_USERNAME','henako');
 define('henako_PASSWORD','bomb565634');
 define('henako_NAME','henako_users');
	// 建立MySQL的資料庫連接 
	$link = @mysqli_connect(henako_SERVER,henako_USERNAME,henako_PASSWORD,henako_NAME);  
	mysqli_query($link, 'SET NAMES utf8');
	if ( !$link ) {
	   die("MySQL資料庫連接錯誤!" . mysqli_connect_error());
	}
	else {
	   return $link;
	}
	?>