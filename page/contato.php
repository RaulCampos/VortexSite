<?php include_once("includes/header.php"); ?>

	<div id="contato">
    <h2>Entre em Contato ! </h2>
    <p>Deixe uma mensagem de <a href="?page=contato">Contato</a> !</p>
    
    <form action="" method="post" enctype="multipart/form-data"><br /><br />
    	<span>Nome:</span><br /><br /><input type="text" name="nome" placeholder="Seu Nome (...)" maxlength="25" /><br /><br />
        <span>Email:</span><br /><br /><input type="text" name="email" placeholder="seu@email.com (...)" /><br /><br />
        <span>Mensagem:</span><br /><br /><textarea cols="40" " name="msg" rows="10" placeholder="Digite aqui sua mensagem (...)"></textarea><br /><br /><br />
        <input type="hidden" value="env" name="acao" />
        <input type="submit" value="Enviar Mensagem" class="btn2" />    
    </form>
    
    <?php 
		if(isset($_POST['acao']) && $_POST['acao'] == 'env'){
			$nome = trim(strip_tags(ucwords($_POST['nome'])));
			$email = strip_tags($_POST['email']);
			$msg = strip_tags(ucfirst($_POST['msg']));	
			
			if(empty($nome) || empty($email) || empty($msg)){
				echo '<script>alert("Preencha todos os campos !");</script>';	
			
			}elseif(!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i",$email)){
			echo '<script>alert("Email inválido !");</script>';
			
			}else{
				$insereDados = mysql_query("INSERT INTO contato (nome, email, msg) VALUES ('$nome','$email','$msg')");
				echo '<script>alert("Mensagem Enviada com Sucesso !");</script>';
				$conta = @mysql_num_rows($insereDados);
			}
		}
	?>
    </div>