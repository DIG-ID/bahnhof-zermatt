<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--zimmer col-span-4 mb-8' ); ?>>
	<a class="card--image-link" href="<?php the_permalink(); ?>">
		<figure class="overflow-hidden">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'w-full object-cover h-auto /max-h-[204px]' ) ); ?>
		</figure>
	</a>
	<a class="card--title-link" href="<?php the_permalink(); ?>">
		<h2 class="title-card"><?php the_title(); ?></h2>
	</a>
</article>
