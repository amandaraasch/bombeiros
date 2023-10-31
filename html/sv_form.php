<?php
session_start();
include('../conecta.php');

$pressao = $_POST["pressao_arterial"];
$pressao2 = $_POST["pressao2"];
$pulso = $_POST["pulso"];
$respiracao = $_POST["respiracao"];
$saturacao = $_POST["saturacao"];
$hgt = $_POST["hgt"];
$temperatura = $_POST["temperatura"];
$opcao1 = isset($_POST["opcao1"]) ? "Anormal" : "";
$opcao2 = isset($_POST["opcao2"]) ? "Normal" : "";
$perfusao_menor = isset($_POST["perfusao_menor"]) ? "&gt;2SEG" : "";
$perfusao_maior = isset($_POST["perfusao_maior"]) ? "&lt;2SEG" : "";
$ocorrencia = $_SESSION["id"];

$comando = $pdo->prepare("INSERT INTO sv_form (nOcorrencia,
    pressao_arterial, pressao2, pulso, respiracao, saturacao, hgt, temperatura,
    opcao1, opcao2, perfusao_menor, perfusao_maior) 
    VALUES (:nOco,:op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11)");

$comando->bindParam(":nOco", $ocorrencia);
$comando->bindParam(":op1", $pressao);
$comando->bindParam(":op2", $pressao2);
$comando->bindParam(":op3", $pulso);
$comando->bindParam(":op4", $respiracao);
$comando->bindParam(":op5", $saturacao);
$comando->bindParam(":op6", $hgt);
$comando->bindParam(":op7", $temperatura);
$comando->bindParam(":op8", $opcao1);
$comando->bindParam(":op9", $opcao2);
$comando->bindParam(":op10", $perfusao_menor);
$comando->bindParam(":op11", $perfusao_maior);

if ($comando->execute()) {
    
    echo ("{\"Resp\":1}");
} else {
    echo ("{\"Resp\":0}");
}
?>