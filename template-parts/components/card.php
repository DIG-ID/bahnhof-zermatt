<article id="post-<?php the_ID(); ?>" <?php post_class( 'card col-span-4 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-3 mb-20 md:mb-24 xl:mb-64' ); ?>>
	<div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9">
		<div class="col-span-1 md:col-span-8 xl:col-span-10 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9">
			<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 text-center xl:text-left">
				<h2 class="title-xl"><?php the_title(); ?></h2>
			</div>
		</div>

		<div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 xl:col-start-4 order-2 xl:order-3">
			<figure class="col-span-4 md:col-span-8 xl:col-span-6 mb-6 md:mb-12 xl:mb-0">
				<?php the_post_thumbnail( 'full', array( 'class' => 'object-cover max-h-[226px] md:max-h-[500px] xl:max-h-[570px]' ) ); ?>
			</figure>
		</div>
	</div>
</article>


