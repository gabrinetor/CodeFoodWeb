<?php

	session_start();

	require_once('db.class.php');

	$login_func = $_POST['login_func'];
	$senha_func = md5($_POST['senha_func']);

	$sql = " SELECT nome_func, login_func, email_func, nome_cargo, desc_cargo FROM funcionarios WHERE login_func = '$login_func' AND senha_func = '$senha_func' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_funcionario = mysqli_fetch_array($resultado_id);

		if(isset($dados_funcionario['login_func'])){

			$_SESSION['nome_func'] = $dados_funcionario['nome_func'];
			$_SESSION['login_func'] = $dados_funcionario['login_func'];
			$_SESSION['email_func'] = $dados_funcionario['email_func'];
			$_SESSION['nome_cargo'] = $dados_funcionario['nome_cargo'];
			$_SESSION['desc_cargo'] = $dados_funcionario['desc_cargo'];
			$_SESSION['niveis_acesso_id'] = $dados_funcionario['niveis_acesso_id'];
			
			if( $dados_funcionario['nome_cargo'] == "gerente" ){
				header('Location: home_gerente.php');

			}elseif( $dados_funcionario['nome_cargo'] == "cozinheiro" ){
				header('Location: home_cozinheiro.php');
				
			}else{
				header('Location: index.php');
			}

		} else {
			header('Location: index.php?erro=1');
		}
	} else {
		echo 'Erro na execução da consulta.';
	}

?>