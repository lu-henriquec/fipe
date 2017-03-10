<?php
/*
	Template Name: Default Page
*/
?>


<?php get_header(); ?>


<!-- IMAGE FEATURED -->
<div class="container-full">
	<div class="row no-gutter">
		<div class="col-xs-12">
			<div class="top-category-image">
				<div>
					<?php
						// vars
						$image = get_field('imagem_default');
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
			<div class="informations_post">
				<h1 class="page-title info-post_subtitle" >
					<?php the_title(); ?>
				</h1>
			</div>
			<!-- Posts Looping -->
			<div class="row no-gutter posts-container">
				<div class="col-xs-12">
					<?php

						the_content();

					?>
				</div>
			</div>
			<!-- Posts Looping -->

		</div>
	</div>
	<!-- Page -->

</div>

<?php get_footer(); ?>