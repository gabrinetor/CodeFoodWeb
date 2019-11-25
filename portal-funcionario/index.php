<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>


<!DOCTYPE HTML>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">

		<title>Login Funcionario</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<link rel="stylesheet" href="css/style.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<script>
			$(document).ready( function(){

				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_funcionario').val() == ''){
						$('#campo_funcionario').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_funcionario').css({'border-color': '#CCC'});
					}

					if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color': '#CCC'});
					}

					if(campo_vazio) return false;
				});
			});					
		</script>
	</head>

	<body>

		<div class="page">
			<div class="imagem-col col">
			<div class="papelparede middle">
				<div class="newsletter middle"></div>
			</div>
		</div>

	    
		<div class="newsletter-col col">
    <div class="newsletter middle">
    <legend><h2>CodeFood</h2></legend>
    <h3>Sou Funcionario</h3>
    <hr>
          <form method="post" action="validar_acesso.php" id="formLogin">
			<div class="form-group">
			    <input type="text" class="form-control" id="campo_login" name="login_func" placeholder="Login" />
			</div>
								
			<div class="form-group">
			    <input type="password" class="form-control red" id="campo_senha" name="senha_func" placeholder="Senha" />
			</div>
								
			<button type="buttom" class="btnn botao-info" id="btn_login">Entrar</button>

			<br /><br />
								
		  </form>

		  <a href="cadastro_funcionario.php">Cadastro</a>
        <br><br>
    <a href="../index.php">Voltar</a>


    </div>

  
</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>