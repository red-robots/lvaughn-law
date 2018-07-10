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
			while ( have_posts() ) : the_post(); 

			$phone = get_field('phone', 'option');
			$email = get_field('email', 'option');
			$tagline = get_field('tagline');
			$antispam = antispambot($email);

			?>


			<section class="card">
				<section class="contact">
					<div class="name">Lisa F. Vaughn</div>
					<div class="info">
						<?php if( $phone ) { ?>
						<div class="item">
						<i class="fal fa-phone"></i>
							<span class="text"><?php echo $phone; ?></span>
						</div><?php } ?>
						<?php if( $email ) { ?>
							<div class="item">
								<i class="fal fa-envelope"></i>
								<span class="text"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
							</div>
						<?php } ?>
						<div class="item">
							<i class="fal fa-browser"></i>
							<span class="text">lvaughnlaw.com</span>
						</div>
					</div>
					
				</section>
				<div class="desc"><?php echo $tagline; ?></div>
			</section>

			<section class="contact-form">
				<h2>Inquiries:</h2>
				<div class="the-form">
					
				</div>
			</section>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
