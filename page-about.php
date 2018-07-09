<?php
/**
 * Template Name: About
 */

get_header(); 

get_template_part('inc/banner');
?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<h1 class="title"><?php the_title(); ?></h1>

			<?php
			while ( have_posts() ) : the_post(); 

			$title1 = get_field('section_1_title');
			$title2 = get_field('section_2_title');
			$title3 = get_field('section_3_title');

			?>

				<section class="about">
					<?php the_content(); ?>
				</section>

				<section class="proof">

					<?php if( have_rows('professional_recognition') ) : ?>
						<div class="prof-recog">
							<h2><?php echo $title1; ?></h2>
							<ul>
						<?php while( have_rows('professional_recognition') ) : the_row(); 
							$text = get_sub_field('recognition');
						?>
							<li><?php echo $text; ?></li>
						<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>

					<?php if( have_rows('educational_background') ) : ?>
						<div class="prof-recog">
							<h2><?php echo $title2; ?></h2>
							<ul>
						<?php while( have_rows('educational_background') ) : the_row(); 
							$text = get_sub_field('education');
						?>
							<li><?php echo $text; ?></li>
						<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>

					<?php if( have_rows('states_licensed') ) : ?>
						<div class="prof-recog">
							<h2><?php echo $title3; ?></h2>
							<ul>
						<?php while( have_rows('states_licensed') ) : the_row(); 
							$text = get_sub_field('states');
						?>
							<li><?php echo $text; ?></li>
						<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>

				</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
