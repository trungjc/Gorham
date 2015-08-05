<?php
/**
 * The template for displaying the footer.
 */
?>
            	</div><!-- .row -->
			</div><!-- .container -->
        </div><!-- #content-inner -->
    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
	    
	    <?php if ( is_front_page() ) { ?>
	    <div class="footer-news-container">
            <div class="footer-news-row">
	            <h2 class="block-title">Latest News</h2>
	            <div class="footer-news-inner">
					 <?php
						$post_id = 89;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo '<div class="footer-news-image">'.get_the_post_thumbnail($post_id, array( 770, 514)).'</div>'; 
						echo '<div class="footer-news-content"><h2>'.$title.'</h2>';
						$content = wp_trim_words($queried_post->post_content, 24, '...');
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
						echo $content;
						echo '<a href="'.get_permalink($post_id).'">more</a></div>';
				    ?>
	            </div>
            </div>
	    </div>
	    <?php } ?>
	    
        <div class="footer-container">
            
            <div class="footer-row">
	            
            	<div class="footer-statement">
					<h2><?php the_field('footer_statement', 'option'); ?></h2>
            	</div><!-- .footer-statement -->
            	
            	
	        		<div class="footer-address-1">
	            		<h3><?php the_field('footer_address1_title', 'option'); ?></h3>
	            		<p><?php the_field('footer_address1_details', 'option'); ?></p>
	        		</div>
	        		<div class="footer-address-2">
	            		<h3><?php the_field('footer_address2_title', 'option'); ?></h3>
	            		<p><?php the_field('footer_address2_details', 'option'); ?></p>
	        		</div>
	        		<div class="footer-address-3">
	            		<h3><?php the_field('footer_address3_title', 'option'); ?></h3>
	            		<p><?php the_field('footer_address3_details', 'option'); ?></p>
	        		</div>
	        		<div class="footer-social">
	            		<h3>follow us on:</h3>
	            		<a href="<?php the_field('twitter_link', 'option'); ?>"><img src="wp-content/uploads/2015/07/icon-twitter.png" alt="Twitter!" /></a>
	            		<a href="<?php the_field('facebook_link', 'option'); ?>"><img src="wp-content/uploads/2015/07/icon-facebook.png" alt="Facebook!" /></a>
	        		</div>
            	
            	<div class="footer-copyright">
	            	<p><?php the_field('footer_copyright', 'option'); ?></p>
            	</div>
            	
            </div>	
            	
            </div><!-- .row -->
        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>