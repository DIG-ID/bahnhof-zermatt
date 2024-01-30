<section class="zermatt-activities mb-20 lg:mb-40">
	<div class="bz-container">
		<div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-9">
			<?php
			if ( have_rows( 'items' ) ) :
				while ( have_rows( 'items' ) ) :
					the_row();
					?>
					<div class="item col-span-1 mb-10">
						<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'w-full object-cover' ) ); ?>
						<h2 class="title !my-6 !lg:my-6 text-center lg:text-start"><?php the_sub_field( 'title' ); ?></h2>
						<p class="description text-center lg:text-start"><?php the_sub_field( 'description' ); ?></p>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
