<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php
		if($page->isHomePage()) { 
			echo 'User Experience / User Interface &rsaquo; '.$site->title();
		} else {
			echo $page->title().' &rsaquo; '.$site->title();
		}
	?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php 
	if($page->excerpt()) { 
		echo html($page->excerpt()); 
	} else {
		echo html($site->description());
	} ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo css('fonts/fonts.css') ?>
	<?php echo css('css/uiux.css') ?>
	<!--[if lt IE 9]>
	<?php echo js('js/elements.js') ?>
	<![endif]-->
	<link href="/ios.png" rel="apple-touch-icon" />
	<link href="/fav.png" rel="icon" type="image/png">
	<link href="/feed" rel="alternate" type="application/rss+xml" title="UI/UX Artikel" />
</head>

<body class="<?php echo $page->template(); ?>">
<?php if(strpos($site->url(), "uiux") == false): ?>
<p class="notification">This code is for <strong>educational use only</strong> and contains licenced third party products. Please read <a href="#">this</a> before using.</p>
<?php endif; ?>
<header>
	<nav class="wrapper">
		<a href="/" class="logo"><img src="/img/logo.png" alt="UI/UX Logo" /></a>
		<ul>
<?php foreach($pages->visible() AS $p): ?>
		<?php $isHome = $p->title() == 'Start'; ?>
<li <?php if($isHome) echo ' class="home"' ?>><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?><?php if(!$isHome) echo '/'; ?>"><?php echo html($p->title()) ?></a></li>
<?php endforeach ?>
		</ul>
	</nav>
</header>