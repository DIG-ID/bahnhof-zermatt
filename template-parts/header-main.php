<header id="header-main" class="header-main" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main w-full flex items-center justify-between lg:justify-center h-[70px] px-6" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="menu relative lg:w-full lg:max-w-[1320px] lg:mx-auto">

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-left',
					'menu_id'         => 'menu-main-menu-left',
					'container_class' => 'menu-left hidden invisible lg:block lg:visible',
					'menu_class'      => 'main-menu-top-level main-menu-top-level--left',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
			<div class="site-branding lg:absolute lg:left-1/2 top-1/2 lg:-translate-x-1/2 lg:-translate-y-1/2">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo' ); ?></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-right',
					'menu_id'         => 'menu-main-menu-right',
					'container_class' => 'menu-right  hidden invisible lg:block lg:visible',
					'menu_class'      => 'main-menu-top-level main-menu-top-level--right',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
		</div>
		<button class="mobile-menu-toggle">
			<span class="bars">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</span>
		</button>
		<?php
		if ( is_active_sidebar( 'header_ls' ) ) :
			dynamic_sidebar( 'header_ls' );
		endif;
		?>
	</nav>
	<div class="mobile-menu-wrapper">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'mobile-menu',
				'menu_id'         => 'mobile-menu-content',
				'container_class' => 'mobile-menu',
				'menu_class'      => 'mobile-menu-content',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'     => '__return_false',
			)
		);
		do_action( 'wpml_add_language_selector' );
		?>
	</div>
</header>
