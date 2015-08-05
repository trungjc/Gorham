<?php
/**
 * The template used for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	
	<?php /*
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	*/ ?>
	
	<div id="apartment-content-top">
		<div id="apartment-content-top-left">
			<?php 
			$images = get_field('apartment_details_images'); 
			$image_1 = $images[0]; 
			?>    
			
			<a href="<?php echo $image_1['url']; ?>"><img src="<?php echo $image_1['url']; ?>" /></a>


		</div>
		<div id="apartment-content-top-right">
			<?php the_field('apartment_details_unit_name'); ?>
			<?php the_field('apartment_details_address'); ?>
			<?php the_field('apartment_details_contact'); ?>
			<?php the_field('apartment_details_email'); ?>
			<?php the_field('apartment_details_status'); ?>
		</div>
	</div>
	<div id="apartment-content-description">	
		<?php the_field('apartment_details_description'); ?>
	</div>
	<div id="apartment-content-details">
		<div id="apartment-content-details-left">
			<table class="table-striped">
				<tbody>
					<tr>
						<td class="td-label">Rent:</td>
						<td><?php the_field('apartment_details_rent'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Floor/Level:</td>
						<td><?php the_field('apartment_details_floorlevel'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Bedrooms:</td>
						<td><?php the_field('apartment_details_bedroooms'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Bathrooms:</td>
						<td><?php the_field('apartment_details_bathrooms'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Appliances:</td>
						<td><?php the_field('apartment_details_appliances'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Laundry:</td>
						<td><?php the_field('apartment_details_laundry'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Heat Type:</td>
						<td><?php the_field('apartment_details_heat_type'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Pets:</td>
						<td><?php the_field('apartment_details_pets'); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="apartment-content-details-right">
			<table class="table-striped">
				<tbody>
					<tr>
						<td class="td-label">Utilities:</td>
						<td><?php the_field('apartment_details_utilities'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Indoor Features:</td>
						<td><?php the_field('apartment_details_indoor_features'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Outdoor Features:</td>
						<td><?php the_field('apartment_details_outdoor_features'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Parking:</td>
						<td><?php the_field('apartment_details_parking'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Lease:</td>
						<td><?php the_field('apartment_details_lease'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Security Deposit:</td>
						<td><?php the_field('apartment_details_security_deposit'); ?></td>
					</tr>
					<tr>
						<td class="td-label">Availability:</td>
						<td><?php the_field('apartment_details_availability'); ?></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
	<div class="apartment-content-gallery">
		<?php 

		$images = get_field('apartment_details_images');
		
		if( $images ): ?>
		    <ul>
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <a href="<?php echo $image['url']; ?>">
		                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
	</div>
	
	<div class="link-print">
		<a href="javascript:window.print()">Click to print</a>
	</div>

	</div><!-- .entry-content -->

	<?php /*
	<footer class="entry-footer">
		<?php gorham_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	*/ ?>
	
</article><!-- #post-## -->
