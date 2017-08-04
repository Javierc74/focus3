<?php

/**
Template Name: Proyecto
 *
 * @package WordPress
 * @subpackage Focus 3
 * @since Focus 3 1.0
 */



get_header(); ?>
 <a href="/#proyectos" class="close" ><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> VOLVER</a>
		<div style="text-align: center;">
		<a href="/#proyectos" title="focus 3 - inicio"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="" width="141"/></a>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container"><header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="entry-header-int">PROYECTO</p>
	</header></div><!-- .entry-header -->

	<div class="entry-content">
		<div class="slider container" style="position: absolute; top: -250px; left: 0; right: 0;">
			<?php the_post_thumbnail( 'lineas-detalle' ); ?>
		</div>
		<div class="contenido">
		<div class="container">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
		</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
<div class="container proyectos-paginacion">
			<?php

			the_post_navigation();
			?>
			</div>
<?php
		
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
