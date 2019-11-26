<?php 
function getPedidos(PDO $pdo){
	$sql = "SELECT *  FROM pedidos ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPedidosByIds($pdo, $ids) {
	$sql = "SELECT * FROM pedidos WHERE id_ped in ($ids)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}