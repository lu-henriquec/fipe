<article id="post-<?php the_ID(); ?>" <?php post_class('content-post'); ?>>
	<div class="content">

		<div class="content-infos">
			<h2 class="info-title">
				<?php the_title(); ?>
			</h2>
			<p class="date-post">
				<?php the_field('data_inicio'); ?>
			</p>
			<a href="<?php the_permalink(); ?>" rel="bookmark" class="read_more-link">
				Saiba mais
			</a>
		</div>
	</div>
</article>