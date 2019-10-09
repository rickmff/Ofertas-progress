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
    <section class="como-funciona">
      <div class="container">
        <div class="title-section"> 
          <h1>Como funciona ?</h1>
      </div>
        <div class="row col-12">
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
      </div>
    </section>
    <!-- ____________________ DEPOIMENTOS ____________________-->
    <section id="testimonial">
      <div class="row col-12 pm-0">
        <div class="col-6 bg-yellow">
          <div class="card mt-2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
              <div class="w-100 carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <div class="row">
                      <div class="col-sm-3">
                        <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
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
                        <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
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
                        <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
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
        <div class="col-6 bg-black">

        </div>
      </div>
    </section>

    <!-- ____________________ GALLERY ____________________-->
    <? include('includes/gallery.php'); ?>

    <!-- ____________________ BLOG ____________________-->
    <section class="blog">
      <div class="container">
        <div class="row col-12">
          <div class="col-md-4 blog-text">
            <span>24/05/2019</span>
            <h3>Tittle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis praesentium ut tenetur modi unde similique laudantium debitis sed, ea quo magnam ullam, dolorem repellendus earum molestias sapiente ex temporibus repudiandae?</p>
          </div>
          <div class="col-md-4">
            <span>24/05/2019</span>
            <h3>Tittle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis praesentium ut tenetur modi unde similique laudantium debitis sed, ea quo magnam ullam, dolorem repellendus earum molestias sapiente ex temporibus repudiandae?</p>
          </div>
          <div class="col-md-4">
            <span>24/05/2019</span>
            <h3>Tittle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis praesentium ut tenetur modi unde similique laudantium debitis sed, ea quo magnam ullam, dolorem repellendus earum molestias sapiente ex temporibus repudiandae?</p>
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