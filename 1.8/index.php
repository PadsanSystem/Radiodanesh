<?php
require_once 'subheader.php';
require_once 'navigate.php';
?>
<div class="container">	
	<div class="main-content clearfix">
		<div class="tile-area no-padding clearfix">
			<div class="tile-group no-margin no-padding clearfix bg-black">
			<?php
			require_once 'page_slideshows.php';
			require_once 'page_videos.php';
			require_once 'page_audio.php';
			require_once 'page_news.php';
			require_once 'page_facilities.php';
			?>
		</div>
	</div>
</div>
<?php
require_once 'footer.php';
?>