<?php
include_once 'header.php';
$_SESSION['fav_num'] = 10;
$_SESSION['note_num'] = 5;
?>
<section class="dashboard-main">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-md-12">
			<div class="map-result-box col-md-12">
				<div class="col-md-12">
					<h1 class="entry-title">Preferred Investor Program <span>Map</span></h1>	
				</div>
				<div  id="map-result-box"></div>
			</div>
			<div class="col-md-4 primary">
				<!--Favorites Box-->
				<?php include_once 'content-favorite.php'; ?>
			</div>
			<div class="col-md-4 primary">
				<!--My Notes Box-->
				<?php include_once 'content-note.php'; ?>
			</div>
			<!--Listing Box Section-->
			<div class="third col-md-4">
				<!--Search Box-->
				<?php include_once 'content-search.php'; ?>
				<?php include_once 'content-financing.php'; ?>
			</div>
		</section>
	</div>
</section>
<?php
include_once 'footer.php';
