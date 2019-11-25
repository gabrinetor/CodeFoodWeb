<?php

    require_once('db.class.php');
    
	$nome_cli = $_POST['nome_cli'];
	$cpf = $_POST['cpf'];
	$data_nasc = $_POST['data_nasc'];
	$ddd = $_POST['ddd']; 
	$fone = $_POST['fone']; 
	$celular = $_POST['celular']; 
	$login_cli = $_POST['login_cli'];
	$email_cli = $_POST['email_cli'];
	$senha_cli = md5($_POST['senha_cli']);
	$endereco = $_POST['endereco'];	
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade	= $_POST['cidade'];
	$uf	= $_POST['uf'];
	$cep = $_POST['cep'];


	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = " insert into (nome_cli, login_cli, email_cli, senha_cli, endereco, numero, bairro, cidade, uf, cep, cpf, ddd, fone, celular, data_nasc) values ('$nome_cli', '$login_cli', '$email_cli', '$senha_cli', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$cep', '$cpf', '$ddd', '$fone', '$celular', '$data_nasc') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}

?>
