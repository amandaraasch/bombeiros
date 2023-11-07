<?php
    include("conecta.php");
    $id=$_GET['id'];
    $login=$_GET['login'];
    $comando = $pdo->prepare("DELETE FROM cadastro WHERE id = $id" );
    $resultado = $comando->execute();

  

   header("Location: html/adm.php");
?>