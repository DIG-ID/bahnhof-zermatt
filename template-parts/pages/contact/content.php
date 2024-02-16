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
		<p class="description !mb-0"><?php esc_html_e( 'Phone ', 'bz' ); ?><a class="transition-all duration-300 ease-in-out hover:underline hover:opacity-70" href="tel:<?php echo esc_attr( get_field( 'contacts_phone' ) ); ?>"><?php the_field( 'contacts_phone' ); ?></a></p>
		<p class="description !mb-0"><a class="transition-all duration-300 ease-in-out hover:underline hover:opacity-70" href="mailto:<?php echo esc_attr( get_field( 'contacts_email' ) ); ?>"><?php the_field( 'contacts_email' ); ?></a></p>

		<p class="description !mb-0 mt-10"><?php the_field( 'contacts_schedule' ); ?></p>
	</div>
</section>