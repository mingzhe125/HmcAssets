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

		<section class="inner-content col-xs-12">
			<div class="col-xs-4 primary">
			</div>

			<!--Listing Box Section-->
			<div class="col-xs-8 secondary">

			</div>
		</section>
	</div>
</section>
<?php

include_once 'footer.php';
