<?php
session_start();

require('db_connect.php');

if (!isset($_POST["mto"])){
  $course = "hi\nthis is test\nthis is line.";
  $mto = "zashischool@yahoo.com";
  $school = "Za-shi School";
  $name = "promthepc@yahoo.com";
  $email = "promthepc@yahoo.com";
  $tel = "0899214549";
} else {
	$name = $_POST["name"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];
	$school = $_POST["school"];
	$course = $_POST["course"];
  
	$mto = $_POST["mto"];
}

// #@#@#@# DATABASE #@#@#@# 
	$mto = "zashischool@yahoo.com";
	$sql = "INSERT INTO reserve(name,tel,email,school,course,date) VALUES ('$name','$tel','$email','$school','$course', NOW())";
	mysql_query($sql) or die(mysql_error());
	
$mes = $name."\n".$school."\n".$email."\n".$tel."\n".$course;
//$txtfrom = "From: ".$name."\nReply-To: ".$email."\nX-Mailer: PHP/" . phpversion();
$txtfrom = "From: ".$course."\nReply-To: ".$email."\nX-Mailer: PHP/" . phpversion();

mail($mto, $tel, $mes, $txtfrom );



$_SESSION['reserve'] = "ok";

header("Location:http://www.za-shi.com/register.php?ok=res");
?>