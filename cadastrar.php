<?php
include("conecta.php");

$login = $_POST["login"];
$senha     = $_POST["senha"];
$cpf   = $_POST["cpf"];
$descricao   = $_POST["descricao"];



//SE CLICOU NO BOTÃO INSERIR

    $comando = $pdo->prepare("INSERT INTO cadastro VALUES('$login','$senha','$cpf','$descricao','n')");
    $resultado = $comando->execute();
    $comando = $pdo->prepare("INSERT INTO usuarios VALUES('$login','$senha','n')");
    $resultado = $comando->execute();
    header("Location: html/login.html");

