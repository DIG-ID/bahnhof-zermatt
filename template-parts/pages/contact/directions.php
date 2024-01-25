<section class="directions mb-40">
	<div class="bz-container text-center">
		<h2 class="title"><?php the_field( 'directions_title' ); ?></h2>
		<p class="description"><?php the_field( 'directions_description' ); ?></p>
		<div class="arrivel-buttons flex flex-col justify-center items-center">
			<?php
			$carlink = get_field( 'directions_car' );
			if ( $carlink ) :
				$link_url    = $carlink['url'];
				$link_title  = $carlink['title'];
				$link_target = $carlink['target'] ? $carlink['target'] : '_self';
				?>
				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$cablink = get_field( 'directions_car' );
			if ( $cablink ) :
				$link_url    = $cablink['url'];
				$link_title  = $cablink['title'];
				$link_target = $cablink['target'] ? $cablink['target'] : '_self';
				?>
				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$trainlink = get_field( 'directions_car' );
			if ( $trainlink ) :
				$link_url    = $trainlink['url'];
				$link_title  = $trainlink['title'];
				$link_target = $trainlink['target'] ? $trainlink['target'] : '_self';
				?>
				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
