<?php

	require_once('db.class.php');

	$nome_func = $_POST['nome_func'];
	$login_func = $_POST['login_func'];
	$email_func = $_POST['email_func'];
	$senha_func = md5($_POST['senha_func']);
	$nome_cargo = $_POST['nome_cargo'];
	$desc_cargo = $_POST['desc_cargo'];
	$niveis_acesso_id = $_POST['niveis_acesso_id'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " insert into funcionarios(nome_func, login_func, email_func, senha_func, nome_cargo, desc_cargo, niveis_acesso_id) values ('$nome_func', '$login_func', '$email_func', '$senha_func', '$nome_cargo', '$desc_cargo', '$niveis_acesso_id') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Funcionário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}


?>