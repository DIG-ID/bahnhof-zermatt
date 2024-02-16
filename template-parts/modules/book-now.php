<div class="fixed-booking-button-wrapper fixed -right-[32px] top-1/2 -translate-y-1/2 lg:flex-col gap-y-20 items-center justify-center hidden invisible lg:flex lg:visible w-32">
	<?php
	if ( get_field( 'book_button_discount', 'option' ) ) :
		?>
		<div class="discount-badge">
			<span class="font-serif text-white text-[12px] leading-[12px] uppercase break-words text-center"><?php the_field( 'book_button_discount_amount', 'option' ); ?></span>
		</div>
		<?php
	endif;
	?>
	<button class="fixed-book-button text-sm leading-[18px] tracking-widest uppercase border-b-2 border-black transition-all duration-300 ease-in-out hover:text-orange-red hover:border-b-orange-red rotate-90"><?php esc_html_e( 'Book Now', 'bz' ); ?></button>
</div>
<div class="fixed-booking-container fixed right-16 top-1/2 -translate-y-1/2  bg-white max-w-[300px] drop-shadow-md" style="display: none;" >
	<div class="relative p-6">
		<button class="closeButton absolute top-2 right-2">
			<svg xmlns="http://www.w3.org/2000/svg" class="max-h-4 transition-all duration-300 ease-in-out opacity-40 hover:opacity-100" x="0px" y="0px" width="16" height="16" viewBox="0 0 30 30">
				<path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z"></path>
			</svg>
		</button>
		<?php
		$lang = apply_filters('wpml_current_language', null);
		if ( $lang === 'en' ) :
			echo '<div id="sb-container-modal"></div>';
		else :
			echo '<div id="sb-container"></div>';
		endif;
		?>
		<p class="font-italic text-sm tracking-widest text-center mt-4">→ <?php esc_html_e( 'Exklusive room selection', 'bz' ); ?></p>
	</div>
</div>
