<?php
session_start();
include("../conecta.php");

$local= $_POST["resultado1"];

$comando = $pdo->prepare("INSERT INTO lo_tra (nOcorrencia, `local`, lado, face, tipo) VALUES (:nOco, :l, :lado, :face, :tipo)");

    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":l", $local);
    $comando->bindParam(":lado", $lado);
    $comando->bindParam(":op3", $opcao3);




?>