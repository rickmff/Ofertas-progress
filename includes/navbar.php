<!-- ____________________ NAVBAR ____________________-->
<header>
  <nav id="menu" class="navbar navbar-expand-sm navbar-light fixed-top bg-light expand">
    <div class="container">
      <a class="navbar-brand" href="home"> <img class="img-fluid" src="assets/image/logo-navbar.png" alt="logo ofertas imobiliarias"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav mx-auto justify-content-center">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Quem somos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sobre">Sobre</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="como-funciona">Como funciona</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="casos-de-sucesso">Casos de sucesso</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="regioes.php">Regiões</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="blog">Blog</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contato">Contato</a>
          </li>
        </ul>

        <a href="encontrar-lar.php" class="btn hidden-desktop">
          <img class="btn-icone" src="assets/image/btn-icon-chave.png" alt="icon-chave"><span>Encontre meu lar</span>
        </a>

        <a href="encontrar-lar.php" class="btn hidden-mobile">
          <img class="btn-icone" src="assets/image/btn-icon-chave.png" alt="icon-chave"><span>Encontre meu novo lar</span>
        </a>

      </div>
    </div>
  </nav>
</header>
<!-- WhatsApp Window -->
<? include('includes/whatsapp-window.php'); ?>