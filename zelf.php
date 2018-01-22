<?php
	$act = $_GET['id']; 
	$cor[$act] = 'course_active';
	$m_select[$act] = 'blue italic';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<?php require_once("header.php"); ?>

	<div id="main">
		<div id="mainbar">
		
		
<!-- =============== START OF MAIN CONTENT ================= -->

			<div class="clear"></div>
			
			<div class="item" >
				<div class="maincol_5 center">
					<a target="blank" href="http://zelf.za-shi.com"><img src="images/button_zelf-login.png" /></a>
				</div>
                
                <div class="maincol_1">&nbsp;</div>
			</div>
                
                <!--  ==== แผนการเรียนภาษาญี่ปุ่น show ตอนเป็น default ไม่ได้เลือกเข้าดูคอร์สอะไรตั้งแต่แรก =====-->
			<div class="item course <?php if(!(isset($_GET['id']))) echo 'course_active'; ?>">
				
                
            
            <div class="maincol_5">
					<a class="popupimage" href="images/siam3.jpg" target="blank"><img  class="imgshadow" src="images/siam3.jpg" alt="" width=600 /></a>
				</div>
			
            
            
                <div class="maincol_5">
                          
                
					<a class="popupimage" href="images/course/plan4.gif" target="blank"><img  class="imgshadow" src="images/course/plan4.gif" alt="" width=600 /></a>
				</div>
			</div>


 			<div class="item" >	                               
				<div id="mainmenu" class="maincol_4 notWannaShowBefore">
                <br/>
					<ul>
						<li><a id="menu1" class="strong " href="http://www.za-shi.com/zelf.php?id=1" >AD1 ติวสอบ PAT ญี่ปุ่น - ZA-SHI SENSATION @สยามสแควร์ <br /> ZA-SHI สาขาสยามสแควร์ (สมัครและเริ่มเรียนได้เลย) 3,900 บาท</br>หรือ ZELF@AC'CESS (สมัครและเริ่มเรียนได้เลย) 4,200 บาท</a></li>
						<li>AD2 ติวสอบ PAT ญี่ปุ่น- SENSATION@สยามสแควร์</br>(อยู่ระหว่างการตัดต่อ)</li>
						<li><a id="menu3" class="strong " href="http://www.za-shi.com/zelf.php?id=3" >เฉลยข้อสอบ PAT 7 ชุด- ZA-SHI SENSATION @สยามสแควร์ <br /> ZA-SHI สาขาสยามสแควร์ (สมัครและเริ่มเรียนได้เลย) 4,200 บาท</br>หรือ ZELF@Home (สมัครและเริ่มเรียนได้เลย) <br/> 3,500 บาท เและเรียนซ้ำกี่ครั้งก็ได้ในเวลา 4 เดือน <br/>(รับจำนวนจำกัดเนื่องจากความจุของ server)</a></li>
						<li><a id="menu4" class="strong" href="zelf.php?id=4" >DREAM 1,2,3 AKIKO 4,5,6- ZA-SHI SENSATION@สยามสแควร์ <br /> ZA-SHI สาขาสยามสแควร์ (สมัครและเริ่มเรียนได้เลย) 3,900 บาท</br>หรือ ZELF@Home (สมัครและเริ่มเรียนได้เลย)  <br/> เพียง 2,900 บาท เและเรียนซ้ำกี่ครั้งก็ได้ในเวลา 4 เดือน <br/>(รับจำนวนจำกัดเนื่องจากความจุของ server)</a></li>
						<li>INTERMEDIATE 1-6 - ZELF(กรุณาติดต่อ 02-611-1115)</li>
                        <li>ADVANCED 1-4 - ZELF(กรุณาติดต่อ 02-611-1115)</li>
                        <li>ติวสอบ+เฉลยข้อสอบวัดระดับ N2 N3 N4 - ZELF(กรุณาติดต่อ 02-611-1115)</li>
					</ul>
				</div>
				<script type="text/javascript">
					$('.notWannaShowBefore').hide();
				</script>
					
			</div>
			<div class="clear"></div>
			
			<!-- =========== ZELF AD1 ============ -->
			<div class="item course <?php echo $cor[1]; ?>" id="course1">
				<!-- =========== topic ============ --> <img class="course_topic" src="images/course-topic_ad1.png" />
				<div class="maincol_2">
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a> <!-- register button --> 
				</div>
				
				<div class="maincol_3"> <!-- schedule -->
					 <!-- *** To make the button show the picture as a dialog box when click just add class="popupimage" 
					 and add a link to the picture at HREF attribute***
					 Example:  <a class="popupimage" href="images/course/Banner-AD1-Sem2-54.gif"> images or text </a>
					 -->
					<a class="popupimage" href="images/siam_course.jpg"><img src="images/button_sensation_ad1.png" /></a>
					<!--PRINT --><a href="images/siam_course.jpg" target="blank"><img src="images/button_print.png" /></a>
                    
                    <a class="popupimage" href="images/course/Banner-AD1-zelf.gif"><img src="images/button_mapzelf.png" /></a>
					<!--PRINT --><a href="images/course/Banner-AD1-zelf.gif" target="blank"><img src="images/button_print.png" /></a>
					
                    
					</div>
				
				<div class="clear"></div> <!-- dashed line -->
				<div class="maincol_5"> <!-- details --> 
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a class="popupimage" href="images/course/plan4.gif"><img  class="imgshadow" src="images/course/plan4.gif" alt="" width=600 /></a>
					<img  class="imgshadow" src="images/course/detail-ad1.gif" alt="" width=600 />
				</div>
			</div>	
			<!-- =========== END ZELF AD1 ============ -->
			
			<!-- =========== ZELF AD2 ============ -->
			<div class="item course <?php echo $cor[1]; ?>" id="course2">
				
				<div class="maincol_2">
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a> <!-- register button --> 
				</div>
				
				<div class="maincol_3"> <!-- schedule -->
					 <!-- *** To make the button show the picture as a dialog box when click just add class="popupimage" 
					 and add a link to the picture at HREF attribute***
					 Example:  <a class="popupimage" href="images/course/Banner-AD1-Sem2-54.gif"> images or text </a>
					 -->
                     
                     <a class="popupimage" href="images/siam_course.jpg"><img src="images/button_sensation_pat7.png" /></a>
					<!--PRINT --><a href="images/siam_course.jpg" target="blank"><img src="images/button_print.png" /></a>
					<a class="popupimage" href="images/pat.gif"><img src="images/button_mappat7.png" /></a>
					<!--PRINT --><a href="images/pat.gif" target="blank"><img src="images/button_print.png" /></a>
					
					</div>
				
				<div class="clear"></div> <!-- dashed line -->
				<div class="maincol_5"> <!-- details --> 
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a class="popupimage" href="images/course/plan4.gif"><img  class="imgshadow" src="images/course/plan4.gif" alt="" width=600 /></a>
									</div>
			</div>	
			<!-- =========== END ZELF AD2 ============ -->
			
			<!-- =========== AKIKO ============ -->
			<div class="item course <?php echo $cor[1]; ?>" id="course3">
				<!-- =========== topic ============ --> <img class="course_topic" src="images/course-topic_akiko.png" />
				
				<div class="maincol_2">
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a> <!-- register button --> 
				</div>
				
				<div class="maincol_3"> <!-- schedule -->
					 <!-- *** To make the button show the picture as a dialog box when click just add class="popupimage" 
					 and add a link to the picture at HREF attribute***
					 Example:  <a class="popupimage" href="images/course/Banner-AD1-Sem2-54.gif"> images or text </a>
					 -->
                     <a href="images/course/siam_course_sem2.jpg" target="blank"><img src="images/button_sensation_akiko_sem.png" /></a>
					<!--PRINT --><a href="images/course/siam_course_sem2.jpg" target="blank"><img src="images/button_print.png" /></a>
                    <a href="images/course/siam_course_summer.jpg" target="blank"><img src="images/button_sensation_akiko_sum.png" /></a>
					<!--PRINT --><a href="images/course/siam_course_summer.jpg" target="blank"><img src="images/button_print.png" /></a>
					<a href="images/akiko.gif" target="blank"><img src="images/button_dream.png" /></a>
					<!--PRINT --><a href="images/akiko.gif" target="blank"><img src="images/button_print.png" /></a>
					
					
					
					</div>
				
				<div class="clear"></div> <!-- dashed line -->
				<div class="maincol_5"> <!-- details --> 
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a class="popupimage" href="images/course/plan4.gif"><img  class="imgshadow" src="images/course/plan4.gif" alt="" width=600 /></a>
									</div>
			
				
				
			</div>
			<!-- =========== END AKIKO ============ -->
			
			
			
			
			<!-- HORIZONTAL LINE --><div class="clear"></div>				
			
<!-- =============== END  ================= -->		
		</div>
		
		<?php require_once("sidebar.php"); ?>
		
	</div>
<?php require_once("footer.php"); ?>