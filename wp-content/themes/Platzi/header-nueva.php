<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- 
	* En esta plantilla del head he usado la funcion
	* del loop 'the_title'. 
	* Esto lo puedo hacer porque ya es una página y no el index
	* ya WP ya sabe cual el título es del elemento como tal.
	 -->
	<title><?php the_title( ); ?></title>
 	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body class="cat__blog">
<header>
	<h1><?php the_title( ); ?></h1>
</header>