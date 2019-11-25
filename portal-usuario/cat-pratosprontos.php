<?php
session_start();

if(!isset($_SESSION['login_cli'])){
	header('Location: index.php?erro=1');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>FastFood</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!--HEADER-->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			
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

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(img/heading/saudaveis.jpg);">
		<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp" style="text-shadow: 0.1em 0.1em #000; animation: glitch-effect 3s infinite;">
			FastFood
		</h2>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categorias
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="menu.php" class="s-text13">
									Todos
								</a>
							</li>

							<li class="p-t-4">
								<a href="cat-fastfood.php" class="s-text13">
									FastFood
								</a>
							</li>

							<li class="p-t-4">
								<a href="cat-bebidas.php" class="s-text13">
									Bebidas
								</a>
							</li>

							<li class="p-t-4">
								<a href="cat-saudaveis.php" class="s-text13">
									Saudáveis
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									Pratos Prontos
								</a>
							</li>

							<li class="p-t-4">
								<a href="cat-docesebolos.php" class="s-text13">
									Doces e Bolos
								</a>
							</li>
                        </ul>
                        
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

				<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">

								<!--1-->
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-label">
									<img src="img/01/01.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Pedir
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										Hamburguer Sensação
									</a>

									<span class="block2-price m-text6 p-r-5">
										R$21.00
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="img/01/pastel-de-carne.jpg" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Pedir
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										Pastel de Carne
									</a>

									<span class="block2-price m-text6 p-r-5">
										R$10.00
									</span>
								</div>
							</div>
						</div>

				</div>
			</div>
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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<!--<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nomePedido = $(this).parent().parent().parent().find('.block2-name').html();
			var precoPedido = (this).parent().parent().parent().find('block2-price').html();
			
			$(this).on('click', function(){
				swal(nomePedido, " (valor: R$ ", precoPedido, " ) solicitado com sucesso!", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nomePedido = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nomePedido, "adicionado na lista de desejos !", "success");
			});
		});
	</script>-->

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
