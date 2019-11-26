<?php

    require_once('db.class.php');
	
	$nome_cli = $_POST['nome_cli'];
	$login_cli = $_POST['login_cli'];
	$email_cli = $_POST['email_cli'];
	$senha_cli = md5($_POST['senha_cli']);
	$cpf = $_POST['cpf'];
	$fone = $_POST['fone'];
	$celular = $_POST['celular'];
	$data_nasc = $_POST['data_nasc'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " insert into clientes (nome_cli, login_cli, email_cli, senha_cli, cpf, fone, celular, data_nasc) values ('$nome_cli', '$login_cli', '$email_cli', '$senha_cli', '$cpf', '$fone', '$celular', '$data_nasc') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}

?>
