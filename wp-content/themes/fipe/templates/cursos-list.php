<div class="row no-gutter center-xs">
	<div class="col-xs">
		<?php
			wp_nav_menu( array(
				'menu' => 'Menu sidebar',
				'container' => 'nav',
				// 'container_class' => 'menu',
				'menu_class' => 'cursos-listagem',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				)
			);
		?>
		<!-- <ul class="cursos-listagem">
			<li class="curso-item">
				<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/mba.png" alt="">
					<p>MBA</p>
				</a>
			</li>
			<li class="curso-item">
				<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/curta-duracao.png" alt="">
					<p>Curta duração</p>
				</a>
			</li>
			<li class="curso-item">
			<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/ead.png" alt="">
					<p>Ead</p>
				</a>
			</li>
			<li class="curso-item">
			<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/capacitacao.png" alt="">
					<p>capacitação</p>
				</a>
			</li>
			<li class="curso-item">
			<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/preparatorio.png" alt="">
					<p>preparatorios</p>
				</a>
			</li>
			<li class="curso-item">
			<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/contas-publicas.png" alt="">
					<p>contas publicas</p>
				</a>
			</li>
			<li class="curso-item">
			<a href="">
					<img src="<?php bloginfo('template_url'); ?>/images/cursos/corpo-docente.png" alt="">
					<p>corpo docente</p>
				</a>
			</li>
		</ul> -->
	</div>
</div>
