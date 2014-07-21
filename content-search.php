<div class="search-box default-box col-xs-12">
	<h3 class="entry-title">Preferred Investor Program&nbsp;&nbsp;<span>search</span></h3>
	<form id="frm_search" name="frm_search" action="search_result.php">
		<div class="form-item">
			<label for="sale_type">Sale Type</label>
			<select name="sale_type" id="sale_type" class="selectpicker">
				<option value="all">All</option>
				<option value="fund">Short Sales</option>
				<option value="send">Standard Sales</option>
				<option value="send">REO</option>
			</select>
		</div>
		<div class="form-item">
			<label for="beds">Beds</label>
			<select name="beds" id="beds" class="selectpicker">
				<option value="">All</option>
				<option value="1">1+</option>
				<option value="2">2+</option>
				<option value="3">3+</option>
			</select>
		</div>
		<div class="form-item">
			<label for="baths">Baths</label>
			<select name="baths" id="baths" class="selectpicker">
				<option value="">All</option>
				<option value="1">1+</option>
				<option value="2">2+</option>
				<option value="3">3+</option>
			</select>
		</div>
		<div class="form-item">
			<label for="minsq">min(sqft)</label>
			<select name="minsq" id="minsq" class="selectpicker">
				<option value="">All</option>
				<option value="1000">1000+</option>
				<option value="1500">1500+</option>
				<option value="2000">2000+</option>
				<option value="2500">2500+</option>
				<option value="3000">3000+</option>
			</select>
		</div>
		<div class="form-item">
			<label for="state">state</label>
			<select name="state" id="state" class="selectpicker">
				<option value="">All</option>
				<?php
				$states = get_interests_states();
				if (!empty($states)) {
					foreach ($states as $state => $value) {
						?>
						<option value="<?php checkbox_get_for($state); ?>"><?php echo $state; ?></option>
						<?php
					}
				}
				?>
			</select>
		</div>
		<div class="form-item">
			<label for="county">county</label>
			<select name="county" id="county" class="selectpicker" multiple title='None' data-live-search="true">
				<option value="">All</option>
			</select>
		</div>
		<div class="form-item">
			<label for="city">city</label>
			<input type="text" name="city" id="city" class="text-field" />
		</div>
		<div class="form-item">
			<label for="address">address</label>
			<input type="text" name="address" id="address" class="text-field" />
		</div>
		<div class="form-item">
			<label>Display</label>
			<div class="option-group">
				<input type="radio" name="display" id="list" value="list" />
				<label for="list">List</label>
				<input type="radio" name="display" id="map" value="map" />
				<label for="map">Map</label>
			</div>
		</div>
		<input type="image" class="btn_search" src="assets/img/btn_search.png" alt="search" />
	</form>
</div>