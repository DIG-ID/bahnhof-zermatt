<section class="zermatt-activities mb-40">
	<div class="bz-container">
		<div class="grid grid-cols-3 gap-x-9">
			<?php
			if ( have_rows( 'items' ) ) :
				while ( have_rows( 'items' ) ) :
					the_row();
					?>
						<div class="item col-span-1">
							<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
							<h2 class="font-sans text-[45px] leading-[40px] tracking-[0.06em] uppercase my-6"><?php the_sub_field( 'title' ); ?></h2>
							<p class="font-serif text-[20px] leading-[35px] tracking-[0.035em]"><?php the_sub_field( 'description' ); ?></p>
						</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
