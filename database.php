<?php
header('Content-Type: text/html; charset=UTF-8');
$dbhost = 'localhost:3306';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '503342'; 
 $con=mysqli_connect($dbhost,$dbuser,$dbpass);
 if(!$con){
 	die(mysqli.error());
 }
 echo '数据库连接成功';
?>