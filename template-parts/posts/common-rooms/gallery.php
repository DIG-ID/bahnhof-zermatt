<section class="zimmer-gallery mb-10">
	<div class="bz-container">
		<div class="max-w-5xl mx-auto swiper gallery-swiper">
			<?php
			$gimages = get_field( 'gallery' );
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if ( $gimages ) :
				?>
				<div class="swiper-wrapper">
					<?php foreach( $gimages as $image_id ): ?>
						<div class="swiper-slide">
							<figure class="">
								<?php echo wp_get_attachment_image( $image_id, $size, false, array( 'class' => 'w-full h-auto object-cover max-h-[500px]' ) ); ?>
								<figcaption class="w-full text-center py-3 font-serif text-sm leading-[25px] tracking-widest">
									<!-- <div class="swiper-pagination"></div> --><?php echo wp_get_attachment_caption( $image_id ); ?>
								</figcaption>
							</figure>
						</div>
					<?php endforeach; ?>
				</div>
				<?php
			endif;
			?>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		</div>
	</div>
</section>