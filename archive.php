<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>
<section class="container-fluid">

	<div id="primary" class="content-area col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">


				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<section class="flex-container">


					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'post' );

					endwhile;

					?>

					</section> <!-- end flex-container -->

					<?php

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>


					
			<?php  the_posts_navigation(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

</section> <!-- End Container -->	

<?php
get_footer();
