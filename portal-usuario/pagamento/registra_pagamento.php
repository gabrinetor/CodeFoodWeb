<?php
    session_start(); 
    require_once('db.class.php'); 
    
   // $_SESSION['totalCarts'] = $totalCarts;

    $objDB = new db();
    $link = $objDB->conecta_mysql();    
    
    $sql = "INSERT INTO pagamento(id_pag, valortotal_pag) VALUES ('', '{$_SESSION['totalCarts']}');";
    echo "Pagamento: R$ ".$_SESSION['totalCarts'];

    /*
    $result_ped = "SELECT * FROM ped_feitos;"; //singular
    $resultado_pedidos = mysqli_query($link, $result_ped); //plural

    relaciona com cliente
    while($rows_pedidos = mysqli_fetch_array($resultado_pedidos)){  
        echo $rows_pedidos['nome_ped']."<br>";
        echo $rows_pedidos['cliente_id']."<br>";
        $cliente_id = $rows_pedidos['cliente_id']."<br>";

        $result_cliente = "SELECT * FROM clientes WHERE id = '$id_cli';";
        $resultado_clientes = mysqli_query($link, $result_cliente);
        while($rows_pedidos = mysqli_fetch_array($resultado_clientes)){
            echo $rows_pedidos['nome_pedido']."<br><br>";
        }
    }

    relaciona com pagamento
    while($rows_pedidos = mysqli_fetch_array($resultado_pedidos)){
        echo $rows_pedidos['nome_pedido']."<br>";
        echo $rows_pedidos['pagamento_id']."<br>";
        $pagamento_id = $rows_pedidos['pagamento_id']."<br>";

        $result_pagamento = "SELECT * FROM pagamento WHERE id = '$id_pag';";
        $resultado_pagamentos = mysqli_query($link, $result_pagamento);
        while($rows_pedidos = mysqli_fetch_array($resultado_pagamentos)){
            echo $rows_pedidos['nome_pedido']."<br><br>";
        }
    }

    consulta inner join
    $result_ped = "SELECT pedidos.* FROM pedidos 
        INNER JOIN clientes ON pedidos.id_cli 
        INNER JOIN pagamento ON pedidos.id_pag";

    $resultado_pedidos = mysqli_query($link, $result_ped); 

    while($rows_pedidos = mysqli_fetch_assoc($resultado_pedidos)){
        echo "Pedido: ".$rows_pedidos['nome_pedido']."<br>";
        echo "Cliente: ".$rows_pedidos['nome_cli']."<br>";
        echo $_SESSION['totalCarts'];
    }*/
    
    ?>