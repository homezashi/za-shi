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

			<!-- HORIZONTAL LINE --><div class="clear"></div>
			
			<!-- TOP PART [MENU] -->
			<div class="item" >
			
				<!-- PLAN -->
				<div class="maincol_5 notWannaShowBefore">
					<p class="center"><a class="popupimage" href="images/course/plan2.gif" target="blank"> <img src="images/button_plan.png" /></a></p>
				</div>
                                               
				<div class="maincol_1">&nbsp;
                </div>
                
				<!-- MAINMENU -->
                
                
				<div id="mainmenu" class="maincol_4 notWannaShowBefore">
					<ul>
						<li><a id="menu1" class="strong <?php echo $m_select[1]; ?>" href="courses.php?id=1" >AD1 ติวสอบ PAT ญี่ปุ่น </a></li>
						<li><a id="menu2" class="strong <?php echo $m_select[2]; ?>" href="courses.php?id=2" >AD2 ติวสอบ PAT ญี่ปุ่น </a></li>
						
                        <li><a id="menu3" class="strong <?php echo $m_select[3]; ?>" href="courses.php?id=3" >คอร์สติววัดระดับญี่ปุ่นและเพิ่มเกรด N1 N2 N3 N4 N5</a></li>
						<li><a id="menu4" class="strong <?php echo $m_select[5]; ?>" href="courses.php?id=5" >คอร์สพื้นฐานและเพิ่มเกรด DREAM 1, 2, 3 AKIKO 4, 5, 6</a></li>
						  
                        <li><a id="menu5" class="strong <?php echo $m_select[6]; ?>" href="courses.php?id=6" >คอร์สเฉลยข้อสอบ PAT 8 ชุด</a></li>
                        <li><a id="menu6" class="strong <?php echo $m_select[7]; ?>" href="courses.php?id=7" >คอร์ส PRE-ADMISSION</a></li> 
					</ul>
				</div>
                พอคลิกที่คอร์ส ตารางเรียนจะปรากฏที่ด้านล่างของหน้านี้ครับ
                <!--<div class="maincol_5"><p><h5 class="orange"><br /><a href="zelf.php">คลิกที่นี่ หากไม่สะดวกเรียนคอร์สสด มีคอร์สที่เปิดสอนระบบ ZELF <br /> (เรียนผ่านระบบคอมพิวเตอร์ที่บ้าน ZELF@Home <br />หรือที่สาขา ZELF@AC'CESS เลือกเวลาเองได้) <br /></a></h5></p></div>
                
                -->
                						
				<script type="text/javascript">
					$('.notWannaShowBefore').hide();
				</script>
					
			</div>
			<!-- END TOP PART -->
			
			<!-- HORIZONTAL LINE --><div class="clear"></div>
			
			<!--  ==== แผนการเรียนภาษาญี่ปุ่น show ตอนเป็น default ไม่ได้เลือกเข้าดูคอร์สอะไรตั้งแต่แรก =====-->
			<div class="item course <?php if(!(isset($_GET['id']))) echo 'course_active'; ?>">
				
                <!--<div class="maincol_5">
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a class="popupimage" href="images/course/plan2.gif" target="blank"><img  class="imgshadow" src="images/course/plan2.gif" alt="" width=600 /></a>
				</div> -->
			</div>
			
			<!-- =========== AD1 ============ -->
			<div class="item course <?php echo $cor[1]; ?>" id="course1">
			
				<!-- =========== topic ============ --> 
				<img class="course_topic" src="images/course-topic_ad1.png" />
				
				<!-- register button --> 
				<div class="maincol_2">
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a> 
				</div>
				
				<!-- schedule -->
				<div class="maincol_3"> <!-- schedule --> 
					
                    <a href="images/course/Banner-AD1-AD2-Sum56.gif" target="blank"><img src="images/button_schedule_summer.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-AD1-AD2-Sum56.gif" target="blank"><img src="images/button_print.png" /></a>
                    <a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_schedule_opensem1.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_print.png" /></a>
                    <a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_schedule_octo.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_print.png" /></a>
					<a class="popupimage" href="images/course/wait.gif"><img src="images/button_schedule_opensem2.png" /></a>
					<!-- PRINT --><img src="images/button_print.png"/>
                    <a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_sensation_ad1.png" /></a>
					<!--PRINT --><a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_print.png" /></a>
                		
                    
					
	      </div>
				
				<!-- dashed line --><div class="clear"></div> 
				
				<!-- details --> 
				<div class="maincol_5"> 
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a class="popupimage" href="images/course/4worth.gif"><img  class="imgshadow" src="images/course/4worth.gif" alt="" width=600 /></a>
					<img  class="imgshadow" src="images/course/detail-ad1.gif" alt="" width=600 />
				</div>
			</div>	
			
			<!-- =========== AD2 ============ -->
			<div class="item course <?php echo $cor[2]; ?>" id="course2">
				<!-- =========== topic ============ --> <img class="course_topic" src="images/course-topic_ad2.png" />
				
                
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				
                <div class="maincol_3"> <!-- schedule --> 
					
                    <a href="images/course/Banner-AD1-AD2-Sum56.gif" target="blank"><img src="images/button_schedule_summer.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-AD1-AD2-Sum56.gif" target="blank"><img src="images/button_print.png" /></a>
                    <a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_schedule_opensem1.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_print.png" /></a>
                    <a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_schedule_octo.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-AD1-AD2-Sem1-56.gif" target="blank"><img src="images/button_print.png" /></a>
					<a class="popupimage" href="images/course/wait.gif"><img src="images/button_schedule_opensem2.png" /></a>
					<!-- PRINT --><img src="images/button_print.png"/>
                    <a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_sensation_ad2.png" /></a>
					<!--PRINT --><a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_print.png" /></a>
					
	      </div>
				
				<div class="clear"></div> <!-- dashed line -->
				<div class="maincol_5"> <!-- details --> 
				
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<a class="popupimage" href="images/course/4worth.gif"><img  class="imgshadow" src="images/course/4worth.gif" alt="" width=600 /></a>
					<img  class="imgshadow" src="images/course/detail-ad2.gif" alt="" width=600 />
				</div>
			</div>	
			
			
            
            
            
            <!-- =========== AD3 ============ -->
			<div class="item course <?php echo $cor[3]; ?>" id="course3">
			
            	<!-- =========== topic ============ --> <img class="course_topic" src="images/course_topic_pread.png" />
				
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				<div class="maincol_3"> <!-- schedule --> 
					
                    <a href="images/course/Banner-Pread56.jpg" target="blank"><img src="images/button_schedule_opensem1.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-Pread56.jpg" target="blank"><img src="images/button_print.png" /></a>
                    <a class="popupimage" href="images/course/Banner-Pread56.jpg"><img src="images/button_sensation_pread.png" /></a>
					<!--PRINT --><a href="images/course/Banner-Pread56.jpg" target="blank"><img src="images/button_print.png" /></a>
			</div>
            <div class="clear"></div>	
            	<!-- =========== topic ============ --> <img class="course_topic" src="images/course_topic_postad.png" />
				
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				<div class="maincol_3"> <!-- schedule --> 
					
                    
                    <a class="popupimage" href="images/course/wait.gif"><img src="images/button_sensation_postad.png" /></a>
					<!--PRINT --><a href="images/course/wait.gif" target="blank"><img src="images/button_print.png" /></a>
			</div>
            <div class="clear"></div>	
            	<!-- =========== topic ============ --> <img class="course_topic" src="images/course-topic_ad3.png" />
				
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				<div class="maincol_3"> <!-- schedule --> 
					<a class="popupimage" href="images/course/Banner-N3-2013-1.jpg"><img src="images/button_schedule_july.png" /></a>
					<!-- PRINT --><a href="images/course/Banner-N3-2013-1.jpg" target="blank"><img src="images/button_print.png" /></a>
                    
                    <a class="popupimage" href="images/course/Banner-N2N3kakushin.gif"><img src="images/button_schedule_dec.png" /></a>
					<!-- PRINT --><a href="images/course/Banner-N2N3kakushin.gif" target="blank"><img src="images/button_print.png" /></a>
                    
                    <a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_sensation_ad3.png" /></a>
					<!--PRINT --><a href="images/course/Banner-N2N3kakushin.gif" target="blank"><img src="images/button_print.png" /></a>
					
					
	      </div>
          
          
          
				<div class="clear"></div>	
			<!-- =========== THEP ============ -->
				<!-- =========== topic ============ --> <img class="course_topic" src="images/course-topic_thep.png" />
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				
				<div class="maincol_3"> <!-- schedule --> 
					<a class="popupimage" href="images/course/Banner-N2-2013-1.jpg"><img src="images/button_schedule_july.png" /></a>
					<!-- PRINT --><a href="images/course/Banner-N2-2013-1.jpg" target="blank"><img src="images/button_print.png" /></a>
                    
                    <a class="popupimage" href="images/course/Banner-N2N3kakushin.gif"><img src="images/button_schedule_dec.png" /></a>
					<!-- PRINT --><a href="images/course/Banner-N2N3kakushin.gif" target="blank"><img src="images/button_print.png" /></a>
                    
					<a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_sensation_ninja.png" /></a>
					<!--PRINT --><a href="images/course/Banner-N2N3kakushin.gif" target="blank"><img src="images/button_print.png" /></a>
				
				</div>
                
                
			
				<div class="clear"></div> <!-- dashed line -->
				<div class="maincol_5"> <!-- details รวมกันระหว่าง AD3 กับ ขั้นเทพ เลย --> 
					<p class="right">คลิ๊กที่รูปเพื่อขยายใหญ่</p>
					<!--<a class="popupimage" href="images/course/Chujou_courses.gif"><img  class="imgshadow" src="images/course/Chujou_courses.gif" alt="" width=600 /></a> -->
					<img  class="imgshadow" src="images/course/N2_N3.gif" alt="" width=600 />
					<a class="popupimage" href="images/course/N2_1.jpg"><img src="images/course/N2_1.jpg" alt="" width=600 /></a>
					<a class="popupimage" href="images/course/N2_3.jpg"><img src="images/course/N2_3.jpg" alt="" width=600 /></a>
					<a class="popupimage" href="images/course/N2_2.jpg"><img src="images/course/N2_2.jpg" alt="" width=600 /></a>
					<a class="popupimage" href="images/course/N2_4.jpg"><img src="images/course/N2_4.jpg" alt="" width=600 /></a>
				</div>
			</div>	
			
			<!-- =========== DREAM ============ -->
			<div class="item course <?php echo $cor[4]; ?>" id="course4">
				<img class="course_topic" src="images/course-topic_dream.png" />
				
				<div class="maincol_5"> <!-- details --> 
					<div class="textbox">
						<p class="strong center">
							สำหรับบุคคลทั่วไปที่อยากใช้ภาษาญี่ปุ่นได้ในระยะเวลาอันสั้น  
							<br/><span class="orange"> "แนะนำให้ลงคอร์ส DREAM 1,2,3"  <br/>
                            <br/>โดยจบ DREAM 2 อาจลัดไปเรียน PreAD ติวสอบวัดระดับ N5 ได้เลย
                            และจบ PreAD สามารถต่อ PostAd ติวสอบวัดระดับ N4 ได้เลย</span>!!! 
						<p class="strong center">
							น้อง ๆ สายวิทย์ ศิลป์คำนวณ ฯลฯ ที่มีความฝันอยากสอบ PAT ญี่ปุ่น 
						    <br/>จบ DREAM 2 อาจลัดไปเรียน PreAD และต่อ AD1 เพื่อติว PAT ญี่ปุ่นได้เลย
						</p>
                        <p class="strong center">
							
							
					</div>
				</div>
				
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				
				<div class="maincol_3"> <!-- schedule -->
					 <!-- *** To make the button show the picture as a dialog box when click just add class="popupimage" 
					 and add a link to the picture at HREF attribute***
					 Example:  <a class="popupimage" href="images/course/Banner-AD1-Sem2-54.gif"> images or text </a>
					 -->
                    <a href="images/course/siam_course_sem2.jpg" target="blank"><img src="images/button_sensation_akiko_sem.png" /></a>
					<!--PRINT --><a href="images/course/siam_course_sem2.jpg" target="blank"><img src="images/button_print.png" /></a>
                    <a href="images/course/siam_course_sem2.jpg" target="blank"><img src="images/button_sensation_akiko_sum.png" /></a>
					<!--PRINT --><a href="images/course/siam_course_sem2.jpg" target="blank"><img src="images/button_print.png" /></a>
					<a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_dream.png" /></a>
					<!--PRINT --><a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_print.png" /></a>
					
					</div>
                
                    <!--<div class="maincol_3"> <!-- schedule --> 
					                  
                    <!--<a  href="images/course/slide5.gif"  target="blank"><img src="images/button_schedule_opensem.png" /></a>
					<!--<a href="images/course/slide5.gif" target="blank"><img src="images/button_print.png" /></a>
					<!--<a href="images/course/slide5.gif"  target="blank"><img src="images/button_schedule_summer.png" /></a>
					<!--<a href="images/course/slide5.gif" target="blank"><img src="images/button_print.png" /></a>
					<!--<a class="popupimage" href="images/course/wait.gif"><img src="images/button_schedule_octo.png" /></a>
					<!-- <img src="images/button_print.png" />
				</div> -->
				
				<div class="clear"></div> <!-- dashed line -->
				
				<div class="maincol_5"> <!-- details --> 
					<div class="textbox">
						<p class="strong center">
							คอร์ส AKIKO 4,5,6 ต้องเรียนหรือไม่ ??<br/>
                            นักเรียนที่เรียน DREAM 3 จบแล้ว สามารถลงติว PAT หรือติวสอบวัดระดับได้เลย หรือลง 
							<br/><span class="orange">"AKIKO 4, 5, 6"</span>
						<p class="strong center">
						<br/>ควบคู่กันไป เพื่อให้ปึ๊กยิ่งขึ้นก็ได้ครับ<br/>
							
						</p>
						<p class="strong center">
							
						</p>
					</div>
                    <div class="clear"></div> <!-- dashed line -->
						
				<div class="maincol_5"> <!-- details --> 
					<img  class="imgshadow" src="images/akiko.gif" alt="" width=600 />
					                    
					<img  class="imgshadow" src="images/course/DREAM.gif" alt="" width=600 />
				</div>
				</div>
				
				
			</div>	
			
			<!-- =========== PAT GERMAN ============ -->
			<div class="item course <?php echo $cor[5]; ?>" id="course5">
			
                     
            
            	
                <img class="course_topic" src="images/course_topic_pat7.png" />
				<div class="maincol_2"> 
                
                <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png"></a>
				</div>
				
				<div class="maincol_3"> <!-- schedule --> 
					<a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_sensation_pat7.png" /></a>
					<!--PRINT --><a href="images/course/zelf_table.jpg" target="blank"><img src="images/button_print.png" /></a>
				</div>
				
					<div class="maincol_5"> <!-- details --> 
					<img  class="imgshadow" src="images/pat.gif" alt="" width=600 />
					                    
				</div>
                
                              
			</div>
			
			
			<!-- =========== KOREAN ============ -->
			<div class="item course <?php echo $cor[6]; ?>" id="course6">
				
                <!-- =========== topic ============ --> <img class="course_topic" src="images/course_topic_pread.png" />
				
				<div class="maincol_2"> <!-- register button --> 
					<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				<div class="maincol_3"> <!-- schedule --> 
					
                    <a href="images/course/Banner-Pread56.jpg" target="blank"><img src="images/button_schedule_opensem1.png" /></a>
                    <!-- PRINT --><a href="images/course/Banner-Pread56.jpg" target="blank"><img src="images/button_print.png" /></a>
                    <a class="popupimage" href="images/course/Banner-Pread56.jpg"><img src="images/button_sensation_pread.png" /></a>
					<!--PRINT --><a href="images/course/Banner-Pread56.jpg" target="blank"><img src="images/button_print.png" /></a>
			</div>
            <div class="clear"></div>	
                
                
				
				<!--<div class="maincol_2"> <!-- register button --> 
					<!--<a href="register.php"><img class="img_right" src="images/button_register.png" /></a>
				</div>
				
				<div class="maincol_3"> <!-- schedule --> 
					<!--<a class="popupimage" href="images/course/slide7.gif"><img src="images/button_schedule_opensem.png" /></a>
					<!-- Print --><!--<a href="images/course/slide7.gif" target="blank"><img src="images/button_print.png" /></a>
					<!--<a class="popupimage" href="images/course/wait.gif"><img src="images/button_schedule_summer.png" /></a>
					<!-- Print --><!--<img src="images/button_print.png" />
					<a class="popupimage" href="images/course/wait.gif"><img src="images/button_schedule_octo.png" /></a>
					<!-- Print --><!--<img src="images/button_print.png" />
				</div> 
				
				<div class="clear"></div> <!-- dashed line -->
				
				<!--<div class="maincol_5"> <!-- details --> 
					<!--<div class="textbox">
						<p class="strong center">
							เปิดตัว DONGHAE "ทงเฮ" KOREAN EDUTAINMENT เครือ ZA-SHI ด้วยหลักสูตรเร่งรัด 
							<br/><span class="orange">"INTENSIVE 1, 2, 3"</span>
						<p class="strong center">
							<span class="blue">ได้เรียนกับเจ้าของภาษา</span>
							<br/>แถมฟรี ช.ม. ทบทวนในระบบ ZELF@Home<br/>
							ซึ่งเป็นการอธิบายเป็นภาษาไทย ทำให้ไวยากรณ์น้อง ๆ ปึ๊กยิ่งขึ้น
						</p>
						<p class="strong center">
							ในเมื่อหลงรักนักร้องเกาหลี แล้วทำไมไม่มาเรียนภาษาเกาหลีซักคอร์สล่ะ
						</p>
					</div>
                    <div class="clear"></div> <!-- dashed line -->
						
				
				<!--</div>
				
				--->
			</div>	
            
			<!-- HORIZONTAL LINE --><div class="clear"></div>	
			
			<!-- =========== ZIEL ============ -->
						
			
<!-- =============== END  ================= -->		
		</div>
		
		<?php require_once("sidebar.php"); ?>
		
	</div>
<?php require_once("footer.php"); ?>