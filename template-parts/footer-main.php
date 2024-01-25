<footer class="footer-main bg-neutral-100">
	<div class="bz-container grid grid-cols-3 gap-4 py-12">
		<div class="col-span-3 md:col-span-1 text-center">
			<p class="text-footer"><?php the_field( 'footer_address', 'options' ); ?></p>
			<?php
			$google_link = get_field( 'footer_google_maps_url', 'options' );
			if ( $google_link ) :
				$link_url    = $google_link['url'];
				$link_title  = $google_link['title'];
				$link_target = $google_link['target'] ? $google_link['target'] : '_self';
				?>
				<a class="text-footer--link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
		<div class="col-span-3 md:col-span-1 text-center">
			<p class="text-footer">
				<a class="text-footer--link" href="tel:<?php the_field( 'footer_phone', 'options' ); ?>"><?php the_field( 'footer_phone', 'options' ); ?></a>
				<a class="text-footer--link" href="mailto:<?php the_field( 'footer_email', 'options' ); ?>"><?php the_field( 'footer_email', 'options' ); ?></a>
			</p>
		</div>
		<div class="col-span-3 md:col-span-1 text-center">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer',
					'container'      => false,
					'menu_class'     => 'footer-menu-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
	</div>

	<div class="bz-container flex justify-center items-center pb-12">
		<?php do_action( 'socials' ); ?>
	</div>

	<!-- <div class="bz-grid bz-container">
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
	</div> -->

</footer>