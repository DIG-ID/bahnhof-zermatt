<header id="header-main" class="header-main w-full fixed top-0 z-40 bg-white" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main w-full flex items-center py-8 xl:py-10" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="mega-menu-buttons md:px-8 absolute top-1/2 -translate-y-1/2 md:translate-y-0 left-8 md:top-0 md:left-0 md:relative leading-[0] xl:w-32">
			<button class="main-menu-toggle">
				<span class="bars">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</span>
				<span class="text hidden invisible xl:block xl:visible font-serif font-light text-xl uppercase tracking-[1.54px]"><?php esc_html_e( 'Menu', 'az' ); ?></span>
			</button>
		</div>
		<div class="menu relative w-full max-w-[1320px] mx-auto">
			<div class="site-branding absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
				<?php
				if ( is_front_page() ) :
					echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
				else :
					echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';
				endif;
				?>
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link"><?php do_action( 'theme_logo' ); ?></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'menu_id'        => 'menu-main-menu',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
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
