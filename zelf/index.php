<?php 
	$login = $_GET['login'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบ ZELF - Za-Shi</title>
<link rel="stylesheet" href="../j_ui/css/custom-theme/jquery-ui-1.8.16.custom.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
<script src="../j_ui/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$( "input:submit, a, button" ).button();

});
</script>
<style>
	body{
		width:960px;
		margin:auto;
		background:#ccebee;
		font-family:Trebuchet MS,Tahoma, Verdana;
	}
	
	#header 
	{
		background:url('images/bg_zelf_header.png') no-repeat bottom;
		width:960px;
		float:left;
		margin-left:-10px;
		height:40px;
	}
	#wrapper
	{
		background:url('images/bg_zelf.png') repeat-y;
		width:880px;
		min-height:400px;
		float:left;
		padding:0px 40px 40px 40px;
	}

	.error{color:red; font-size:12px;}
	.focus{color:red; font-weight:bold; font-size:15px;}
	#login {
	margin:auto;
	width:350px;
	border:3px dotted #e9dc81;
	border-radius:20px;
	background:#FF9;
	padding:20px;
	text-align: center;
}
	#login label {font-weight:bold;}
	#content {margin-top:40px;}
</style>
</head>

<body>

<div id="header">

</div>
<div id="wrapper">
<h2>ยินดีต้อนรับสู่ระบบ ZELF</h2>
<p class="focus">*** กรณีนักเรียนเข้าระบบ ZELF ไม่ได้ เช่น ลืม password หรือ  password ผิด <br />
สามารถแจ้งทางหลังไมค์ facebook ของสถาบันค่ะ จะมีเจ้าหน้าที่คอยตรวจสอบให้ 24 ชม. ค่ะ ขอบคุณค่ะ***</p>
<div class="maincol_5">
					<a class="popupimage" href="http://www.deksilp.com/sensation" target="blank"><img  class="imgshadow" src="sen.jpg" alt="">
                    </a>
		</div><br />
    <div id="content">
   	  <div id="login">
	    	<img src="images/login.png" width=350/>
          <form action="http://www.deksilp.com/zelf/check_login.php" method="post">
            	<table width=100%>
                <tr>
                	<td colspan="2" align="center" class="error">
                    <?php
						if($login == "failed")
							echo "Wrong username and password";
					?>
                    </td>
                </tr>
                <tr>
                	<td>Username </td>
                    <td>: <input id="username" name="username" type="text" /></td>
                </tr>
                <tr>
                	<td>Password </td>
                    <td>: <input id="password" name="pwd" type="password" /></td>
                </tr>
                <tr>
                	<td colspan="2" align="center"> <input id="submit" name="submit" type="submit" value="Login" /></td>
                </tr>
                </table>


            </form>
        </div>
    </div>
</div>
</body>
</html>