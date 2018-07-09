<?php
/**
 * Template Name: Practice Areas
 */

get_header(); 

get_template_part('inc/banner');

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<h1 class="title"><?php the_title(); ?></h1>

			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'practice_area',
				'posts_per_page' => -1
			));
				if ($wp_query->have_posts()) : ?>
				<section class="practice-areas">
			    <?php while ($wp_query->have_posts()) : ?>
			        
			    <?php $wp_query->the_post(); ?>	

				    <div class="block">
				    	<h2><?php the_title(); ?></h2>
				    	<?php the_content(); ?>
				    </div>

			<?php endwhile; ?>
			</section>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
