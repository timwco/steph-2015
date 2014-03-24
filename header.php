<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700'>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>
<body>

	<header id="main-header">
		<div class="container">
			<nav id="main-navigation">
				<ul class="clearfix">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/sayhi">Say Hi</a></li>
				</ul>
			</nav>
			<ul id="header-social-networks">
				<li><a href="https://twitter.com/stephwhitacre" class="fa fa-twitter fa-lg"></a></li>
				<li><a href="http://instagram.com/stephwhitacre" class="fa fa-instagram fa-lg"></a></li>
				<li><a href="/feed" class="fa fa-rss fa-lg"></a></li>
			</ul>
		</div>
	</header>

	<div id="titlebar" class="text-aligncenter">
		<h2 class="em-medium"><?php echo get_bloginfo('name'); ?></h2>
		<h4 class="em-subtitle"><?php echo get_bloginfo('description'); ?></h4>
	</div>

	<div id="content-wrap">
		<div class="container">
