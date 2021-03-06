<?php 
session_start(); 
require_once './include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="">
		<meta name="author" content="">

		<title>HMC ASSETS</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/bootstrap-select.css" rel="stylesheet">
		<link href="assets/css/DT_bootstrap.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">

		<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.bootpag.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<header class="navbar navbar-collapse">
				<div class="container">
					<div class="navbar-header col-xs-4">
						<a class="navbar-brand" href="http://www.hmcassets.com"><img id="logo" src="assets/img/logo.png" alt="HMC Assets" /></a>
					</div>
					<div class="navbar-collapse collapse navigation col-xs-8">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="http://www.hmcassets.com">Home</a></li>
							<li><a href="http://www.hmcassets.com/about.html">About Us</a></li>
							<li><a href="http://www.hmcassets.com/financing.html">Financing</a></li>
							<li><a href="http://www.hmcassets.com/contact.html">Contact</a></li>
							<li class="active"><a href="index.php">Client Access</a></li>
						</ul>
					</div><!--/.navbar-collapse -->
				</div>
			</header>
			<section class="dashboard-menu">
				<div class="container">
					<div class="navbar-collapse collapse navigation col-xs-8">
						<?php
						$current_url = $_SERVER["REQUEST_URI"];
						?>
						<ul class="nav navbar-nav navbar-right">
							<li <?php echo (strpos($current_url, 'dashboard') === false ? '' : 'class="active"'); ?>><a class="first" href="dashboard.php">DASHBOARD</a></li>
							<li <?php echo (strpos($current_url, 'all_properties') === false ? '' : 'class="active"'); ?>><a href="all_properties.php">View All Properties</a></li>
							<li <?php echo (strpos($current_url, 'financing') === false ? '' : 'class="active"'); ?>><a href="financing.php">Financing</a></li>
							<li <?php echo (strpos($current_url, 'offers') === false ? '' : 'class="active"'); ?>><a href="offers.php">Special Offers</a></li>
							<li <?php echo (strpos($current_url, 'fav_note') === false ? '' : 'class="active"'); ?>><a href="fav_note.php">MY FAVORITES & NOTES</a></li>
							<li <?php echo (strpos($current_url, 'transaction') === false ? '' : 'class="active"'); ?>><a href="transaction.php">MY TRANSACTIONS</a></li>
							<li <?php echo (strpos($current_url, 'profile') === false ? '' : 'class="active"'); ?>><a href="profile.php">My Profile</a></li>
							<li><a class="last" href="#">LOG OUT</a></li>
						</ul>
					</div><!--/.navbar-collapse -->
				</div>
			</section>