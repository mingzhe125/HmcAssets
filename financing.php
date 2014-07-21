<?php
include_once 'header.php';
$_SESSION['fav_num'] = 11;
$_SESSION['note_num'] = 6;
?>
<section class="dashboard-main">
	<div class="container">
		<!--Top Mark-->
		<?php include_once 'content-dashboard-mark.php'; ?>

		<section class="inner-content col-xs-12">
			<div class="financing-master col-xs-12">
				<div class="financing-inner col-xs-12">
					<p class="info">HMC Assets works with our preferred lenders for bridge and traditional loans through TITAN Capital and CIVIC Home Loans respectively  - offering a wide range of products suit all your financing needs.</p>	
					<img alt="" class="financing-mark" src="assets/sample/financing.png" />
					<div class="financing-item first col-xs-6">
						<h1>TITAN CAPITAL</h1>
						<p>We INTERNALLY APPRAISE AND FUND OUR OWN LOANS, AND offer <span>HARD-MONEY LOANS</span> FOR QUALIFIED PROPERTIES FOR LOAN AMOUNTS UP TO $3MM.</p>
						<ul class="navbar-nav">
							<li><a href="assets/Titan_Summary_2014.pdf" target="_blank" id="offer-rings">PRODUCT OFFERINGS</a></li>
							<li><a href="mailto:hmc@titan-cap.com" id="contact">CONTACT TITAN CAPITAL</a></li>
							<li><a href="http://www.titan-cap.com" target="_blank" id="visit-site">VISIT<br/> WEBSITE</a></li>
						</ul>
					</div>
					<div class="financing-item col-xs-6">
						<h1>CIVIC Home loans</h1>
						<p>CIVIC home loans  offers a variety of <span>CONVENTIONAL</span> loan pRODUCTS, competitive rates, and top customer service to fulfill any traditionAl loan needs.</p>
						<ul class="navbar-nav">
							<li><a href="assets/CIVIC_Summary_2014.pdf" target="_blank" id="offer-rings">PRODUCT OFFERINGS</a></li>
							<li><a href="mailto:hmc@civichomeloans.com" id="contact">CONTACT CIVIC HOME LOANS</a></li>
							<li><a href="http://www.civichomeloans.com" target="_blank" id="visit-site">VISIT<br/> WEBSITE</a></li>
						</ul>
					</div>
					<div class="financing-item"></div>
				</div>
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
