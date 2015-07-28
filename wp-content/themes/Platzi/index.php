<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('description'); ?></title>
 	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<header class="header">
		<h1><?php bloginfo('name') ?></h1>
		<h2><?php bloginfo('description') ?></h2>
	</header>
	<section class="content">

		<!-- 
		* Esto se pone por seguridad para la estabilidad del loop
	 	 -->
		<?php rewind_posts(); ?>


		<!-- 
		* El query_post permite filrar por diferentes filtros
		* Se coloca justo antes del loop
		* Algunas opciones que puedo filtrar
		** El orden de los post > order=Des Por defecto
		** El orden de los post > order=Asc
		** Categorias > order=Asc
		*** Se puede filtrar por category name o por category id > recomendado
		*** hacer por id > cat=4
		* puedo añadir filtros concatenando con un & > order=Des&cat=4
	 	 -->
		<?php query_posts( 'order=Des' ); ?>
		


		<!-- 
		* Esto es el loop
		 -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class='post'>
				<header>
					<h3><?php the_title( ); ?></h3>
					<div class="datos">
						<strong><?php the_author( ); ?></strong>
						<small><?php the_date(	 ); ?></small>
					</div>
				</header>
				<?php the_excerpt(); ?>
				<?php the_category( ); ?>
			</article>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</section>
</body>
</html>
