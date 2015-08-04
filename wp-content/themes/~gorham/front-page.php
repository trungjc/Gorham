<?php
/**
 * Homepage Template.
 */

get_header(); ?>

	<div class="homepage-daycare-centres">
		
		<div class="homepage-daycare-centre-1">
			<div class="homepage-daycare-centre-inner">	
				<a href="<?php the_field('homepage_daycare1_page_link', 'option'); ?>">
					<img src="<?php the_field('homepage_daycare1_image', 'option'); ?>" alt="<?php the_field('homepage_daycare3_title', 'option'); ?>"  class="home-daycare-centre-image" />	
				
					<div class="daycare-centre-overlay">
						<div class="daycare-centre-overlay-content">
							<h2><?php the_field('homepage_daycare1_title', 'option'); ?></h2>
							<div class="daycare-centre-stars"><span><img src="/wp-content/uploads/2015/07/stars-white.png" alt="Daycare Centre" /></span></div>
							<p><?php the_field('homepage_daycare1_tagline', 'option'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="homepage-daycare-centre-2">
			<div class="homepage-daycare-centre-inner">	
				<a href="<?php the_field('homepage_daycare2_page_link', 'option'); ?>">
					<img src="<?php the_field('homepage_daycare2_image', 'option'); ?>" alt="<?php the_field('homepage_daycare3_title', 'option'); ?>"  class="home-daycare-centre-image" />		
					
					<div class="daycare-centre-overlay">
						<div class="daycare-centre-overlay-content">
							<h2><?php the_field('homepage_daycare2_title', 'option'); ?></h2>
							<div class="daycare-centre-stars"><span><img src="/wp-content/uploads/2015/07/stars-white.png" alt="Daycare Centre" /></span></div>
							<p><?php the_field('homepage_daycare2_tagline', 'option'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="homepage-daycare-centre-3">
			<div class="homepage-daycare-centre-inner">	
				<a href="<?php the_field('homepage_daycare3_page_link', 'option'); ?>">
					<img src="<?php the_field('homepage_daycare3_image', 'option'); ?>" alt="<?php the_field('homepage_daycare3_title', 'option'); ?>"  class="home-daycare-centre-image" />
					<div class="daycare-centre-overlay">
						<div class="daycare-centre-overlay-content">
							<h2><?php the_field('homepage_daycare3_title', 'option'); ?></h2>
							<div class="daycare-centre-stars"><span><img src="/wp-content/uploads/2015/07/stars-white.png" alt="Daycare Centre" /></span></div>
							<p><?php the_field('homepage_daycare3_tagline', 'option'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="homepage-daycare-centre-4">
			<div class="homepage-daycare-centre-inner">	
				<a href="<?php the_field('homepage_daycare4_page_link', 'option'); ?>">
					<img src="<?php the_field('homepage_daycare4_image', 'option'); ?>" alt="<?php the_field('homepage_daycare4_title', 'option'); ?>"  class="home-daycare-centre-image" />
					<div class="daycare-centre-overlay">
						<div class="daycare-centre-overlay-content">
							<h2><?php the_field('homepage_daycare4_title', 'option'); ?></h2>
							<div class="daycare-centre-stars"><span><img src="/wp-content/uploads/2015/07/stars-white.png" alt="Daycare Centre" /></span></div>
							<p><?php the_field('homepage_daycare4_tagline', 'option'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="homepage-daycare-centre-5">
			<div class="homepage-daycare-centre-inner">	
				<a href="<?php the_field('homepage_daycare5_page_link', 'option'); ?>">
					<img src="<?php the_field('homepage_daycare5_image', 'option'); ?>" alt="<?php the_field('homepage_daycare5_title', 'option'); ?>" class="home-daycare-centre-image" />
					<div class="daycare-centre-overlay">
						<div class="daycare-centre-overlay-content">
							<h2><?php the_field('homepage_daycare5_title', 'option'); ?></h2>
							<div class="daycare-centre-stars"><span><img src="/wp-content/uploads/2015/07/stars-white.png" alt="Daycare Centre" /></span></div>
							<p><?php the_field('homepage_daycare5_tagline', 'option'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="homepage-daycare-centre-6">
			<div class="homepage-daycare-centre-inner">	
				<a href="<?php the_field('homepage_daycare2_page_link', 'option'); ?>">
					<img src="<?php the_field('homepage_daycare6_image', 'option'); ?>" alt="<?php the_field('homepage_daycare6_title', 'option'); ?>"  class="home-daycare-centre-image" />
					<div class="daycare-centre-overlay">
						<div class="daycare-centre-overlay-content">
							<h2><?php the_field('homepage_daycare6_title', 'option'); ?></h2>
							<div class="daycare-centre-stars"><span><img src="/wp-content/uploads/2015/07/stars-white.png" alt="Daycare Centre" /></span></div>
							<p><?php the_field('homepage_daycare6_tagline', 'option'); ?></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		
	</div>


<?php get_footer(); ?>