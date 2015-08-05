<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gorham
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<div id="main-content" class="content-area" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Available Apartments</h1>
			</header><!-- .page-header -->
			
			
			<div class="section-bedrooms section-bedrooms-1">
				<h2>1 Bedroom</h2>
				<table class="table-striped">
					<thead>
						<tr>
							<td>Address</td>
							<td>Unit #</td>
							<td>Rent</td>
							<td>Util. Inc.</td>
							<td>Pets</td>
							<td>Availability</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<div class="section-bedrooms section-bedrooms-2">
				<h2>2 Bedroom</h2>
				<table class="table-striped">
					<thead>
						<tr>
							<td>Address</td>
							<td>Unit #</td>
							<td>Rent</td>
							<td>Util. Inc.</td>
							<td>Pets</td>
							<td>Availability</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<div class="section-bedrooms section-bedrooms-3">
				<h2>3 Bedroom</h2>
				<table class="table-striped">
					<thead>
						<tr>
							<td>Address</td>
							<td>Unit #</td>
							<td>Rent</td>
							<td>Util. Inc.</td>
							<td>Pets</td>
							<td>Availability</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			
			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
