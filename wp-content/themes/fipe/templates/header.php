<div class="pre-header">
	<div class="container">
		<div class="row middle-xs between-xs">
			<div class="col-md-2 col-xs-12">
				<a href="<?php bloginfo('url'); ?>" title="Para Onde For">
					<img src="<?php bloginfo('template_url'); ?>/images/logo_fipe.png" class="logo" alt="Fipe">
				</a>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="row no-gutter form-row">
					<div class="col-xs-12">
						<?php
							$formAction = esc_url(home_url( '/' ));
							$formValue = get_search_query();
						?>
						<form action="<?php echo $formAction ?>" role="search" method="get" class="form form-search">
							<fieldset>
								<div>
									<input type="text" class="input-search" name="s" value="<?php '.$formValue.' ?>" placeholder="Busca" />
									<button type="submit" class="btn btn-search" id="searchsubmit" value=""></button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="row no-gutter end-xs social-row">
					<div class="col-md-3">
						<div class="lang-col">
							<div class="lg pt_br active">
								<a href="http://www.fipe.org.br/pt-br/home">
									PT
								</a>
							</div>
							<div class="lg en_us">
								<a href="http://www.fipe.org.br/en-us/home">
									EN
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="social-col">
							<ul>
								<li class="social-item">
									<a href="https://twitter.com/intent/tweet?text=A Fipe tem atuação nas áreas de indicadores econômicos, ensino e projetos e pesquisa. Acesse&url=http://www.fipe.org.br/pt-br/home&related=" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/images/ico/btn_twitter.png" alt="" title="">
									</a>
								</li>
								<li class="social-item">
									<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.fipe.org.br/pt-br/home&display=popup" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/images/ico/btn_face.png" alt="" title="">
									</a>
								</li>
								<li class="social-item">
									<a href="https://plus.google.com/share?url=http://www.fipe.org.br/pt-br/home" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/images/ico/btn_google.png" alt="" title="">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="menu-row">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="" title="Menu" class="menu-open">
					<span class=""></span>
				</a>
				<?php
					wp_nav_menu( array(
						'menu' => 'Menu principal',
						'container' => 'nav',
						// 'container_class' => 'menu',
						'menu_class' => 'header-menu',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
						)
					);
				?>
				<a href="" title="Search" class="search-open"></a>
			</div>
		</div>
	</div>
</div>