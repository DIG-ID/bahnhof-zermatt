<header class="page-header py-32">
	<div class="bz-container bz-grid justify-center">
		<div class="col-span-1 md:col-span-8 xl:col-span-10 xl:col-start-2">
			<h1 class="title text-center"><?php the_title(); ?></h1>
			<?php
			$introduction = get_field( 'page_introduction' );
			if ( ! empty( $introduction ) ) :
				echo '<p class="description text-center">' . wp_kses_post( $introduction ) . '</p>';
			endif;
			?>
		</div>
	</div>
</header>
