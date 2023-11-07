<?php
session_start();
include("../conecta.php");

$local= $_POST["resultado1"];
$lado= $_POST["resultado2"];
$face= $_POST["resultado3"];
$tipo= $_POST["resultado4"];

$comando = $pdo->prepare("INSERT INTO lo_tra (nOcorrencia, `local`, lado, face, tipo) VALUES (:nOco, :l, :lado, :face, :tipo)");

    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":l", $local);
    $comando->bindParam(":lado", $lado);
    $comando->bindParam(":face", $face);
    $comando->bindParam(":tipo", $tipo);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

?>