<?php

	session_start();

	require_once('db.class.php');

	$login_cli = $_POST['login_cli'];
	$senha_cli = md5($_POST['senha_cli']);

	$sql = " SELECT login_cli, email_cli FROM clientes WHERE login_cli = '$login_cli' AND senha_cli = '$senha_cli' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		var_dump($resultado_id);
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['login_cli'])){

			$_SESSION['login_cli'] = $dados_usuario['login_cli'];
			$_SESSION['email_cli'] = $dados_usuario['email_cli'];
			
			header('Location: portal-usuario/home.php');

		} else {
			header('Location: index.php?erro=1');
		}
	} else {
		echo 'Erro na execução da consulta.';
	}

?>