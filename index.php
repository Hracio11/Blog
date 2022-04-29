<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Noticias</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/estilos.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div>
		<header>
			<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="New" src="https://cdn-icons-png.flaticon.com/512/21/21601.png" width="100">
				</div>
				<div class="col-md-8">
					<ul>
						<li><a href="">INICIO</a></li>
						<li><a href="">POLITICA</a></li>
						<li><a href="">ESPECTACULOS</a></li>
						<li><a href="">INTERNACIONAL</a></li>
					</ul>
				</div>
	</div>
	</div>
			
		</header>
	<section class="container">
		<div class="row">
			
			<?php $articulos = new WP_Query([
							'showposts' => 4,
								]);

			while ($articulos->have_posts()) {
					$articulos->the_post();?>






			<div class="col-md-4 mb-2 mt-4">
				<?php the_post_thumbnail("medium"); ?>
			</div>
			<div class="col-md-8">
				<h3 class="Autopista"><?php the_title(); ?> </h3>
					
					<?php the_excerpt();?>
			</div>





	
			<?php } ?>
		</div>
	</section>
		<footer>
			<div class="container">
				<div class="row">
						<ul>
							<li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
							<li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
							<li><i class="fa fa-instagram" aria-hidden="true"></i></li>
						</ul>
				</div>	
			</div>
		</footer>
	</div>
</body>
</html>