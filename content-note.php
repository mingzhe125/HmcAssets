<div class="mynote-box green-box col-xs-12">
	<div class="col-xs-12">
		<h3 class="entry-title">Preferred Investor Program&nbsp;&nbsp;<span>MY Notes</span></h3>
		<div class="line"></div>
	</div>
	<div class="note-item col-xs-12">
		<h2>Create a note</h2>
		<div class="form-item">
			<textarea class="write-note" name="note" id="note"></textarea>
		</div>
		<div class="form-item">
			<a href="#" id="save_note" class="save-note">Save My Note</a>
		</div>
		<div class="line col-xs-12"></div>
	</div>
	<?php
	$note_num = isset($_SESSION['note_num']) ? $_SESSION['note_num'] : '6';
	for ($i = 1; $i < $note_num; $i++):
		?>
		<div class="note-item col-xs-12">
			<div class="entry-title">Note001<span class="separator">|</span><span>npn234568</span></div>
			<div class="note-info">
				<span class="note-date">July 10, 2014, 3:04pm PST</span>
				<span class="separator"></span>
				<a href="#">Edit</a>
				<span class="separator">|</span>
				<a href="#">Delete</a>
				<span class="separator">|</span>
				<a href="#">Save</a>
			</div>
			<div class="entry-content">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Integer malesuada faucibus quam, nec vulputate nisl
				faucibus vel. Quisque nec commodo purus. Class aptent
				taciti sociosqu ad litora torquent per conubia nostra, per
				inceptos himenaeos. Phasellus adipiscing sagittis sodales.
			</div>
			<?php if ($div_class == '' && $i < $note_num - 1) : ?>
				<div class="line col-xs-12"></div>
			<?php endif; ?>
		</div>
	<?php endfor; ?>
	<div class="col-xs-12">
		<div class="line"></div>
		<div id="page-selection-note"></div>
	</div>
</div>