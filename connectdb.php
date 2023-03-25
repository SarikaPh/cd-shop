<meta charset="utf-8">
<?php
$host = "35.240.247.72";
	$user = "root";
	$pwd = "12345678";
	$db = "cd-album";
	
	$conn = mysqli_connect($host,$user,$pwd) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,"cd-album") or die ("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลเป็นภาษาไทย
?>