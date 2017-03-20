<?php
/**
 * The template for search content none
 */

get_header(); ?>

<div class="container not-found-page">
	<div class="row not-found-row">
		<div class="col-xs-12">
			<h1 class="title-call">
				<span class="title-call_span">Não encontramos um resultado para o termo </span>
				"<?php printf( ('%s'), get_search_query() ); ?>"
			</h1>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<?php
						$formAction = site_url();
						$formValue = get_search_query();
					?>
					<form action="<?php echo $formAction ?>" role="search" method="get" class="form form-search">
						<fieldset>
							<div>
								<input type="text" class="input-search" name="s" value="<?php '.$formValue.' ?>" placeholder="Busque por outro termo:" />
								<button type="submit" class="btn btn-search" id="searchsubmit" value=""></button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>