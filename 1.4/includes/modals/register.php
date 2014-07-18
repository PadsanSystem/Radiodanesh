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
?>
<!-- Register Modal -->
<form name="register_form" method="post">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">بستن</span></button>
		<h4 class="modal-title text-center text-danger" id="myModalLabel">عضویت در <?php echo $settings['sitename']; ?></span></h4>
	</div>
	<div class="modal-body">
		<div class="row" align="right">
			<div class="col-lg-12 pull-right">
				<div class="row">
					<div class="col-lg-2 pull-right">
						<div class="form-group">
							<div class="input-group">
								<img src="<?php echo ttt.TEMPLATES_IMAGES.'signup.png'; ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-10 text-right">
						<div class="form-group pull-right">
							<div class="input-group">
								<h4 class="text-danger">توجه</h4>
								<h5>
									<ul>
										<li>لطفاً فیلدهای ضروری را حتماً پر نمایید.</li>
										<li>شناسه کاربری به منظور نمایش نام نمایشی شما در وب سایت می باشد.</li>
										<li>رمز عبور شما حداقل می بایست 5 کاراکتر باشد.</li>
										<li>اطلاعات وارد شده توسط شما نزد ما به صورت خصوصی محفوظ خواهد ماند.</li>
									</ul>
								</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_name" class="form-control text-left" type="text" placeholder="یک نام کاربری انتخاب نمایید" required autofocus>
								<div class="input-group-addon">شناسه کاربری</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_pass" class="form-control text-left" type="password" placeholder="رمز عبور خود را وارد نمایید" required>
								<div class="input-group-addon">رمز عبور</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_name" class="form-control" type="text">
								<div class="input-group-addon">نام</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_pass" class="form-control" type="password">
								<div class="input-group-addon">نام خانوادگی</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<select name="sex" class="form-control">
									<option value="male">مرد</option>
									<option value="female">زن</option>
								</select>
								<div class="input-group-addon">جنسیت</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_pass" class="form-control text-left" type="text" placeholder="info@example.com">
								<div class="input-group-addon">آدرس پست الکترونیکی</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_name" class="form-control text-left" type="text">
								<div class="input-group-addon">تلفن ثابت</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_name" class="form-control text-left" type="text">
								<div class="input-group-addon">تلفن همراه</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<select name="user_name" class="form-control">
									<option value="1">البرز</option>
									<option value="1">تهران</option>
								</select>
								<div class="input-group-addon">استان</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<select name="user_name" class="form-control">
									<option value="1">تهران</option>
									<option value="1">کرج</option>
								</select>
								<div class="input-group-addon">شهرستان</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<textarea name="user_name" class="form-control text-right"></textarea>
								<div class="input-group-addon">آدرس محل سکونت</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pull-right">
						<div class="form-group">
							<div class="input-group">
								<textarea name="user_name" class="form-control text-right"></textarea>
								<div class="input-group-addon">آدرس محل کار</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button name="login" type="submit" class="btn btn-primary btn-lg btn-block">ثبت نام&nbsp;&nbsp;<span class="glyphicon glyphicon-thumbs-up"></span></button>
	</div>
</form>