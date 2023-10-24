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

$comando = $pdo->prepare("INSERT INTO sv_form (nOcorrencia,
    pressao_arterial, pressao2, pulso, respiracao, saturacao, hgt, temperatura,
    opcao1, opcao2, perfusao_menor, perfusao_maior
) VALUES (:nOco,
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)");

$ocorrencia=$_SESSION{"id"};
$comando->bindParam(":nOco", $ocorrencia);
$comando->bindParam(1, $pressao);
$comando->bindParam(2, $pressao2);
$comando->bindParam(3, $pulso);
$comando->bindParam(4, $respiracao);
$comando->bindParam(5, $saturacao);
$comando->bindParam(6, $hgt);
$comando->bindParam(7, $temperatura);
$comando->bindParam(8, $opcao1);
$comando->bindParam(9, $opcao2);
$comando->bindParam(10, $perfusao_menor);
$comando->bindParam(11, $perfusao_maior);

if ($comando->execute()) {
    $_SESSION["id"]= $pdo->lastInsertId();
    echo ("{\"Resp\":1}");
} else {
    echo ("{\"Resp\":0}");
}
?>