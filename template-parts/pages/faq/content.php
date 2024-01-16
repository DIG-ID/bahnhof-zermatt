<section class="bz-container mb-20">
	<div class="">
		<?php
		if ( have_rows( 'faq' ) ) :
			while ( have_rows( 'faq' ) ) :
				the_row();
				?>
				<div class="faq--item mb-14">
					<h2 class="font-serif text-xl tracking-[0.035em] leading-9 mb-4"><?php the_sub_field( 'title' ); ?></h2>
					<?php the_sub_field( 'description' ); ?>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
</section>