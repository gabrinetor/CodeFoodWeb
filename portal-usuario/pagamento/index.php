<?php
// Conexão
require_once 'db.class.php';

// Sessão
session_start();

$objDB = new db();
    $link = $objDB->conecta_mysql();    
    
    //$sql = "INSERT INTO pagamento(id_pag, valortotal_pag) VALUES ('', '{$_SESSION['totalCarts']}');";
/*    echo "Cliente: Joao"."<br>";
    echo "Pedido: Ala Minuta"."<br>";
    echo "Pagamento: R$ 25,00 "."<br>";*/
//    echo "Pagamento: R$ ".$_SESSION['totalCarts'];

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ./carrinho.php');
endif;

// Dados
/*$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);*/

?>
<?php 	
	require_once "../functions/pedidos.php";
	//$pdoConnection = require_once "connection.php";
	//$pedidos = getPedidos($pdoConnection);
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>QRCode Gerado</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
        <style>
            
            .container {
            width: 350px;
            height: 120px;
            }

            .container img {
            width: 100%;
            height: auto;
            }

        </style>
	
    </head>

	<body>
    <!--<h1> Olá < ?php echo $dados['nome']; ?> </h1><br>
<h1> Olá < ?php echo $dados['login']; ?> </h1><br>
<h1> Olá < ?php echo $dados['senha']; ?> </h1><br>-->

	    <div class="container">
	    	
	    	<br /><br />
			<h1 align="center">QR Code Gerado</h1>
	    	<br /><br />

            <div class="row">

	    	<div class="col-xl-2">
                <!--div php require_once('validar_acesso.php'); echo "Olá, ".$email_cli.". ";?-->            
            </div>


			<div class="col-xl-8">
            
            <?php
                include("lib/vendor/autoload.php");

                /* Coleção para montar o conteúdo do QR-Code 
                $cont_qrcode = { 
                    id_cli => $id_cli,
                    nome_cli => $nome_cli	
                    data_nasc_cli => $data_nasc_cli	
                    cpf_cli => $cpf_cli	
                    tel_cli => $telefone_cli	
                    cel_cli	=> $celular_cli
                    endereco_cli => $endereco_cli	
                    email_cli => $email_cli	
                    senha_cli => $senha_cli	
                    banco_conta => $banco_conta 
                    agencia_conta => $agencia_conta 
                    tipo_de_conta => $tipo_de_conta
                    numero_de_conta => $numero_de_conta 
                };*/
                echo "Cliente: Joao"."<br>";
                echo "Pedido: Ala Minuta"."<br>";
                echo "Pagamento: R$ 25,00 "."<br><br>";
            

               $data = "R$20,00"; //dado que ddesejo armazenar {$id_cli}

                echo '<img src="'.(new \chillerlan\QRCode\QRCode())->render($data).'" />';
                //echo '<img src="'.(new \chillerlan\QRCode\QRCode())->render($id_cli).'" />';

            ?>
            
            </div>

			<div class="col-xl-2"><br><br><a href="./home.php">Voltar para Home</a></div>
            <a href="./logout.php">Sair</a>

		</div>

        </div>

	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
