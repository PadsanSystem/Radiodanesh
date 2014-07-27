<?php
/*
|--------------------------------|
|		PadsanSystem CMS		 |
|--------------------------------|
|		 Radio Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 26 325 45 700	 |
|Fax   : +98 - 26 325 45 701	 |
|--------------------------------|
*/
require_once 'subheader.php';

if(isset($_POST['submit'])){
	$subject=secure_itext($_POST['subject']);
	$message=secure_itextarea($_POST['message']);
	$name=secure_itext($_POST['name']);
	$department=isnum($_POST['department']);
	switch($department){
		case 1:
			$email="support@radiodanesh.com";
			break;
		case 2:
			$email="pr@radiodanesh.com";
			break;
		case 3:
			$email="a.seifi@radiodanesh.com";
			break;
	}
	@mail("$department", "$subject", "$message", "From: $name");
}
?>

<form method="post" action="contactus.php">
	<img src="images/map.jpg">
	<div class="place-right">
		<div class="row">
			<div class="span4 text-right">دپارتمان</div>
		</div>
		<div class="row">
			<div class="span4 input-control select">
				<select name="department" class="text-right">
					<option value="1">پشتیبانی</option>
					<option value="2">روابط عمومی</option>
					<option value="3">مدیریت شبکه</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="span4 text-right">نام و نام خانوادگی</div>
		</div>
		<div class="row">
			<div class="span4 input-control text">
				<input name="name" type="text" value="" class="text-right"/>
			</div>
		</div>
		<div class="row">
			<div class="span4 text-right">تلفن همراه</div>
		</div>
		<div class="row">
			<div class="span4 input-control text">
				<input name="tel" type="text" value=""/>
			</div>
		</div>
		<div class="row">
			<div class="span4 text-right">آدرس پست الکترونیکی</div>
		</div>
		<div class="row">
			<div class="span4 input-control text">
				<input name="email" type="text" value=""/>
			</div>
		</div>
		<div class="row">
			<div class="span4 text-right">عنوان</div>
		</div>
		<div class="row">
			<div class="span4 input-control text">
				<input name="subject" type="text" value="" class="text-right"/>
			</div>
		</div>
		<div class="row">
			<div class="span4 text-right">پیغام</div>
		</div>
		<div class="row">
			<div class="span4 input-control textarea">
				<textarea name="message" class="text-right"></textarea>
			</div>
		</div>
		<div class="row">
			<div align="center" class="span4 input-control textarea">
				<button class="large primary">
					ارسال پیغام
					<i class="icon-mail on-right"></i>
				</button>
			</div>
		</div>
		
	</div>
</form>

<?php
require_once 'footer.php';
?>