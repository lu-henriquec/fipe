

<!-- IMAGE FEATURED -->
<div class="container-full">
	<div class="row no-gutter">
		<div class="col-xs-12">
			<div class="top-post-image">
				<article id="post-<?php the_ID(); ?>" <?php post_class('top-post-info'); ?>>
					<div>
						<?php
							//check if the post has a Post Thumbnail assigned to it.
							if ( has_post_thumbnail() ) { ?>
								<img src="<?php the_post_thumbnail_url('post-thumb'); ?>" alt="" class="img-responsive"/>
							<?php }
						?>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
<!-- IMAGE FEATURED -->

<?php
	if ( is_single() ) {
?>
	<!-- BREADCRUMB -->
	<div class="container">
		<div class="row no gutter">
			<div class="col-xs-12">
				<?php custom_breadcrumbs(); ?>
			</div>
		</div>
	</div>
	<!-- BREADCRUMB -->
<?php
	}
?>

<div class="container">
		<main id="main" class="site-main" role="main">

			<div class="row no-gutter content-post-row">
				<!-- Conteudo Post -->
				<div class="col-xs-12 col-md-9">
					<!-- Row Post Title -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row-post_title">
								<h1 class="post-title"><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
					<!-- Row Post Title -->

					<!-- Row Post Image -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="post-image">
								<?php
									$image = get_field('imagem');
								?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
						</div>
					</div>
					<!-- Row Post Image -->

					<!-- Row Post Informacoes gerais -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="informations_post">
										<h2 class="info-post_subtitle">Informações gerais</h2>
									</div>
								</div>
							</div>
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="box-infos">
										<ul class="box-infos_list">
											<li class="box-infos_item item-periodo"><span>Período Previso: </span><?php the_field('periodo_previsto'); ?></li>
											<li class="box-infos_item item-horario"><span>Horário: </span><?php the_field('horario'); ?></li>
											<li class="box-infos_item item-vagas"><span>Vagas: </span><?php the_field('vagas'); ?></li>
											<li class="box-infos_item item-carga"><span>Carga horária: </span><?php the_field('carga_horaria'); ?></li>
											<li class="box-infos_item item-responsavel"><span>Responsável: </span><?php the_field('responsavel'); ?></li>
											<li class="box-infos_item item-local"><span>Local: </span><?php the_field('local'); ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Post Informacoes gerais -->

					<!-- Row Post sobre -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="informations_post">
										<h2 class="info-post_subtitle">Sobre o curso</h2>
									</div>
								</div>
							</div>
							<div class="row no-gutter">
								<div class="col-xs-12">
									<p class="info-post_text">
										<?php the_field('sobre'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Post sobre -->

					<!-- Row Post programa -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="informations_post">
										<h2 class="info-post_subtitle">Programa</h2>
									</div>
								</div>
							</div>
							<div class="row no-gutter">
								<div class="col-xs-12">
									<p class="info-post_text">
										<?php the_field('programa_informacoes'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Post programa -->

					<!-- Row Post Avaliacao -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="informations_post">
										<h2 class="info-post_subtitle">Avaliação</h2>
									</div>
								</div>
							</div>
							<div class="row no-gutter">
								<div class="col-xs-12">
									<p class="info-post_text">
										<?php the_field('avaliacao_informacoes'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Post Avaliacao -->

					<!-- Row Post Maiores infos -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="informations_post">
										<h2 class="info-post_subtitle">Maiores informações</h2>
									</div>
								</div>
							</div>
							<div class="row no-gutter">
								<div class="col-xs-12">
									<p class="info-post_text">
										<?php the_field('mais_informacoes'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Post Maiores infos -->

					<!-- Row Post valores -->
					<div class="row no-gutter">
						<div class="col-xs-12">
							<div class="row no-gutter">
								<div class="col-xs-12">
									<div class="informations_post">
										<h2 class="info-post_subtitle">Investimento</h2>
									</div>
								</div>
							</div>
							<div class="row no-gutter">
								<div class="col-xs-12 col-md-8">
									<p class="info-post_text">
										<span class="post-info_values"><?php the_field('valor_total'); ?></span>
										<br/>
										<span><?php the_field('outros_valores'); ?></span>
									</p>
								</div>
								<div class="col-xs-12 col-md-4">
									<a href="#" class="btn-subscribe">quero me inscrever</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Post valores -->

				</div>
				<!-- Conteudo Post -->

				<!-- Sidebar Post -->
				<div class="col-xs-12 col-md-3 end-md center-xs">
					<div class="sidebar-post-col">
						<?php dynamic_sidebar('sidebarpost'); ?>
					</div>
				</div>
				<!-- Sidebar Post -->

				<!-- Link Topo -->
				<a href="#page" class="btn-top">Voltar ao topo</a>
				<!-- Link Topo -->
			</div>

		</main><!-- #main -->
</div><!-- #primary -->