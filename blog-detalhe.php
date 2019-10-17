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

  <!-- ____________________ BLOG DETALHE ____________________-->
  <section id="sobre">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-12 text-left mb-2">
          <h1>TITTLE LOREM IPSUM SIT DEPSCUR ES</h1>
          <hr>
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quidem illo consectetur eius at, ad eveniet nemo adipisci cum possimus quasi voluptatem hic, magni quis voluptatum ipsam impedit error corrupti!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis consequatur error nam iste, illum provident eos dolorum enim expedita. Odit tempore unde reiciendis quibusdam aperiam, iure quis doloremque nostrum quod!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quidem illo consectetur eius at, ad eveniet nemo adipisci cum possimus quasi voluptatem hic, magni quis voluptatum ipsam impedit error corrupti!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis consequatur error nam iste, illum provident eos dolorum enim expedita. Odit tempore unde reiciendis quibusdam aperiam, iure quis doloremque nostrum quod!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quidem illo consectetur eius at, ad eveniet nemo adipisci cum possimus quasi voluptatem hic, magni quis voluptatum ipsam impedit error corrupti!
          </p>
        </div>
        <div class="col-md-6">
          <img src="https://via.placeholder.com/500x500" alt="">
        </div>
      </div>
  </section>

  <section id="blogCarousel">

    <div class="container my-5">
      <div class="row">
        <div class="col-6">
          <div id="carouselBlog" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselBlog" data-slide-to="0" class="active"></li>
              <li data-target="#carouselBlog" data-slide-to="1"></li>
              <li data-target="#carouselBlog" data-slide-to="2"></li>
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
        <div class="col-6">
          <div class="text-center mt-5">
            <a class="btn" href="buscar-lar-detalhe.php">Empreendimento X</a>
          </div>
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