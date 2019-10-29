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
			<span><a href="home">Home</a> / Como funciona</span>
			<div class="d-flex w-100 justify-content-center py-3">
				<img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao"/>
				<h1>Como funciona ?</h1>
			</div>
			<div class="header-title-seta">
				<img class="img-fluid" src="assets/image/seta.png" alt="icone seta">
			</div>
		</div>
	</section>

  <!-- ____________________ COMO FUNCIONA ____________________-->
  <section class="como-funciona">
      <div class="container mt-5">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <div class="text-cf">
                <img src="assets/image/seta.png" alt="seta">
                <label>1º</label>
                <p>
                  Recebemos os leads através de diversos canais e campanhas de entrada (Site, E-mail, Whatsapp, Facebook, Instagram, ofertas ativas).
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-cf">
                <img src="assets/image/seta.png" alt="seta logo ofertas imobiliarias indicando as etapas">
                <label>2º</label>
                <p>
                  Os leads são classificados pelo nosso departamento de Pré Venda que tem a função de posicionar os leads em diferentes níveis
                  dentro da jornada de compra. Com a propósito de oferecer conteúdo para os iniciantes da jornada e agendar visitas para os leads
                  mais próximos ao final da jornada.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-cf">
                <img src="assets/image/seta.png" alt="seta logo ofertas imobiliarias indicando as etapas">
                <label>3º</label>
                <p>
                  Os clientes agendados são atendidos de forma personalizada com hora marcada, nessa primeira visita ele conhece sobre a forma de
                  atuação da empresa e iniciamos o relacionamento para entendermos o momento da jornada desse cliente.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-cf">
                <img src="assets/image/seta.png" alt="seta logo ofertas imobiliarias indicando as etapas">
                <label>4º</label>
                <p>
                  Buscamos entender as reais necessidades dessas pessoas, através do olhar empático sobre suas individualidades. Para que assim
                  possamos satisfazer suas futuras necessidades.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-cf">
                <img src="assets/image/seta.png" alt="seta logo ofertas imobiliarias indicando as etapas">
                <label>5º</label>
                <p>
                  Após as primeiras entrevistas, nos capacitamos, refletimos, pensamos, organizamos, sistematizamos e sintetizamos toda essa informação.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-cf text-cf-margin">
                <img src="assets/image/seta.png" alt="seta logo ofertas imobiliarias indicando as etapas">
                <label>6º</label>
                <p>
                  Cruzamos o perfil de cada cliente com nosso banco de dados, para encontrarmos através de 3 INDICADORES: Projeto, Localização e Capacidade Financeira o imóvel que melhor atenda ao determinado perfil.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="text-cf text-cf-margin">
                <img src="assets/image/seta.png" alt="seta logo ofertas imobiliarias indicando as etapas">
                <label>7º</label>
                <p>
                  Com a decisão tomada pelo comprador, iniciamos o processo de compra. Acompanhando a jornada até após a entrega das chaves.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  
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