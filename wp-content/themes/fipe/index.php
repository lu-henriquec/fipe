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
				<?php get_template_part( 'templates/destaque' ); ?>
			</div>
		</div>
		<!-- Banner Home -->

		<!-- cursos -->
		<div class="cursos-row">
			<?php get_template_part( 'templates/cursos-list' ); ?>
		</div>
		<!-- cursos -->

	</div>

	<div class="container">

		<?php
			global $wp_query;
			$id = $wp_query->post->ID;
		?>

		<!-- Conteudo -->
		<div class="home-conteudo">
			<div class="row start-xs">
				<div class="col-xs-12 col-md-6">
					<h2 class="title-conteudo">
						<?php the_field('titulo', $id);?>
					</h2>
					<p class="text-conteudo">
						<?php the_field('texto_principal', $id);?>
					</p>
				</div>
				<div class="col-xs-12 col-md-6 text-sec">
					<p class="text-conteudo">
						<?php the_field('texto_secundario', $id);?>
					</p>
				</div>
			</div>
		</div>
		<!-- Conteudo -->

	</div>

<?php get_footer(); ?>
<!-- footer.php -->