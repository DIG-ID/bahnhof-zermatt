<header class="page-header pt-28 pb-8 md:pt-32 md:pb-16">
	<div class="bz-container flex flex-col justify-center items-center">
		<h1 class="title text-center"><?php the_title(); ?></h1>
		<?php
		$introduction = get_field( 'page_introduction' );
		if ( ! empty( $introduction ) ) :
			echo '<p class="description text-center">' . wp_kses_post( $introduction ) . '</p>';
		endif;
		?>
	</div>
</header>
