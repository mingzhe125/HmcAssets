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
			</div>

			<!--Listing Box Section-->
			<div class="col-md-8 secondary">

			</div>
		</section>
	</div>
</section>
<?php

include_once 'footer.php';
