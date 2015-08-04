<?php
/**
 * The template used for displaying page content in single-daycare_centre.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="page-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		
		
		<div class="daycare-centre-right">
			<div class="daycare-centre-image">
				<img src="<?php the_field('daycare_centre_main_image'); ?>" alt="<?php the_field('daycare_centre_name'); ?>" />
			</div>
			<div class="daycare-centre-right-content">
				<h2 class="daycare-about"><span>About <?php the_field('daycare_centre_name'); ?></span></h2>
				<div class="daycare-centre-description">
					<?php the_field('daycare_centre_description'); ?>
				</div>
				<h2 class="daycare-whats-happening"><span><?php the_field('daycare_centre_whats_happening'); ?></span></h2>
				<div class="daycare-centre-whats-happening-text">
					<?php the_field('daycare_centre_whats_happening_text'); ?>
				</div>
			</div>
		</div>
		
		<div class="daycare-centre-left">
			<h2 class="daycare-centre-director"><?php the_field('daycare_centre_director_name'); ?></h2>
			<h4 class="daycare-centre-director-title"><?php the_field('daycare_centre_director_title'); ?></h4>
			
			<ul class="daycare-centre-contact-details">
				<li class="daycare-centre-address">
					<?php the_field('daycare_centre_address'); ?>
				</li>
				<li class="daycare-centre-phone">
					<?php the_field('daycare_centre_phone'); ?>
				</li>
				<li class="daycare-centre-email last">
					<a href="mailto:<?php the_field('daycare_centre_email'); ?>"><?php the_field('daycare_centre_email'); ?></a>
				</li>
			</ul>
			
			<div class="daycare-centre-menus">
				<h2>Menus</h2>
				<?php if( have_rows('daycare_centre_menus') ): ?>
 
				    <div class="daycare-centre-menus-inner">
				 
				    <?php while( have_rows('daycare_centre_menus') ): the_row(); ?>
				 
				        <div class="daycare-centre-menu"><a href="<?php the_sub_field('daycare_centre_menu'); ?>" target="_blank"><?php the_sub_field('daycare_centre_menu_name'); ?></a></div>
				        
				    <?php endwhile; ?>
				 
				    </div>
				 
				<?php endif; ?>
			</div>
			
			
			<div class="daycare-centre-newsletters">
				<h2>Newsletter</h2>
				
				<?php if( have_rows('daycare_centre_newlsetters') ): ?>
 
				    <div class="daycare-centre-newsletters-inner">
				 
				    <?php while( have_rows('daycare_centre_newlsetters') ): the_row(); ?>
				 
				        <div class="daycare-centre-newsletter"><a href="<?php the_sub_field('daycare_centre_newsletter'); ?>" target="_blank"><?php the_sub_field('newsletter_class_name'); ?><br /><span><?php the_sub_field('newsletter_number'); ?></span></a></div>
				        
				    <?php endwhile; ?>
				 
				    </div>
				 
				<?php endif; ?>
			</div>
			
			
			<div class="daycare-centre-staff">
				<h2>Staff</h2>
				
				<?php if( have_rows('daycare_centre_staff') ): ?>
 
				   <div class="daycare-centre-staff-inner">
				 
				    <?php while( have_rows('daycare_centre_staff') ): the_row(); ?>
				 
				        <div class="daycare-centre-staff-member">
					        <div class="daycare-centre-staff-member-inner">
					        <span><?php the_sub_field('daycare_centre_staff_name'); ?></span><br /><?php the_sub_field('daycare_centre_classroom'); ?>
					        </div>
				        </div>
				        
				    <?php endwhile; ?>
				 
				    </div>
				 
				<?php endif; ?>
			</div>
		</div>


	</div><!-- .entry-content -->


</article><!-- #post-## -->