<?php
error_reporting(0);
	//session_start();

	$page = $_GET['page'];
	$ok = $_GET['ok'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<?php require_once("header.php"); ?>

	<div id="main">
		<div id="mainbar">


<!-- =============== START OF MAIN CONTENT ================= -->


			<?php
			if($ok=="res")
				{
				?>
				<!-- =============== ข้อความที่มาจากการจองคอร์ส ================= -->
				<div class="item">
					<div class="textbox" style="background:#FFCCFF;">
						<p class="strong center">
							<span class="red">
							"ได้รับข้อมูลเรียบร้อยแล้วค่ะ"
							<br /><br />ขั้นตอนต่อไป คือ การโอนค่าสมัครเรียน <a href="#payment">  ตามรายละเอียดด้านล่างสุด </a>
							<br />(ที่นั่งไม่หลุดแน่นอนค่ะ หากคอร์สยังไม่ขึ้นว่า "เต็ม")
							<br /><br />จะสงวนที่นั่งให้ 3 วัน หากยังไม่ชำระค่าเล่าเรียน ต้องดำเนินการจองใหม่อีกครั้ง
                            </span>
                            <span class="green">
                            <br />หลังจากชำระค่าเล่าเรียนแล้ว ให้กลับมายืนยันในแบบฟอร์มยืนยันการโอน <br />
                            จากนั้นจะได้รับ SMS หรือีเมล CONFIRM ภายใน 48 ชม.เป็นอันเสร็จขั้นตอนค่ะ

							</span>
						</p>
					</div>
				</div>
				<?php
					//unset($_SESSION['reserve']);
				}
			else if($ok=="conf")
				{
				?>
				<!-- =============== ข้อความที่มาจากการยืนยันการโอนเงิน ================= -->
				<div class="item">
					<div class="textbox" style="background:#FFCC66;">
						<p class="strong center">
							<span class="red">
							"ได้รับข้อมูลเรียบร้อยแล้วค่ะ ขอบคุณค่ะ"<br/>
                            ภายใน 48 ชม. จะได้รับ SMS CONFIRM ค่่ะ"
							</span>
						</p>
						<p class="strong">
							สำหรับคอร์ส @Home จะจัดส่งหนังสือไปตามที่อยู่
							<br />
							<ul>
								<li>ใช้เวลา 3-14 วัน ขึ้นอยู่กับสต็อกหนังสือและไปรษณีย์ค่ะ</li>

							</ul>
						</p>
					</div>
				</div>
				<?php
					//unset($_SESSION['confirm']);
				}
				?>

			<!-- ===== HORIZONTAL LINE ====== --><div class="clear"></div>

			<!-- ===== MENU [REGIS OR CONTACT] ====== -->
			<div class="item">
				<div id="mainmenu" class="maincol_5">
					<p class="center notWannaShowBefore">
						<a href="register.php"> <img src="images/button_register.png" /></a>
						<a href="register.php?page=contact"> <img src="images/button_contact.png" /></a>
					</p>
				</div>
				<script type="text/javascript">
					$('.notWannaShowBefore').hide();
				</script>

			</div>

			<!-- ===== HORIZONTAL LINE ====== --><div class="clear"></div>


			<!-- =========== REGISTER ============ -->
			<div class="item course <?php if($page!="contact") echo 'course_active'; ?>" id="course1">
				<!-- =========== topic ============ --> <img class="course_topic" src="images/topic-register.png" />

				<!-- details -->
                <!-- ===== details ====== -->

				<!-- ===== end details ====== -->

				<div class="maincol_5">
					<div class="textbox">
						<h4 class="center orange">
							สอบถามรายละเอียดของคอร์สเรียนเพิ่มเติม
							<br />ติดต่อ 02-658-3819 หรือ facebook<br />

 							<br /><span class="blue">ขั้นตอนที่ 1 กรอกแบบฟอร์มจองคอร์สเรียนในเว็บไซต์</span><br />
                            <br /><span class="black">(คอร์สที่ยังไม่ขึ้นว่าเต็ม สามารถสมัครได้ทุกคอร์สครับ)</span>
							<br /><br /><span class="blue">ขั้นตอนที่ 2 โอนค่าสมัครทางธนาคาร </span><br />
							<br />"คอร์สสอนสด" "คอร์ส Sensation@Home" (เรียนที่บ้าน) และ <br />"Sensation ที่ ZA-SHI สยามสแควร์" ให้โอนเข้าบัญชีของครูพรหมเทพ <br />

                            หากพบเห็นพนักงานรับเงินสด กรุณาโทรศัพท์แจ้ง 091-127-1274
<br />
							<br /><span class="blue">ขั้นตอนที่ 3 ยืนยันการโอน โดยกรอกวันเวลาที่โอนในแบบฟอร์มยืนยันการโอน</span><br />

					<!--	<p class="center strong">สะดวก ทันสมัย <span class="blue">"จองคอร์สเรียน และยืนยันการสมัครเรียน"</span>
							<br />ให้ดำเนินการผ่านทางระบบออนไลน์ ตามแบบฟอร์มข้างล่างนี้ครับ-->

                            <br /><span class="black">หลังจากโอนค่าสมัครและกรอกยืนยันในแบบฟอร์มแล้ว ภายใน 48 ชม. <br/>
                            เจ้าหน้าที่จะส่งข้อความคอนเฟิร์มทางอีเมลหรือ SMS ครับ</span></h4>
						</p>
					</div>
				</div>
				<div class="maincol_1">&nbsp;</div>

				<!-- =====  จอง ====== -->
				<div class="maincol_2">
					<a href="reserve.php" target="blank"><img src="images/but-form.gif" /></a>
				</div>

				<!-- ===== ยืนยัน ====== -->
				<div class="maincol_2">
					<a href="confirm.php" target="blank"><img src="images/but-form2.gif" /></a>
				</div>


				<!-- ===== HORIZONTAL LINE ====== --><div class="clear"></div>


				<!-- ===== details ====== -->
				<div class="maincol_5">
					<p class="right"><br />คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a name="payment" class="popupimage" href="images/banner-payment.gif"><img class="imgshadow" src="images/Banner-payment.gif" width=600 /></a>
				</div><br />

				<!-- ===== end details ====== -->

			</div>

			
			<!-- =========== CONTACT ============ -->
			<div class="item course <?php if($page=="contact") echo 'course_active'; ?>" id="course2">

				<!-- =========== topic ============ --> <img class="course_topic" src="images/topic-contact.png" />

				<!-- ===== ปุ่มดูแผนที่ ====== -->
				<!--<div class="maincol_1">&nbsp;</div>
				<!--<div class="maincol_4">
					<!--<a href="images/map_siam.jpg" target="blank"><img src="images/button_mapzashi.gif" /></a>
                    <!--PRINT --><!--<a href="images/accessmap.png" target="blank"><img src="images/button_mapaccess.gif" /></a>
				<!--</div>

				<div class="maincol_5">&nbsp;</div>

				<!-- details -->
				<!--<div class="maincol_5">
					<a class="popupimage" href="images/newmap2.gif"><img  src="images/newmap2.gif" alt="" width=300 /></a>
					<a class="popupimage" href="images/accessmap.gif"><img  src="images/accessmap.gif" alt="" width=280 /></a>
				</div> -->

                <div class="maincol_5">
					<a class="popupimage" href="images/map_siam.jpg" target="blank"><img  class="imgshadow" src="images/map_siam.jpg" alt="" width=600 /></a>
				</div><br />
                <!-- <div class="maincol_5">
					<a class="popupimage" href="images/map_phayathai.jpg" target="blank"><img  class="imgshadow" src="images/map_phayathai.jpg" alt="" width=600 /></a>
				</div><br />
                <div class="maincol_5">
					<a class="popupimage" href="images/map_bangkapi.jpg" target="blank"><img  class="imgshadow" src="images/map_bangkapi.jpg" alt="" width=600 /></a>
				</div><br />
                <div class="maincol_5">
					<a class="popupimage" href="images/newaccessmap.jpg" target="blank"><img  class="imgshadow" src="images/newaccessmap.jpg" alt="" width=600 /></a>
				</div><br />

				<!-- end details -->

				<!-- ===== access ====== -->


			</div>


			<!-- ===== HORIZONTAL LINE ====== --><div class="clear"></div>


<!-- =============== END OF MAIN CONTENT ================= -->
		</div>

		<?php require_once("sidebar.php"); ?>

	</div>
<?php require_once("footer.php"); ?>
