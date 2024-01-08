<?php
/**
 * Template Name: Stay Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/stay/intro' );
				get_template_part( 'template-parts/pages/stay/rooms' );
				get_template_part( 'template-parts/modules/teaser-box-double', null, array( 'paddings' => 'pt-24 xl:pt-44', ) );
				get_template_part( 'template-parts/pages/stay/seminare' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();