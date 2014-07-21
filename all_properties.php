<?php
include_once 'header.php';
$_SESSION['fav_num'] = 6;
$_SESSION['note_num'] = 6;
$_SESSION['list_num'] = 37;
?>
<section class="dashboard-main">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-xs-12">
			<div class="col-xs-4 primary">
				<!--Search Box-->
				<?php include_once 'content-search.php'; ?>
				<!--Map Box-->
				<div class="map-box default-box col-xs-12">
					<h3 class="entry-title">Preferred Investor Program&nbsp;&nbsp;<span>map</span></h3>
					<div id="map-box">
						<img src="assets/img/map.jpg" alt="" />
					</div>
					<a href="search_result_map.php" class="btn_display_listing">
						<img alt="" src="assets/img/btn_display_listing.png" />
					</a>
				</div>
				<!--Favorites Box-->
				<?php include_once 'content-favorite.php'; ?>
				<!--My Notes Box-->
				<?php include_once 'content-note.php'; ?>
			</div>

			<!--Listing Box Section-->
			<div class="col-xs-8 secondary">
				<div class="listing-box col-xs-12">
					<div class="col-xs-12">
						<h2 class="entry-title">Preferred Investor Program <span>ALL PROPERTIES</span></h2>
					</div>
					<div class="search-order-box col-xs-12">
						<div class="search-order-item by_sales_type">
							<select name="by_sales_type" id="by_sales_type" class="selectpicker">
								<option value="">Sort By State</option>
								<option value="fund">Sort By County</option>
								<option value="send">Sort By Sales Type</option>
							</select>
						</div>
					</div>
					<?php include_once 'content-listings.php'; ?>
					<div class="col-xs-12">
						<div id="page-selection-listing"></div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<?php
include_once 'footer.php';
