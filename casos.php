<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <? include('cms/config/config.php'); ?>
  <? include('includesConfig/metas.php'); ?>
  <? include('includesConfig/css.php'); ?>

</head>

<body>
  <!-- ____________________ NAVBAR ____________________-->
  <? include('includes/navbar.php'); ?>

  <!-- ____________________ CASOS ____________________-->
  <section id="header-title">
		<div class="container">
			<span><a href="#">Home</a> / Casos de sucesso</span>
			<div class="d-flex w-100 justify-content-center">
				<img class="icone-regiao img-fluid mr-3" src="assets\image\icon-regiao.png" />
				<h1>Casos de sucesso</h1>
			</div>
			<div class="header-title-seta">
				<img class="img-fluid" src="assets\image\seta.png" alt="Seta logo ofertas">
			</div>
		</div>
  </section>
  
  <div class="my-5 center">
    <img src="assets\image\icon-aspas.png" alt="Icone de aspas - Depoimento">
  </div>

  <section id="casos">
    <div class="container mb-5">
      <div class="row">
        <div class="col-6 my-5">
          <? include('includes/depoimento.php'); ?>
        </div>
        <div class="col-6 my-5">
          <? include('includes/depoimento.php'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-6 my-5">
          <? include('includes/depoimento.php'); ?>
        </div>
        <div class="col-6 my-5">
          <? include('includes/depoimento.php'); ?>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ____________________ ATENDIMENTO ____________________-->
  <? include('includes/atendimento.php'); ?>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>
</body>

</html>