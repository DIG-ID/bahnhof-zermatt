<?php
$hero_img = get_field( 'hero_section_background_image' );
if ( $hero_img ) :
	//echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[980px] xl:min-h-[760px]' ) );
endif;
?>
<section class="section-hero mt-[70px] mx-16 h-[85svh] overflow-hidden" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.05) ), url( <?php echo esc_url( wp_get_attachment_image_url( $hero_img, 'full' ) ); ?> );background-position: top; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
	<div class="bz-container h-full">
			<div class="flex flex-col items-center justify-center h-full">
				<button>adasda</button>
				<button>adasda</button>
				<p>Lorem ipsum dolor sit.</p>
			</div>
	</div>
</section>
