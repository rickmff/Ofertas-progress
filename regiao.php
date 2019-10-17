<?
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br" itemscope itemtype="http://schema.org/WebPage">
<!--<![endif]-->

<head>
	<!-- ____________________ CONIFG METAS ____________________-->
	<? include('includesConfig/metas.php'); ?>

	<!-- ____________________ CONFIG CSS ____________________-->
	<? include('includesConfig/css.php'); ?>
</head>

<body>
	<!-- ____________________ NAVBAR ____________________-->
	<? include('includes/navbar.php'); ?>

	<!-- ____________________ REGIOES ____________________-->
	<section id="regioes">
		<div class="container">
			<span>Home / Regiões</span>
			<div class="d-flex w-100 justify-content-center">
				<img class="icone-regiao img-fluid mr-3" src="assets\image\icon-regiao.png" />
				<h1>Regiões</h1>
			</div>
			<div class="regioes-seta">
				<img class="img-fluid" src="assets\image\seta.png" alt="">
			</div>
		</div>
	</section>

	<!-- ____________________ CIDADES ____________________-->
	<section id="cidades">
		<div class="container my-5 pl-0">
			<h2>Região ipsum Amet sic</h2>
			<h3>Nome da cidade</h3>
			<div class="row mt-4">
				<div class="col-6">
					<img src="http://placehold.it/500x350" alt="">
				</div>

				<div class="col-6">
					<div id="cidadesCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#cidadesCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#cidadesCarousel" data-slide-to="1"></li>
							<li data-target="#cidadesCarousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">

							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-6">
										<a href="#">
											<img src="http://placehold.it/250x250" alt="Image">
										</a>
									</div>
									<div class="col-md-6">
										<a href="#">
											<img src="http://placehold.it/250x250" alt="Image">
										</a>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-md-6">
										<a href="#">
											<img src="http://placehold.it/250x250" alt="Image">
										</a>
									</div>
									<div class="col-md-6">
										<a href="#">
											<img src="http://placehold.it/250x250" alt="Image">
										</a>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-md-6">
										<a href="#">
											<img src="http://placehold.it/250x250" alt="Image">
										</a>
									</div>
									<div class="col-md-6">
										<a href="#">
											<img src="http://placehold.it/250x250" alt="Image">
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>

	<!-- ____________________ DESTAQUES ____________________-->
	<section id="destaques">
		<div class="container">
			<div class="row">
				<div class="col-7 bg-yellow">
					<div class="icon_title">
						<img src="assets\image\icon-star.png">
						<h2>Destaques da região</h2>
					</div>
					<div class="row mt-5">
						<div class="col-2 icon_destaques">
							<img src="assets\image\icon-predios.png">
						</div>
						<div class="col-10 pr-5">
							<span>Lorem ipsum dolor sit amet. Neque omnis cudis doloremque dolores iusto cum quae quas in natus. Sit, ducimus.</span>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-2 icon_destaques">
							<img src="assets\image\icon-pessoas.png">
						</div>
						<div class="col-10 pr-5">
							<span>Lorem ipsum dolor sit amet. Neque omnis cudis doloremque dolores iusto cum quae quas in natus. Sit, ducimus.</span>
						</div>
					</div>
				</div>
				<div class="col-5 text_destaques">
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dicta repudiandae quo doloremque, officia excepturi ea soluta nemo ratione nihil Aperiam dicta repudiandae quo doloremque<br><br>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dicta repudiandae quo doloremque, officia excepturi ea soluta nemo ratione nihil Aperiam dicta repudiandae quo doloremque</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ____________________ LOCALIZAÇÃO ____________________-->
	<section id="localizacao">
		<div class="container">
			<h2>Localização</h2>
			<div>
				<iframe height="400px" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.5021966373893!2d-47.441391985023216!3d-23.514433384706166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf60329d5a4ab7%3A0x11958ea7ef6d3095!2sR.%20Peru%2C%20120%20-%20Vila%20Barcelona%2C%20Sorocaba%20-%20SP%2C%2018025-290!5e0!3m2!1spt-BR!2sbr!4v1567272843509!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen=""></iframe>
			</div>
	</section>

	<!-- ____________________ ATENDIMENTO ____________________-->
	<? include('includes/atendimento.php'); ?>

	<!-- ____________________ FOOTER ____________________-->
	<? include('includes/footer.php'); ?>

	<!-- ____________________ CONFIG JS ____________________-->
	<? include('includesConfig/js.php'); ?>
	<? include('includes/analytics.php'); ?>
</body>

</html>