<?php
/**
 * Undocumented function
 *
 * @param [array] $args The query args.
 * @param [array] $field The field array containing all settings.
 * @return void
 */
function my_acf_fields_taxonomy_query( $args, $field ) {
		// Order by most used.
		$args['orderby'] = 'count';
		$args['order'] = 'DESC';
		return $args;
}

//add_filter( 'acf/fields/taxonomy/wp_list_categories/key={$amenities}', 'my_acf_fields_taxonomy_query', 10, 2 );


$aterms = get_field( 'amenities' );
if ( $aterms ) :
	?>
	<section class="zimmer-amenities mb-16">
		<div class="bz-container">
			<div class="max-w-5xl mx-auto flex flex-col justify-center items-center">
				<?php
				if ( get_field( 'room_or_dorm' ) === 'room' ) :
					?><h2 class="font-serif text-sm leading-[25px] tracking-widest text-center mb-5"><?php esc_html_e( 'These rooms offers:', 'bz' ); ?></h2><?php
				else :
					?><h2 class="font-serif text-sm leading-[25px] tracking-widest text-center mb-5"><?php esc_html_e( 'Each dorm offers:', 'bz' ); ?></h2><?php
				endif;
				?>
				<ul class="amenities--list">
				<?php foreach ( $aterms as $aterm ) : ?>
					<li class="amenities--item">
						<h2>- <?php echo esc_html( $aterm->name ); ?></h2>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php
endif;
