<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST


$nome = $_POST["nome"];
$rg = $_POST["rg"];
$ass = $_POST["ass"];
$test = $_POST["test"];



$comando = $pdo->prepare("INSERT INTO term_rec 
    (nOcorrencia, nome, rg, ass, test )

    VALUES (:nOco, :nom, :rg, :ass, :test)"); 


$ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":nom", $nome);
    $comando->bindParam(":rg", $rg);
    $comando->bindParam(":ass", $ass);
    $comando->bindParam(":test", $test);


    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
}