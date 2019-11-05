<?
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br" itemscope itemtype="http://schema.org/WebPage">
<!--<![endif]-->

<head>
	<!-- ____________________ CONIFG METAS ____________________-->
	<? include('includesConfig/metas.php'); ?>

	<!-- ____________________ CONFIG CSS ____________________-->
	<? include('includesConfig/css.php'); ?>
</head>

<body>
	<!-- ____________________ NAVBAR ____________________-->
	<? include('includes/navbar.php'); ?>

	<?

	if (is_numeric($_GET['ref'])) {
		$resRegiao = mysql_query("SELECT * FROM site_tb_regioes WHERE id_regiao = '" . $_GET['ref'] . "'");
		if (mysql_num_rows($resRegiao)) {
			$rowRegiao = mysql_fetch_array($resRegiao);

			$resFotos = mysql_query("SELECT * FROM site_tb_regioes_fotos WHERE ref = '" . $rowRegiao['id_regiao'] . "' ORDER BY id_foto DESC");
			$qtdFotos = mysql_num_rows($resFotos);

			$count_hit = $rowRegiao['hit_regiao'];
			$count_hit = $count_hit + 1;
			mysql_query("UPDATE site_tb_regioes SET hit_regiao='" . $count_hit . "' WHERE id_regiao = '" . $rowRegiao['id_regiao'] . "'");
		} else {
			Redir('regioes/');
		}
	} else {
		Redir('regioes/');
	}

	?>

	<!-- ____________________ HEADER TITLE ____________________-->
	<section id="header-title">
		<div class="container">
			<span><a href="home">Home</a> / <a href="regioes">Regiões</a> / <?= $rowRegiao['nome_regiao'] ?></span>
			<div class="d-flex w-100 justify-content-center mt-3">
				<img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao" />
				<h1><?= $rowRegiao['nome_regiao'] ?></h1>
			</div>
			<div class="header-title-seta hidden-mobile">
				<img class="img-fluid hidden-mobile" src="assets/image/seta.png" alt="seta">
			</div>
		</div>
	</section>

	<!-- ____________________ CIDADES ____________________-->
	<section id="cidades">
		<div class="container my-5 pl-0">
			<h2><?= $rowRegiao['nome_regiao'] ?></h2>
			<h3><?= $rowRegiao['cidade_uf'] ?></h3>
			<div class="row mt-4">
				<div class="col-xs-12 col-md-6 mt-2">
					<a class="zoom" href="uploads/regioes/<?= $rowRegiao['foto_regiao'] ?>">
						<img class="img-fluid" src="uploads/regioes/thumb_<?= $rowRegiao['foto_regiao'] ?>" alt="<?= $rowRegiao['nome_regiao'] ?>">
					</a>
				</div>
				<? if ($qtdFotos) {
					$i = 0;
					while ($rowFotos = mysql_fetch_array($resFotos)) {
						$fotos[$i]['id_foto']      = $rowFotos['id_foto'];
						$fotos[$i]['ref']          = $rowFotos['ref'];
						$fotos[$i]['legenda_foto'] = $rowFotos['legenda_foto'];
						$fotos[$i]['url_foto']     = $rowFotos['url_foto'];
						$i++;
					}
					?>
					<div class="col-xs-12 col-md-6 mt-2">
						<div id="cidadesCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<? for ($i = 0; $i < ($qtdFotos / 2); $i++) { ?>
									<? $active = (!$i) ? 'active' : ''; ?>
									<li data-target="#cidadesCarousel" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
								<? } ?>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row">
										<? for ($i = 0; $i < $qtdFotos; $i++) { ?>
											<? if (!(($i + 1) % 3)) { ?>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row">
									<? } ?>
									<div class="col-6">
										<a class="zoom" href="uploads/regioes/<?= $fotos[$i]['url_foto'] ?>">
											<img class="img-fluid" src="uploads/regioes/thumb_<?= $fotos[$i]['url_foto'] ?>" alt="<?= $fotos[$i]['legenda_foto'] ?>">
										</a>
									</div>
								<? } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<? } ?>
			</div>

		</div>
		</div>
	</section>

	<!-- ____________________ DESTAQUES ____________________-->
	<section id="destaques"> 
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7 bg-yellow">
					<div class="icon_title hidden-mobile">
						<img class="img-fluid" src="assets/image/icon-star.png" alt="destaques regiao">
						<h2>Destaques da região</h2>
					</div>
					<h2 class="hidden-desktop">Destaques da região</h2>
					<div class="row mt-5">
						<div class="col-12 pr-5">
							<span><?= $rowRegiao['destaques_regiao'] ?></span>
						</div>
					</div>
					
					<div class="row mt-5">
						<div class="col-2 icon_destaques">
							<img src="assets/image/icon-predios.png">
						</div>
						<div class="col-10 pr-5">
							<span>Lorem ipsum dolor sit amet. Neque omnis cudis doloremque dolores iusto cum quae quas in natus. Sit, ducimus.</span>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-2 icon_destaques">
							<img src="assets/image/icon-pessoas.png">
						</div>
						<div class="col-10 pr-5">
							<span>Lorem ipsum dolor sit amet. Neque omnis cudis doloremque dolores iusto cum quae quas in natus. Sit, ducimus.</span>
						</div>
					</div>
          */ ?>
				</div>
				<div class="col-5 text_destaques hidden-mobile">
					<span><?= $rowRegiao['breve_descricao'] ?></span>
				</div>
			</div>
		</div>
	</section>

	<!-- ____________________ LOCALIZAÇÃO ____________________-->
	<section id="localizacao">
		<div class="container">
			<h2>Localização</h2>
			<div>
				<?= $rowRegiao['mapa_localizacao'] ?>
			</div>
	</section>

	<!-- ____________________ ATENDIMENTO ____________________-->
	<? include('includes/atendimento.php'); ?>

	<!-- ____________________ FOOTER ____________________-->
	<? include('includes/footer.php'); ?>

	<!-- ____________________ CONFIG JS ____________________-->
	<? include('includesConfig/js.php'); ?>
	<? include('includes/analytics.php'); ?>
</body>

</html>