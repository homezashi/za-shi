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
		float:left;
		padding:0px 40px 40px 40px;
	}
	.item
	{
		width:380px;
		float:left;
		margin-bottom:30px;
	}
	#choices
	{
		border:3px dotted #e9dc81;
		border-radius:20px;
		float:left;
		width:760px;
		margin:auto;
		background:#FF9;
		padding:20px;
	}
	h4,h5
	{
		margin:0px;
	}
	h4{color:#00348a; margin-bottom:10px;}
	h5{margin-bottom:10px;}
	.item img {float:left;}
	.item p{float:left; margin-left:20px;}
	.error{color:red; font-size:12px;}
	.focus{color:red; font-weight:bold; font-size:15px;}
	input.text { margin-bottom:12px; width:95%; padding: .4em; }
	fieldset { padding:0; border:0; margin-top:25px; }
	.validateTips { border: 1px solid transparent; padding: 0.3em; }
	label, input { display:block; }
	.ui-dialog .ui-state-error { padding: .3em; }
</style>
</head>

<body>

<div id="header">

</div>
<div id="wrapper">
<h2>ยินดีต้อนรับสู่ระบบ ZELF</h2>
<p class="focus">*** เนื่องจากมีการปรับปรุงระบบ ให้นักเรียน ZELF โทรศัพท์มาขอ username กับ password ใหม่ค่ะ ***</p>
<P>เลือกคอร์สที่ลงทะเบียนไว้ได้เลยค่ะ</P>
	<div id="choices">
	<div class="item">
    	<h4>ระบบ ZELF สำหรับคอร์ส AD1 </h4>
<h5>(เป็นการติวเพิ่มเติม สำหรับคอร์สสด, DVD และ
PRIVATE ON-DEMAND )</h5>
		<img  height=85 alt=""  src="images/but-ad1.gif" width=126 align=left border=0 />
        <form action="http://www.deksilp.com/login2/" method="post">
            <input type="hidden"  value="ad1"/>
            <p><input type="submit"  value="เข้าสู่ระบบ"/></p>
        </form>
    </div>
    	<div class="item">
    	<h4>ระบบ ZELF สำหรับคอร์ส AD2</h4>
<h5>(เป็นการติวเพิ่มเติม สำหรับคอร์สสด, DVD และ
PRIVATE ON-DEMAND )</h5>
		<img  height=85 alt=""  src="images/but-ad2.gif" width=126 align=left border=0 />
         <!-- <p><a class="login" id="akiko">เข้าสู่ระบบ</a></p>-->
    </div>
    	<div class="item">
    	<h4>"AKIKO HIGH SPEED"</h4>
<h5></h5>
		<img  height=85 alt=""  src="images/but-akiko.gif" width=126 align=left border=0 />
        <!-- <p><a class="login" id="akiko">เข้าสู่ระบบ</a></p>-->
    </div>
    	<div class="item">
    	<h4>"MINNA HIGH SPEED"</h4>
<h5></h5>
		<img  height=85 alt=""  src="images/but-minna.gif" width=126 align=left border=0 />
         <!-- <p><a class="login" id="minna">เข้าสู่ระบบ</a></p>-->
    </div>
    </div>
</div>
</body>
</html>