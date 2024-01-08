<?php
/**
 * Template Name: About Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/about/intro' );
				get_template_part( 'template-parts/pages/about/hosts' );
				get_template_part( 'template-parts/pages/about/chef' );
				get_template_part( 'template-parts/modules/museum' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();