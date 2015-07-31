<!-- 
* Esta plantilla se llama category-4 
* porque en el panel admin, a la categoría 'nueva' le da 
* el ID-4
 -->




<!-- 
* He puesto el slot 'nueva' para poder dar estilos distintos a esta 
* categoría en concreto.
 -->
<?php get_header('nueva'); ?>
<body class="cat__blog">
	<header class="header">
		<h1><?php bloginfo('name') ?></h1>
		<h2><?php bloginfo('description') ?></h2>
	</header>
	<section class="content page ">
		
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
					<?php the_post_thumbnail( 'full' ); ?>
				</figure>				<footer>
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

<?php get_footer( 'negro' ); ?>
