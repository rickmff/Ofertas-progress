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

<?

if (is_numeric($_GET['ref'])) {
  $resPost = mysql_query("SELECT * FROM blog_tb_posts WHERE id_post = '" . $_GET['ref'] . "' AND (data_post = '" . date("Y-m-d") . "' OR data_post < '" . date("Y-m-d") . "')");
  if (mysql_num_rows($resPost)) {
    $rowPost = mysql_fetch_array($resPost);

    $resFotos = mysql_query("SELECT * FROM blog_tb_posts_fotos WHERE ref = '" . $rowPost['id_post'] . "' ORDER BY id_foto DESC");
    $qtdFotos = mysql_num_rows($resFotos);

    $resAssunto = mysql_query("SELECT * FROM blog_tb_assuntos WHERE id_assunto = " . $rowPost['ref_assunto']);
    $rowAssunto = mysql_fetch_array($resAssunto);

    $resReg = mysql_query("SELECT * FROM site_tb_regioes WHERE id_regiao = '" . $rowPost['ref_regiao'] . "'");
    $refReg = mysql_num_rows($resReg);
    if ($refReg) {
      $rowReg = mysql_fetch_array($resReg);
    }

    $count_hit = $rowPost['hit_post'];
    $count_hit = $count_hit + 1;
    mysql_query("UPDATE blog_tb_posts SET hit_post='" . $count_hit . "' WHERE id_post = '" . $rowPost['id_post'] . "'");
  } else {
    Redir('blog/');
  }
} else {
  Redir('blog/');
}

?>

<body>
  <!-- ____________________ NAVBAR ____________________-->
  <? include('includes/navbar.php'); ?>

  <section id="header-title">
    <div class="container">
      <span><a href="home">Home</a> / <a href="blog"> Blog </a> / <?= $rowPost['titulo_post'] ?></span>
      <div class="d-flex w-100 justify-content-center py-3">
        <img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao" />
        <h1 class="blog"><?= $rowPost['titulo_post'] ?></h1>
      </div>
      <br>
      <div class="header-title-seta hidden-mobile">
        <img class="img-fluid" src="assets/image/seta.png" alt="Seta logo da Ofertas imobiliarias">
      </div>
    </div>
  </section>

  <!-- ____________________ BLOG DETALHE ____________________-->
  <section id="sobre">
    <div class="container my-5 pt-3">
      <div class="row">
        <div class="col-md-12">
          <img class="img-fluid mr-2 mb-2 float-left" src="uploads/posts/<?= $rowPost['thumb_post'] ?>" alt="<?= $rowPost['titulo_post'] ?>">
          <?= $rowPost['texto_post'] ?>
        </div>
      </div>
    </div>
  </section>

  <section id="blogCarousel">
    <div class="container my-5">
      <div class="row">
        <div class="col-6">
          <? if ($qtdFotos) {
            $i = 0;
            while ($rowFotos = mysql_fetch_array($resFotos)) {
              $fotos[$i]['id_foto']      = $rowFotos['id_foto'];
              $fotos[$i]['ref']          = $rowFotos['ref'];
              $fotos[$i]['legenda_foto'] = $rowFotos['legenda_foto'];
              $fotos[$i]['url_foto']     = $rowFotos['url_foto'];
              $i++;
            }
            ?>
            <div id="carouselBlog" class="carousel slide hidden-mobile" data-ride="carousel">
              <ol class="carousel-indicators">
                <? for ($i = 0; $i < ($qtdFotos / 2); $i++) { ?>
                  <? $active = (!$i) ? 'active' : ''; ?>
                  <li data-target="#carouselBlog" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
                <? } ?>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <? for ($i = 0; $i < $qtdFotos; $i++) { ?>
                      <? if (!(($i + 1) % 3)) { ?>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                  <? } ?>
                  <div class="col-md-6">
                    <a class="zoom" href="uploads/posts/<?= $fotos[$i]['url_foto'] ?>">
                      <img src="uploads/posts/thumb_<?= $fotos[$i]['url_foto'] ?>" alt="<?= $fotos[$i]['legenda_foto'] ?>">
                    </a>
                  </div>
                <? } ?>
                  </div>
                </div>
              </div>
            </div>
          <? } ?>
        </div>
        <div class="col-xs-12 col-md-6">
          <? if ($refReg) { ?>
            <div class="row col-12">
              <div class="col-4 pl-0">
                <img width="100%" class="avatar" src="uploads/regioes/thumb_<?= $rowReg['logo_regiao'] ?>" alt="<?= $rowReg['nome_regiao'] ?>">
              </div>
              <div class="col-8 pr-0">
                <p><?= substr($rowReg['breve_descricao'], 0, 150) . '...' ?></p>
                <a class="btn w-100" href="regiao/<?= cleanString($rowReg['nome_regiao']) ?>-<?= $rowReg['id_regiao'] ?>"><?= $rowReg['nome_regiao'] ?> de <?= $rowReg['cidade_uf'] ?></a>
              </div>
            </div>
          <? } ?>
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