<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    //bobo

    $opcao1 = isset($_POST["opcao1"]) ? "Sim" : "";
$opcao2 = isset($_POST["opcao2"]) ? "Não" : "";

$comando = $pdo->prepare("INSERT INTO impre (nOcorrencia, opcao1, opcao2) VALUES (:nOco, :op1, :op2)");

$ocorrencia = $_SESSION["id"];

$comando->bindParam(":nOco", $ocorrencia);
$comando->bindParam(":op1", $opcao1);
$comando->bindParam(":op2", $opcao2);


    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
    
}
    ?>