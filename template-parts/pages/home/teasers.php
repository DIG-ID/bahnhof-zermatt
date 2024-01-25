<section class="section-teasers mb-40 relative">
	<?php
	$paraimage = get_field( 'parallax_background' );
	if ( $paraimage ) {
		echo wp_get_attachment_image( $paraimage, 'full', false, array( 'class' => 'parallax-bg w-full h-auto absolute top-0 left-0 scale-125 -z-[2]' ) );
	}
	?>
	<div class="bz-container">
		<?php
		if ( have_rows( 'teasers' ) ) :
			$counter = 0;
			?><div class="teaser-wrapper"><?php
			while ( have_rows( 'teasers' ) ) :
				the_row();
				$ttitle = get_sub_field( 'title' );
				$tlink  = get_sub_field( 'link' );
				$timage = get_sub_field( 'image' );

				if ( $counter % 2 === 0 ) :
					?>
					<div class="teaser-row grid grid-cols-2">
						<div class="teaser-card col-span-1">
							<a href="<?php echo esc_url( $tlink ); ?>" class="block">
								<div class="teaser-content relative overflow-hidden">
									<?php echo wp_get_attachment_image( $timage, 'full', false, array( 'class' => 'w-full max-w-full object-cover' ) ); ?>
									<h2 class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 font-sans text-[80px] leading-[80px] tracking-[2px] text-white uppercase text-center"><?php echo esc_html( $ttitle ); ?></h2>
								</div>
							</a>
						</div>
						<div class="col-span-1"></div>
					</div>
					<?php
				else :
					?>
					<div class="teaser-row grid grid-cols-2">
						<div class="col-span-1"></div>
						<div class="teaser-card col-span-1">
							<a href="<?php echo esc_url( $tlink ); ?>" class="block">
								<div class="teaser-content relative overflow-hidden">
									<?php echo wp_get_attachment_image( $timage, 'full', false, array( 'class' => 'w-full max-w-full object-cover' ) ); ?>
									<h2 class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 font-sans text-[80px] leading-[80px] tracking-[2px] text-white uppercase text-center"><?php echo esc_html( $ttitle ); ?></h2>
								</div>
							</a>
						</div>
					</div>
					<?php
				endif;
				$counter++;
			endwhile;
			?></div><?php
		endif;
		?>
	</div>
</section>
