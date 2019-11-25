<?php

    require_once('conexao.php');

    $totalCarts = $_POST['valortotal'];

    //$sql = " SELECT * FROM pagamento ORDER BY valortotal DESC ";

    $sql = mysqli_query($conn," SELECT * FROM pagamento ORDER BY valortotal_pag DESC ");

?>