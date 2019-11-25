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

	<!-- Coluna 1 GRID (md = escala Medium ≥768px) -->
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
				<label>CPF: </label>
				<input type="cpf" class="form-control cpf-mask" id="cpf" name="cpf" placeholder="000.000.000-00" required="required">
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
				<input type="email" class="form-control" id="email_cli" name="email_cli" placeholder="Email" required="required">
				</div>
			</div>
		<div class="col-md-2">
		<div class="form-group">
				<label>Celular: </label>
				<input type="phone" class="form-control phone-mask" id="celular" name="celular" placeholder="(00) 0000-0000">
		</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label>Telefone Principal: </label>
				<input type="phone" class="form-control phone-mask" id="fone" name="fone" placeholder="(00) 0000-0000">
			</div>
		</div>

	</div> <!-- Fecha row -->

	<!-- Coluna 3 GRID -->
	<div class="row">
	<div class="col-md-2"> </div>
	<div class="col-md-2">
		<div class="form-group">
				<label>Cep: </label>
				<input type="cep" class="form-control" id="cep" name="cep" placeholder="Informe o Cep" required="required">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
				<label>Logradouro: </label>
				<input type="text" class="form-control" id="enredeco" name="endereco" placeholder="Informe o Endereço Completo" required="required">
		</div>
	</div>
	<div class="col-md-1">
		<div class="form-group">
				<label>Número: </label>
				<input type="text" class="form-control" id="numero" name="numero" placeholder="Informe o Nro" required="required">
		</div>
	</div>
	</div> <!-- Fecha row -->
	<div class="row">
	<div class="col-md-2"> </div>
	<div class="col-md-2">
		<div class="form-group">
				<label>Bairro: </label>
				<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o bairro" required="required">
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="form-group">
  		  <label for="uf">Estados: </label>
  			<select class="form-control" name="uf" id="uf" required>
	  			<option value="">--</option>
	  			<option value="AC" <?= ($uf == 'AC')?'selected':''?> >Acre</option>
				<option value="AL" <?= ($uf == 'AL')?'selected':''?> >Alagoas</option>
				<option value="AP" <?= ($uf == 'AP') ?'selected':''?> > Amapá</option> 
				<option value="AM" <?= ($uf == 'AM') ?'selected':''?> >Amazonas</option>
				<option value="BA" <?= ($uf == 'BA') ?'selected':''?> >Bahia</option>
				<option value="CE" <?= ($uf == 'CE') ?'selected':''?> >Ceará</option>
				<option value="DF" <?= ($uf == 'DF') ?'selected':''?> >Distrito Federal</option>
				<option value="ES" <?= ($uf == 'ES') ?'selected':''?> >Espírito Santo</option>
				<option value="GO" <?= ($uf == 'GO') ?'selected':''?> >Goiás</option>
				<option value="MA" <?= ($uf == 'MA') ?'selected':''?> >Maranhão</option>
				<option value="MT" <?= ($uf == 'MT') ?'selected':''?> >Mato Grosso</option>
				<option value="MS" <?= ($uf == 'MS') ?'selected':''?> >Mato Grosso do Sul</option>
				<option value="MG" <?= ($uf == 'MG') ?'selected':''?> >Minas Gerais</option>
				<option value="PA" <?= ($uf == 'PA') ?'selected':''?> >Pará</option>
				<option value="PB" <?= ($uf == 'PB') ?'selected':''?> >Paraíba</option>
				<option value="PR" <?= ($uf == 'PR') ?'selected':''?> >Paraná</option>
				<option value="PE" <?= ($uf == 'PE') ?'selected':''?> >Pernambuco</option>
				<option value="PI" <?= ($uf == 'PI') ?'selected':''?> >Piauí</option>
				<option value="RJ" <?= ($uf == 'RJ') ?'selected':''?> >Rio de Janeiro</option>
				<option value="RN" <?= ($uf == 'RN') ?'selected':''?> >Rio Grande do Norte</optin>
				<option value="RS" <?= ($uf == 'RS') ?'selected':''?> >Rio Grande do Sul</option>
				<option value="RO" <?= ($uf == 'RO') ?'selected':''?> >Rondônia</option>
				<option value="RR" <?= ($uf == 'RR') ?'selected':''?> >Roraima</option>
				<option value="SC" <?= ($uf == 'SC') ?'selected':''?> >Santa Catarina</option>
				<option value="SP" <?= ($uf =='SP') ?'selected':''?> >São Paulo</option>
				<option value="SE" <?= ($uf =='SE')  ?'selected':''?> >Sergipe</option>
				<option value="TO" <?= ($uf =='TO')  ?'selected':''?> >Tocantins</option>
  			</select>
  		</div>
	</div>

  	<div class="col-md-2">
  		<div class="form-group">
  	<label for="cidade">Cidade: </label>
	  <input type="text" class="form-control" id="cidade" name="cidade" required="required" placeholder="Informe a cidade">
		</div>
	</div>
	<div class="col-md-2">
	<div class="form-group">
	<label for="cod_cidades">&nbsp;</label>
	<button type="submit" class="btn btn-primary form-control">Salvar</button>
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
			$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#endereco").val(resposta.endereco);					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.cidade);
					$("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero").focus();
				}
			});
		});
		});
			function validar_form_cadastro(){
				var nome_cli = formCadastrarse.nome_cli.value;
				var cpf = formCadastrarse.cpf.value;
				var email_cli = formCadastrarse.email_cli.value;
				var cep = formCadastrarse.cep.value;
				var endereco = formCadastrarse.endereco.value;
				var cidade = formCadastrarse.cidade.value;
				var bairro = formCadastrarse.bairro.value;
				var numero = formCadastrarse.numero.value;
				var fone = formCadastrarse.fone.value;
				if(nome == ""){
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
				if(cep == ""){
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
				}
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