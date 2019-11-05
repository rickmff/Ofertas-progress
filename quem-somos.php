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
      <span><a href="home">Home</a> / Sobre</span>
      <div class="d-flex w-100 justify-content-center py-3">
        <img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone-regiao" />
        <h1>Nossa História</h1>
      </div>
      <div class="header-title-seta">
        <img class="img-fluid" src="assets/image/seta.png" alt="seta">
      </div>
    </div>
  </section>

  <!-- ____________________ QUEM SOMOS ____________________-->
  <section id="sobre">
    <div class="container my-5">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <p>
            <img class="img-sobre" src="assets/image/escritorio-ofertas.jpg" alt="Imagem do escritorio Ofertas Imobiliaria">
            Pensamos além da atividade exercida pelo corretor de imóveis, pensamos além da simples intermediação e remuneração.
            Pretendemos atender um problema encontrado pelas pessoas que ingressam na desgastante jornada de comprar um imóvel no país.
            Procuramos entender e satisfazer as necessidades dessas pessoas, através de um olhar empático sobre suas individualidades. Realizando um atendimento personalizado e com hora marcada, onde coletamos informações que nos capacitam a refletir, pensar e a partir desse ponto...
            Organizar, sistematizar e sintetizar a real necessidade e capacidade de compra dessa pessoa.
            Depois cruzamos essas informações com nosso banco de dados sobre as ofertas de imóveis em cada região da cidade, tornando mais simples toda a experiência de apresentar os possíveis imóveis ao futuro comprador.

            Entendemos que a jornada de compra de um imóvel sempre vem acompanhada de uma carga emocional muito grande, e não podem ser resolvidas com simples cliques e intermináveis visitas a imóveis, além do desconforto causado pela insistência de corretores que simplesmente querem induzir os compradores aos imóveis que possuem em sua carteira, sem se preocupar se o mesmo atende na totalidade as necessidades dos compradores.

            Basicamente ofertamos imóveis, através de experiências inovadoras e personalizadas, facilitando toda jornada de compra. Para que nosso slogan realmente faça sentido: BEM MAIS FÁCIL ENCONTRAR SEU NOVO LAR!


          </p>
        </div>
      </div>
  </section>

  <!-- ____________________ SOBRE CAROUSEL ____________________-->
  <section id="carouselSobre" class="hidden-mobile">
    <div class="container">
      <div class="col-12 my-5 pb-5   pl-0">
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
  <section id="como-funciona-div-sobre" class="mt-4">
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