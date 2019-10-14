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
	<? include('includesConfig/metas.php'); ?>
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
				<img class="icone-regiao img-fluid mr-2" src="assets\image\icon-regiao.png" />
				<h1>Região</h1>
			</div>

			<div class="regiao-seta">
				<img class="img-fluid" src="assets\image\seta.png" alt="">
			</div>
		</div>
	</section>
	<!-- ____________________ CIDADES ____________________-->
	<section id="cidades">
		<div class="container my-5">
			<h2>Região ipsum Amet sic</h2>
			<h3>Nome da cidade</h3>
			<div class="row col-12">
				<div class="col-6">
					<img src="http://placehold.it/500x350" alt="">
				</div>
				<div class="col-6">
					<div class="carousel">
						<img src="http://placehold.it/250x250" alt="">
						<img src="http://placehold.it/250x250" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ____________________ DESTAQUES ____________________-->
	<section id="destaques">
		<div class="container">
			<div class="row col-12">
				<div class="col-7 bg-yellow">
					<img src="">
					<h2>Destaques da região</h2>
					<div>
					<img src="">
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolorum numquam quisquam suscipit nobis, impedit sunt possimus, vel quod qui iure similique laudantium quas totam, error voluptatem. Hic, vel ducimus.</span>
					</div>
					<div>
					<img src="">
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus est rerum modi autem tenetur quisquam ut, possimus commodi sint dolorum odio sed nesciunt minima similique error iusto debitis neque perferendis.</span>
					</div>
				</div>
				<div class="col-5">
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dicta repudiandae quo doloremque, officia excepturi ea soluta nemo ratione nihil accusantium, id dolorum doloribus. Inventore nisi delectus unde repellendus repellat?</span>
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dicta repudiandae quo doloremque, officia excepturi ea soluta nemo ratione nihil accusantium, id dolorum doloribus. Inventore nisi delectus unde repellendus repellat?</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ____________________ LOCALIZAÇÃO ____________________-->
	<section id="localização">
		<div class="container my-5">
			<h2>Localização</h2>
			<div>
				<iframe height="400px" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.5021966373893!2d-47.441391985023216!3d-23.514433384706166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf60329d5a4ab7%3A0x11958ea7ef6d3095!2sR.%20Peru%2C%20120%20-%20Vila%20Barcelona%2C%20Sorocaba%20-%20SP%2C%2018025-290!5e0!3m2!1spt-BR!2sbr!4v1567272843509!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen=""></iframe>
			</div>
	</section>

	<!-- ____________________ ATENDIMENTO ____________________-->
	<section id="atendimento">
		<div class="container">
			<div class="atendimento-seta">
				<img class="img-fluid" src="assets\image\seta.png" alt="">
			</div>
			<div class="row col-12 pt-5">
				<div class="col-6">
					<h2>Encontre meu novo lar</h2>
					<span>Precisamos conhecer um pouco mais sobre voçê e entender melhor sua característica para buscar o melhor imóvel que atenda suas necessidades.</span>
				</div>
				<div class="col-6">
					<a class="btn"><img src="">Começar atendimento</a>
				</div>
			</div>
	</section>

	</div>
	<!-- ____________________ FOOTER ____________________-->
	<? include('includes/footer.php'); ?>

	<? include('includesConfig/js.php'); ?>
	<? include('includes/analytics.php'); ?>
</body>

</html>