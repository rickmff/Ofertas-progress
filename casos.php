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
  <section id="casos-title">
    <div class="bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-12 center">
            <h1>Casos de sucesso</h1>
            <p>Home / Casos de sucesso</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="my-5 center">
    <img src="assets\image\icon-aspas.png" alt="Icone de aspas - Depoimento">
  </div>
  <section id="casos">
    <div class="container">
      <div class="row">
        <div class="col-6 my-5">
          <? include('includes\depoimento.php'); ?>
        </div>
        <div class="col-6 my-5">
          <? include('includes\depoimento.php'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-6 my-5">
          <? include('includes\depoimento.php'); ?>
        </div>
        <div class="col-6 my-5">
          <? include('includes\depoimento.php'); ?>
        </div>
      </div>
    </div>
  </section>


  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>
</body>

</html>