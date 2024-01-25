<?php
/**
 * Template Name: Home Template
 */

get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/pages/home/hero' );
get_template_part( 'template-parts/pages/home/intro' );
get_template_part( 'template-parts/pages/home/teasers' );
do_action( 'after_main_content' );
get_footer();
