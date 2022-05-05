<?php get_header() ?>
		<div>
			<?php the_post_thumbnail("largue"); ?>
			<h1><?php the_title(); ?></h1>
				<?php the_content();?>
		</div>
<?php get_footer() ?>