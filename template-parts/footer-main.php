<footer class="footer-main bg-neutral-100">
	<div class="bz-container grid grid-cols-3 gap-4">
		<div class="col-span-3 md:col-span-1 text-center">
			<h3 class="title-footer"><?php esc_html_e( 'Kontakt', 'az' ); ?></h3>
			<p class="text-footer"><?php //the_field( 'contacts_text', 'options' ); ?></p>
		</div>
		<div class="col-span-3 md:col-span-1 text-center">
			<div class="flex flex-col">
				<a class="text-footer--link" href="tel:<?php //the_field( 'contacts_phone', 'options' ); ?>"><?php //the_field( 'contacts_phone', 'options' ); ?>tel</a>
				<a class="text-footer--link" href="mailto:<?php //the_field( 'contacts_email', 'options' ); ?>"><?php //the_field( 'contacts_email', 'options' ); ?>mail</a>
			</div>
		</div>
		<div class="col-span-3 md:col-span-1 text-center">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-stay',
					'container'      => false,
					'menu_class'     => 'footer-menu-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
	</div>

	<div class="bz-grid bz-container">
		<div class="col-span-1 md:col-span-8 xl:col-span-12 flex justify-center items-center">
			<div class="copy-info flex flex-col xl:flex-row order-2 xl:order-1">
				<p class="text-footer !text-xs xl:!text-sm text-center xl:text-right mr-0 xl:mr-4">
					<?php
					$y = gmdate( 'Y' );
					printf(
						esc_html__( 'Urheberrecht &copy; %d Hotel Bahnhhof Zermatt', 'bz' ),
						esc_html( $y )
					);
					?>
				</p>
				<p class="text-footer !text-xs xl:!text-sm text-center xl:text-right">
					<?php
					printf(
						__( 'Developed by: <a href="%s">dig.id</a>', 'az' ),
						esc_url( 'https://dig.id' )
					);
					?>
				</p>
			</div>
		</div>
	</div>

</footer>