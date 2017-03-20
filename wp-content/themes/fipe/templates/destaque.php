<div class="slide-home">
	<!-- LOOP WP Query -->
	<!-- Para um completo controle da customização do looping de posts e criar varios loopings -->
	<?php // Loop 1
		$args = array (
			'orderby' => array('date' => 'DESC'),
			'posts_per_page' => 4,
			'featured' => 'yes'
		);
		$query = new WP_Query($args);
		while ($query->have_posts()) : $query->the_post();
			get_template_part( 'templates/banner' );
		endwhile;
	?>
	<!-- LOOP WP Query -->
</div>