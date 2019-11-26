<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Cadastrar Cliente</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		-->
		<script type="text/javascript" src="js/jquery.mask.min.js"></script>	

	</head>

	<body>

	<!-- Menu Fixo -->
	<nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="../index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	</nav>

	<br />
	<legend><h1 align="center">Clientes</h1></legend>
	<br />

	<form method="POST" action="registra_usuario.php" id="formCadastrarse">

	<div class="row">
	
	<div class="col-md-2">
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Nome Completo: </label>
			<input type="text" class="form-control" id="nome_cli" name="nome_cli" placeholder="Nome Completo" required="required">
		</div>
	</div>
	<div class="col-md-2">
			<div class="form-group">
				<label>Login: </label>
				<input type="text" class="form-control cpf-mask" id="login_cli" name="login_cli" placeholder="Login de Acesso" required="required">
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-2">
			</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Data de Nascimento: </label>
				<input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="00/00/0000">
			</div>
		</div>
			<div class="col-md-2"> 
				<div class="form-group">
				<label>E-mail: </label>
				<input type="text" class="form-control" id="email_cli" name="email_cli" placeholder="Email" required="required">
				</div>
			</div>
		<div class="col-md-2">
		<div class="form-group">
				<label>Celular: </label>
				<input type="text" class="form-control phone-mask" id="celular" name="celular" placeholder="(00) 0000-0000">
		</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Telefone Principal: </label>
				<input type="text" class="form-control phone-mask" id="fone" name="fone" placeholder="(00) 0000-0000">
			</div>
		</div>

	</div> <!-- Fecha row -->

	<!-- Coluna 3 GRID -->
	<div class="row">
	<div class="col-md-2"> </div>
	<div class="col-md-2">
		<div class="form-group">
				<label>CPF: </label>
				<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" />
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<label>Senha: </label>
			<input type="password" class="form-control" id="senha_cli" name="senha_cli" placeholder="Senha" />
		</div>
	</div>
	</div> <!-- Fecha row -->
	<div class="row">
	<div class="col-md-2"> </div>
	
	
	<div class="col-md-2">
	<div class="form-group">
	<button type="submit" class="btn btn-primary form-control" onclick="return validar_form_cadastro();">Salvar</button>
	</div>
	</div>

	</div> <!-- fecha row -->
	</form>
	
	</div>
</div>

<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00");
			$("#fone").mask("(00) 0000-0000");
			 //$('#data_nasc').datepicker();
			
			
			$("#celular").mask("(00) 0000-0000");
			
			$("#celular").blur(function(event){
				if ($(this).val().length == 15){
					$("#celular").mask("(00) 0000-0009");
				}else{
					$("#celular").mask("(00) 0000-00009");
				}
			});

			//Início do Comando AJAX
			// $.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				// url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				// dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				// success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					/*$("#endereco").val(resposta.endereco);					
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.cidade);
					$("#uf").val(resposta.uf);*/
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					/*$("#numero").focus();
				}
			});*/
		});
		});
			function validar_form_cadastro(){
				var nome_cli = formCadastrarse.nome_cli.value;
				var cpf = formCadastrarse.cpf.value;
				var email_cli = formCadastrarse.email_cli.value;
			//	var cep = formCadastrarse.cep.value;
			//	var endereco = formCadastrarse.endereco.value;
			//	var cidade = formCadastrarse.cidade.value;
			//	var bairro = formCadastrarse.bairro.value;
			//	var numero = formCadastrarse.numero.value;
				var fone = formCadastrarse.fone.value;
				if(nome_cli == ""){
					alert("Campo nome é obrigatorio");
					formCadastrarse.nome_cli.focus();
					return false;
				}
				if(cpf == ""){
					alert("Campo cpf é obrigatório");
					formCadastrarse.cpf.focus();
					return false;
				}
				if(fone == ""){
					alert("Campo Telefone é obrigatório");
					formCadastrarse.fone.focus();
					return false;
				}
/*				if(cep == ""){
					alert("Campo CEP é obrigatório");
					formCadastrarse.cep.focus();
					return false;
				}
				if(endereco == ""){
					alert("Campo Logradouro é obrigatório");
					formCadastrarse.endereco.focus();
					return false;
				}
				if(cidade == ""){
					alert("Campo Cidade é obrigatório");
					formCadastrarse.cidade.focus();
					return false;
				}
				if(numero == ""){
					alert("Campo Nro é obrigatório");
					formCadastrarse.numero.focus();
					return false;
				}
				if(bairro == ""){
					alert("Campo Bairro é obrigatório");
					formCadastrarse.bairro.focus();
					return false;
				}*/
				if(email_cli == ""){
					alert("Campo e-mail é obrigatorio");
					formCadastrarse.email_cli.focus();
					return false;
				}
			}
		</script>
		

	<!-- Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>

</html>