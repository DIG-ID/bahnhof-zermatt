<?php
$hero_img = get_field( 'hero_section_background_image' );
if ( $hero_img ) :
	//echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[980px] xl:min-h-[760px]' ) );
endif;
?>
<section class="section-hero mt-[70px] mx-16 h-[85svh] overflow-hidden" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.05) ), url( <?php echo esc_url( wp_get_attachment_image_url( $hero_img, 'full' ) ); ?> );background-position: top; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
	<div class="bz-container h-full">
		<div class="flex flex-col items-center justify-end h-full">
			<div class="hero-content flex flex-col justify-between">
				<div class="hero-logo my-[10%]">
					<?php
					$image = get_field( 'hero_section_image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'my-1 mb-4 mx-auto' ) );
					endif;
					?>
					<p class="font-sans font-normal text-white text-8xl leading-[67px] uppercase text-center tracking-[7px] mb-6"><?php echo esc_html( get_field( 'hero_section_title' ) ); ?></p>
					<h1 class="font-serif font-normal text-white text-2xl leading-4 tracking-wider text-center"><?php echo esc_html( get_field( 'hero_section_description' ) ); ?></h1>
				</div>
				<div class="hero-content-bottom my-16">
					<?php
					$link_1 = get_field( 'hero_section_discount_button' );
					if ( $link_1 ) :
						$link_url    = $link_1['url'];
						$link_title  = $link_1['title'];
						$link_target = $link_1['target'] ? $link_1['target'] : '_self';
						?>
						<a class="block bg-[#333333] w-64 py-3 text-center font-serif text-white text-sm tracking-[0.08em] mx-auto mb-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php
					endif;
					$link_2 = get_field( 'hero_section_booking_button' );
					if ( $link_2 ) :
						$link_url    = $link_2['url'];
						$link_title  = $link_2['title'];
						$link_target = $link_2['target'] ? $link_2['target'] : '_self';
						?>
						<a class="block bg-orange-red w-64 py-3 text-center font-serif text-white text-sm tracking-[0.08em] italic uppercase mx-auto mb-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
						<?php
					endif;
					?>
					<p class="font-serif italic text-white text-sm tracking-widest text-center">→ <?php echo esc_html( get_field( 'hero_section_info' ) ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bz-container">
	<div class="flex justify-center items-center py-6">
		links
	</div>
</section>