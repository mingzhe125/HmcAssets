<div class="favorite-box green-box col-xs-12">
	<div class="col-xs-12">
		<h3 class="entry-title">Preferred Investor Program&nbsp;&nbsp;<span>MY Favorites</span></h3>
		<div class="line"></div>
	</div>
	<div class="properties col-xs-12">
		<?php
		$fav_num =  isset($_SESSION['fav_num']) ? $_SESSION['fav_num'] : '6';
		for ($i = 1; $i < $fav_num; $i ++) {
			if ($i == 3) {
				$div_class = 'warning';
			} else {
				$div_class = '';
			}
			?>
			<div class="property <?php echo $div_class; ?> col-xs-12">
				<div class="col-xs-4 row">
					<img alt="" src="assets/sample/house_thumb.png" />
				</div>
				<div class="col-xs-2"></div>
				<div class="col-xs-8 row property-info">
					<p>
						<span>5943 Greenfield Avenue</span><br/>
						<span>Riverside, CA 92506</span><br/>
						REO LISTED  /  MLS: DW14130700
					</p>
					<ul class="property-links navbar-nav">
						<li class="alpha"><a href="#" class="icon view"></a></li>
						<li><a href="#" class="icon contact"></a></li>
						<li><a href="#" class="icon buy"></a></li>
						<li class="beta"><a href="#" class="icon delete"></a></li>
					</ul>
				</div>
				<?php if ($div_class == '' && $i < 5) : ?>
					<div class="line col-xs-12"></div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</div>
	<div class="col-xs-12">
		<div class="line"></div>
		<div id="page-selection-property"></div>
	</div>
</div>