<?php
session_start();

if (!isset($SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?=  htmlspecialchars($SESSION["usuario"]) ?></h1>
    <p>Esse é o painel logado.</p>
    <a href="sair.php">Sair</a>

</body>
</html>