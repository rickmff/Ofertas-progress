<section id="newsletter">
  <div class="seta">
    <img class="img-fluid" src="assets/image/seta.png" alt="seta logo ofertas imobiliarias">
  </div>
  <div class="container prl-0 padding-xs">
    <div class="row col-12 mrl-0 prl-0 pt-6">
      <div class="col-xs-12 col-md-5 pl-0 pr-4 pr-xs-0">
        <h2>Receba nossa novidades</h2>
        <p class="hidden-mobile">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi sint error amet dolores cumque.
        </p>
      </div>
      <div class="col-xs-12 col-md-7 prl-0">
        <form name="frm_newsletter" id="frm_newsletter" action="javascript:" method="post" onsubmit="enviaNewsletter();">

          <div class="form-row mt-4">
            <div class="col-xs-12">
              <input type="text" name="nome_news" id="nome_news">
              <label>Nome</label>
            </div>
            <div class="col-xs-12">
              <input type="email" name="email_news" id="email_news" placeholder="Email">
            </div>
            <button class="btn mrl-0" type="submit">Receber novidades</button>
          </div>

        </form>
        <br>
        <div class="col-md-12" id="retorno_msg_newsletter"></div>
      </div>
    </div>
  </div>
</section>
<script>
  function validaFormNewsletter() {
    d = document.frm_newsletter;
    //validar nome
    if (d.nome_news.value == "") {
      alert("O campo Nome deve ser preenchido!");
      d.nome_news.focus();
      return false;
    }
    //validar email
    if (d.email_news.value == "") {
      alert("O campo E-mail deve ser preenchido!");
      d.email_news.focus();
      return false;
    } else {
      var email = d.email_news.value;
      var exclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
      var check = /@[\w\-]+\./;
      var checkend = /\.[a-zA-Z]{2,3}$/;
      if (((email.search(exclude) != -1) || (email.search(check)) == -1) || (email.search(checkend) == -1)) {
        alert("O campo E-mail deve ser um endereço válido!");
        d.email_news.focus();
        return false;
      }
    }

    return true;
  }

  function enviaNewsletter() {
    form_valido = validaFormNewsletter();
    if (form_valido) {
      var formdata = new FormData($("#frm_newsletter")[0]);
      var linkAjax = "./ajax.php?act=sendNewsletter";

      formdata.append('session', '<?= session_id() ?>');
      $.ajax({
        type: 'POST',
        url: linkAjax,
        data: formdata,
        processData: false,
        contentType: false,
        success: function(data) {
          console.log(data);
          data = $.parseJSON(data);
          if (!data.ErroEnvio) {
            /*ga('send', 'event', 'envio-contato');*/
            var msg_retorno = data.nome + ', seu cadastro foi realizado com sucesso! Em breve enviaremos novidades.';
            $('#retorno_msg_newsletter').html('<div class="alert alert-success">' + msg_retorno + '</div>');
            $("#frm_newsletter input, #frm_newsletter textarea, #frm_newsletter select").val('');
            $('#frm_newsletter input[type=checkbox]').prop('checked', false);

          } else {
            var msg_retorno = 'Erro: ' + data.ErroEnvio;
            $('#retorno_msg_newsletter').html('<div class="alert alert-warning">' + msg_retorno + '</div>');

          }
        },
      });
    }

  }
</script>