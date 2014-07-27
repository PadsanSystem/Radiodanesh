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
<link rel="stylesheet" href="<?php echo THEME.'intro.css'; ?>">
<?php
echo "<div class='tile ol-transparent slideshow' style='width:100%;height:700px'>
	<div class='tile-content'>
		<div class='carousel' data-role='carousel' data-height='100%' data-width='100%' data-controls='false'>
			<div class='slide'>
				<img src='".IMAGES_SLIDESHOWS."slideshow7.jpg'/>
			</div>
			<div class='slide'>
				<img src='".IMAGES_SLIDESHOWS."slideshow3.jpg'/>
			</div>
			<div class='slide'>
				<img src='".IMAGES_SLIDESHOWS."slideshow6.jpg'/>
			</div>
			<div class='slide'>
				<img src='".IMAGES_SLIDESHOWS."slideshow5.jpg'/>
			</div>
		</div>
	</div>
</div>";
require_once 'index_videos.php';
require_once 'index_audio.php';
require_once 'index_news.php';
require_once 'index_facilities.php';

require_once THEMES."templates/footer.php";
?>