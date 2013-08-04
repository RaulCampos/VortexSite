<?php
	mysql_connect('localhost','root','');
	mysql_select_db('filmes');
	
	$selecionaFilm = mysql_query("SELECT * FROM filmes ORDER BY id DESC LIMIT 5");
	$selecionaFilmRanking = mysql_query("SELECT * FROM filmes ORDER BY visitas DESC LIMIT 5");
	$contaFilms = @mysql_num_rows($selecionaFilm);

	if($contaFilms <= 0){
		echo '<script>alert("Idiota");</script>';
	}else{	
?>

<div id="filmes">

	
	<div id="ultimos-filmes">
			<ul>	

				<?php while($linhaTb = mysql_fetch_array($selecionaFilm)){
					$idFilm = $linhaTb['id'];
					$tituloFilm = $linhaTb['titulo_original'];
					$idFilm = $linhaTb['id'];
					$tituloFilm = utf8_encode($linhaTb['titulo_original']);
					$tituloFilm1 = utf8_encode($linhaTb['titulo']);
					$elencoFilm = utf8_encode($linhaTb['elenco']);
					$dataFilm = $linhaTb['ano'];
					$direcaoFilm = utf8_encode($linhaTb['direcao']);
					$generoFilm = utf8_encode($linhaTb['genero']);
					$idiomaFilm = utf8_encode($linhaTb['idioma']);
					$legendaFilm = utf8_encode($linhaTb['legenda']);
					$sinopseFilm = utf8_encode($linhaTb['sinopse']);
					$duracaoFilm = utf8_encode($linhaTb['duracao']);
					?>
				<div id="container1">	
				<a href="?single=true&id=<?php echo $idFilm;  ?> ">	<div id="canvas">
				<div class="icone"></div>
					<li><img src="painel/imagens-posts/<?php echo $linhaTb['formato_imagem']; ?>" alt="film1"></li>
					<div class="canvas"><span><?php echo utf8_encode($tituloFilm) ?></span></div>
				</div></a>
			</div>
			<?php }} ?>
			</ul>
	</div>
</div>

<div id="left-filmes">
	<div id="top-left"
	<ul>
		<a><li>Recentes</li></a>
		<a><li>Estreias</li></a>
		<a><li>Ranking</li></a>
		<a><li>Mais populares</li></a>
	</ul>
</div>
<div id="bot-left">
	<h4> Gênero </h4>
	<ul>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
		<a><li>Comédia</li></a>
	</ul>
</div>

</div>
<div id="right-filmes">
</div>