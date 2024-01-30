<section class="content">
	<div class="bz-container text-center">
		<figure class="mb-10">
			<?php
			$cimage = get_field( 'intro_image_image' );
			if ( $cimage ) :
				echo wp_get_attachment_image( $cimage, 'full', false, array( 'class' => 'max-w-full mx-auto' ) );
			endif;
			?>
			<figcaption class="font-serif text-sm tracking-[0.035em] py-2"><?php the_field( 'intro_image_description' ); ?></figcaption>
		</figure>
		<p class="description !mb-0"><?php the_field( 'contacts_address' ); ?></p>
		<p class="description !mb-0"><?php esc_html_e( 'Phone ', 'bz' ); ?><?php the_field( 'contacts_phone' ); ?></p>
		<p class="description !mb-0"><?php the_field( 'contacts_email' ); ?></p>

		<p class="description !mb-0 mt-10"><?php the_field( 'contacts_schedule' ); ?></p>
	</div>
</section>