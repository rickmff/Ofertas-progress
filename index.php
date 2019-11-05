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

  <!-- ____________________ BANNER ____________________-->
  <? include('includes/banner.php'); ?>

  <!-- ____________________ COMO FUNCIONA ____________________-->
  <? include('includes/como-funciona-div.php'); ?>

  <?
  $resCasos = mysql_query("SELECT * FROM site_tb_depoimentos ORDER BY id_dep DESC LIMIT 3 ");
  $qtdCasos = mysql_num_rows($resCasos);
  if ($qtdCasos) {
    $i = 0;
    while ($rowCasos = mysql_fetch_array($resCasos)) {
      $casos[$i]['id_dep']      = $rowCasos['id_dep'];
      $casos[$i]['nome_dep']    = $rowCasos['nome_dep'];
      $casos[$i]['cidade_dep']  = $rowCasos['cidade_dep'];
      $casos[$i]['foto_dep']    = $rowCasos['foto_dep'];
      $casos[$i]['imovel_dep']  = $rowCasos['imovel_dep'];
      $casos[$i]['texto_dep']   = $rowCasos['texto_dep'];
      $i++;
    }
    ?>
    <!-- ____________________ CASOS DIV ____________________-->
    <section id="casos-div">
      <div class="bg-yellow">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xs-12">
              <div class="row col-12 title-section">
                <h2>Casos de sucesso</h2>
              </div>
              <div id="depoimentosCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <? for ($i = 0; $i < $qtdCasos; $i++) { ?>
                    <? $active = (!$i) ? 'active' : ''; ?>
                    <li data-target="#depoimentosCarousel" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
                  <? } ?>
                </ol>
                <div class="carousel-inner">
                  <? for ($i = 0; $i < $qtdCasos; $i++) { ?>
                    <? $active = (!$i) ? 'active' : ''; ?>
                    <div class="carousel-item <?= $active ?>">
                      <div class="row col-12">
                        <div class="col-xs-12 col-md-4 mobile-center">
                          <img class="avatar" src="uploads/depoimentos/thumb_<?= $casos[$i]['foto_dep'] ?>" alt="<?= $casos[$i]['nome_dep'] ?>">
                        </div>
                        <div class="col-xs-12 col-md-8 pr-0">
                          <p><?= $casos[$i]['texto_dep'] ?></p>
                          <a class="btn w-100"><?= $casos[$i]['nome_dep'] ?> | <?= $casos[$i]['cidade_dep'] ?> | <?= $casos[$i]['imovel_dep'] ?></a>
                        </div>
                      </div>
                    </div>
                  <? } ?>
                </div>
              </div>
            </div>

            <div class="col-md-6 hidden-mobile">
              <img src="assets/image/escritorio-ofertas.jpg" alt="Foto depoimento">
            </div>

          </div>
        </div>
      </div>
    </section>
  <? } ?>
  <!-- ____________________ GALLERY ____________________-->
  <? include('includes/gallery.php'); ?>
  <?
  $resBlog = mysql_query("SELECT * FROM blog_tb_posts WHERE data_post <= '" . date("Y-m-d") . "' ORDER BY hit_post DESC LIMIT 3 ");
  if (mysql_num_rows($resBlog)) {
    ?>
    <!-- ____________________ BLOG-DIV ____________________-->
    <section id="blog-div">
      <div class="container">
        <div class="row col-12 mb-xs-3 mb-md-5">
          <div class="col-7">
            <h2 class="hidden-mobile">Últimas publicações do blog</h2>
            <h2 class="hidden-desktop">Blog</h2>
          </div>
          <div class="col-5">
            <a class="btn float-right hidden-mobile" href="blog">Visitar blog</a>
            <a class="btn float-right hidden-desktop" href="blog">Visitar</a>
          </div>
        </div>
        <div class="row col-12 pr-0">
          <? while ($rowBlog = mysql_fetch_array($resBlog)) { ?>
            <div class="col-md-4 py-xs-5">
              <span><?= date("d/m/Y", strtotime($rowBlog['data_post'])) ?></span>
              <a href="blog/<?= cleanString($rowResult['titulo_post']); ?>-<?= $rowResult['id_post'] ?>">
                <h3><?= $rowBlog['titulo_post'] ?></h3>
              </a>
              <p class="line-h-up"><?= substr($rowBlog['texto_post'], 0, 150) . '...' ?></p>
              <div class="blog-saibaMais">
                <a href="blog/<?= cleanString($rowBlog['titulo_post']) ?>-<?= $rowBlog['id_post'] ?>">Saiba mais</a>
              </div>
            </div>
          <? } ?>
        </div>
      </div>
    </section>
  <? } ?>
  <!-- ____________________ Newsletter ____________________-->
  <? include('includes/newsletter.php'); ?>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>


  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>

</body>

</html>