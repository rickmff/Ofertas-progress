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

<body>
    <!-- ____________________ NAVBAR ____________________-->
    <? include('includes/navbar.php'); ?>

    <section id="header-title" class="mb-4">
        <div class="container">
            <span><a href="home">Home</a> / Regiões</span>
            <div class="d-flex w-100 justify-content-center py-3">
                <img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao" />
                <h1>Regiões</h1>
            </div>
            <div class="header-title-seta">
                <img class="img-fluid" src="assets/image/seta.png" alt="icone seta">
            </div>
        </div>
    </section>

    <section id="regioes-page">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-xs-12 col-md-4 mt-3">
                    <a href=":javascript">
                        <h2>Nome da Regiao</h2>
                        <img class="img-fluid" src="https://via.placeholder.com/500" alt="Imagem ilustrativa da regiao">
                        <br>
                        <p>Nome da cidade</p>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 mt-3">
                    <a href=":javascript">
                        <h2>Nome da Regiao</h2>
                        <img class="img-fluid" src="https://via.placeholder.com/500" alt="Imagem ilustrativa da regiao">
                        <br>
                        <p>Nome da cidade</p>
                    </a>
                </div>
                <div class="col-xs-12 col-md-4 mt-3">
                    <a href=":javascript">
                        <h2>Nome da Regiao</h2>
                        <img class="img-fluid" src="https://via.placeholder.com/500" alt="Imagem ilustrativa da regiao">
                        <br>
                        <p>Nome da cidade</p>
                    </a>
                </div>
                <div class="row mt-3">
                    <div class="col-xs-12 col-md-4 mt-3">
                        <a href=":javascript">
                            <h2>Nome da Regiao</h2>
                            <img class="img-fluid" src="https://via.placeholder.com/500" alt="Imagem ilustrativa da regiao">
                            <br>
                            <p>Nome da cidade</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 mt-3">
                        <a href=":javascript">
                            <h2>Nome da Regiao</h2>
                            <img class="img-fluid" src="https://via.placeholder.com/500" alt="Imagem ilustrativa da regiao">
                            <br>
                            <p>Nome da cidade</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 mt-3 mb-4">
                        <a href=":javascript">
                            <h2>Nome da Regiao</h2>
                            <img class="img-fluid" src="https://via.placeholder.com/500" alt="Imagem ilustrativa da regiao">
                            <br>
                            <p>Nome da cidade</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ____________________ ENCONTRE MEU NOVO LAR ____________________-->
    <? include('includes/atendimento.php'); ?>

    <!-- ____________________ FOOTER ____________________-->
    <? include('includes/footer.php'); ?>

    <!-- JavaScript -->
    <? include('includesConfig/js.php'); ?>
    <!-- Analytics -->
    <? include('includes/analytics.php'); ?>
</body>

</html>