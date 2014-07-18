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
require_once '../../maincore.php';

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
<!-- Lost_Password Modal -->
<form name="contactus" method="post">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title text-center text-danger">تماس با ما</h4>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="col-lg-12 pull-right">
				<form class="form-vertical" role="form" method="post" action="contactus.php">
					<div class="form-group col-lg-6 text-right">
						<img src="<?php echo ttt.IMAGES.'map.jpg'; ?>" alt="محل شبکه رادیویی دانش" title="محل شبکه رادیویی دانش" class="thumbnail img-responsive">
					</div>
					<div class="form-group col-lg-6 text-right">
						<label for="department" class="control-label">دپارتمان</label><br>
						<select id="department" name="department" class="form-control col-lg-12 text-right">
							<option value="1">پشتیبانی</option>
							<option value="2">روابط عمومی</option>
							<option value="3">مدیریت شبکه</option>
						</select>
					</div>
					<div class="form-group col-lg-6 text-right">
						<label for="name" class="control-label">نام و نام خانوادگی</label><br>
						<input id="name" name="name" type="text" class="form-control" placeholder="علی رسولی">
					</div>
					<div class="form-group col-lg-6 text-right">
						<label for="telephone" class="control-label">تلفن ثابت</label><br>
						<input id="telephone" telephone="name" type="text" class="form-control text-left" placeholder="0261234567">
					</div>
					<div class="form-group col-lg-6 text-right">
						<label for="mobile" class="control-label">تلفن همراه</label><br>
						<input id="mobile" name="mobile" type="text" class="form-control text-left" placeholder="09121234567">
					</div>
					<div class="form-group col-lg-6 text-right">
						<label for="email" class="control-label">آدرس پست الکترونیکی</label><br>
						<input id="email" name="email" type="text" class="form-control text-left" placeholder="example@domain.com" dir="ltr">
					</div>
					<div class="form-group col-lg-12 text-right">
						<label for="subject" class="control-label">عنوان</label><br>
						<input id="subject" name="subject" type="text" class="form-control" placeholder="عنوان خود را وارد نمایید" required>
					</div>
					<div class="form-group col-lg-12 text-right">
						<label for="message" class="control-label">پیغام</label><br>
						<textarea id="message" name="message" class="form-control text-right" rows="5" placeholder="متن پیغام خود را وارد نمایید" required></textarea>
					</div>	
				</form>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">ارسال پیام&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope"></span></button>
	</div>
</form>