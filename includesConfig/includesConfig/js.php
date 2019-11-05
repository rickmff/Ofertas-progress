<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>

<?
#################	CONFIGURAÇÃO DOS JS/PLUGINS DE CADA PÁGINA	#################

switch($cur_page){
	case 'index.php': ?>
	<? break;
    	
	case 'contato.php':
	?>
    <script src="assets/js/vendor/jquery.mask.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<? break;
}
#################	FIM CONFIGURAÇÃO DOS JS/PLUGINS DE CADA PÁGINA	#################
?>
