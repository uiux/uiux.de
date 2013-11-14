<?php snippet('header') ?>

<section class="stage">
	<div class="wrapper">
		<?php echo kirbytext($page->text()) ?>
	</div>
</section>

<section class="posts">

	<div class="wrapper">

<?php $articles = $pages->find('artikel')->children()->visible()->flip()->paginate(3) ?>

<?php
 	foreach($articles as $article):
	$date = strtotime($article->release());
?>

	<article class="list <?php echo $article->uid() ?>">
		<h2>
			<a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
		</h2>
		<time datetime="<?php echo strftime('%Y-%m-%d', $date) ?>">vom <?php echo strftime('%d.%m.%Y', $date) ?></time>
		<p><?php echo $article->excerpt() ?></p>
	</article>

<?php endforeach ?>

	</div>

</section>

<?php snippet('footer') ?>