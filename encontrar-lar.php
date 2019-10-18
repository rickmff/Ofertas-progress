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

    <!-- ____________________ ENCONTRE MEU LAR ____________________-->
    <section id="header-title">
        <div class="container">
            <span><a href="#">Home</a> / Encontre meu lar</span>
            <div class="d-flex w-100 justify-content-center">
                <img class="icone-regiao img-fluid mr-3" src="assets\image\icon-regiao.png" />
                <h1>Encontre meu lar</h1>
            </div>
            <div class="header-title-seta">
                <img class="img-fluid" src="assets/image/seta.png" alt="">
            </div>
        </div>
    </section>


    <section id="header-form">
        <div class="container pt-5 pb-4">
            <div class="col-12 text-center">
                <div class="row">
                    <div class="col-md-4 active">
                        <h2>Seus Dados</h2>
                    </div>
                    <div class="col-md-4">
                        <h2>Localização desejada</h2>
                    </div>
                    <div class="col-md-4">
                        <h2>Suas características</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <section id="dados">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-5 my-5">
                        <form class="row form-dados" name="formDados" id="formDados" action="javascript:" method="post" onsubmit="">
                            <div class="form-group col-md-6">
                                <input required="" type="text" name="nome" id="nome" class="form-control">
                                <label>Nome:</label>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="email" id="email" class="form-control">
                                <label>E-mail:</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input required="" type="text" name="celular" id="celular" class="form-control mask_phone">
                                <label>Celular:</label>
                            </div>
                            <div class="form-group col-md-3">
                                <input required="" type="text" name="telefone" id="telefone" class="form-control mask_phone">
                                <label>Telefone:</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select required="" class="form-control" name="forma_contato" id="forma_contato">
                                    <option value="" disabled="" selected="">Forma de contato</option>
                                    <option value="telefone">Telefone</option>
                                    <option value="celular">Celular</option>
                                    <option value="whatsapp">Whatsapp</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>
                            <div class="col-md-3 iniciar-conversa">
                                <button type="submit" class="btn link-whats col-md-12">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="localizacao">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form class="row formLocalizacao" name="formLocalizacao" id="formLocalizacao" action="javascript:" method="post" onsubmit="">

                            <div class="form-group col-md-4">
                                <select required="" class="form-control" name="estado" id="estado">
                                    <option value="" disabled="" selected=""><label>UF</label></option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <input required="" type="text" name="cidade" id="cidade" class="form-control">
                                <label>Cidade:</label>
                            </div>
                            <div class="form-group col-md-4">
                                <select required="" class="form-control" name="regiao" id="regiao">
                                    <option value="" disabled="" selected="">Região</option>
                                    <option value="regiao_norte">Regiao Norte</option>
                                    <option value="regiao_leste">Regiao Leste</option>
                                    <option value="regiao_oeste">Regiao Oeste</option>
                                    <option value="regiao_sul">Regiao Sul</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select required="" class="form-control" name="estado" id="estado">
                                    <option value="" disabled="" selected="">Tipo de negociação</option>
                                    <option value="">$</option>
                                    <option value="">$</option>
                                    <option value="">$</option>
                                    <option value="">$</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select required="" class="form-control" name="estado" id="estado">
                                    <option value="" disabled="" selected="">Tipo de imóvel:</option>
                                    <option value="casa">Casa</option>
                                    <option value="apartamento">Apartamento</option>
                                    <option value="cobertura">Cobertura</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn link-whats col-md-12">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="caracteristicas">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-5 my-5">
                        <form class="row formLocalizacao" name="formLocalizacao" id="formLocalizacao" action="javascript:" method="post" onsubmit="">
                            <div class="form-group col-md-3">
                                <select required="" class="form-control" name="estado" id="estado">
                                    <option value="" disabled="" selected="">Possui filhos</option>
                                    <option value="">Não</option>
                                    <option value="">Sim</option>
                                    <option value="">Pretendo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input required="" type="text" name="cidade" id="cidade" class="form-control">
                                <label>Se sim quantos?</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select required="" class="form-control" name="estado" id="estado">
                                    <option value="" disabled="" selected="">Possui veículos</option>
                                    <option value="">Não</option>
                                    <option value="">Sim</option>
                                    <option value="">Pretendo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 ">
                                <input required="" type="text" name="cidade" id="cidade" class="form-control">
                                <label>Se sim quantos?</label>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label>Area do imóvel desejado</label>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label>Valor do imóvel desejado</label>
                            </div>
                            <div class="col-md-4 mt-3">
                                <button type="submit" class="btn link-whats col-md-12">Procure meu lar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <!-- ____________________ FOOTER ____________________-->
    <? include('includes/footer.php'); ?>


    <!-- JavaScript -->
    <? include('includesConfig/js.php'); ?>
    <!-- Analytics -->
    <? include('includes/analytics.php'); ?>
</body>

</html>