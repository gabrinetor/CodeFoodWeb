					
		<?php 	
            require_once('db.class.php');
            
            start_session();
            
			$comentario = $_POST['comentario'];
			$objDb = new db();
			$link = $objDb->conecta_mysql();
            $sql = " insert into sugestoes(comentario) values ('$comentario') ";
            
            
	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Comentário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}

		?>