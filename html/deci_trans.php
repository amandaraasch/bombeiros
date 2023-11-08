<?php
session_start();
include("../conecta.php");

$opcao1=  isset($_POST["opcao1"]) ? "Crítico" : "";
$opcao2=  isset($_POST["opcao2"]) ? "Instável" : "";
$opcao3=  isset($_POST["opcao3"]) ? "Parcialmente Instavel" : "";
$opcao4=  isset($_POST["opcao4"]) ? "Estável" : "";
// equipe de atendimento 
$opcaoM = $_POST["m"]; // (campo de texto)
$opcaoS1 = $_POST["s1"]; // (campo de texto)
$opcaoS2 = $_POST["s2"]; // (campo de texto)
$opcaoS3 = $_POST["s3"]; // (campo de texto)
$opcaoDeman = $_POST["demandante"]; // (campo de texto)
$opcaoEqui = $_POST["equipe"]; // (campo de texto)


$comando = $pdo->prepare("INSERT INTO deci_trans (nOcorrencia, opcao1, opcao2, opcao3, opcao4, m, s1, s2, s3, demandante, equipe )
 VALUES (:nOco, :op1, :op2, :op3, :op4, :m, :s1, :s2, :s3, :deman, :equi )");

    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":m", $opcaoM);
    $comando->bindParam(":s1", $opcaoS1);
    $comando->bindParam(":s2", $opcaoS2);
    $comando->bindParam(":s3", $opcaoS3);
    $comando->bindParam(":deman", $opcaoDeman);
    $comando->bindParam(":equi", $opcaoEqui);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

?>