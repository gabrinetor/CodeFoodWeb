<?php 
	session_start();

	if(!isset($_SESSION['login_cli'])){
		header('Location: index.php?erro=1');
	}
?>
<?php
	session_start();

	// se nao existir nenhuma sessão para carrinho, então vai passar para array
	if(!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = array();
	}
?>

<!-- ?php
	require_once "functions/pedidos.php";
	require_once "functions/cart.php";
	$pdoConexao = require_once "db.class.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id_ped']) && preg_match("/^[0-9]+$/", $_GET['id_ped'])){ 
			addCart($_GET['id_ped'], 1);			
		}
		if($_GET['acao'] == 'del' && isset($_GET['id_ped']) && preg_match("/^[0-9]+$/", $_GET['id_ped'])){ 
			deleteCart($_GET['id_ped']);
		}
		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['ped']) && is_array($_POST['ped'])){ 
				foreach($_POST['ped'] as $id_ped => $qtd){
						updateCart($id_ped, $qtd);
				}
			}
		} 
		header('location: carrinho.php');
	}
	$resultsCarts = getContentCart($pdoConexao);
	$totalCarts  = getTotalCart($pdoConexao);?-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carrinho de Compras</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<!--HEADER-->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Faça seu pedido com pagamento rápido e seguro. 
				</span>

				<div class="topbar-child2">
					<span class="topbar-email_cli">
						<?= $_SESSION['email_cli'] ?>
					</span>

				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="">Categorias</a>
								<ul class="sub_menu">
									<li><a href="cat-fastfood.php">FastFood</a></li>
									<li><a href="cat-bebidas.php">Bebidas</a></li>
									<li><a href="cat-saudaveis.php">Saudáveis</a></li>
									<li><a href="cat-pratosprontos.php">Pratos Prontos</a></li>
									<li><a href="cat-docesebolos.php">Doces e Bolos</a></li>
								</ul>
							</li>

							<li></li>

							<li>
								<a href="carrinho.php">Seus Pedidos</a>
							</li>

							<li></li>
 
							<li>
								<a href="contact.html">Contato</a>
							</li>

						</ul>
					</nav>

				</div>


					</div>
				</div>
			</div>
		</div>
	</header>
	<!--HEADER-->

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">

		<!-- Cart item -->
		<form method="post" action="gerar_qrcode/validar_totalcarts.php">
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					
				<!--< ?php if ($resultsCarts) : ?>-->
					<form method="post" action="gerar_qrcode/validar_totalcarts.php">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Pedido</th>
							<th class="column-3">Preço</th>
							<th class="column-4">Quantidade</th>
							<th class="column-5">Total</th>
						</tr>
						
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="img/01/01.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">Hamburguer Sensação</td>
							<td class="column-3">R$21.00</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">R$21.00</td>
						</tr>

					</table>
					
					</form>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!--<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href='pagar.php';">
						Pagar
					</button>-->
					<a href="pagar.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Pagar</a>
				</div>

				<div class="flex-w flex-m w-full-sm">
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<td class="sizefull s-text7 p-l-22 p-r-22" type="text">Total: R$ 31,00</td>
					</div>
				</div>
			</div>
			
			<!--< ? php endif?>-->

		</div>
	</section>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
