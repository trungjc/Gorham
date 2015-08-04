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
	            
	            <div class="footer-top">
		            <div class="footer-top-container">
			            <div class="footer-top-row">
							<div class="footer-top-block block-1">
								Footer Top Block #1
							</div>
							<div class="footer-top-block block-2">
								Footer Top Block #2
							</div>
							<div class="footer-top-block block-3">
								Footer Top Block #3
							</div>
							<div class="footer-top-block block-4">
								Footer Top Block #4
							</div>
			            </div>
		            </div>
            	</div><!-- .footer-statement -->
            	
	            <div class="footer-bottom">
		            <div class="footer-statement">
			            <div class="footer-statement-container">
				            <div class="footer-statement-row">
				            	<div class="footer-statement">
									<h2><?php the_field('footer_statement', 'option'); ?></h2>
				            	</div><!-- .footer-statement -->
				            </div>
			            </div>
		            </div>
	            	<div class="footer-bottom-container">
			            <div class="footer-bottom-row">
	            	
		        		<div class="footer-address">
		            		<p>P - <?php the_field('footer_address_phone', 'option'); ?><br />
		            		F - <?php the_field('footer_address_phone', 'option'); ?><br />
		            		E - <a href="mailto:<?php the_field('footer_address_email', 'option'); ?>"><?php the_field('footer_address_email', 'option'); ?></a></p>
		        		</div>
		        		<div class="footer-hours">
		            		<p><?php the_field('footer_hours', 'option'); ?></p>
		        		</div>            	
		            	<div class="footer-copyright">
			            	<p><?php the_field('footer_copyright', 'option'); ?></p>
		            	</div>
            		</div>	
		        </div>
            </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>