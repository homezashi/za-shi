<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<?php require_once("header.php"); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(){
			var flag=0;
			$('tr input').each(function(){
				if($(this).val() == "")
					flag+=1;
			});
			if(flag>0)
			{
				$('#error').fadeIn().html("<span class='red'>***โปรดกรอกข้อมูลให้ครบทุกช่องนะครับ***</span>")
							.delay(2000).fadeOut(400);
				return false;
			}
		});
	});
</script>

	<div id="main">
		<div id="mainbar">
		
		
		
<!-- =============== START OF MAIN CONTENT ================= -->
			<div class="item">
				<!-- =========== topic ============ --> <img class="course_topic" src="images/topic-reserve.png" />
				
				<!-- ===== FORM ==== -->	
				<div class="maincol_5">
					<form method=post action="http://www.deksilp.com/stulist/mail.php">
						<table cellpadding=5>
							<tr>
								<td><span class="strong">ชื่อ-นามสกุล </span>
									<br />(หากสมัครหลายคน กรุณาระบุทุกชื่อคั่นด้วย ,)
								</td>
								<td><input id="name" name="name" type=text size="40" maxlength="200"></td>
							</tr>
							<tr>
								<td><span class="strong">โทรศัพท์มือถือ</span><br />(หากสมัครหลายคน กรุณาระบุเบอร์คั่นด้วย ,)</td>
								<td><input type=text name="tel" id="tel"></td>
							</tr>
							<tr>
								<td><span class="strong">อีเมล</span><br />(หากสมัครหลายคน จะระบุุอีเมลคนเดียวก็ได้ หรือระบุหลายอีเมลก็ได้ คั่นด้วย ,)</td>
								<td><input type=text name="email" id="email"></td>
							</tr>
							<tr>
								<td class="strong">โรงเรียน</td>
								<td><input type=text name="school" id="school"></td>
							</tr>
							<tr>
								<td class="strong">ในการจองคอร์สเรียน ให้ระบุ 
									<br /><span class="blue">"ชื่อคอร์ส(ถ้าเป็นคอร์สสดระบุสาขา วันเวลาด้วย)"</span> เช่น 
									<br /><span class="orange">AD1 สอนสด สยาม กรกฎา เสาร์ 9.00-12.00 
									
                                    <br /><br /><br />หรือ DREAM1 Sensation @Home
									<br /><br />
                                    </span>
									
									<br /><br />คอร์สที่ยังไม่ขึ้นเต็ม สามารถจองได้ทุกคอร์สครับ หากเต็มแล้วเจ้าหน้าที่จะขึ้นเต็มทันที<br /><br />
                                    กรุณาโอนค่าสมัครให้ถูกบัญชี สถาบันไม่รับผิดชอบกรณีไม่ได้เรียนหากโอนค่าสมัครผิดบัญชีค่ะ<br /><br />
                                    
                                   
								</td>
								<td><textarea name="course" id="course" rows="25" cols="30"></textarea></td>
							</tr>
							<tr>
								<td class="strong" colspan="2"> 	 
									<br />
									หมายเหตุ: ในกรณีที่ระบบขัดข้อง สามารถส่งอีเมลมาจองคอร์สเรียน  
									หรือสอบถามได้อีกทางที่  <input type=text name=mto value="zashischool@yahoo.com" readonly="readonly">
								</td>
							</tr>			
						</table>
						<p class="center strong" id="error"></p>
						<p class="center" ><input id="submit" type="submit" value="ส่งแบบฟอร์มการจองคอร์ส"></td></p>
						
					</form>
					
					<!-- ===== HORIZONTAL LINE ==== --> <div class="clear"></div>
				</div>
			</div>
				
				
				
<!-- =============== END OF MAIN CONTENT ================= -->
		</div>
		
		<?php require_once("sidebar.php"); ?>
		
	</div>
<?php require_once("footer.php"); ?>