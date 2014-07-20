<?php
$rows = isset($_SESSION['list_num']) ? $_SESSION['list_num'] : 39;
?>
<div class="listings">
	<div class="col-xs-12">
		<div class="line alpha col-xs-12"></div>
	</div>
	<?php for ($i = 1; $i < $rows; $i++): ?>
		<div class="listing-wrapper <?php echo ($i == 3 ? 'special' : ''); ?>">
			<div class="listing-item col-xs-12">
				<div class="listing-photo">
					<img src="assets/sample/house_thumb.png" alt="" />
				</div>
				<div class="listing-address">
					<p class="special">Price Just Reduced by $10,000!</p>
					<p>5943 Greenfield avenue</p>
					<p class="strong">Riverside, ca 92506</p>
				</div>
				<div class="listing-sale-type">
					<p>mls</p>
					<p>type</p>
				</div>
				<div class="listing-sale-value">
					<p>dw124540239</p>
					<p>short sales</p>
				</div>
				<div class="listing-sqr-type">
					<p>type</p>
					<p>size</p>
				</div>
				<div class="listing-sqr-value">
					<p>SFR</p>
					<p>1957 sqft</p>
				</div>
				<div class="listing-control">
					<a href="javascript:void(0);"></a>
				</div>
			</div>
			<?php if ($i < $rows - 1): ?>
				<div class="col-xs-12"><div class="line beta col-xs-12"></div></div>
			<?php endif; ?>
			<div class="listing-detail">
				<div class="listing-detail-inner col-xs-12">
					<div>
						<img src="assets/sample/house_biger.png" alt="" />
					</div>
					<div>
						5943 Greenfield avenue<br/>
						Riverside, ca 92506
						<h1 class="special">price just<br/>reduced by<br/>$10,000!</h1>
					</div>
					<div>
						<a data-toggle="modal" data-target=".bs-example-modal-sm" href="#">Create a Note</a>
						<a href="#">Add to Favorites</a>
						<a href="#">Contact HMC Assets</a>
						<a href="#">Request financing quote from titan</a>
					</div>
				</div>
				<div class="listing-detail-bottom col-xs-12">
					<div class="listing-detail-info">
						<div class="info-item">
							<p class="one">Type/Year Built</p>
							<p class="two">SFR / 2003</p>
							<p class="three">Sale Type</p>
							<p class="four">Short Sales</p>
							<p class="five">MLS ID</p>
							<p class="six">DW14130700</p>
						</div>
						<div class="info-item odd">
							<p class="one">Beds / Baths</p>
							<p class="two">3 / 2</p>
							<p class="three">Price</p>
							<p class="four">Call / eMail</p>
							<p class="five">Listing Date</p>
							<p class="six">01/25/2014</p>
						</div>
						<div class="info-item">
							<p class="one">Square Footage</p>
							<p class="two">1957 sq ft</p>
							<p class="three">County</p>
							<p class="four">Liverside</p>
							<p class="five">Listing Agent</p>
							<p class="six">John Edwards</p>
						</div>
						<div class="info-item odd">
							<p class="one">Lot Area</p>
							<p class="two">1.2 acres</p>
							<p class="three">NOD</p>
							<p class="four">04/18/2014</p>
							<p class="five">Agent Phone</p>
							<p class="six">213.555.2222</p>
						</div>
						<div class="info-item">
							<p class="one">Occupancy</p>
							<p class="two">Vacant</p>
							<p class="three">FC Sale</p>
							<p class="four">05/18/2014</p>
							<p class="five">Agent Email</p>
							<p class="six">johnds@yahoo.com</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="property-note col-xs-12">
						<h4 class="entry-title">MY PROPERTY NOTES on  July 12, 2014 308 PM PST</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida tincidunt lacus, a elementum nibh. Curabitur porta tortor sit amet sem malesuada, nec gravida urna ullamcorper. Integer sit amet porttitor tortor. Phasellus dapibus commodo nulla. Pellentesque pulvinar mattis turpis, non mattis nisi placerat quis. Sed tempor purus urna, vestibulum suscipit lectus convallis vitae. Morbi hendrerit, orci eget cursus sodales, turpis diam elementum magna, eu dapibus nulla felis eget mi. Ut vel leo blandit neque luctus pretium et in mauris. Curabitur dapibus aliquet mattis. Phasellus eu adipiscing mi, ac mattis nisi. Vivamus eget ultricies quam.</p>
					</div>	
				</div>
			</div>
		</div>
	<?php endfor; ?>
	<div class="col-xs-12">
		<div class="line alpha"></div>
	</div>
</div>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="note-modal modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title entry-title" id="mySmallModalLabel">Preferred Investor Program&nbsp;&nbsp;<span>Note</span></h4>
			</div>
			<div class="modal-body">
				<textarea class="note-content"></textarea>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm small" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary btn-sm small">Save</button>
			</div>
		</div>
	</div>
</div>