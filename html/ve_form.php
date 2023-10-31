<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $opcao1 = isset($_POST["opcao1"]) ? "Ciclista" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Condutor Moto" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Gestante " : "";
    $opcao4 = isset($_POST["opcao4"]) ? "Pass.Ban Frente" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Pas.Moto " : "";
    $opcao6 = isset($_POST["opcao6"]) ? "Condutor Carro" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "Clínico" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "Trauma" : "";
    $opcao9 = isset($_POST["opcao9"]) ?  "Pass.BCO trás" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Pedestre " : "";

    $comando = $pdo->prepare("INSERT INTO ve_form (nOcorrencia,opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, opcao7, opcao8, opcao9, opcao10)

    VALUES (:nOco,:op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10)");

    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":op7", $opcao7);
    $comando->bindParam(":op8", $opcao8);
    $comando->bindParam(":op9", $opcao9);
    $comando->bindParam(":op10", $opcao10);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
}
?>