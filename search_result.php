<?php
include_once 'header.php'; 
$_SESSION['fav_num'] = 6;
$_SESSION['note_num'] = 6;
$_SESSION['list_num'] = 39;
?>
<section class="dashboard-main">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-md-12">
			<div class="col-md-4 primary">
				<!--Search Box-->
				<?php include_once 'content-search.php'; ?>
				<!--Map Box-->
				<div class="map-box default-box col-md-12">
					<h3 class="entry-title">Preferred Investor Program&nbsp;&nbsp;<span>map</span></h3>
					<div id="map-box"></div>
					<a href="#" class="btn_display_listing">
						<img alt="" src="assets/img/btn_display_listing.png" />
					</a>
				</div>
				<!--Favorites Box-->
				<?php include_once 'content-favorite.php'; ?>
				<!--My Notes Box-->
				<?php include_once 'content-note.php'; ?>
			</div>

			<!--Listing Box Section-->
			<div class="col-md-8 secondary">
				<div class="listing-box col-md-12">
					<h2 class="entry-title col-md-12"><span>SEARCH RESULTS</span></h2>
					<div class="col-md-12">
						<div class="line top col-md-12"></div>
					</div>
					<div class="message col-md-12">
						<p>We have found 32 properties meeting your search criterias:</p>
					</div>
					<?php include_once 'content-listings.php'; ?>
					<div class="col-md-12">
						<div id="page-selection-listing"></div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<?php
include_once 'footer.php';
