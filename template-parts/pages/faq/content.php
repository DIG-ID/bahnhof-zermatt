<section class="bz-container mb-20">
	<div class="md:px-14">
		<?php
		if ( have_rows( 'faq' ) ) :
			while ( have_rows( 'faq' ) ) :
				the_row();
				?>
				<div class="faq--item mb-7 lg:mb-14">
					<h2 class="font-serif text-[18px] leading-[31px] tracking-[0.006em] lg:text-xl lg:tracking-[0.035em] lg:leading-9 mb-2 lg:mb-4"><?php the_sub_field( 'title' ); ?></h2>
					<?php the_sub_field( 'description' ); ?>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
</section>
