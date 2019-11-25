<?php
	
	session_start();

	if(!isset($_SESSION['login_func'])){
		header('Location: index.php?erro=1');
	}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Sistema Gerente</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- DataTables -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

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
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

		<!-- Alinhar componentes na tela -->
	    <div class="container"><br />
			<legend><h1>Gerente</h1></legend>
            <hr>

			<div class="col-md-2">
				Usuário autenticado!!!
	    		<br />
	    		<?= $_SESSION['nome_func'] ?>
	    		<br />
                <?= $_SESSION['login_func'] ?>
	    		<br />
                <?= $_SESSION['email_func'] ?>
	    		<br />
                <?= $_SESSION['nome_cargo'] ?>
                <br />
	    		<?= $_SESSION['desc_cargo'] ?>
                <br />
			</div>
			

			<div class="col-md-10">
			  <table id="table_id" class="display">
				<thead>
				  <tr>
				  	<th>Pedido</th>
				  	<th>Cliente</th>
				  	<th>Quantidade</th>
					<th>Total Pago</th>
					<th>Data</th>
				  </tr>
				</thead>
				<tbody>
		<?php 
		require_once('conexao.class.php');
		//instanciar a conexão
		$pdo = new Conexao();
			
		//mandar a query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
		$result = $pdo->select("SELECT * FROM pagamentos");
				
		foreach($result as $value){
			//$data = $value['datta'];
			//$data = $date('d/m/Y',strtotime($data));

		    echo "<tr>";
			echo "<td>".$value['nome']."</td>";
			echo "<td>".$value['client']."</td>";
			echo "<td>".$value['qtd']."</td>";     
			echo "<td>".$value['preco']."</td>";
			echo "<td>".$value['datta']."</td>";     
		?>				
		<?php
			echo "</tr>"; 
		}
		?>
	
	<tr>
		<td></td>
	</tr>
					
	</tbody>

			  </table>
			</div>
			
	<script type="text/javascript">
		$(document).ready( function () {
    	//$('#table_id').DataTable();
    	 $("#table_id").dataTable({
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                }
            }) 
		} );
	</script>

			<div class="clearfix"></div>
			<br />
			
			<div class="col-md-1"></div>

		</div>


	    </div>
	
		
	<!-- Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
