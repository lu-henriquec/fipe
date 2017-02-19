<?php
/*
	Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<div class="container">

		<!-- Banner Home -->
		<div class="row no-gutter">
			<div class="col-xs-12">
				<div class="slide-home">
					<!-- LOOP WP Query -->
					<!-- Para um completo controle da customização do looping de posts e criar varios loopings -->
					<?php // Loop 1
					$args = array(
						'orderby' => array( 'date' => 'DESC' ),
						'posts_per_page' => 4,
						'featured' => 'yes'
					);
					$query = new WP_Query($args); // exclude category
					while($query->have_posts()) : $query->the_post();
					
						get_template_part( 'templates/banner' );	

					endwhile; ?>
					<!-- LOOP WP Query -->
				</div>
			</div>
		</div>
		<!-- Banner Home -->
		
		<!-- banner ads -->
		<div class="row no-gutter ads center-xs">
			<?php get_template_part( 'templates/row' ); ?>
		</div>
		<!-- banner ads -->
		
		<!-- últimos Posts -->
		<div class="row no-gutter latest-posts">
			<div class="col-xs-12">
				<p class="title-call">Últimos <span class="title-call_span">posts</span></p>
			</div>
			<div class="col-xs-12">
				<!-- LOOP WP Query -->
				<?php
				$args = array(
					'orderby' => array( 'date' => 'DESC' ),
					'posts_per_page' => 7
				);
				$query = new WP_Query($args); // exclude category
				$count = 0;
				while($query->have_posts()) : $query->the_post();
					//var_dump($count);
					$count++;
					 if ($count >= 3 && $count <= 5) { ?>
    					<article id="post-<?php the_ID(); ?>" <?php post_class('card card-small'); ?>>
    						<?php 
    							// Últimos Posts
								get_template_part( 'templates/latest-posts' );
								// Últimos Posts
    						?>
    					</article>
 					<?php } else { ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('card card-medium'); ?>>
    						<?php 
    							// Últimos Posts
								get_template_part( 'templates/latest-posts' );
								// Últimos Posts
    						?>
    					</article>
 					<?php }

				endwhile; ?>
				<!-- LOOP WP Query -->
			</div>
		</div>
		<!-- últimos Posts -->

		<!-- Formulário -->
		<div class="row row-form">
			<div class="col-xs-12">
				<?php get_template_part( 'templates/form' ); ?>
			</div>
		</div>
		<!-- Formulário -->

		<!-- MAPA -->
		<div class="row no-gutter">
			<div class="col-xs-12 mapa">
				<p class="title-call">Filtre <span class="title-call_span">por país</span></p>
				<?php get_template_part( 'templates/mapa' ); ?>
			</div>
		</div>
		<!-- MAPA -->
		
		<!-- Posts mais lidos -->
		<div class="row no-gutter popular-posts">
			<div class="col-xs-12">
				<p class="title-call">Posts <span class="title-call_span">mais lidos</span></p>
			</div>
			<div class="col-xs-12">
				<!-- LOOP get posts more popular -->
				<?php
				$posts = wp_most_popular_get_popular( array( 
					'limit' => 5,
					'post_type' => 'post',
					'range' => 'all_time'
					) 
				);
				$count = 0;
				if ( count( $posts ) > 0 ): 
					foreach ( $posts as $post ):
						setup_postdata( $post );
						$count++;
					 	if ($count <= 1) { ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('card card-large'); ?>>
								<?php
								// Últimos Posts
								get_template_part( 'templates/popular-posts' );
								// Últimos Posts
								?>
							</article>
						<?php } else { ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('card card-small'); ?>>
								<?php
								// Últimos Posts
								get_template_part( 'templates/popular-posts' );
								// Últimos Posts
								?>
							</article>
						<?php }

					endforeach;
				endif;
				?>
				<!-- LOOP get posts more popular -->
			</div>
		</div>
		<!-- Posts mais lidos -->

	</div>

<?php get_footer(); ?>
<!-- footer.php -->