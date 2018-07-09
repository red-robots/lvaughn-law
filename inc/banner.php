<?php
$banner = get_field('banner_image');

// echo '<pre>';
// print_r($banner);
// echo '</pre>';

if( $banner ) { ?>
	<div class="banner">
		<img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt']; ?>" >
	</div>
<?php }