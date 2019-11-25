<?php

session_start();

unset($_SESSION['nome']);
unset($_SESSION['login']);
unset($_SESSION['email']);
unset($_SESSION['tipo_acesso']);

echo 'Esperamos você de volta em breve!!!'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sair</title>
</head>
<body>
    <a href="../index.php">Login</a>
</body>
</html>