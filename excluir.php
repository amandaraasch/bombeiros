<?php
    include("conecta.php");
    $login=$_GET['login'];
    $comando = $pdo->prepare("DELETE FROM cadastro WHERE id = :id" );
    $resultado = $comando->execute();

    $comando = $pdo->prepare("DELETE FROM usuarios where login=\"$login\" ");
    $comando->bindParam(":id", $id, PDO::PARAM_INT);
    $resultado = $comando->execute();

    header("Location: html/adm.php");
?>