<?php get_header() ?>
	<section class="container">
		<div class="row">
			
			<?php $articulos = new WP_Query([
							'showposts' => 4,
								]);

			while ($articulos->have_posts()) {
					$articulos->the_post();?>

			<div class="col-sm-12 post">
				<div class="row">
					<div class="col-sm-3">
					<?php the_post_thumbnail("medium"); ?>
				</div>
				<div class="col-sm-9">
					<h3><?php the_title(); ?></h3>
					<p>Publicado por <?php the_author() ?> el <?php the_time("d/m/Y")?></p>
						<?php the_excerpt();?>

					<a class="boton" href="<?php the_permalink()?>">ver mas</a>
				</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>
	<?php get_footer() ?>