<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
 	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<h1><?php bloginfo('name') ?></h1>
	<h2><?php bloginfo('description') ?></h2>
	<ul>
		<li><?php bloginfo('name'); ?></li>
		<li><?php bloginfo('description'); ?></li>
		<li><?php bloginfo('wpurl'); ?></li>
		<li><?php bloginfo('admin_email'); ?></li>
		<li><?php bloginfo('charset'); ?></li>
		<li><?php bloginfo('version'); ?></li>
		<li><?php bloginfo('html_type'); ?></li>
		<li><?php bloginfo('language'); ?></li>
		<li><?php bloginfo('stylesheet_directory'); ?></li>
		<li><?php bloginfo('stylesheet_url'); ?></li>
	</ul>
</body>
</html>
