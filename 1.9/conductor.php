<?php
/*
|--------------------------------|
|		Padsan System CMS		 |
|--------------------------------|
|	  	  Radio Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 26 325 45 700	 |
|Fax   : +98 - 26 325 45 701	 |
|--------------------------------|
*/
require_once "maincore.php";
require_once THEMES."templates/header.php";
?>
<header class="bg-dark" data-load="header.html"></header>
<div class="page">
	<div class="page-region">
		<div class="page-region-content">

			<div class="example1 border padding20">

				<div class="streamer" data-role="streamer" data-scroll-bar="true" data-slide-to-group="3" data-slide-speed="500">
					<div class="streams">
						<div class="streams-title">
							<div class="toolbar">
								<button class="button small js-show-all-streams" title="Show all streams" data-role=""><span class="icon-eye"></span></button>
								<button class="button small js-schedule-mode" title="On|Off schedule mode" data-role=""><span class="icon-history"></span></button>
								<button class="button small js-go-previous-time" title="Go to previous time interval" data-role=""><span class="icon-previous"></span></button>
								<button class="button small js-go-next-time" title="Go to next time interval" data-role=""><span class="icon-next"></span></button>
							</div>
						</div>
						<div class="stream bg-teal">
							<div class="stream-title text-center"><br><br>شنبه</div>
							<div class="stream-number">room 1</div>
						</div>
						<div class="stream bg-orange">
							<div class="stream-title text-center"><br><br>یکشنبه</div>
							<div class="stream-number">28 تیر</div>
						</div>
						<div class="stream bg-lightBlue">
							<div class="stream-title text-center"><br><br>دوشنبه</div>
							<div class="stream-number">29 تیر</div>
						</div>
						<div class="stream bg-darkGreen">
							<div class="stream-title text-center"><br><br>سه شنبه</div>
							<div class="stream-number">30 تیر</div>
						</div>
						<div class="stream bg-pink">
							<div class="stream-title text-center"><br><br>چهارشنبه</div>
							<div class="stream-number">31 تیر</div>
						</div>
						<div class="stream bg-violet">
							<div class="stream-title text-center"><br><br>پنج شنبه</div>
							<div class="stream-number">1 مرداد</div>
						</div>
						<div class="stream bg-gray">
							<div class="stream-title text-center"><br><br>جمعه</div>
							<div class="stream-number">2 مرداد</div>
						</div>
					</div>

					<div class="events">
						<div class="events-area">
							<div class="events-grid">
								<div class="event-group double">
									<div class="event-super padding20">
										<div>9:00 - 9:40</div>
										<h2 class="no-margin">شروع برنامه ها</h2>
									</div>
								</div>
								<div class="event-group double" id="qwerty">
									<div class="event-super padding20">
										<div>9:40 - 10:20</div>
										<h2 class="no-margin">تست1</h2>
										<br />

									</div>
								</div>
							<div class="event-group">
								<div class="event-stream" >
									<div class="event" data-role="live">
										<div class="event-content">
											<div class="event-content-logo">
												<img class="icon" src="images/live1.jpg">
												<div class="time">10:20</div>
											</div>
											<div class="event-content-data">
												<div class="title">صفر و یک</div>
												<div class="subtitle">سیاوش عقدایی</div>
												<div class="remark">برنامه صفر و یک</div>
											</div>
										</div>
									</div>
									<div class="event double">
										<div class="event-content">
											<div class="event-content-logo">
												<img class="icon" src="images/x.jpg">
												<div class="time">10:40</div>
											</div>
											<div class="event-content-data">
												<div class="title">صفر و دو</div>
												<div class="remark">برنامه احسان محمودی</div>
											</div>
										</div>
									</div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event double"></div>
									<div class="event double"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event double"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
									<div class="event"></div>
								</div>
								<div class="event-stream" style="width: 851px;">
									<div class="event triple">
										<div class="event-content">
											<div class="event-content-logo">
												<img class="icon" src="images/x.jpg">
												<div class="time" style="background-color: rgb(250, 104, 0);">10:40</div>
											</div>
											<div class="event-content-data">
												<div class="title">برنامه سایه ها</div>
												<div class="remark">علی رسولی</div>
											</div>
										</div>
									</div>
									<div class="event">
										<div class="event-content">
											<div class="event-content-logo">
												<img class="icon" src="images/me.jpg">
												<div class="time" style="background-color: rgb(250, 104, 0);">10:20</div>
											</div>
											<div class="event-content-data">
												<div class="title">برنامه نشان هنر</div>
												<div class="subtitle">حامد توکلی</div>
												<div class="remark"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="page-footer">
		<div class="page-footer-content">
			<!--<div data-load="header.html"></div>-->
		</div>
	</div>
</div>
<?php
require_once THEMES."templates/footer.php";
?>