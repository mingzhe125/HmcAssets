<?php
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
        <link href="assets/css/admin_main.css" rel="stylesheet">

        <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.bootpag.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/js/DT_bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/admin_main.js"></script>
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
                            <li><a href="index.php">Client Access</a></li>
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
                            <li <?php echo ((strpos($current_url, 'admin_dashboard') === false && strpos($current_url, 'admin_profile') === false) ? '' : 'class="active"'); ?>><a class="first" href="admin_dashboard.php">ADMIN DASHBOARD</a></li>
                            <li <?php echo (strpos($current_url, 'admin_investor') === false ? '' : 'class="active"'); ?>><a href="admin_investor.php">Investors Dashboard</a></li>
                            <li <?php echo (strpos($current_url, 'admin_financing') === false ? '' : 'class="active"'); ?>><a href='#'>FINANCING DASHBOARD</a></li>
                            <li <?php echo (strpos($current_url, 'admin_in_report') === false ? '' : 'class="active"'); ?>><a href="#">PROGRAM  REPORTING</a></li>
                            <li <?php echo (strpos($current_url, 'admin_pro_report') === false ? '' : 'class="active"'); ?>><a href="#">INVESTORS  REPORTING</a></li>
                            <li><a class="last" href="#">LOG OUT</a></li>
                        </ul>
                    </div><!--/.navbar-collapse -->
                </div>
            </section>