<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="section-error-404 not-found py-64">
	<div class="bz-container">
		<div class="flex flex-col text-center justify-center items-center">
			<h1 class="title !mb-4"><?php esc_html_e( '404 - Nichts gefunden', 'bz' ); ?></h1>
			<p class="description"><?php esc_html_e( 'Ups... es scheint, als ob Sie sich in den Bergen verirrt haben.', 'bz' ); ?></p>
			<a href="<?php echo esc_url( get_home_url() ); ?>" class="btn"><?php esc_html_e( '← Zurück zur Webseite', 'bz' ); ?></a>
		</div>
	</div>
</section>
<?php
do_action( 'after_main_content' );
get_footer();
