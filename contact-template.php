<?php
/*
Template Name: Contact Template
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

			global $post;
			$parent_id = $post->post_parent;

			$banner = get_field('banner', $parent_id);

			?>

			<div id="banner-page" class="banner" style="background-image: url( <?php echo $banner['url']; ?> );">
				<div class="banner-wrapper">
					<div class="banner-title">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>

			<section class="page">
				<div class="page-wrapper">


	    		<?php while ( have_posts() ) : the_post(); ?>
						<div id="contact-map" class="contact-col">

							<?php the_content(); ?>

						</div>
						<div id="contact-form" class="contact-col">
							<?php echo do_shortcode( '[contact-form-7 id="129" title="Contact Page"]' ); ?>
						</div>


	    		<?php endwhile; // End of the loop. ?>
	    	</div>
	    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
