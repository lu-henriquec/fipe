<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>


	<?php if ( have_posts() ) : ?>

		<div class="container search-container">

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
						<h1 class="search-title" >
							Resultados de busca para "<?php printf( ('%s'), get_search_query() ); ?>"
						</h1>
					</div>
					<!-- Posts Looping -->
					<div class="row no-gutter posts-container">
						<div class="col-xs-12">
							<?php while ( have_posts() ) : the_post(); ?>

								<div class="row">
									<div class="col-xs-12">
										<?php get_template_part( 'templates/content-search' ); ?>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					</div>
					<!-- Posts Looping -->

				</div>
			</div>
			<!-- Page -->

		</div>


	<?php else : ?>

		<?php get_template_part( 'templates/content-none' ); ?>

	<?php endif; ?>


<?php get_footer(); ?>