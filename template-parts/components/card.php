<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--zimmer col-span-4' ); ?>>
	<a class="card--image-link" href="<?php the_permalink(); ?>">
		<figure class="overflow-hidden">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'w-full object-cover h-auto /max-h-[204px]' ) ); ?>
		</figure>
	</a>
	<a class="card--title-link" href="<?php the_permalink(); ?>">
		<h2 class="font-sans text-[45px] leading-[48px] tracking-[0.06em] text-center uppercase p-3 mt-6"><?php the_title(); ?></h2>
	</a>
</article>
