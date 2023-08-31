<?php
    include("conecta.php");
    $login=$_GET['login'];
    $comando = $pdo->prepare("DELETE FROM cadastro where login=\"$login\" ");
    $resultado = $comando->execute();

    $comando = $pdo->prepare("DELETE FROM usuarios where login=\"$login\" ");
    $resultado = $comando->execute();

    header("Location: ../html/adm.php");
?>