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

<?

//====== CONFIGURA PAGINACAO =====//
    $nome_da_pagina = 'blog/'; // Nome da página que listará resultado
    $itens_por_pagina = 9; //numero de registros por página
    $variavel_pag_url = 'pag'; //nome da variavel na url
    if((isset($_GET[$variavel_pag_url])) && (is_numeric($_GET[$variavel_pag_url]))){
      $pag = $_GET[$variavel_pag_url];
    } else { $pag = '1';}
        
    $tabela_sql = 'blog_tb_posts';
    $where_sql = " WHERE (data_post = '".date("Y-m-d")."' OR data_post < '".date("Y-m-d")."') ";

    if ($_GET['ref']) {
      $resTema = mysql_query("SELECT * FROM blog_tb_assuntos WHERE id_assunto = ".$_GET['ref']);
      if (mysql_num_rows($resTema)) {
          $infoTema = mysql_fetch_array($resTema);
          $nome_da_pagina = 'blog/assunto'.$infoTema['id_assunto'].'/'.cleanString($infoTema['nome_assunto']).'/';
        $where_sql = " WHERE ref_assunto = '".$infoTema['id_assunto']."' AND (data_post = '".date("Y-m-d")."' OR data_post < '".date("Y-m-d")."') ";
      } else { Redir('blog'); }
    }

    $orderby_sql = 'ORDER BY data_post DESC, id_post DESC'; 
    
    //=== IDENTIICA CLASSE CSS DA PAGINACAO ==///
    $class_page_ativo = 'num_pag_ativo'; //Colocar nome da classe(CSS) para o link da página atual
    $class_page = 'num_pag'; //Colocar nome da classe(CSS) para o link das paginas
//====== FIM DA CONFIGURAÇÃO PAGINACAO =====//

###### SCRIPT PARA A PAGINAÇÃO ##########
    $inicio = 0;
    if ($pag!=''){
      $inicio = ($pag - 1) * $itens_por_pagina;
    }

    /* NUMERO DE REGISTROS DA TABELA */
    $busca_total = mysql_query("SELECT COUNT(*) as total FROM ".$tabela_sql.' '.$where_sql.' '.$orderby_sql);
    $total = mysql_fetch_array($busca_total); $total = $total['total']; 

    $prox = $pag + 1;
    $ant = $pag - 1;
    $ultima_pag = ceil($total / $itens_por_pagina);
    $penultima = $ultima_pag - 1;  
    $adjacentes = 2;

    $resAssunto = mysql_query("SELECT * FROM blog_tb_assuntos ORDER BY nome_assunto");
    $resResult = mysql_query("SELECT * FROM ".$tabela_sql.' '.$where_sql.' '.$orderby_sql." LIMIT $inicio, $itens_por_pagina");
    $ativaProxAnt = true;
    
    // ativa o botão ANTERIOR
    if ($pag>1 && $ativaProxAnt==true){
      $paginacao = '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ant.'" >&laquo; Anterior</a>';
    }
    
    if ($ultima_pag <= 5){
      for ($i=1; $i< $ultima_pag+1; $i++){
        if ($i == $pag){
          $paginacao .= '<a class="'.$class_page_ativo.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';        
        } else {
          $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';  
        }
      }
    }
    
    if ($ultima_pag > 5){
      if ($pag < 1 + (2 * $adjacentes)){
        for ($i=1; $i< 2 + (2 * $adjacentes); $i++){
          if ($i == $pag){
            $paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
          } else {
            $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
          }
        }
        $paginacao .= '...';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$penultima.'" >'.$penultima.'</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ultima_pag.'" >'.$ultima_pag.'</a>';
      } else if($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3){
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'1" >1</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'2" >2</a> ... ';
        for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++){
          if ($i == $pag){
            $paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
          } else {
            $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
          }
        }
        $paginacao .= '...';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$penultima.'" >'.$penultima.'</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ultima_pag.'" >'.$ultima_pag.'</a>';
      } else {
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'1" >1</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'2" >2</a> ... ';
        for ($i = $ultima_pag - (4 + (2 * $adjacentes)); $i <= $ultima_pag; $i++){
          if ($i == $pag){
            $paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
          } else {
            $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
          }
        }
      }
    }
    
    // ativa o botão PRÓXIMA
    if ($prox <= $ultima_pag && $ultima_pag > 2  && $ativaProxAnt==true){
      $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$prox.'">pr&oacute;xima &raquo;</a>';
    }
    
    if($penultima==0){$paginacao ='';}

#########################################
      

?>

<body>
  <!-- ____________________ NAVBAR ____________________-->
  <? include('includes/navbar.php'); ?>

  <section id="header-title">
		<div class="container">
			<span><a href="home">Home</a> / Blog</a></span>
			<div class="d-flex w-100 justify-content-center py-3">
				<img class="icone-regiao img-fluid mr-3" src="assets/image/icon-regiao.png" alt="icone regiao"/>
				<h1>Blog</h1>
			</div>
			<div class="header-title-seta">
				<img class="img-fluid" src="assets/image/seta.png" alt="seta">
			</div>
		</div>
	</section>

  <!-- ____________________ BLOG ____________________-->
  <section id="blog-div">
    <div class="container">
      <div class="row col-12 pr-0">
        <div class="col-md-4 offset-md-8">
          <select class="form-control my-5" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
              <option selected disabled="disabled">Selecione o assunto:</option>
              <option value="blog">Todos</option>
            <? while($infoTema = mysql_fetch_array($resAssunto)){?>
                <option value="blog/assunto<?=$infoTema['id_assunto']?>/<?=cleanString($infoTema['nome_assunto'])?>"><?=$infoTema['nome_assunto']?></option>
            <? } ?>
          </select>
        </div>
        <? while($rowResult = mysql_fetch_array($resResult)){ ?>
        <div class="col-md-4">
            <span><?=date("d/m/Y", strtotime($rowResult['data_post']))?></span>
            <h3><?=$rowResult['titulo_post']?></h3>
            <p><?=substr($rowResult['texto_post'],0,150).'...'?></p>
            <div class="blog-saibaMais">
                <a href="blog/<?=cleanString($rowResult['titulo_post']); ?>-<?=$rowResult['id_post'] ?>">Saiba mais</a>
            </div>
        </div>
        <? } ?>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="paginacao">
                  <?=$paginacao?>
              </div>
              
          </div>
      </div>
    </div>
  </section>

   <!-- ____________________ Newsletter ____________________-->
   <? include('includes/newsletter.php'); ?>

  <!-- ____________________ FOOTER ____________________-->
  <? include('includes/footer.php'); ?>

  <!-- JavaScript -->
  <? include('includesConfig/js.php'); ?>
  <!-- Analytics -->
  <? include('includes/analytics.php'); ?>
</body>

</html>