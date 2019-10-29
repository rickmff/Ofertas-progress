<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <? include('cms/config/config.php'); ?>
  <? require 'cms/classes/class.conndatabase.php'; ?>
  <? require 'cms/classes/functions.php'; ?>
  <? include('includesConfig/metas.php'); ?>
  <? include('includesConfig/css.php'); ?>

</head>

<body>
  <!-- ____________________ NAVBAR ____________________-->
  <? include('includes/navbar.php'); ?>

  <!-- ____________________ CASOS ____________________-->
  <section id="header-title">
    <div class="container">
      <span><a href="home">Home</a> / Casos de sucesso</span>
      <div class="d-flex w-100 justify-content-center py-3">
        <img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao"/>
        <h1>Casos de sucesso</h1>
      </div>
      <div class="header-title-seta">
        <img class="img-fluid" src="assets/image/seta.png" alt="Seta logo ofertas">
      </div>
    </div>
  </section>

  <div class="my-5 center">
    <img src="assets/image/icon-aspas.png" alt="Icone de aspas - Depoimento">
  </div>
<?
$resCasos = mysql_query("SELECT * FROM site_tb_depoimentos ORDER BY id_dep DESC");
if (mysql_num_rows($resCasos)) {
?>
  <section id="casos">
    <div class="container mb-5">
      <div class="row">
        <? while ($rowCasos = mysql_fetch_array($resCasos)) { ?>
        <div class="col-xs-12 col-md-6 my-5">
          <div class="row">
            <div class="col-xs-12 col-md-4 mobile-center">
              <img class="avatar" src="uploads/depoimentos/thumb_<?=$rowCasos['foto_dep']?>" alt="<?=$rowCasos['nome_dep']?>">
            </div>
            <div class="col-xs-12 col-md-8 pr-0 pr-xs-1">
              <p><?=$rowCasos['texto_dep']?></p>
              <a class="btn w-100"><?=$rowCasos['nome_dep']?> | <?=$rowCasos['cidade_dep']?> | <?=$rowCasos['imovel_dep']?></a>
            </div>
          </div>
        </div>
        <? } ?>
      </div>
    </div>
  </section>
<? } ?>
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