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
                                <div class="footer-top-block-inner"> 
                                    <div class="footer-block-img" style="background-image:url('<?php the_field('footer_block_1_image', 'option'); ?>')" >&nbsp;</div>
                                    <a href="<?php the_field('footer_block_1_link', 'option'); ?>">
                                        <?php the_field('footer_block_1_text', 'option'); ?>
                                    </a>
                                </div>								
							</div>
							<div class="footer-top-block block-2">
								<div class="footer-top-block-inner">
                                    <div class="footer-block-img"  style="background-image:url('<?php the_field('footer_block_2_image', 'option'); ?>')" >&nbsp;</div>
                                    <a href="<?php the_field('footer_block_2_link', 'option'); ?>">
                                        <?php the_field('footer_block_2_text', 'option'); ?>
                                    </a>
                                </div>	
							</div>
							<div class="footer-top-block block-3">
								<div class="footer-top-block-inner">
                                    <div class="footer-block-img"  style="background-image:url('<?php the_field('footer_block_3_image', 'option'); ?>')" >&nbsp;</div>
                                     <a href="<?php the_field('footer_block_3_link', 'option'); ?>">
                                        <?php the_field('footer_block_3_text', 'option'); ?>
                                    </a>
                                </div>	
							</div>
							<div class="footer-top-block block-4">
								<div class="footer-top-block-inner">
                                    <div class="footer-block-img"  style="background-image:url('<?php the_field('footer_block_4_image', 'option'); ?>')" >&nbsp;</div>
                                    <a href="<?php the_field('footer_block_4_link', 'option'); ?>">
                                        <?php the_field('footer_block_4_text', 'option'); ?>
                                    </a>
                                </div>	
							</div>
			            </div>
		            </div>
            	</div><!-- .footer-top -->
            	
	            <div class="footer-bottom">
                    <div class="footer-statement">
                        <div class="footer-bottom-container">
                            <div class="footer-bottom-row">
                                <h2><?php the_field('footer_statement', 'option'); ?></h2>
                            </div>
                        </div>								
				    </div><!-- .footer-statement -->
	            	<div class="footer-bottom-container">
                        <span class="footer-logo"></span>
			            <div class="footer-bottom-row">         	
			        		<div class="footer-address">
                                <h3>CONTACT</h3>
			            		<p>P - <?php the_field('footer_address_phone', 'option'); ?><br />
			            		F - <?php the_field('footer_address_phone', 'option'); ?><br />
			            		E - <a href="mailto:<?php the_field('footer_address_email', 'option'); ?>"><?php the_field('footer_address_email', 'option'); ?></a></p>
			        		</div>
			        		<div class="footer-hours">
                                <h3>Hours</h3>
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