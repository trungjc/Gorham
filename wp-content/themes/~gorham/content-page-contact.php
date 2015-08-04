<?php
/**
 * The template used for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	<header class="page-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
		
		<h2 class="contact-admin-contacts-header">Administrative Contacts</h2>
		<div class="contact-admin-contacts">
			<div class="contact-box contact-box-1">
				<div class="contact-box-inner">
					<h3 class="contact-box-name"><?php the_field('contact_box_1_name'); ?></h3>
					<h4 class="contact-box-title"><?php the_field('contact_box_1_title'); ?></h4>
					<ul>
						<li class="contact-box-address"><?php the_field('contact_box_1_address'); ?></li>
						<li class="contact-box-phone"><?php the_field('contact_box_1_phone'); ?></li>
						<li class="contact-box-email last"><a href="<?php the_field('contact_box_1_email'); ?>"><?php the_field('contact_box_1_email'); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="contact-box contact-box-2">
				<div class="contact-box-inner">
					<h3 class="contact-box-name"><?php the_field('contact_box_2_name'); ?></h3>
					<h4 class="contact-box-title"><?php the_field('contact_box_2_title'); ?></h4>
					<ul>
						<li class="contact-box-address"><?php the_field('contact_box_2_address'); ?></li>
						<li class="contact-box-phone"><?php the_field('contact_box_2_phone'); ?></li>
						<li class="contact-box-email last"><a href="<?php the_field('contact_box_2_email'); ?>"><?php the_field('contact_box_2_email'); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="contact-box contact-box-3">
				<div class="contact-box-inner">
					<h3 class="contact-box-name"><?php the_field('contact_box_3_name'); ?></h3>
					<h4 class="contact-box-title"><?php the_field('contact_box_3_title'); ?></h4>
					<ul>
						<li class="contact-box-address"><?php the_field('contact_box_3_address'); ?></li>
						<li class="contact-box-phone"><?php the_field('contact_box_3_phone'); ?></li>
						<li class="contact-box-email last"><a href="<?php the_field('contact_box_3_email'); ?>"><?php the_field('contact_box_3_email'); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<h2 class="contact-office-hours"><?php the_field('office_hours'); ?></h2>
		
		<h2 class="contact-centre-contacts-header">Centre Contacts</h2>
		
		<div class="contact-centre-contacts">
			
			<div class="centre-contact-box centre-contact-box-1">
				<div class="contact-box-inner">
					<div class="centre-contact-box-location">
						<?php 
						
						$location = get_field('centre_contact_1_location_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>					
					</div>
					<div class="centre-contact-box-details">
						<h3 class="centre-contact-box-title"><?php the_field('centre_contact_1_title'); ?></h3>
						<ul>
							<li class="centre-contact-box-address"><?php the_field('centre_contact_1_address'); ?></li>
							<li class="centre-contact-box-phone"><?php the_field('centre_contact_1_phone'); ?></li>
							<li class="centre-contact-box-email last"><a href="<?php the_field('centre_contact_1_email'); ?>"><?php the_field('centre_contact_1_email'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="centre-contact-box centre-contact-box-2">
				<div class="contact-box-inner">
					<div class="centre-contact-box-location">
						<?php 
						
						$location = get_field('centre_contact_2_location_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>											
					</div>
					<div class="centre-contact-box-details">
						<h3 class="centre-contact-box-title"><?php the_field('centre_contact_2_title'); ?></h3>
						<ul>
							<li class="centre-contact-box-address"><?php the_field('centre_contact_2_address'); ?></li>
							<li class="centre-contact-box-phone"><?php the_field('centre_contact_2_phone'); ?></li>
							<li class="centre-contact-box-email last"><a href="<?php the_field('centre_contact_2_email'); ?>"><?php the_field('centre_contact_2_email'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="centre-contact-box centre-contact-box-3">
				<div class="contact-box-inner">
					<div class="centre-contact-box-location">
						<?php 
						
						$location = get_field('centre_contact_3_location_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>											
					</div>
					<div class="centre-contact-box-details">
						<h3 class="centre-contact-box-title"><?php the_field('centre_contact_3_title'); ?></h3>
						<ul>
							<li class="centre-contact-box-address"><?php the_field('centre_contact_3_address'); ?></li>
							<li class="centre-contact-box-phone"><?php the_field('centre_contact_3_phone'); ?></li>
							<li class="centre-contact-box-email last"><a href="<?php the_field('centre_contact_3_email'); ?>"><?php the_field('centre_contact_3_email'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="centre-contact-box centre-contact-box-4">
				<div class="contact-box-inner">
					<div class="centre-contact-box-location">
						<?php 
						
						$location = get_field('centre_contact_4_location_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>					
					</div>
					<div class="centre-contact-box-details">
						<h3 class="centre-contact-box-title"><?php the_field('centre_contact_4_title'); ?></h3>
						<ul>
							<li class="centre-contact-box-address"><?php the_field('centre_contact_4_address'); ?></li>
							<li class="centre-contact-box-phone"><?php the_field('centre_contact_4_phone'); ?></li>
							<li class="centre-contact-box-email last"><a href="<?php the_field('centre_contact_4_email'); ?>"><?php the_field('centre_contact_4_email'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="centre-contact-box  centre-contact-box-5">
				<div class="contact-box-inner">
					<div class="centre-contact-box-location">
						<?php 
						
						$location = get_field('centre_contact_5_location_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>					
					</div>
					<div class="centre-contact-box-details">
						<h3 class="centre-contact-box-title"><?php the_field('centre_contact_5_title'); ?></h3>
						<ul>
							<li class="centre-contact-box-address"><?php the_field('centre_contact_5_address'); ?></li>
							<li class="centre-contact-box-phone"><?php the_field('centre_contact_5_phone'); ?></li>
							<li class="centre-contact-box-email last"><a href="<?php the_field('centre_contact_5_email'); ?>"><?php the_field('centre_contact_5_email'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="centre-contact-box centre-contact-box-6">
				<div class="contact-box-inner">
					<div class="centre-contact-box-location">
						<?php 
						
						$location = get_field('centre_contact_6_location_map');
						
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>					
					</div>
					<div class="centre-contact-box-details">
						<h3 class="centre-contact-box-title"><?php the_field('centre_contact_6_title'); ?></h3>
						<ul>
							<li class="centre-contact-box-address"><?php the_field('centre_contact_6_address'); ?></li>
							<li class="centre-contact-box-phone"><?php the_field('centre_contact_6_phone'); ?></li>
							<li class="centre-contact-box-email last"><a href="<?php the_field('centre_contact_6_email'); ?>"><?php the_field('centre_contact_6_email'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
		
		
		<h2 class="contact-centre-form-header">Drop Us a Line</h2>
		<div id="contact-centre-form">
			<?php echo do_shortcode( '[contact-form-7 id="228" title="Contact form 1"]' ); ?>
		</div>
		
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
		scrollwheel     : false,
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>