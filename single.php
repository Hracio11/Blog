<?php get_header() ?>
		<div>
			<h1><?php the_title(); ?></h1>


			<h5><?php the_field('resumen') ?></h5><br>

			<?php the_post_thumbnail("largue"); ?>

				<?php the_content();?>

				<h6>Fuente: <?php the_field('fuente'); ?></h6>
		</div>
<?php get_footer() ?>