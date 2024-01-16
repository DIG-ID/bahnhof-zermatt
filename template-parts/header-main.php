<header id="header-main" class="header-main w-full top-0 fixed z-40 bg-white" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main w-full flex items-center h-[70px]" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="mega-menu-buttons md:px-8 absolute top-1/2 -translate-y-1/2 md:translate-y-0 left-8 md:top-0 md:left-0 md:relative leading-[0] xl:w-32 hidden invisible">
			<button class="main-menu-toggle">
				<span class="bars">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</span>
			</button>
		</div>
		<div class="menu relative w-full max-w-[1320px] mx-auto">

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-left',
					'menu_id'         => 'menu-main-menu-left',
					'container_class' => 'menu-left',
					'menu_class'      => 'main-menu-top-level main-menu-top-level--left',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
			<div class="site-branding absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo' ); ?></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-right',
					'menu_id'         => 'menu-main-menu-right',
					'container_class' => 'menu-right',
					'menu_class'      => 'main-menu-top-level main-menu-top-level--right',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			?>
		</div>
		<?php
		if ( is_active_sidebar( 'header_ls' ) ) :
			dynamic_sidebar( 'header_ls' );
		endif;
		?>
	</nav>
	<?php //get_template_part( 'template-parts/mega-menu' ); ?>
</header>
