<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="assets/js/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/funcoes.js"></script>

<?
#################	CONFIGURAÇÃO DOS JS/PLUGINS DE CADA PÁGINA	#################

switch($cur_page){
	case 'index.php': ?>
	<? break;
    	
	case 'fale-conosco.php':
	?>
        <script src="assets/js/vendor/jquery.mask.js"></script>
		<script src="assets/js/config_mask.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<? break;
}
#################	FIM CONFIGURAÇÃO DOS JS/PLUGINS DE CADA PÁGINA	#################
?>
