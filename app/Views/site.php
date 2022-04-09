<!doctype html>
<html lang="es">
  	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="<?=base_url('Styles/app.css')?>" rel="stylesheet">
	<title>Dos Torres Taekwon-Do</title>
  	</head>
  <header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="<?=base_url('Images/logo.jpeg')?>" height=128px; alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
				<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Novedades <span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Quiénes somos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Galería</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Contacto</a>
				</li>
				</ul>
			</div>
		</div>
	</nav>
  </header>	
	<body>
		<section class="hero">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 0"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?=base_url('Images/carousel-one.jpeg')?>" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?=base_url('Images/carousel-two.jpeg')?>" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?=base_url('Images/carousel-three.jpg')?>" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
	  	</section>
		<section class="news">
			<div class="container">
				<h2>Novedades</h2>
				<div class="card text-center">
					<div class="card-header">
						
					</div>
					<div class="card-body">
						<h5 class="card-title">Anuncio importante</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					<div class="card-footer text-muted">
						
					</div>
				</div>
			<div>
	  	</section>
		<section class="about">
			<div class="container">
				<h2>Quiénes somos</h2>
				<p>Academia de Taekwon-Do, arte marcial de origen coreano, adscrito a la original International Taekwon-Do Federation, miembro del Concilio Panamericano de Taekwon-Do y de la Asociación Nicaragüense de Taekwon-Do ITF.</p>
			<div>
	  	</section>
		<section class="gallery">
			<div class="container">
				<h2>Galería</h2>
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 0"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?=base_url('Images/carousel-one.jpeg')?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?=base_url('Images/carousel-two.jpeg')?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?=base_url('Images/carousel-three.jpg')?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?=base_url('Images/carousel-four.jpeg')?>" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
	  	</section>
		  <section class="contact">
			<div class="container">
				<h2>Comunícate con nosotros</h2>
				<h3>Contáctanos</h3>
				<h3>Horario de atención</h3>
				<h3>Nuestra ubicación</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.3513185245156!2d-86.35415318518633!3d12.156468091394286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7151e9a4f9bfa1%3A0xc93f207dd225359a!2sDos%20Torres%2C%20Academia%20de%20Taekwon-Do%20ITF!5e0!3m2!1ses-419!2sfr!4v1649002557557!5m2!1ses-419!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<div>
	  	</section>
	<footer>
		<p>© Dos Torres 2022<br></p>
	</footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>