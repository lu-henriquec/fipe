		</div>
		<!-- .site Content -->

		<footer class="footer">
			<?php get_template_part( 'templates/footer' ); ?>
		</footer>
		<!-- Footer -->

		<!-- MODAL SO?BRE -->
		<?php get_template_part( 'templates/modal-sobre' ); ?>
		<!-- MODAL SOBRE -->

		<!-- MODAL TERMOS -->
		<?php get_template_part( 'templates/modal-termos' ); ?>
		<!-- MODAL TERMOS -->

		<!-- MODAL POLITICA -->
		<?php get_template_part( 'templates/modal-politica' ); ?>
		<!-- MODAL POLITICA -->
		
		<?php wp_footer(); ?>
		

		<!-- RICH SNIPPETS -->
		<?php 

			if ( is_front_page() ) { ?>

				<div class="hide" itemscope itemtype="http://schema.org/WebSite">
					<meta itemprop="url" content="<?php echo get_home_url(); ?>"/>
					<form itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
						<meta itemprop="target" content="<?php echo get_home_url(); ?>?s={query}"/>
						<input itemprop="query-input" type="text" name="query">
						<input type="submit">
					</form>
				</div>	

			<?php }

			if ( is_single() ) { 
				global $_wp_additional_image_sizes;
				// Output width
				$imgW = $_wp_additional_image_sizes['post-thumb']['width'];
				// Output height
				$imgH = $_wp_additional_image_sizes['post-thumb']['height'];
				?>
				<script type="application/ld+json">
					{
						"@context": "http://schema.org",
						"@type": "NewsArticle",
						"mainEntityOfPage": {
							"@type": "WebPage",
							"@id": "<?php echo get_permalink(); ?>"
						},
						"headline": "<?php the_title();	?>", 
						"image": {
							"@type": "ImageObject",
							"url": "<?php the_post_thumbnail_url(); ?>",
							"height": <?php echo $imgH; ?>,
							"width": <?php echo $imgW; ?>
						},
						"datePublished": "<?php the_date( 'Y-m-d' ); ?>",
						"dateModified": "2016-05-31",
						"author": {
							"@type": "Person",
							"name": "<?php the_author(); ?>"
						},
					   "publisher": {
							"@type": "Organization",
							"name": "Para onde For",
							"logo": {
								"@type": "ImageObject",
								"url": "<?php echo get_home_url(); ?>/wp-content/themes/mondial/img/logo.png",
								"width": 176,
								"height": 94
							}
						},
						"description": "<?php echo get_the_excerpt(); ?>"
					}
				</script>
			<?php }

		?>
		
		<script type="application/ld+json">
			{
			  "@context": "http://schema.org/",
			  "@type": "Organization",
			  "name": "Para onde for",
			  "url": "<?php echo get_home_url(); ?>",
			  "sponsor": 
			  {
			    "@type": "Organization",
			    "name": "Para onde for",
			    "url": "<?php echo get_home_url(); ?>"
			  }
			}
		</script>
		<!-- RICH SNIPPETS -->
	</body>
</html>
