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

<!-- Lost_Password Modal -->
<form name="lost_password" method="post">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title text-center text-danger">فراموش کردن رمز عبور</h4>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="col-lg-12 text-right">
				<div class="row">
					<div class="col-lg-2">
						<div class="form-group">
							<div class="input-group">
								<img src="<?php echo ttt.TEMPLATES_IMAGES.'lost_password.png'; ?>">
							</div>
						</div>
					</div>
					<div class="col-lg-10 text-right">
						<div class="form-group pull-right">
							<div class="input-group">
								<h4 class="text-danger">توجه</h4>
								<h5>
									<ul>
										<li>لینک فعال سازی حداکثر ظرف مدت 24 ساعت برای شما ارسال می گردد.</li>
										<li>جهت بروز هرگونه مشکل می توانید از طریق <a href="<?php echo MODALS.'contactus.php'; ?>" title="تماس با ما" data-toggle="modal" data-target="#contactus_form">تماس با ما</a> در ارتباط باشید</li>
									</ul>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 pull-right">
				<div class="form-group">
					<div class="input-group">
						<input name="email" class="form-control text-left" type="password" placeholder="info@example.com" required autofocus>
						<div class="input-group-addon">آدرس پست الکترونیک</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button name="submit_lost_password" type="submit" class="btn btn-primary btn-block">ارسال رمز عبور جدید&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span></button>
	</div>
</form>