<?php snippet('header') ?>

<section class="stage">
	<div class="wrapper">
		<?php echo kirbytext($page->introduction()) ?>
	</div>
</section>

<section>
	<div class="clients wrapper">
		<?php echo kirbytext($page->portfolio()) ?>
	</div>
</section>

<section>
	<div class="wrapper">
		<?php echo kirbytext($page->passion()) ?>
	</div>
</section>

<section>
	<div class="procedure wrapper">
		<?php echo kirbytext($page->procedure()) ?>
	</div>
</section>

<section>
	<div class="wrapper">
		<?php echo kirbytext($page->handcraft()) ?>
	</div>
</section>

<?php snippet('footer') ?>