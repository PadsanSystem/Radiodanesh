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
require_once BASEDIR."subheader.php";
if (isset($readmore) && !isNum($readmore)) fallback(FUSION_SELF);
?>
<div class="row featurette" align="right">
	<div class="col-lg-8">
		<h3 class="text-active">اخبار صوتی</h3>
		<hr>
		<img data-src="holder.js/184x150">
		<img data-src="holder.js/184x150">
		<img data-src="holder.js/184x150">
		<img data-src="holder.js/184x150">
	</div>
	<div class="col-lg-4">
		<h3 class="text-active">برنامه در حال پخش</h3>
		<hr>
		<img data-src="holder.js/300x200">
	</div>
</div>

<div class="row featurette" align="right">
	<div class="col-lg-8">
		<br>
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li class="active"><a href="#">اخبار ویژه</a></li>
			<li><a href="#">اخبار رادیویی</a></li>
			<li><a href="#">اخبار علمی</a></li>
			<li><a href="#">اخبار فناوری</a></li>
		</ul>
		<?php
		$result=dbquery("SELECT * FROM ".DB_PREFIX."news LIMIT 5");
		while($data=dbarray($result)){
			?>
			
			<h5>
			<img data-src="holder.js/100x100" class="img-thumbnail"> <?php echo $data['news_subject'];?>
			</h5>
			<h6>
				<?php echo $data['news_news'];?>
			</h6>
			<hr>
			<?php
			
		}
		?>
	</div>
	<div class="col-lg-4">
		<h3 class="text-active">سخن برتر</h3>
		<hr>
		<img src="images/prophet.jpg" class="img-thumbnail">
		<h5>در هیچ کاری عجله نکنید تا واقعیت آن برایتان روشن شود.</h5>
	</div>
	<div class="col-lg-4">
		<h3 class="text-active">نظرسنجی</h3>
		<hr>
		<?php
		include_once INFUSIONS.'member_poll/member_poll_panel.php';
		?>
	</div>
</div>

<div class="row featurette" align="right">
	<div class="col-lg-6">
		<h3 class="text-active">شبکه های رادیویی</h3>
		<hr>
		<div class="col-lg-6 pull-left">
			<img src="images/7611646233.jpg" class="img-thumbnail">
			<img src="images/348083934radioquran-radio.jpg" class="img-thumbnail">
			<img src="images/317441055350997391ava.jpg" class="img-thumbnail">
			
			<img src="images/680169714radio-fasli-2.jpg" class="img-thumbnail">
			<img src="images/1114748537radio-talavat.jpg" class="img-thumbnail">
			<img src="images/9724787791.jpg" class="img-thumbnail">
			<img src="images/1980442200eghtesad.jpg" class="img-thumbnail">
			<img src="images/55653852210.jpg" class="img-thumbnail">
			<img src="images/380004970iranseda.jpg" class="img-thumbnail">
			<img src="images/574271347313706623.jpg" class="img-thumbnail">
			<img src="images/19575060469.jpg" class="img-thumbnail">
			<img src="images/178211460312.jpg" class="img-thumbnail">
			
			<img src="images/9221362926.jpg" class="img-thumbnail">
			<img src="images/1808526848logo_javan.jpg" class="img-thumbnail">
			<img src="images/167372353613.jpg" class="img-thumbnail">
			<img src="images/1.png" class="img-thumbnail">
			
			<img src="images/3244708714.jpg" class="img-thumbnail">
			<img src="images/5030888590000000025145.jpg" class="img-thumbnail">
			<img src="images/749997581iran-icon.gif" class="img-thumbnail">
		</div>
		<div class="col-lg-6 pull-left">
			<p class="text-danger">رادیو تلاوت</p>
			<h5>تاریخ افتتاح: 31 تیر 91 (رمضان 1433)</h5>
			<h5>ساعت پخش: 18 الی 24</h5>
			<h5>طول موج: FM ردیف 101.5 مگاهرتز</h5>
			<h5>شماره تماس روابط عمومی: 22167865</h5>
			<h5>پیام کوتاه: 300001015</h5>
		</div>
	</div>
	<div class="col-lg-12 recommended">
		<h1 class="text-danger text-center">حمایت ما</h1>
		<br>
		<div class="col-lg-3 pull-left">
			<img src="images/CV-1.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/CV-1.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/13912537213.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/13912537213.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/CV-1.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/CV-1.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/13912537213.jpg" class="img-thumbnail">
		</div>
		<div class="col-lg-3 pull-left">
			<img src="images/13912537213.jpg" class="img-thumbnail">
		</div>
	</div>
</div>
<?php
require_once BASEDIR."footer.php";
?>