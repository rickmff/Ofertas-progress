<?
$resSlider = mysql_query("SELECT * FROM site_tb_banner WHERE tipo_banner = 'H' ORDER BY RAND() ");
if (mysql_num_rows($resSlider)) {
?>
<div id="banner" class="carousel slide" data-ride="carousel">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <? $i=0; while ($rowSlider = mysql_fetch_array($resSlider)) { ?>
        <? $active = (!$i) ? 'active' : ''; ?>
        <? if ($rowSlider['link_banner'] != "") { ?>
          <div class="carousel-item <?=$active?>">
            <a href="<?=$rowSlider['link_banner']?>">
              <img class="d-block w-100" src="uploads/destaques/<?=$rowSlider['url_banner']?>" alt="<?=$rowSlider['tit_banner']?>">
            </a>
          </div>
        <? } else { ?>
          <div class="carousel-item <?=$active?>">
            <img class="d-block w-100" src="uploads/destaques/<?=$rowSlider['url_banner']?>" alt="<?=$rowSlider['tit_banner']?>">
          </div>
        <? } ?>
      <? $i++; } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <div class="carousel-seta">
      <img class="img-fluid" src="assets/image/seta.png " alt="seta - ofertas imobiliarias">
    </div>
  </div>
</div>
<? } ?>