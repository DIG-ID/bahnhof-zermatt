<section class="section-partners mb-40">
	<div class="bz-container">
		<h2 class="title py-6 lg:py-12 text-center"><?php esc_html_e( 'Partner', 'bz' ); ?></h2>
		<div class="grid gird-cols-1 md:grid-cols-3 gap-x-9">
			<?php
			if ( have_rows( 'partners' ) ) :
				while ( have_rows( 'partners' ) ) :
					the_row();
					?>
					<div class="partner col-span-1 text-center flex justify-center items-center">
						<a href="<?php echo esc_url( get_sub_field( 'link' ) ); ?>" target="_blank" rel="noopener noreferrer">
							<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'max-w-full object-cover' ) ); ?>
						</a>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
