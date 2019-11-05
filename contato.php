<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" itemscope itemtype="http://schema.org/WebPage">
<!--<![endif]-->

<head>
	<? include('includesConfig/metas.php'); ?>

	<? include('includesConfig/css.php'); ?>
</head>

<body>
	<? include('includes/navbar.php'); ?>

	<section id="header-title">
		<div class="container">
			<span><a href="home">Home</a> / Contato</span>
			<div class="d-flex w-100 justify-content-center py-3">
				<img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao" />
				<h1>Contato</h1>
			</div>
			<div class="header-title-seta">
				<img class="img-fluid" src="assets/image/seta.png" alt="seta">
			</div>
		</div>
	</section>

	<section id="contato">
		<div class="page fale-conosco">
			<!--Elemento de formatação-->
			<div class="container mt-5 pt-5">
				<div class="row">
					<div class="col-md-6">
						<form action="" class="formulario" name="formulario" id="formulario" action="javascript:" method="post" onsubmit="enviaContato();">
							<div class="form-row">

								<div class="col-xs-12 col-md-6 mb-4">
									<div class="form">
										<input required type="text" name="nome" id="nome" class="form-control">
										<label for="name" class="label-name">
											<span class="content-name">Nome</span>
										</label>
									</div>
								</div>

								<div class="col-xs-12 col-md-6 mb-4">
									<div class="form">
										<input required type="email" name="email" id="email" class="form-control">
										<label class="label-name">
											<span class="content-name">E-mail</span>
										</label>
									</div>
								</div>

								<div class="col-xs-12 col-md-6 mb-4">
									<div class="form">
										<input required type="text" name="telefone" id="telefone" onKeyPress="return txtBoxFormat(this, '(99)99999-9999', event);" maxlength="16" class="form-control">
										<label class="label-name">
											<span class="content-name">Telefone</span>
										</label>
									</div>
								</div>
								<div class="col-xs-12 col-md-6 mb-4">
									<div class="form">
										<input required type="text" name="celular" id="celular" onKeyPress="return txtBoxFormat(this, '(99)99999-9999', event);" maxlength="16" class="form-control">
										<label class="label-name">
											<span class="content-name">Celular</span>
										</label>
									</div>
								</div>
								<div class="col-md-8 mb-4">
									<div class="form">
										<input required type="text" name="cidade" id="cidade" class="form-control">
										<label class="label-name">
											<span class="content-name">Cidade</span>
										</label>
									</div>
								</div>
								<div class="col-md-4 mb-4">
									<div class="form">
										<select required class="form-control" name="estado" id="estado">
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
								</div>

								<div class="col-md-12 mb-4">
									<div class="form">
										<input required type="text" name="assunto" id="assunto" class="form-control">
										<label class="label-name">
											<span class="content-name">Assunto</span>
										</label>
									</div>
								</div>

								<div class="col-md-12 mt-1">
									<div class="form">
										<textarea required name="mensagem" id="mensagem" rows="4" class="form-control" placeholder="Mensagem"></textarea>

									</div>
								</div>

								<div class="col-md-12 text-right my-3">
									<button type="submit" class="btn btn1">Enviar</button>
								</div>
							</div>

						</form>
					</div>

					<div class="col-md-6 text-right">
						<div class="mapa embed-responsive embed-responsive-16by9">
							<iframe name="mapframe" class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.075281590816!2d-47.45983878502353!3d-23.493797784716428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58aa55e545999%3A0xcd7c4afccd01ce66!2sAg%C3%AAncia+Kombi+Design!5e0!3m2!1spt-BR!2sbr!4v1487678317611" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="bg-gray mt-3">
							<p>
								Rua Comendador Hermelino Matarazzo, 204, Vila Santa Rita<br>CEP: 18080-000, Sorocaba/SP<br>
								<span class="fone">Tel: (15) 3033.8668</span>
							</p>
						</div>
						<div class="col-md-12 text-right my-3 pr-0">
							<button type="submit" class="btn">Traçar rota</button>
						</div>
					</div>

					<div class="col-md-12" id="retorno_msg_contato"></div>
				</div>
			</div>

		</div>
	</section>
	<!--Fim do elemento de formatação-->

	<? include('includes/footer.php'); ?>

	<? include('includesConfig/js.php'); ?>

	<script>
		function validaForm() {

			d = document.formulario;

			//validar nome
			if (d.nome.value == "") {
				alert("O campo Nome deve ser preenchido!");
				d.nome.focus();
				return false;
			}

			//validar email
			if (d.email.value == "") {
				alert("O campo E-mail deve ser preenchido!");
				d.email.focus();
				return false;
			} else {
				var email = d.email.value;
				var exclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
				var check = /@[\w\-]+\./;
				var checkend = /\.[a-zA-Z]{2,3}$/;
				if (((email.search(exclude) != -1) || (email.search(check)) == -1) || (email.search(checkend) == -1)) {
					alert("O campo E-mail deve ser um endereço válido!");
					d.email.focus();
					return false;
				}
			}

			//validar telefone
			if (d.telefone.value == "") {
				alert("O campo Telefone deve ser preenchido!");
				d.telefone.focus();
				return false;
			}

			//validar celular
			if (d.celular.value == "") {
				alert("O campo Celular deve ser preenchido!");
				d.celular.focus();
				return false;
			}

			//validar cidade
			if (d.cidade.value == "") {
				alert("O campo Cidade deve ser preenchido!");
				d.cidade.focus();
				return false;
			}

			//validar estado
			if (d.estado.value == "") {
				alert("O campo Estado deve ser preenchido!");
				d.estado.focus();
				return false;
			}

			//validar mensagem
			if (d.mensagem.value == "") {
				alert("O campo Mensagem deve ser preenchido!");
				d.mensagem.focus();
				return false;
			}

			return true;
		}

		function enviaContato() {
			form_valido = validaForm();

			if (form_valido) {
				var formdata = new FormData($("#formulario")[0]);
				var linkAjax = "./ajax.php?act=sendContato";

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
							var msg_retorno = data.nome + ', sua mensagem foi enviada com sucesso! Retornaremos em breve.';
							$('#retorno_msg_contato').html('<div class="alert alert-success">' + msg_retorno + '</div>');
							$("#formulario input, #formulario textarea, #formulario select").val('');
							$('#formulario input[type=checkbox]').prop('checked', false);

						} else {
							var msg_retorno = 'Erro: ' + data.ErroEnvio;
							$('#retorno_msg_contato').html('<div class="alert alert-warning">' + msg_retorno + '</div>');

						}
					},
				});
			}
		}
	</script>

	<script>
		$(document).ready(function() {
			$(".overlay").click(function() {
				$(this).fadeOut();
			});
		});
	</script>

	<? include('includes/analytics.php'); ?>

</body>

</html>