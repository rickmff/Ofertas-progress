<?
$resRegioes = mysql_query("SELECT * FROM site_tb_regioes ORDER BY hit_regiao DESC");
$qtdRegioes = mysql_num_rows($resRegioes);
if ($qtdRegioes) {
  $i = 0;
  while ($rowRegioes = mysql_fetch_array($resRegioes)) {
    $regioes[$i]['id_regiao']         = $rowRegioes['id_regiao'];
    $regioes[$i]['nome_regiao']       = $rowRegioes['nome_regiao'];
    $regioes[$i]['destaques_regiao']  = $rowRegioes['destaques_regiao'];
    $regioes[$i]['foto_regiao']       = $rowRegioes['foto_regiao'];
    $regioes[$i]['logo_regiao']       = $rowRegioes['logo_regiao'];
    $regioes[$i]['hit_regiao']        = $rowRegioes['hit_regiao'];
    $regioes[$i]['breve_descricao']   = $rowRegioes['breve_descricao'];
    $regioes[$i]['mapa_localizacao']  = $rowRegioes['mapa_localizacao'];
    $i++;
  }
  ?>
  <section id="regiaoCarousel">
    <div class="container">
      <div class="col-xs-12 hidden-desktop">
        <div class="d-flex w-100 justify-content-center">
          <h2><img class="icone-regiao img-fluid mr-2" src="assets/image/icon-regiao.png" alt="icone regiao"/>Regiões</h2>
        </div>
        <div>
          <!-- Select para mobile -->
          <select name="regiao" id="" placeholder="Selecione sua Região" href="regiao/<?= cleanString($regioes[$i]['nome_regiao']) ?>-<?= $regioes[$i]['id_regiao'] ?>"></select>
        </div>
      </div>
    </div>

    <div class="container hidden-mobile">
      <div class="d-flex w-100 justify-content-center">
        <h2><img class="icone-regiao img-fluid mr-2" src="assets/image/icon-regiao.png" alt="icone regiao"/>Regiões</h2>
      </div>
      <div id="Carouselregiao" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <? for ($i = 0; $i < ($qtdRegioes / 4); $i++) { ?>
            <? $active = (!$i) ? 'active' : ''; ?>
            <li data-target="#Carouselregiao" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
          <? } ?>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <? for ($i = 0; $i < $qtdRegioes; $i++) { ?>
                <? if (!(($i + 1) % 5)) { ?>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
            <? } ?>
            <div class="col-xs-12 col-md-3">
              <a href="regiao/<?= cleanString($regioes[$i]['nome_regiao']) ?>-<?= $regioes[$i]['id_regiao'] ?>">
                <img class="img-regiao" src="uploads/regioes/<?= $regioes[$i]['logo_regiao'] ?>" alt="<?= $regioes[$i]['nome_regiao'] ?>">
              </a>
            </div>
          <? } ?>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
<? } ?>