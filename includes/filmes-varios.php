<div id="filmes-varios">
	<?php
		if(isset($_GET['pag'])){
			$pg = (int)$_GET['pag'];		
		}else{
			$pg = 1;
		}
		$maximo = 19;
		$inicio = ($pg * $maximo) - $maximo;

		$selecionaFilm = mysql_query("SELECT * FROM filmes ORDER BY id DESC LIMIT $inicio, $maximo")or die(mysql_error());
		$contaFilm = @mysql_num_rows($selecionaFilm);
		
		if($contaFilm <= 0){
			echo "<h2>Não há nenhuma postagem cadastrada<br><br><br></h2>";
		}else{
			while($linhaTb = mysql_fetch_array($selecionaFilm)){
				$idFilm = $linhaTb['id'];
				
				$selecionaTodosComents = mysql_query("SELECT * FROM comentarios WHERE id_Film = '$idFilm' AND status = 'sim'");
				$contaComents = @mysql_num_rows($selecionaTodosComents);
	?>
								<div id="topo-varios">
										<h3><a href="#">Ultimos Filmes Adicionados</a></h3>
								<div id="links-varios">
								</div>
								</div>
		<div id="ultimos-filmes-varios">
			<div id="margin">
				<ul>
				<?php while($linhaFilmesVarios =mysql_fetch_array($selecionaFilm)){ $idFilme = $linhaFilmesVarios['id']; ?>
					<a href="?single=true&id=<?php echo $idFilme;  ?> "><li><img src="painel/imagens-posts/<?php echo $linhaFilmesVarios['formato_imagem']; ?>" title="<?php echo utf8_encode($linhaFilmesVarios['titulo']); ?>" alt="film1"></li></a>
<?php } ?>					
				</ul>
			</div>
				<?php }} ?>
		<div class="paginacao">
			<?php
				$selSql = mysql_query("SELECT id FROM filmes") or die(mysql_error());
				$totalFilms = @mysql_num_rows($selSql);
				
				$pags = ceil($totalFilms/$maximo);
				$links = 5;
				
				echo "<a href=\"?pag=1\"><< Primeira Página</a>";
				
				for($i = $pg - $links; $i <= $pg - 1; $i ++){
					if($i<=0){}else{
						echo "<a href='?pag=$i'>$i</a>";	
					}	
				}
					
					 echo '<div class="page">'.$pg.'</div>';
					
				for($i = $pg +1; $i <= $pg + $links; $i++){
					if($i > $pags){}else{
						echo "<a href=\"?pag=$i\">$i</a>";	
					}
				}
				
						echo "<a href=\"?pag=$pags\">Ultima Página >></a>";
			?>
		</div>
		</div>
</div>