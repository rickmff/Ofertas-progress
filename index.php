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

  <main role="main">

    <!-- ____________________ BANNER ____________________-->
    <? include('includes/banner.php'); ?>

    <!-- ____________________ ABOUT ____________________-->
    <section id="como-funciona">
      <div class="container">
        <div class="title-section">
          <h1>Como funciona ?</h1>
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
          <div class="card 100x100">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
              <div class="w-100 carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <div class="row">
                      <div class="col-sm-3">
                        <img src="http://placehold.it/100x100" alt="Foto depoimento" class="">
                      </div>
                      <div class="col-sm-9">
                        <h3>Gives me hope</h3>
                        <small>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</small>
                        <small class="smallest mute">- willi</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <div class="row">
                      <div class="col-sm-3">
                        <img src="http://placehold.it/100x100" alt="Foto depoimento" class="">
                      </div>
                      <div class="col-sm-9">
                        <h3>You will love it.</h3>
                        <small>Great product. It came in the mail packaged very well. The package the product comes in is very nice. Product itself, has worked very well.</small>
                        <small class="smallest mute">- Amazon Customer</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <div class="row">
                      <div class="col-sm-3">
                        <img src="http://placehold.it/100x100" alt="Foto depoimento" class="">
                      </div>
                      <div class="col-sm-9">
                        <h3>Velvet pouch!</h3>
                        <small>Just as describe, different weights gives you several ways to exercise. I especially like the velvet pouch so I can place in my drawer.</small>
                        <small class="smallest mute">- Amazon Customer</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 bg-black">
          <img src="http://placehold.it/1000x500" alt="Foto depoimento" class="">
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

      <div class="container">
        <div class="row col-12 py-5">

          <div class="col-5">
            <h2>Receba nossa novidades</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi sint error amet dolores cumque.
            </p>
          </div>

          <div class="col-7">
            <form>
              <div class="form-row">
                <div class="col">
                  <input class="form-control" type="text" placeholder="Digite seu nome">
                </div>
                <div class="col">
                  <input class="form-control" type="text" placeholder="Seu Email">
                </div>
                <button class="btn--white" type="submit">Receber novidades</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



    <!-- ____________________ FOOTER ____________________-->
    <? include('includes/footer.php'); ?>

  </main>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>

</body>

</html>