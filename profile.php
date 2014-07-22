<?php
include_once 'header.php';
$_SESSION['fav_num'] = 5;
$_SESSION['note_num'] = 5;
?>
<section class="dashboard-main">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-xs-12">
			<div class="col-xs-4 primary">
				<!--Favorites Box-->
				<?php include_once 'content-favorite.php'; ?>
				<!--My Notes Box-->
				<?php include_once 'content-note.php'; ?>
			</div>

			<!--Listing Box Section-->
			<div class="col-xs-8 secondary">
				<?php include_once 'content-investor-registy.php'; ?>
				<?php include_once 'content-investor-properties.php'; ?>
			</div>
		</section>
	</div>
</section>
<?php
include_once 'footer.php';
