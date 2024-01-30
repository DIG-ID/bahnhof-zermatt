<section class="section-teasers mb-20 lg:mb-40 relative">
	<div class="bz-container">
		<?php
		if ( have_rows( 'teasers' ) ) :
			$counter = 0;
			?><div class="teaser-wrapper"><?php
			while ( have_rows( 'teasers' ) ) :
				the_row();
				$timage = get_sub_field( 'image' );

				if ( $counter % 2 === 0 ) :
					?>
					<div class="teaser-row grid grid-cols-1 md:grid-cols-2">
						<div class="teaser-card col-span-1 mb-8 lg:mb-0">
							<div class="teaser-content relative overflow-hidden">
								<figure>
									<?php echo wp_get_attachment_image( $timage, 'full', false, array( 'class' => 'mb-4' ) ); ?>
									<figcaption class="max-w-80 font-serif text-sm tracking-[0.035em]"><?php the_sub_field( 'description' ); ?></figcaption>
								</figure>
							</div>
						</div>
						<div class="col-span-1 hidden invisible md:block md:visible"></div>
					</div>
					<?php
				else :
					?>
					<div class="teaser-row grid-cols-1 grid md:grid-cols-2">
						<div class="col-span-1 hidden invisible md:block md:visible"></div>
						<div class="teaser-card col-span-1 mb-8 lg:mb-0">
							<div class="teaser-content relative overflow-hidden">
								<figure class="float-end">
									<?php echo wp_get_attachment_image( $timage, 'full', false, array( 'class' => 'mb-4' ) ); ?>
									<figcaption class="max-w-96 font-serif text-sm tracking-[0.035em]"><?php the_sub_field( 'description' ); ?></figcaption>
								</figure>
							</div>
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
