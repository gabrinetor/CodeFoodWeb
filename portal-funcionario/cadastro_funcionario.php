<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Cadastro de Funcionario</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
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
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

		<br />
		<legend><h1 align="center">Cadastro de Funcionarios</h1></legend>
		<br />

	    <div class="container">

	<!-- Coluna 1 GRID (md = escala Medium ≥768px) -->
	<div class="col-md-2"></div>
	
	<!-- Coluna 2 GRID -->	
	<div class="col-md-4">

		<!-- Formulário -->
		<form method="POST" action="registra_funcionario.php" id="formCadastrarse">
				
			<div class="form-group">
				<label>Nome: </label>
				<input type="text" class="form-control" id="nome_func" name="nome_func" placeholder="Nome Completo" required="requiored">
			</div>
					
			<div class="form-group">
				<label>Login: </label>
				<input type="login" class="form-control" id="login_func" name="login_func" placeholder="Login" required="requiored">
			</div>
					
			<div class="form-group">
				<label>E-mail: </label>
				<input type="email" class="form-control" id="email_func" name="email_func" placeholder="Email" required="requiored">
			</div>
					
			<div class="form-group">
				<label>Senha: </label>
				<input type="password" class="form-control" id="senha_func" name="senha_func" placeholder="Senha" required="requiored">
			</div>
			

	</div><!-- Fim da coluna 2 GRID -->

	<!-- Coluna 3 GRID -->
	<div class="col-md--1"></div>

	<!-- Coluna 4 GRID -->
	<div class="col-md-4">

      <!--<div class="form-group">
        <label for="nome_cargo">Cargo</label>
        <select class="form-control" id="nome_cargo">
          <option>-- Selecione --</option>
          <option < ?php $sql = " INSERT INTO funcionarios (nome_cargo, niveis_acesso_id) VALUES ('gerente', 1); "; ?> value="gerente">Gerente</option>
          <option < ?php $sql = " INSERT INTO funcionarios (nome_cargo, niveis_acesso_id) VALUES ('cozinheiro', 2); "; ?> value="cozinheiro">Cozinheiro</option>
          <option < ?php $sql = " INSERT INTO funcionarios (nome_cargo, niveis_acesso_id) VALUES ('Nenhum', 0); "; ?> value="nenhum">Nenhuma alternativa</option>
        </select>
      </div><br>-->

	  
	  <div class="form-group">
		<label>Cargo: </label>
		<input type="login" class="form-control" id="nome_cargo" name="nome_cargo" required="requiored">
	  </div>
					
	  <div class="form-group">
		<label>Nivel de Acesso: </label>
		<input type="number" class="form-control" id="email_func" name="email_func" required="requiored">
	  </div>

      <div class="form-group">
        <label for="desc_cargo">Descrição do Cargo</label>
        <textarea class="form-control" id="desc_cargo" rows="4"></textarea>
      </div>
					
			<button type="submit" class="btn btn-primary form-control">Cadastrar</button>
			<br><br>

		</form>

	</div></div>
			
			
	<!-- Coluna 5 GRID -->
	<div class="col-md-1"></div>


	<div class="clearfix"></div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>