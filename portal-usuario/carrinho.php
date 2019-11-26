<?php 
	session_start();
	require_once "functions/pedidos.php";
	require_once "functions/cart.php";
    $pdoConnection = require_once "conexao_bd.php";
	//var_dump($_POST,$_SESSION);
	if(isset($_POST['acao']) && in_array($_POST['acao'], array('add', 'del', 'up'))) {
		
		if($_POST['acao'] == 'add' && isset($_POST['id_ped']) && preg_match("/^[0-9]+$/", $_GET['id_ped'])){ 
			addCart($_POST['id_ped'], 1);			
		}
		if($_GET['acao'] == 'del' && isset($_GET['id_ped']) && preg_match("/^[0-9]+$/", $_GET['id_ped'])){ 
			deleteCart($_GET['id_ped']);
		}
		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['ped']) && is_array($_POST['ped'])){ 
				foreach($_POST['ped'] as $id_ped => $qtd_ped){
						updateCart($id_ped, $qtd_ped);
				}
			}
		} 
		header('location: carrinho.php');
	}
    $pedidos = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>
<body>
	<div class="container">
		<div class="card mt-5">
		</div>

		<?php if($pedidos) : ?>
			<form action="carrinho.php?acao=up" method="post">
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						<th>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($pedidos as $pedido) : ?>
					<tr>
						
						<td><?php echo $pedido['nome_ped']?></td>
                        
                        <td>
                        <input type="number" name="pedido[<?php echo $pedido['id_ped']?>]" value="<?php echo $pedido['qtd_ped']?>" size="1" />
                        </td>
                        
                        <td>R$<?php echo number_format($pedido['preco_ped'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($pedido['subtotal'], 2, ',', '.')?></td>
						<td><a href="carrinho.php?acao=del&id_ped=<?php echo $pedido['id_ped']?>" class="btn btn-danger">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
				
			</table>

			<a class="btn btn-info" href="home.php">Continuar Comprando</a>
			<button class="btn btn-primary" type="submit">Atualizar Carrinho</button>

			</form>
	<?php endif?>
		
	</div>
	
</body>
</html>