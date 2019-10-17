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

  <!-- ____________________ BANNER ____________________-->
  <? include('includes/banner.php'); ?>

  <!-- ____________________ COMO FUNCIONA ____________________-->
  <? include('includes\como-funciona-div.php'); ?>

  <!-- ____________________ DEPOIMENTOS ____________________-->
  <section id="depoimentos">
    <div class="bg-yellow">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="row col-12 title-section">
              <h2>Casos de sucesso</h2>
            </div>
            <div id="depoimentosCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#depoimentosCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#depoimentosCarousel" data-slide-to="1"></li>
                <li data-target="#depoimentosCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <? include('includes/depoimento.php'); ?>
                </div>
                <div class="carousel-item">
                  <? include('includes/depoimento.php'); ?>
                </div>
                <div class="carousel-item">
                  <? include('includes/depoimento.php'); ?>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xs-12">
            <img src="http://placehold.it/1000x500" alt="Foto depoimento">
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ____________________ GALLERY ____________________-->
  <? include('includes/gallery.php'); ?>

  <!-- ____________________ BLOG-DIV ____________________-->
  <section id="blog-div">
    <div class="container">
      <div class="row col-12 mb-xs-3 mb-md-5">
        <div class="col-7">
          <h2>Últimas publicações do blog</h2>
        </div>
        <div class="col-5">
          <a class="btn float-right" href="blog.php">Visitar blog</a>
        </div>
      </div>
      <div class="row col-12 pr-0">
        <div class="col-md-4">
          <span>24/05/2019</span>
          <h3>Tittle lorem ipsum sit depscur es</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis praesentium ut tenetur modi unde similique laudantium debitis sed, ea quo magnam ullam.</p>
          <div class="blog-saibaMais">Saiba mais</div>
        </div>
        <div class="col-md-4">
          <span>24/05/2019</span>
          <h3>Tittle lorem ipsum sit depscur es</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis praesentium ut tenetur modi unde similique laudantium debitis sed, ea quo magnam ullam.</p>
          <div class="blog-saibaMais">Saiba mais</div>
        </div>
        <div class="col-md-4">
          <span>24/05/2019</span>
          <h3>Tittle lorem ipsum sit depscur es</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis praesentium ut tenetur modi unde similique laudantium debitis sed, ea quo magnam ullam.</p>
          <div class="blog-saibaMais">Saiba mais</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ____________________ Newsletter ____________________-->
  <? include('includes\newsletter.php'); ?>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>


  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>

</body>

</html>