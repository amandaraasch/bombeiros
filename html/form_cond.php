<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $opcao1 = isset($_POST["opcao1"]) ? "Deitada" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Semi-sentada" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Sentada" : "";

    $comando = $pdo->prepare("INSERT INTO form_cond (nOcorrencia, opcao1, opcao2, opcao3) VALUES (:nOco, :op1, :op2, :op3)");

    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
}