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
				<a class="font-serif text-lg leading-8 tracking-[0.006em] lg:text-xl lg:leading-9 lg:tracking-[0.035em] border-b-2 border-b-transparent transition-all duration-200 ease-in-out hover:text-orange-red hover:border-b-orange-red" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$cablink = get_field( 'directions_cab' );
			if ( $cablink ) :
				$link_url    = $cablink['url'];
				$link_title  = $cablink['title'];
				$link_target = $cablink['target'] ? $cablink['target'] : '_self';
				?>
				<a class="font-serif text-lg leading-8 tracking-[0.006em] lg:text-xl lg:leading-9 lg:tracking-[0.035em] border-b-2 border-b-transparent transition-all duration-200 ease-in-out hover:text-orange-red hover:border-b-orange-red" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$trainlink = get_field( 'directions_train' );
			if ( $trainlink ) :
				$link_url    = $trainlink['url'];
				$link_title  = $trainlink['title'];
				$link_target = $trainlink['target'] ? $trainlink['target'] : '_self';
				?>
				<a class="font-serif text-lg leading-8 tracking-[0.006em] lg:text-xl lg:leading-9 lg:tracking-[0.035em] border-b-2 border-b-transparent transition-all duration-200 ease-in-out hover:text-orange-red hover:border-b-orange-red" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">→ <?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>
