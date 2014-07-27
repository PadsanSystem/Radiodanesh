<div class="tile-group no-margin no-padding1 clearfix news" style="width: 100%">
	<a href="#"><span class="tile-group-title fg-white"><span class="icon-newspaper on-left-more on-right-more"></span> اخبار روز</span></a>
	<br><br>
	<?php
	$result = dbquery("SELECT news_cat_id, news_cat_name FROM ".DB_NEWS_CATS." ORDER BY news_cat_id");
	if (dbrows($result)) {
		while ($data = dbarray($result)) {
		?>
		<div class="tile triple triple-vertical ol-transparent bg-white" data-role="panel">
		<div class="tile-content">
			<div class="panel no-border" data-role="panel">
				<div class="panel-header text-right"><?php echo $data['news_cat_name']; ?></div>
				<div class="panel-content fg-dark" dir="rtl">
					<?php
					$result_news = dbquery(
						"SELECT tn.*, tc.*, tu.user_id, tu.user_name, tu.user_status FROM ".DB_NEWS." tn
						LEFT JOIN ".DB_USERS." tu ON tn.news_name=tu.user_id
						LEFT JOIN ".DB_NEWS_CATS." tc ON tn.news_cat=tc.news_cat_id
						WHERE ".groupaccess('news_visibility')." AND news_cat='".$data['news_cat_id']."' AND news_draft='0'
						LIMIT 5"
					);
					if(dbrows($result_news)!=0){
						?>
						<ul>
						<?php
						while($data_news=dbarray($result_news)){
						?>
						<li><a href="<?php echo BASEDIR.'news.php?readmore='.$data_news['news_id']; ?>"><?php echo $data_news['news_subject']; ?></a></li>
						<?php
						}
						?>
						</ul>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		</div>
		<?php
		}
	}
	?>
</div>