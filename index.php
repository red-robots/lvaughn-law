<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
	if ( have_posts() ) : the_post(); 

	get_template_part('inc/banner');

	$mainTagline = get_field('main_tagline');
	$subText = get_field('sub-text_tagline');
	$intro = get_field('overview_introduction');
	$overview = get_field('overview_');

	// echo '<pre>';
	// print_r($banner);
	// echo '</pre>';

?>
	<section class="home text">
		<div class="homewrap">
			<?php if( $mainTagline ) { ?>
				<h2><?php echo $mainTagline; ?></h2>
			<?php } ?>
			<?php if( $subText ) { ?>
				<h3><?php echo $subText; ?></h3>
			<?php } ?>
			<?php if( $intro ) { ?>
				<p><?php echo $intro; ?></p>
			<?php } ?>

			<?php if(have_rows('service_areas')) : ?>
				<section class="home-service-area">
					<ul>
				<?php while(have_rows('service_areas')) : the_row();
					$bullet = get_sub_field('practice_area_bullet_points');

			 ?>			<!-- <li><i class="fas fa-check-circle"></i> <?php echo $bullet; ?></li>-->
			 			<li><?php echo $bullet; ?></li> 

				<?php endwhile; ?>
					</ul>
				</section>
			<?php endif; ?>
			<?php if( $overview ) { ?>
				<p class="overview"><?php echo $overview; ?></p>
			<?php } ?>
		</div>
	</section>

<?php endif;

?>



<?php
get_footer();
