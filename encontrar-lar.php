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
            <div class="d-flex w-100 justify-content-center py-3">
                <img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" />
                <h1>Encontre meu novo lar</h1>
            </div>
            <div class="header-title-seta">
                <img class="img-fluid" src="assets/image/seta.png" alt="">
            </div>
        </div>
    </section>


    <section id="header-form">
        <div class="container">
            <div class="col-12 text-center">
                <div class="row">
                    <div class="col-md-4 active" id="dados_title">
                        <h2>Seus Dados</h2>
                    </div>
                    <div class="col-md-4" id="localizacao_title">
                        <h2>Localização desejada</h2>
                    </div>
                    <div class="col-md-4" id="caracteristicas_title">
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
                    <div class="col-xs-12 col-md-12 px-5 my-5">
                        <form class="row form-dados" name="formDados" id="formDados" action="javascript:" method="post" onsubmit="enviaDados();">
                            <div class="form-group col-xs-12 col-md-6">
                                <input required="" type="text" name="nome" id="nome" class="form-control">
                                <label>Nome:</label>
                            </div>
                            
                            <div class="form-group col-xs-12 col-md-6">
                                <input type="text" name="email" id="email" class="form-control">
                                <label>E-mail:</label>
                            </div>
                            <div class="form-group col-xs-12 col-md-3">
                                <input required="" type="text" name="celular" id="celular" class="form-control mask_phone">
                                <label>Celular:</label>
                            </div>
                            <div class="form-group col-xs-12 col-md-3">
                                <input required="" type="text" name="telefone" id="telefone" class="form-control mask_phone">
                                <label>Telefone:</label>
                            </div>
                            <div class="form-group col-xs-12 col-md-3">
                                <select required="" class="form-control" name="forma_contato" id="forma_contato">
                                    <option value="" disabled="" selected="">Forma de contato</option>
                                    <option value="Telefone">Telefone</option>
                                    <option value="Celular">Celular</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                    <option value="E-mail">E-mail</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-md-3 iniciar-conversa">
                                <button type="submit" class="btn link-whats col-md-12">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="localizacao" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-5">
                        <form class="row formLocalizacao" name="formLocalizacao" id="formLocalizacao" action="javascript:" method="post" onsubmit="enviaLocalizacao();">

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
                                    <option value="Região Norte">Região Norte</option>
                                    <option value="Região Sul">Região Sul</option>
                                    <option value="Região Leste">Região Leste</option>
                                    <option value="Região Oeste">Região Oeste</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select required="" class="form-control" name="tipo_negociacao" id="tipo_negociacao">
                                    <option value="" disabled="" selected="">Tipo de negociação</option>
                                    <option value="Locação">Locação</option>
                                    <option value="Venda">Venda</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select required="" class="form-control" name="tipo_imovel" id="tipo_imovel">
                                    <option value="" disabled="" selected="">Tipo de imóvel:</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Cobertura">Cobertura</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="ref" id="ref">
                                <button type="submit" class="btn link-whats col-md-12">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="caracteristicas" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-5 my-5">
                        <form class="row formCaracteristicas" name="formCaracteristicas" id="formCaracteristicas" action="javascript:" method="post" onsubmit="enviaCaracteristicas();">
                            <div class="form-group col-md-3">
                                <select required="" class="form-control" name="tem_filhos" id="tem_filhos">
                                    <option value="" disabled="" selected="">Possui filhos?</option>
                                    <option value="Não">Não</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Pretendo">Pretendo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input required="" type="number" step="1" min="0" name="qtd_filhos" id="qtd_filhos" class="form-control">
                                <label>Quantos filhos?</label>
                            </div>
                            <div class="form-group col-md-3">
                                <select required="" class="form-control" name="tem_veiculos" id="tem_veiculos">
                                    <option value="" disabled="" selected="">Possui veículos?</option>
                                    <option value="Não">Não</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Pretendo">Pretendo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 ">
                                <input required="" type="number" step="1" min="0" name="qtd_veiculos" id="qtd_veiculos" class="form-control">
                                <label>Quantos veículos?</label>
                            </div>
                            <div class="col-md-4 mt-3">
                                <input required="" type="number" step="0.01" min="0" name="area_imovel" id="area_imovel" class="form-control">
                                <label>Área do imóvel desejado</label>
                            </div>
                            <div class="col-md-4 mt-3">
                                <input required="" type="number" step="0.01" min="0" name="valor_imovel" id="valor_imovel" class="form-control">
                                <label>Valor do imóvel desejado</label>
                            </div>
                            <div class="col-md-4 mt-3">
                              <input type="hidden" name="ref" id="ref">
                              <button type="submit" class="btn link-whats col-md-12">Procure meu lar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
          <div class="row">
            <div class="col-md-12" id="retorno_msg"></div>
          </div>
        </div>
    </section>


    <!-- ____________________ FOOTER ____________________-->
    <? include('includes/footer.php'); ?>


    <!-- JavaScript -->
    <? include('includesConfig/js.php'); ?>
    <!-- Analytics -->
    <? include('includes/analytics.php'); ?>

<script type="text/javascript">
  ///////////////////////////// DADOS
    function validaDados() {

      d = document.formDados;

      //validar nome
      if (d.nome.value == "") {
        alert('O campo "Nome" deve ser preenchido!');
        d.nome.focus();
        return false;
      }

      //validar email
      if (d.email.value == "") {
        alert('O campo "E-mail" deve ser preenchido!');
        d.email.focus();
        return false;
      } else {
        var email = d.email.value;
        var exclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
        var check = /@[\w\-]+\./;
        var checkend = /\.[a-zA-Z]{2,3}$/;
        if (((email.search(exclude) != -1) || (email.search(check)) == -1) || (email.search(checkend) == -1)) {
          alert('O campo "E-mail" deve ser um endereço válido!');
          d.email.focus();
          return false;
        }
      }

      //validar telefone
      if (d.telefone.value == "") {
        alert('O campo "Telefone" deve ser preenchido!');
        d.telefone.focus();
        return false;
      }

      //validar celular
      if (d.celular.value == "") {
        alert('O campo "Celular" deve ser preenchido!');
        d.celular.focus();
        return false;
      }

      //validar forma_contato
      if (d.forma_contato.value == "") {
        alert('O campo "Forma de contato" deve ser preenchido!');
        d.forma_contato.focus();
        return false;
      }

      return true;
    }

    function enviaDados(){
        form_valido = validaDados();

        if(form_valido){
            var formdata = new FormData($("#formDados")[0]);
            var linkAjax = "./ajax.php?act=sendDados";

            $.ajax({
                type: 'POST',
                url: linkAjax,
                data: formdata ,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    if(!data.ErroEnvio){
                        /*ga('send', 'event', 'envio-contato');*/
                        $("#formDados input, #formDados textarea, #formDados select").val('');
                        $('#formDados input[type=checkbox]').prop('checked', false);
                        $('#dados').hide();
                        $('#dados_title').removeClass('active');
                        $('#localizacao').show();
                        $('#localizacao_title').addClass('active');
                        $('#formLocalizacao #ref').val(data.ref);
                    } else {
                        var msg_retorno = 'Erro: '+data.ErroEnvio;
                        alert(msg_retorno);
                    }
                },
            });
        }
    }
  ///////////////////////////// LOCALIZACAO
    function validaLocalizacao() {

      d = document.formLocalizacao;

      //validar nome
      if (d.estado.value == "") {
        alert('O campo "Estado" deve ser preenchido!');
        d.estado.focus();
        return false;
      }

      //validar cidade
      if (d.cidade.value == "") {
        alert('O campo "Cidade" deve ser preenchido!');
        d.cidade.focus();
        return false;
      }

      //validar regiao
      if (d.regiao.value == "") {
        alert('O campo "Região" deve ser preenchido!');
        d.regiao.focus();
        return false;
      }

      //validar tipo_negociacao
      if (d.tipo_negociacao.value == "") {
        alert('O campo "Tipo de negociação" deve ser preenchido!');
        d.tipo_negociacao.focus();
        return false;
      }

      //validar tipo_imovel
      if (d.tipo_imovel.value == "") {
        alert('O campo "Tipo de imóvel" deve ser preenchido!');
        d.tipo_imovel.focus();
        return false;
      }

      return true;
    }

    function enviaLocalizacao(){
        form_valido = validaLocalizacao();

        if(form_valido){
            var formdata = new FormData($("#formLocalizacao")[0]);
            var linkAjax = "./ajax.php?act=sendLocalizacao";

            $.ajax({
                type: 'POST',
                url: linkAjax,
                data: formdata ,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    if(!data.ErroEnvio){
                        /*ga('send', 'event', 'envio-contato');*/
                        $("#formLocalizacao input, #formLocalizacao textarea, #formLocalizacao select").val('');
                        $('#formLocalizacao input[type=checkbox]').prop('checked', false);
                        $('#localizacao').hide();
                        $('#localizacao_title').removeClass('active');
                        $('#caracteristicas').show();
                        $('#caracteristicas_title').addClass('active');
                        $('#formCaracteristicas #ref').val(data.ref);
                    } else{
                        var msg_retorno = 'Erro: '+data.ErroEnvio;
                        alert(msg_retorno);
                    }
                },
            });
        }
    }
  ///////////////////////////// CARACTERISTICAS
    function validaCaracteristicas() {

      d = document.formCaracteristicas;

      //validar tem_filhos
      if (d.tem_filhos.value == "") {
        alert('O campo "Possui filhos?" deve ser preenchido!');
        d.tem_filhos.focus();
        return false;
      }

      //validar qtd_filhos
      if (d.qtd_filhos.value == "") {
        alert('O campo "Quantos filhos?" deve ser preenchido!');
        d.qtd_filhos.focus();
        return false;
      }

      //validar tem_veiculos
      if (d.tem_veiculos.value == "") {
        alert('O campo "Possui veículos?" deve ser preenchido!');
        d.tem_veiculos.focus();
        return false;
      }

      //validar qtd_veiculos
      if (d.qtd_veiculos.value == "") {
        alert('O campo "Quantos veículos?" deve ser preenchido!');
        d.qtd_veiculos.focus();
        return false;
      }

      //validar area_imovel
      if (d.area_imovel.value == "") {
        alert('O campo "Área do imóvel desejado" deve ser preenchido!');
        d.area_imovel.focus();
        return false;
      }

      //validar valor_imovel
      if (d.valor_imovel.value == "") {
        alert('O campo "Área do imóvel desejado" deve ser preenchido!');
        d.valor_imovel.focus();
        return false;
      }

      return true;
    }

    function enviaCaracteristicas(){
        form_valido = validaCaracteristicas();

        if(form_valido){
            var formdata = new FormData($("#formCaracteristicas")[0]);
            var linkAjax = "./ajax.php?act=sendCaracteristicas";

            $.ajax({
                type: 'POST',
                url: linkAjax,
                data: formdata ,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    if(!data.ErroEnvio){
                        /*ga('send', 'event', 'envio-contato');*/
                        $("#formCaracteristicas input, #formCaracteristicas textarea, #formCaracteristicas select").val('');
                        $('#formCaracteristicas input[type=checkbox]').prop('checked', false);
                        $('#caracteristicas').hide();
                        $('#caracteristicas_title').removeClass('active');
                        $('#dados').show();
                        $('#dados_title').addClass('active');
                        var msg_retorno = data.nome+', sua solicitação foi enviada com sucesso! Retornaremos em breve.';
                        $('#retorno_msg').html('<div class="alert alert-success">'+msg_retorno+'</div>');
                    } else{
                        var msg_retorno = 'Erro: '+data.ErroEnvio;
                        alert(msg_retorno);
                    }
                },
            });
        }
    }
</script>

</body>

</html>