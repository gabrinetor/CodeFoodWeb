<?php 
if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}
function addCart($id_ped, $qtd_ped) {
	if(!isset($_SESSION['carrinho'][$id_ped])){ 
		$_SESSION['carrinho'][$id_ped] = $qtd; 
	}
}
function deleteCart($id_ped) {
	if(isset($_SESSION['carrinho'][$id_ped])){ 
		unset($_SESSION['carrinho'][$id_ped]); 
	} 
}
function updateCart($id_ped, $qtd_ped) {
	if(isset($_SESSION['carrinho'][$id_ped])){ 
		if($qtd_ped > 0) {
			$_SESSION['carrinho'][$id_ped] = $qtd_ped;
		} else {
		 	deleteCart($id_ped);
		}
	}
}
function getContentCart($pdo) {
	
	$results = array();
	
	if($_SESSION['carrinho']) {
		
		$cart = $_SESSION['carrinho'];
		/*$pedidos =  getPedidosByIds($pdo, implode(',', array_keys($cart)));*/
		$pedidos = getPedidosByIds($pdo, implode(',', array_keys($cart)));

		var_dump($pedidos);
		foreach($pedidos as $pedido) {
			$results[] = array(
				'id_ped' => $pedido['id_ped'],
				'nome_ped' => $pedido['nome_ped'],
		  		'preco_ped' => $pedido['preco_ped'],
				'qtd_ped' => $cart[$pedido['id_ped']],
				'subtotal' => $cart[$pedido['id_ped']] * $pedido['preco_ped'],
				'img_ped' => $cart[$pedido['id_ped']]
			);
		}
	}
	
	return $results;
}
function getTotalCart($pdo) {
	
	$total = 0;
	foreach(getContentCart($pdo) as $pedido) {
		$total += $pedido['subtotal'];
	} 
	return $total;
}	