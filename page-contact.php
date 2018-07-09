<?php
/**
 * Template Name: Contact
 */

get_header(); 

get_template_part('inc/banner');
?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<h1 class="title"><?php the_title(); ?></h1>

			<?php
			while ( have_posts() ) : the_post(); ?>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
