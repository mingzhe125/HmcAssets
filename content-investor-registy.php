<div class="investor-register-box col-xs-12">
	<h2 class="entry-title col-xs-12">Preferred Investor Program<span>My Profile</span></h2>
	<div class="col-xs-12">
		<div class="line top col-xs-12"></div>
	</div>
	<div class="investor-form col-xs-12">
		<form id="frm_invstor" name="frm_search" action="search_result.php">
			<div class="col-xs-12">
				<div class="form-item col-xs-6">
					<label for="first_name">First Name<sup>*</sup></label>
					<input type="text" name="first_name" id="first_name" class="text-field" />
				</div>
				<div class="form-item col-xs-6 three">
					<label for="last_name">Last Name<sup>*</sup></label>
					<input type="text" name="last_name" id="last_name" class="text-field" />
				</div>
				<div class="form-item col-xs-6">
					<label for="company">Company<sup>*</sup></label>
					<input type="text" name="company" id="company" class="text-field" />
				</div>
				<div class="form-item col-xs-6 three">
					<label for="city">City<sup>*</sup></label>
					<input type="text" name="city" id="city" class="text-field" />
				</div>
				<div class="form-item col-xs-3">
					<label for="state">State<sup>*</sup></label>
					<input type="text" name="state" id="state" class="text-field" />
				</div>
				<div class="form-item col-xs-4 three">
					<label for="zip">Zip<sup>*</sup></label>
					<input type="text" name="zip" id="zip" class="text-field" />
				</div>
				<div class="form-item col-xs-5 three">
					<label for="phone">Work Phone<sup>*</sup></label>
					<input type="text" name="phone" id="phone" class="text-field" />
				</div>
				<div class="form-item col-xs-3">
					<label for="fax">Fax<sup>*</sup></label>
					<input type="text" name="fax" id="fax" class="text-field" />
				</div>
				<div class="form-item col-xs-4 three">
					<label for="mobile">Mobile<sup>*</sup></label>
					<input type="text" name="mobile" id="mobile" class="text-field" />
				</div>
				<div class="form-item col-xs-5 three">
					<label for="email">Email<sup>*</sup></label>
					<input type="email" name="email" id="email" class="text-field" />
				</div>

				<div class="form-item col-xs-12">
					<h5>States of Interests(Select all that apply)<sup>*</sup></h5>
				</div>
				<?php
				$interests_states = get_interests_states();
				foreach ($interests_states as $key => $value) :
					?>
					<div class="form-item check-group col-xs-3">
						<input type="checkbox" name="interests_state" id="<?php checkbox_get_for($key); ?>" value="<?php echo $key; ?>" />
						<label for="<?php checkbox_get_for($key); ?>"><?php echo $key; ?></label>
					</div>
				<?php endforeach; ?>

				<?php foreach ($interests_states as $key => $value) : ?>
					<div class="form-item col-xs-12">
						<h6><?php echo $key; ?> (Select all counties that apply)<sup>*</sup></h6>
					</div>
					<?php foreach ($value as $row) : ?>
						<div class="form-item check-group col-xs-2">
							<input type="checkbox" name="<?php checkbox_get_for($key); ?>" id="<?php checkbox_get_for($key . ' ' . $row); ?>" value="<?php echo $row; ?>" />
							<label for="<?php checkbox_get_for($key . ' ' . $row); ?>"><?php echo $row; ?></label>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>

				<?php
				$financing_method = get_financing_method();
				foreach ($financing_method as $key => $value) :
					?>
					<div class="form-item col-xs-12">
						<h6><?php echo $key; ?> (Select all counties that apply)<sup>*</sup></h6>
					</div>
					<?php foreach ($value as $row) : ?>
						<div class="form-item check-group col-xs-2">
							<input type="checkbox" name="<?php checkbox_get_for($key); ?>" id="<?php checkbox_get_for($key . ' ' . $row); ?>" value="<?php echo $row; ?>" />
							<label for="<?php checkbox_get_for($key . ' ' . $row); ?>"><?php echo $row; ?></label>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>

				<div class="form-item col-xs-12 one">
					<label for="investment-properties">Assets available for purchase of investment properties<sup>*</sup></label>
					<select name="investment-properties" id="investment-properties" class="selectpicker">
						<option value="1">Less than 100K</option>
						<option value="2">100K</option>
						<option value="3">200K</option>
						<option value="4">300K</option>
						<option value="5">400K</option>
					</select>
				</div>
				<div class="form-item col-xs-6 indicate">
					<p>Please indicate Your Purchase Price Range</p>
				</div>
				<div class="form-item col-xs-3 indicate-from">
					<label for="from">From<sup>*</sup></label>
					<select name="from" id="from" class="selectpicker">
						<option value="1">any</option>
						<option value="2">100K</option>
						<option value="3">200K</option>
						<option value="4">300K</option>
						<option value="5">400K</option>
					</select>
				</div>
				<div class="form-item col-xs-3 indicate-from">
					<label for="to">To<sup>*</sup></label>
					<select name="to" id="to" class="selectpicker">
						<option value="1">any</option>
						<option value="2">100K</option>
						<option value="3">200K</option>
						<option value="4">300K</option>
						<option value="5">400K</option>
					</select>
				</div>
				<div class="form-item col-xs-12 one">
					<label>Numbers of Investment Properties Purchased in the last 24 months<sup>*</sup></label>
					<textarea></textarea>
				</div>
				<div class="form-item col-xs-12 one">
					<label>Comments<sup>*</sup></label>
					<textarea></textarea>
				</div>
				<div class="form-item col-xs-12 two">
					<button class="btn-primary" name="save" value="Save">Save Changes</button>
				</div>
			</div>
		</form>	
	</div>
</div>