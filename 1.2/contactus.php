<?php
/*
|--------------------------------|
|		Padsan System CMS		 |
|--------------------------------|
|		General Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 261 2533135		 |
|Fax   : +98 - 261 2533136		 |
|--------------------------------|
*/
require_once "maincore.php";
require_once "subheader.php";

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
<h2 class="text-success">تماس با ما</h2>
<hr>
<br>
<!-- Begin page content -->
<div class="row featurette" align="right">
	<form class="form-vertical" role="form" method="post" action="contactus.php">
		<div class="form-group col-lg-5">
			<label for="message" class="control-label">پیغام</label><br>
			<textarea id="message" name="message" class="form-control" rows="13" placeholder="متن پیغام خود را وارد نمایید"></textarea>
		</div>	
		<div class="form-group col-lg-7">
			<label for="name" class="control-label">دپارتمان</label><br>
			<select name="department" class="form-control col-lg-12">
				<option value="1">پشتیبانی</option>
				<option value="2">روابط عمومی</option>
				<option value="3">مدیریت شبکه</option>
			</select>
		</div>
		<div class="form-group col-lg-7">
			<label for="name" class="control-label">نام و نام خانوادگی</label><br>
			<input id="name" name="name" type="text" class="form-control" placeholder="علی رسولی">
		</div>
		<div class="form-group col-lg-7">
			<label for="email" class="control-label">آدرس پست الکترونیکی</label><br>
			<input id="email" name="email" type="text" class="form-control" placeholder="example@domain.com" dir="ltr">
		</div>
		<div class="form-group col-lg-7">
			<label for="subject" class="control-label">عنوان</label><br>
			<input id="subject" name="subject" type="text" class="form-control" placeholder="عنوان خود را وارد نمایید">
		</div>
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<button id="submit" name="submit" type="submit" class="btn btn-success">ارسال پیغام</button>
			<button id="reset" name="reset" type="reset" class="btn btn-primary">بازنویسی</button>
		</div>
	</form>
</div>
<?php
require_once BASEDIR."footer.php";
?>