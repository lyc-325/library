<?php

$type = 'mysql'; //数据库类型
$db_name = 'test';//数据库名 
$host = 'localhost';
$testusername = 'root';
$testpassword = '123456';
$dsn = "$type:host=$host;dbname=$db_name"; 
$pdo = new PDO($dsn, $testusername, $testpassword);
	
//$config = new PDO('mysql:host=222.73.215.35;dbname=all_openid', "yyyy", "yyyy");
?>