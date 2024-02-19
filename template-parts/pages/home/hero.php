<?php
$hero_img = get_field( 'hero_section_background_image' );
if ( $hero_img ) :
	//echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[980px] xl:min-h-[760px]' ) );
endif;
?>
<section class="section-hero mt-[70px] mx-4 lg:mx-16 h-[65svh] lg:h-[85svh] overflow-hidden" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.05) ), url( <?php echo esc_url( wp_get_attachment_image_url( $hero_img, 'full' ) ); ?> );">
	<div class="bz-container h-full">
		<div class="flex flex-col items-center justify-end h-full">
			<div class="hero-content flex flex-col justify-between">
				<div class="hero-logo my-[10%]">
					<?php
					$image = get_field( 'hero_section_image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'my-1 mb-4 mx-auto max-w-[140px] lg:max-w-full' ) );
					endif;
					?>
					<p class="font-sans font-normal text-white text-[59px] leading-[67px] tracking-[0.06em] lg:text-8xl lg:leading-[67px] uppercase text-center lg:tracking-[7px] lg:mb-6"><?php echo esc_html( get_field( 'hero_section_title' ) ); ?></p>
					<h1 class="font-serif font-normal text-white text-sm lg:text-2xl leading-4 tracking-wider text-center"><?php echo esc_html( get_field( 'hero_section_description' ) ); ?></h1>
				</div>
				<div class="hero-content-bottom my-16">
					<?php
					$link_1 = get_field( 'hero_section_discount_button' );
					if ( $link_1 ) :
						?>
						<a class="block bg-[#333333] w-64 py-3 text-center font-serif text-white text-sm tracking-[0.08em] mx-auto mb-4" href="<?php echo esc_url( get_field( 'hero_section_discount_button_link' ) ); ?>" target="_blank"><?php echo wp_kses_post( get_field( 'hero_section_discount_button_text' ) ); ?></a>
						<?php
					endif;
					$link_2 = get_field( 'hero_section_booking_button' );
					if ( $link_2 ) :
						$link_url    = $link_2['url'];
						$link_title  = $link_2['title'];
						$link_target = $link_2['target'] ? $link_2['target'] : '_self';
						?>
						<a class=" bg-orange-red w-64 py-3 text-center font-italic text-white text-sm tracking-[0.08em] uppercase mx-auto mb-4 transition-all duration-200 ease-in-out hover:bg-white hover:text-orange-red hidden invisible lg:block lg:visible" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
						<?php
					endif;
					?>
					<p class="font-italic text-white text-sm tracking-widest text-center">→ <?php echo esc_html( get_field( 'hero_section_info' ) ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bz-container lg:justify-center lg:items-center py-6 hidden invisible lg:flex lg:visible">
	<?php do_action( 'socials' ); ?>
</section>
<div class="bz-containter mx-4 lg:mx-16 py-6 text-center lg:hidden lg:invisible">
<?php
if ( $link_2 ) :
	$link_url    = $link_2['url'];
	$link_title  = $link_2['title'];
	$link_target = $link_2['target'] ? $link_2['target'] : '_self';
	?>
	<a class="block bg-orange-red w-full py-3 text-center font-italic text-white text-sm tracking-[0.08em] uppercase mx-auto mb-4 transition-all duration-200 ease-in-out hover:bg-white hover:text-orange-red " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
	<?php
endif;
?>
</div>
