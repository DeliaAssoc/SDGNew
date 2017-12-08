<?php
/*
Template Name: About Template
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

			<section id="about" class="page">
	    	<div class="page-content">
					<div class="page-message">
						<h1>Nobody gives you personal attention<br> and peace of mind like Heim, because<br> nobody cares like Heim.</h1>
					</div>
					<div class="page-cta">
						<div class="cta">
			        <div class="cta-logo">
			          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Security">
			        </div>
			        <h3>Security</h3>
			        <p>Look for the shield with the big red “H”. It’s a sure sign that a Heim security system is on guard protecting the safety of your home and family.</p>
			        <a href="/residential/residential-security/" class="btn">Learn More</a>
			      </div>
			      <div class="cta">
			        <div class="cta-logo">
			          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Security">
			        </div>
			        <h3>Fire</h3>
			        <p>With Heim state-of the-art fire system, early warning detection technology ensures that your family is safe all day and all night.</p>
			        <a href="/residential/residential-fire/" class="btn">Learn More</a>
			      </div>
			      <div class="cta">
			        <div class="cta-logo">
			          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Security">
			        </div>
			        <h3>Automation</h3>
			        <p>Put control of your home right at your fingertips from your web-enabled smartphone, tablet or computer with Heim-installed home automation.</p>
			        <a href="/residential/residential-automation/" class="btn">Learn More</a>
			      </div>
			      <div class="cta">
			        <div class="cta-logo">
			          <img src="<?php bloginfo('template_directory'); ?>/img/home/icon-security.svg" alt="Security">
			        </div>
			        <h3>Heim Cares</h3>
			        <p>Trust the Heim family to take care of your family’s home security, fire, automation and entertainment needs. Heim means peace of mind.</p>
			        <a href="/about/heim-cares/" class="btn">Learn More</a>
			      </div>
					</div>



	    		<?php while ( have_posts() ) : the_post(); ?>
						<div id="about-content">
							<div class="about-content-wrapper">
								<div class="about-copy">
									<div class="about-copy-wrapper">
	    						<?php the_content(); ?>
									</div>
								</div>

								<?php $aboutImage = get_field('background_image'); ?>

								<div class="about-img" style="background-image: url( <?php echo $aboutImage['url']; ?> );">

								</div>

							</div>

						</div>

	    		<?php endwhile; // End of the loop. ?>

					<section id="about-marketing">
				    <div id="about-marketing-wrapper">
				      <div class="marketing-box">
				        <div class="marketing-img">
				          <img src="<?php bloginfo('template_directory'); ?>/img/home/home-res.jpg" alt="Residential">
				        </div>
				        <div class="marketing-copy">
				          <h2>Residential</h3>
				          <p>No one cares for the safety of your home and family like Heim.</p>
				          <a href="/residential/">DISCOVER WHY</a>
				        </div>
				      </div>
				      <div class="marketing-box">
				        <div class="marketing-img">
				          <img src="<?php bloginfo('template_directory'); ?>/img/home/home-com.jpg" alt="Residential">
				        </div>
				        <div class="marketing-copy">
				          <h2>Commercial</h3>
				          <p>You want to protect and secure your company. Heim makes it happen.</p>
				          <a href="/commercial/">DISCOVER HOW</a>
				        </div>
				      </div>
				      <div class="marketing-box">
				        <div class="marketing-img">
				          <img src="<?php bloginfo('template_directory'); ?>/img/home/home-cus.jpg" alt="Residential">
				        </div>
				        <div class="marketing-copy">
				          <h2>Custom Buildings</h3>
				          <p>Ask about our Preferred-Partner Program for new home construction.</p>
				          <a href="/custom-partners/">LEARN MORE</a>
				        </div>
				      </div>
				    </div>
				  </section>

	    	</div>
	    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
