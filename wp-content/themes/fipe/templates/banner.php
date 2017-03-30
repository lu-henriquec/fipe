<div class="banner">
	<div>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				if ( has_post_thumbnail() ) { ?>
					<img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="img-responsive" />
				<?php }
			?>
		</a>
	</div>
	<div class="content-infos_banner">
		<h2 class="infos-title"><?php the_title(); ?></h2>
	</div>
</div>