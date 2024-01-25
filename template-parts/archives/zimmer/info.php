<?php
if ( have_rows( 'zimmer_additional_information_information_items', 'option' ) ) :
	?>
	<section class="information mb-16">
		<div class="bz-container flex flex-col justify-center items-center">

			<button class="info-button closed">
				<?php esc_html_e( 'Infos', 'bz' ); ?>
				<div class="info-button-icon"></div>
			</button>

			<div class="info-content hidden">
				<ul class="info-list mb-16">
					<?php
					while ( have_rows( 'zimmer_additional_information_information_items', 'option' ) ) :
						the_row();
						echo '<li>' . esc_html( get_sub_field( 'info_item' ) ) . '</li>';
					endwhile;
					?>
				</ul>
			</div>
		</div>
	</section>
	<?php
endif;
