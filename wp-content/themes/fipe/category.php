<!-- category.php -->

<?php get_header(); ?>


<!-- IMAGE FEATURED -->
<div class="container-full">
	<div class="row no-gutter">
		<div class="col-xs-12">
			<div class="top-category-image">
				<div>
					<?php
						// vars
						$queried_object = get_queried_object();
						$taxonomy 		= $queried_object->taxonomy;
						$term_id 		= $queried_object->term_id;
						$termKey		= $taxonomy.'_'.$term_id;
						$image 			= get_field('imagem_categoria', $termKey);
					?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- IMAGE FEATURED -->

<div class="container category-container">

	<!-- Page -->
	<div class="row">
		<!-- Sidebar Post -->
		<div class="col-xs-12 col-md-3 end-md center-xs">
			<div class="sidebar-post-col">
				<?php dynamic_sidebar('sidebarleft'); ?>
			</div>
		</div>
		<!-- Sidebar Post -->
		<div class="col-xs-12 col-md-9">
			<?php
				$nameCategory 	= $queried_object->name;
				$slugCategory 	= $queried_object->slug;
			?>
			<div class="informations_post">
				<h1 class="page-title info-post_subtitle <?php echo $slugCategory; ?>" >
					<?php echo $nameCategory; ?>
				</h1>
			</div>
			<!-- Posts Looping -->
			<div class="row no-gutter posts-container">
				<div class="col-xs-12">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/content-default' ); ?>

					<?php endwhile; ?>
				</div>
			</div>
			<!-- Posts Looping -->

		</div>
	</div>
	<!-- Page -->



	<!-- Navigation -->
	<!-- <div class="row center-xs middle-xs pagination-row">
		<div class="col-xs-12">
			<?php /*the_posts_pagination( array(
					'mid_size'  => 5,
					'screen_reader_text' =>  ' ',
					'prev_text' => '',
					'next_text' => ''
					)
				); */
			?>
		</div>
	</div> -->
	<!-- Navigation -->

</div>

<?php get_footer(); ?>