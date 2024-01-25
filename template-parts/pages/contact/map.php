<?php
$location = get_field( 'map' );
if ( $location ) : ?>
	<section class="map">
		<div class="acf-map map-contacts" data-zoom="12">
			<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
		</div>
	</section>
	<?php
endif;
