<?php get_header(); ?>
<body>



	<!-- Añadiendo el espacio para un menú de navegación -->
	<?php include TEMPLATEPATH . '/nav.php' ?>
	<!--/ -->





	<header class="header">
		<h1><?php bloginfo('name') ?></h1>
		<h2><?php bloginfo('description') ?></h2>
	</header>




	<div class="sidebar">
		<!-- Esto es el espacio para widgets -->
		<?php dynamic_sidebar( 'sidebar-header' ); ?>
	</div>




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
					<h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
					<div class="datos">
						<strong><?php the_author( ); ?></strong>
						<small><?php the_date(	 ); ?></small>
					</div>
				</header>
				<figure class='img'>
					<!-- 
					* Al incluir la imagen por defecto pone el temaño grande
					* le puedo cambiar el tamaño con los parámetros
					** thumbnail > es la imagen en pequeño
					** medium > es la imagen...
					** full > es la imagen...
				 	 -->
					<?php the_post_thumbnail( 'full' ); ?>
				</figure>
				<footer>
					<?php the_excerpt(); ?>
					<?php the_category( ); ?>
				</footer>
			</article>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</section>




	<div class="sidebar">
		<!-- Esto es el espacio para widgets -->
		<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</div>




<?php get_footer( 'landing' ); ?>
