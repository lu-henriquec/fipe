<?php
/*
	Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<div class="container-full">

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

		<!-- cursos -->
		<div class="cursos-row">
			<div class="row no-gutter center-xs">
				<div class="col-xs-12">
					<h2 class="cursos-title">conheça os cursos fipe</h2>
				</div>
			</div>
			<?php get_template_part( 'templates/cursos-list' ); ?>
		</div>
		<!-- cursos -->

	</div>

	<div class="container">

		<!-- Conteudo -->
		<div class="home-conteudo">
			<div class="row start-xs">
				<div class="col-xs-12 col-md-6">
					<h2 class="title-conteudo">
						<?php the_field('titulo', 2);?>
					</h2>
					<p class="text-conteudo">
						<?php the_field('texto_principal', 2);?>
					</p>
				</div>
				<div class="col-xs-12 col-md-6 text-sec">
				 	<p class="text-conteudo">
						<?php the_field('texto_secundario', 2);?>
					</p>
				</div>
			</div>
		</div>
		<!-- Conteudo -->

	</div>

<?php get_footer(); ?>
<!-- footer.php -->