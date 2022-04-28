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
							'showposts' => 3,
								]);

			while ($articulos->have_posts()) {
					$articulos->the_post();

					the_title();
					echo "<hr>";
			}
			?>
			<div class="col-md-6">
				<img class = "Choque" src="https://impetu.pe/wp-content/uploads/2021/08/nuevo-impetu-301.jpg">
			</div>
			<div class="col-md-6">
				<h3 class="Autopista">Choque en autopista</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3 class="Asesino">Arrestado por asesinato</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-md-6">
				<img class="Arrestado" src="https://assetsnffrgf-a.akamaihd.net/assets/m/1013159/univ/art/1013159_univ_lsr_xl.jpg">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img class="Accidente"src="https://laverdadnoticias.com/__export/1526671033448/sites/laverdad/img/2018/05/18/los-5-accidentes-de-avion-mas-tragicos-2_1.jpg_759710130.jpg">
			</div>
			<div class="col-md-6">
				<h3 class="Avion">Accidente de avión</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			
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