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
							.delay(1000).fadeOut(400);
				return false;
			}
		});
	});
</script>

	<div id="main">
		<div id="mainbar">

<!-- =============== START OF MAIN CONTENT ================= -->
			<div class="item">
				<!-- =========== topic ============ --> <img class="course_topic" src="images/topic-confirm.png" />
				<!-- FORM ยืนยัน -->
				<div class="maincol_5">

					<form method=post action="phpmail/sent_mail.php">
						<table cellpadding=5>
							<tr>
								<td><span class="strong">ชื่อ-นามสกุล </span>
									<br />(หากโอนค่าสมัครพร้อมกันหลายคน <br />กรุณาระบุุหลายชื่อ คั่นด้วย , <br />
								</td>
								<td><input id="name" name="name" type=text size="40" maxlength="200"></td>
							</tr>
							<tr>
								<td><span class="strong">โทรศัพท์มือถือ</span><br />(หากสมัครหลายคน กรุณาระบุเบอร์คั่นด้วย ,)</td>
								<td><input type=text name="tel" id="tel"></td>
							</tr>
							<tr>
								<td><span class="strong">อีเมล</span><br />(หากสมัครหลายคน จะระบุุอีเมลคนเดียวก็ได้ <br />
                                หรือระบุหลายอีเมลก็ได้ คั่นด้วย ,)
                                <br /><br />โดยหลังจากยืนยันการสมัคร ระบบจะส่ง sms<br />confirm ตอบกลับ ภายใน 48 ชม.ค่ะ</td>
								<td><input type=text name="email" id="email"></td>
							</tr>
							<tr>
								<td class="strong">โรงเรียน</td>
								<td><input type=text name="school" id="school"></td>
							</tr>
							<tr>
								<td class="strong">แบบฟอร์มนี้เป็นแบบฟอร์มยืนยันการสมัครเรียน
									<br /><span class="blue"> ให้กรอกหลังจากโอนค่าสมัครเรียบร้อยแล้ว มิเช่นนั้นจะไม่มีชื่อในระบบครับ
									<br /><br /> กรุณากรอก </span>
									<br /><br /><span class="green">"ชื่อคอร์ส (คอร์สสดให้ระบุสาขา วันเวลาด้วยค่ะ) และวันเวลาที่โอนผ่านธนาคาร" เช่น</span>
									<br /><br /><span class="orange">AD1 สอนสด สยาม กรกฎา เสาร์ 9.00-12.00</span>
									<br /><span class="blue">โอน 23 เม.ย. เวลา 14:59</span>
									<br /><br /><span class="orange">หรือ DREAM1 Sensation@Home</span>
									<br /><span class="blue">โอน 23 เม.ย. เวลา 14:59</span>

                                    <br /><br /><span class="green">และสำหรับนักเรียนระบบ Sensation@Home </span>
                                    <br /><span class="green">ให้กรอก "ที่อยู่" เพื่อที่จะได้จัดส่งหนังสือและรหัสการเรียน</span>
                                    <br /><span class="green">โดยพิมพ์ต่อจากข้อมูลการโอนค่าสมัครด้วยค่ะ เช่น</span>

                                    <br /><br /><span class="orange">DREAM1 Sensation@Home</span>
									<br /><span class="blue">โอน 23 เม.ย. เวลา 14:59</span>
                                    <br /><span class="blue">ที่อยู่ 99/25 ถ.สีลม แขวงสีลม</span>
                                    <br /><span class="blue">เขตบางรัก กรุงเทพฯ 10500</span>
								</td>
								<td><textarea name="course" id="course" rows="35" cols="30"></textarea></td>
							</tr>
							<tr>
								<td class="strong" colspan="2">
									<br />
									หมายเหตุ: ในกรณีที่ระบบขัดข้อง สามารถส่งอีเมลยืนยันการสมัครเรียน
									หรือสอบถามได้อีกทางที่  <input type=text name=mto value="zashiconfirm@yahoo.com" readonly="readonly">
								</td>
							</tr>
						</table>
						<p class="center strong" id="error"></p>
						<p class="center" ><input id="submit" type="submit" value="ยืนยันการสมัครเรียน"></td></p>
					</form>
					<div class="clear"></div>
				</div>

			</div>

<!-- =============== END  ================= -->

		</div>

		<?php require_once("sidebar.php"); ?>

	</div>
<?php require_once("footer.php"); ?>
