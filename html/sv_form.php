<?php
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
$perfusao_menor = isset($_POST["opcao3"]) ? "&gt;2SEG" : "";
$perfusao_maior = isset($_POST["opcao4"]) ? "&lt;2SEG" : "";


$comando = $pdo->prepare("INSERT INTO sv_form ( pressao_arterial, pressao2, pulso, respiracao, saturacao, hgt,
 temperatura, opcao1, opcao2, opcao3, opcao4 )

 VALUES (?, ?, ?, ?, ?, ?, ?, :op1, :op2, :op3, :op4)");


$comando->bindParam(1, $pressao);
$comando->bindParam(2, $pressao2);
$comando->bindParam(3, $pulso);
$comando->bindParam(4, $respiracao);
$comando->bindParam(5, $saturacao);
$comando->bindParam(6, $hgt);
$comando->bindParam(7, $temperatura);
$comando->bindParam(":op1", $opcao1);
$comando->bindParam(":op2", $opcao2);
$comando->bindParam(":op3", $perfusao_menor);
$comando->bindParam(":op4", $perfusao_maior);


if ($comando->execute()) {
        echo ('{"Resp":1}');
    } else {
        echo ('{"Resp":0}');
    }

?>