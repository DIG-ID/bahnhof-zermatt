<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/zimmer/intro' );
get_template_part( 'template-parts/archives/zimmer/info' );
get_template_part( 'template-parts/archives/zimmer/loop' );
do_action( 'after_main_content' );
get_footer();
