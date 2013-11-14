<?php
	snippet('header');
	$date = strtotime($page->release());
?>
<section>
	<div class="wrapper">
		<h1>
			<?php echo $page->title() ?>
		</h1>
		<time datetime="<?php echo strftime('%Y-%m-%d', $date) ?>"><?php echo strftime('%d.%m.%Y', $date) ?></time>
		<p class="intro"><?php echo $page->excerpt() ?></p>
		<?php echo kirbytext($page->text()) ?>
	</div>
</section>

<?php
	if($page->css()) {
		echo "<style>\n" . $page->css() . "\n</style>";
	}
?>

<?php snippet('footer') ?>