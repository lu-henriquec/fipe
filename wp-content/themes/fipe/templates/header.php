<div class="pre-header">
	<div class="container">
		<div class="row no-gutter middle-xs end-xs">
			<div class="col-md-7 hide-xs">
				<?php
					if ( is_front_page() ) {
						echo '<h1 class="header-title default-title">Dicas de Viagem e segurança</h1>';
					}
					else {
						echo '<p class="header-title default-title">Dicas de Viagem e segurança</p>';
					}
				?>
			</div>
			<div class="col-xs-1"></div>
			<div class="col-md-4 col-xs-12">
				<?php
					$formAction = esc_url(home_url( '/' ));
					$formValue = get_search_query();
				?>
				<form action="<?php echo $formAction ?>" role="search" method="get" class="form form-search">
					<fieldset>
						<div>
							<input type="text" class="input-search" name="s" value="<?php '.$formValue.' ?>" placeholder="o que você procura?" />
							<button type="submit" class="btn btn-search" id="searchsubmit" value=""></button>
						</div>
					</fieldset>
				</form>	
			</div>
		</div>
	</div>
</div>
<div class="menu-row">
	<div class="container">
		<div class="row no-gutter">
			<div class="col-md-2 col-xs-12">
				<a href="<?php bloginfo('url'); ?>" title="Para Onde For">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="logo" alt="Pra Onde For">
				</a>
			</div>
			<div class="col-md-10">
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