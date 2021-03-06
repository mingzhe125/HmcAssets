<?php
include_once 'header.php';
$_SESSION['fav_num'] = 10;
$_SESSION['note_num'] = 5;
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/infobox.js"></script>
<section class="dashboard-main">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-xs-12">
			<div class="map-result-box col-xs-12">
				<div class="col-xs-12">
					<h1 class="entry-title">Preferred Investor Program <span>Map</span></h1>	
				</div>
				<div  id="map-result-box"></div>
			</div>
			<div class="col-xs-4 primary">
				<!--Favorites Box-->
				<?php include_once 'content-favorite.php'; ?>
			</div>
			<div class="col-xs-4 primary">
				<!--My Notes Box-->
				<?php include_once 'content-note.php'; ?>
			</div>
			<!--Listing Box Section-->
			<div class="third col-xs-4">
				<!--Search Box-->
				<?php include_once 'content-search.php'; ?>
				<?php include_once 'content-financing.php'; ?>
			</div>
		</section>
	</div>
</section>
<?php
include_once 'footer.php';
