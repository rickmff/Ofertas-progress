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

  <section id="header-title">
		<div class="container">
			<span><a href="#">Home</a> / Sobre</span>
			<div class="d-flex w-100 justify-content-center">
				<img class="icone-regiao img-fluid mr-3" src="assets\image\icon-regiao.png" />
				<h1>Nossa História</h1>
			</div>
			<div class="header-title-seta">
				<img class="img-fluid" src="assets\image\seta.png" alt="">
			</div>
		</div>
	</section>

  <!-- ____________________ QUEM SOMOS ____________________-->
  <section id="sobre">
    <div class="container my-5">
      <div class="row">
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

  <!-- ____________________ SOBRE CAROUSEL ____________________-->
  <section id="carouselSobre">
    <div class="container">
      <div class="col-12 my-5 pl-0">
        <div id="sobreCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#sobreCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#sobreCarousel" data-slide-to="1"></li>
            <li data-target="#sobreCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="#">
                    <img src="http://placehold.it/250x250" alt="Image">
                  </a>
                </div>
              </div>
            </div>
          </div>
  </section>
  
  <!-- ____________________ VALORES ____________________-->
<? /*
  <section id="valores">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Missão</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque sed veniam magni, mollitia consequatur similique vero architecto at explicabo iusto, expedita, laborum illo voluptate earum dolor possimus eaque eum! Exercitationem!
          </p>
        </div>
        <div class="col-md-4">
          <h3>Visão</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quia, deserunt repellat dolor in ea blanditiis, rerum quasi magni beatae iusto fugiat, est dolores corporis sapiente! Dolore nobis placeat perspiciatis!
          </p>
        </div>
        <div class="col-md-4">
          <h3>Valores</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, aperiam inventore. Aspernatur porro, cum quidem neque doloribus tempora. Dignissimos ducimus exercitationem animi harum distinctio neque minima cumque vero, delectus officiis!
          </p>
        </div>
      </div>
    </div>
  </section> */
  ?>

  <!-- ____________________ COMO FUNCIONA ____________________-->
  <section id="como-funciona-div-sobre">
    <? include('includes/como-funciona-div.php'); ?>
  </section>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>
</body>

</html>