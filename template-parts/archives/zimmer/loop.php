<?php
$args = array(
	'post_type'      => 'zimmer',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
);

$custom_query = new WP_Query( $args );

if ( $custom_query->have_posts() ) :
	?><div class="bz-container bz-grid mb-32"><?php
	while ( $custom_query->have_posts() ) :
		$custom_query->the_post();
		get_template_part( 'template-parts/components/card' );
	endwhile;
	wp_reset_postdata();
	?></div><?php
endif;
