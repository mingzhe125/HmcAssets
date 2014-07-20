<?php
include_once 'header.php';
$_SESSION['list_num'] = 13;
?>
<section class="dashboard-main" id="my_favorites_notes_page">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-md-12">
			<div class="col-md-4 primary">
				<?php include_once 'content-financing.php'; ?>
				<!--Map Box-->
				<div class="map-box default-box col-md-12">
					<h3 class="entry-title">Preferred Investor Program&nbsp;&nbsp;<span>map</span></h3>
					<div id="map-box"></div>
					<a href="#" class="btn_display_listing">
						<img alt="" src="assets/img/btn_display_listing.png" />
					</a>
				</div>
			</div>

			<!--Listing Box Section-->
			<div class="col-md-8 secondary">
				<div class="listing-box col-md-12">
					<h2 class="entry-title col-md-12">Most Recent <span>Listing</span></h2>
					<div class="col-md-12">
						<div class="line top col-md-12"></div>
					</div>
					<div class="search-order-box col-md-12">
						<div class="search-order-item by_sales_type">
							<select name="by_sales_type" id="by_sales_type" class="selectpicker">
								<option value="">List By State</option>
								<option value="fund">List By County</option>
								<option value="send">List By Sales Type</option>
							</select>
						</div>
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