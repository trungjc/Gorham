<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php html_tag_schema(); ?>>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gorham' ); ?></a>

		<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
			<div class="header-container">
				<div class="header-row site-header-inner">
						<div class="site-branding">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2015/08/gorham-logo.png" alt="Gorham Real Estate" class="header-logo" /></a>
						</div><!-- .site-branding -->
						<nav class="site-navigation main-navigation navbar-collapse collapse navbar-responsive-collapse" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
							<div class="site-navigation-inner">
								<div class="navbar navbar-default">
						            	<?php gorham_main_nav(); ?>								
								</div><!-- .navbar -->
							</div><!-- .site-navigation-inner -->
						</nav><!-- .site-navigation -->
						
						<nav class="mobile-navigation" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<div id="dl-menu" class="dl-menuwrapper" >
								<button class="dl-trigger navbar-toggle">Open Menu</button>
								<?php // gorham_mobile_main_nav(); ?>
							</div><!-- /dl-menuwrapper -->
						</nav>
						
				</div><!-- .row -->
			</div><!-- .container -->
		</header><!-- #masthead -->


		<div id="content" class="site-content">
			<div class="container">
				<div class="row">
