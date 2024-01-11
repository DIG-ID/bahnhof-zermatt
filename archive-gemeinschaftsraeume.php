<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/gemeinschaftsraeume/intro' );
get_template_part( 'template-parts/archives/gemeinschaftsraeume/loop' );
do_action( 'after_main_content' );
get_footer();
