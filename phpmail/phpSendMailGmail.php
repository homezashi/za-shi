<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
	require_once('class.phpmailer.php');

	$name = $_POST["name"];
	$tel = $_POST["tel"];
	$email = $_POST["email"];
	$school = $_POST["school"];
	$course = $_POST["course"];

	$mto = $_POST["mto"];

	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "learnsbuy@gmail.com"; // GMAIL username
	$mail->Password = "Ayumusiam168"; // GMAIL password
	$mail->From = "za-shi.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = "=?UTF-8?B?".base64_encode($name)."?=";  // set from Name
	$mail->Subject = "=?UTF-8?B?".base64_encode($name)."?=";
	$mes = $name."<br>".$school."<br>".$email."<br>".$tel."<br>".$course;
	$mail->Body = $mes;

	$mail->AddAddress("zashischool@yahoo.com", $name); // to Address

	//$mail->AddAttachment("thaicreate/myfile.zip");
	//$mail->AddAttachment("thaicreate/myfile2.zip");

	//$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC

	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	$mail->Send();

	header("Location:http://www.za-shi.com/register.php?ok=res");
?>
</body>
</html>
