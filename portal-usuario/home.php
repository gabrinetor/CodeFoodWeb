<?php
	session_start();

	if(!isset($_SESSION['login_cli'])){
		header('Location: index.php?erro=1');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/myStyle.css">
<!--===============================================================================================-->
</head>


<body class="animsition">

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


	<!-- SLIDE 1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Peça seu pedido
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp" style="text-shadow: 0.1em 0.1em #000; animation: glitch-effect 3s infinite;">
							CodeFood
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="menu.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Peça Já
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


		<!-- New Product -->
		<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Categorias de Pedidos
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-01.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">FastFood</h1>
									<div class="block2-btn-addcart w-size1 trans-0-4">
										
										<a href="cat-fastfood.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Bebidas</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										
										<a href="cat-bebidas.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Saudáveis</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
									
										<a href="cat-saudaveis.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-04.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Pratos Prontos</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<a href="cat-pratosprontos.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-05.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Doces e Bolos</h1>
										

									<div class="block2-btn-addcart w-size1 trans-0-4">

										<a href="cat-docesebolos.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-01.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">FastFood</h1>
									<div class="block2-btn-addcart w-size1 trans-0-4">
										
										<a href="cat-fastfood.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Bebidas</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										
										<a href="cat-bebidas.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Saudáveis</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
									
										<a href="cat-saudaveis.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-04.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Pratos Prontos</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<a href="cat-pratosprontos.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-05.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Doces e Bolos</h1>
										

									<div class="block2-btn-addcart w-size1 trans-0-4">

										<a href="cat-docesebolos.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-01.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">FastFood</h1>
									<div class="block2-btn-addcart w-size1 trans-0-4">
										
										<a href="cat-fastfood.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-02.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Bebidas</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										
										<a href="cat-bebidas.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-03.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Saudáveis</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
									
										<a href="cat-saudaveis.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-04.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
								<h1 align="center" style="font-weight: bold; color: white;">Pratos Prontos</h1>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<a href="cat-pratosprontos.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/item-05.jpg" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4"><br>
									<h1 align="center" style="font-weight: bold; color: white;">Doces e Bolos</h1>
									

									<div class="block2-btn-addcart w-size1 trans-0-4">

										<a href="cat-docesebolos.php" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Pedir
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					
				</div>
			</div>

		</div>
	</section>
	<!-- SLIDE 1 -->


	<!-- FOOTER -->
	<footer class="bg6 page-footer font-small"><br>
		<div class="t-center s-text8 p-t-20">
			Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		</div><br>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
