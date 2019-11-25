<!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- jquery - link cdn -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- bootstrap - link cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- script >
	$(document).ready( function(){

	//verificar se os campos de usuário e senha foram devidamente preenchidos
	$('#btn_login').click(function(){

		var campo_vazio = false;

		if($('#campo_usuario').val() == ''){
			$('#campo_usuario').css({'border-color': '#A94442'});
			campo_vazio = true;
		} else {
			$('#campo_usuario').css({'border-color': '#CCC'});
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
< / script -->

</head>
<body>

<div class="page">

<div class="imagem-col col">
  <div class="papelparede middle">
  <div class="newsletter middle"></div>
    <h1 class="boton">Conheça nosso Cardapio</h1><br>
  <!--<input class="newsletter-btn" onclick="document.location.href='menu/index.php'" type="button" value="Faça seu Pedido"></div>-->
  </div>
</div>

<div class="newsletter-col col">
            <div class="newsletter middle">
            <legend><h1>CodeFood</h1></legend>
              
<?php 
if(!empty($erros)):
	foreach($erros as $erro):
		echo $erro;
	endforeach;
endif;
?>
<h3>Faça seu login e realize seu pedido</h3>
<hr>
<form action="validar_acesso.php" method="POST" id="formLogin">
    <input type="text" placeholder="Login" name="login_cli">
    <input type="password" placeholder="Senha" name="senha_cli">
    <button type="buttom" class="btnn botao-info" name="btn-entrar"> Entrar </button>
    <br /><br />
</form>

			<!--<a href="portal-funcionario/index.php">Sou Funcionario</a>-->
			<a href="testar-portal-funcionario/index.php">Sou Funcionario</a>
            <br><br>
            <a href="portal-usuario/cadastro_usuario.php">Cadastro</a>

            </div>

  	      <div class="clearfix"></div>

            </div>
          </div>

        </div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html> 