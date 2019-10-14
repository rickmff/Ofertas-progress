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

  <!-- ____________________ ABOUT ____________________-->
  <section id="como-funciona">
    <div class="container">
      <div class="title-section">
        <h1>Como funciona?</h1>
      </div>
      <div class="row col-12 py-md-4">
        <div class="col-md-4">
          <div class="icon_div">
            <span><img src="assets\image\comofunciona-icon1.png"></span>
          </div>
          <div class="text_div">
            <span>Lorem ipsum </span><br>
            <span>Description</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon_div">
            <span><img src="assets\image\comofunciona-icon2.png"></span>
          </div>
          <div class="text_div">
            <span>Lorem ipsum </span><br>
            <span>Description</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon_div">
            <span><img src="assets\image\comofunciona-icon3.png"></span>
          </div>
          <div class="text_div">
            <span>Lorem ipsum </span><br>
            <span>Description</span>
          </div>
        </div>
      </div>
      <div class="btn-saibaMais">
        <a href="" class="btn">Saiba Mais</a>
      </div>
    </div>
  </section>

  <!-- ____________________ DEPOIMENTOS ____________________-->
  <section id="testimonial">
    <div class="row col-12 pm-0">
      <div class="col-md-6 col-xs-12 bg-yellow">
        <div class="container">
          <div class="row col-12 pr-0 mr-0">
            <div class="col-4">
              <img src="http://placehold.it/150x150" alt="">
            </div>
            <div class="col-8 pr-0">
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cum facere cupiditate in, dolore, nulla aliquam non dolores </p>
              <a class="btn w-100" href="#">Maria da silva - Sorocaba/SP | Empreendimento X</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-6 col-xs-12 bg-black">
        <img src="http://placehold.it/650x500" alt="Foto depoimento" class="">
      </div>
    </div>
  </section>

  <!-- ____________________ GALLERY ____________________-->
  <? include('includes/gallery.php'); ?>

  <!-- ____________________ BLOG ____________________-->
  <section id="blog">
    <div class="container">
      <div class="row col-12 mb-xs-3 mb-md-5">
        <div class="col-7">
          <h2>Últimas publicações do blog</h2>
        </div>
        <div class="col-5">
          <a class="btn float-right" href="blog.php">Visitar blog</a>
        </div>
      </div>
      <? include('includes/blog-div.php'); ?>
    </div>
  </section>

  <!-- ____________________ Newsletter ____________________-->
  <section id="newsletter">
    <div class="seta">
      <img class="img-fluid" src="assets\image\seta.png" alt="">
    </div>
    <div class="container prl-0">
      <div class="row col-12 mrl-0 prl-0 py-5">
        <div class="col-5 pl-0 pr-4">
          <h2>Receba nossa novidades</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi sint error amet dolores cumque.
          </p>
        </div>
        <div class="col-7 prl-0">
          <form>
            <div class="form-row mt-4">
              <div class="col">
                <input type="text"><span></span>
                <label>Nome</label>
              </div>
              <div class="col">
                <input type="email"><span></span>
                <label>Email</label>
              </div>
              <button class="btn mrl-0">Receber novidades</button>
            </div>
          </form>
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