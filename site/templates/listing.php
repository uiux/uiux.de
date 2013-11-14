<?php snippet('header') ?>

<section>

	<div class="wrapper">
<?php
	$articles = $page->children()->visible()->flip()->paginate(10);
	foreach($articles as $article):
	$date = strtotime($article->release());
?>

		<article class="list <?php echo $article->uid() ?>">
			<h1>
				<a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
			</h1>
			<time datetime="<?php echo strftime('%Y-%m-%d', $date) ?>"><?php echo strftime('%d.%m.%Y', $date) ?></time>
			<p class="excerpt"><?php echo $article->excerpt() ?></p>
		</article>

<?php endforeach ?>
	</div>
</section>

<?php snippet('footer') ?>