<?php
require_once "../../maincore.php";
require_once BASEDIR."subheader.php";
if (isset($photo_id) && !isNum($photo_id)) fallback(FUSION_SELF);
if (isset($album_id) && !isNum($album_id)) fallback(FUSION_SELF);
if (!isset($rowstart) || !isNum($rowstart)) $rowstart = 0;

?>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        قبلی
                    </button>
                    <button type="button" class="btn btn-primary next">
                        بعدی
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="links" class="row row-offcanvas row-offcanvas-right">
	<div class="col-lg-9">
		<p class="pull-right visible-xs">
			<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
		</p>
		<div class="row">
			<?php
			$result=dbquery("SELECT * FROM ".DB_PREFIX."photos");
			while($data=dbarray($result)){
			?>
			<div class="col-lg-4 pull-right">
				<a href="" data-gallery><p><img src="<?php echo PHOTOGALLERY_IMAGES.'album_1/'.$data['photo_filename']; ?>" alt="<?php echo $data['photo_title']; ?>" title="<?php echo $data['photo_title']; ?>" class="img-thumbnail img-responsive"></p></a>
				<p class="text-danger text-center"><?php echo $data['photo_title']; ?></p>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<div class="col-lg-3 sidebar-offcanvas" id="sidebar" role="navigation">
		<div class="list-group">
			<?php
			$i=1;
			$result=dbquery("SELECT * FROM ".DB_PREFIX."photo_albums");
			while($data=dbarray($result)){
			$active="active";
			if($i>1)
				$active="";
			?>
			<a href="#" class="list-group-item <?php echo $active; ?>"><?php echo $data['album_title']; ?></a>
			<?php
			$i++;
			}
			?>
		</div>
	</div>
</div>
<?php
require_once BASEDIR."footer.php";
?>