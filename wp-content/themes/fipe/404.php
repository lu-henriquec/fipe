<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div class="container not-found-page">
	<div class="row not-found-row">
		<div class="col-xs-12">
			<div class="box-notfound">
				<h1 class="title-call">PÁGINA NÃO ENCONTRADA</h1>
				<p class="not-found-text">A página acessada não foi encontrada. Por favor, verifique o endereço digitado.<br/>Clique no botão para voltar à home.</p>
				<a href="<?php bloginfo('url'); ?>" title="Ir para a home" class="btn btn-default">Ir para a Home</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
