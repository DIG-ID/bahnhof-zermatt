<sections class="zimmer-buttons">
	<div class="bz-container">
		<div class="max-w-5xl mx-auto flex flex-col justify-center items-center gap-4">
			<?php
			$blink = get_field( 'booking_link' );
			if ( $blink ) :
				?>
				<a class="btn--book" href="<?php echo esc_url( $blink ); ?>" target=_blank"><?php esc_html_e( '→ Book your vacation', 'bz' ); ?></a>
				<?php
			endif;
			?>
			<a class="btn--back" href="<?php echo esc_url( get_post_type_archive_link( 'zimmer' ) ); ?>"><?php esc_html_e( '← Overview', 'bz' ); ?></a>
		</div>
	</div>
</sections>
