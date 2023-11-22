<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST


    $opcao1 = isset($_POST["opcao1"]) ? "Base do estabeliza" : "";
    $quantidade = $_POST["quantidade"]; 
    $opcao2 = isset($_POST["opcao2"]) ? "Colar" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "N" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "PP" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "P" : "";
    $quantidade1 = $_POST["quantidade1"];
    $opcao6 = isset($_POST["opcao6"]) ? "Colar" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "M" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "G" : "";
    $quantidade2 = $_POST["quantidade2"];
    $opcao9 = isset($_POST["opcao9"]) ? "KED" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Adulto" : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Criança" : "";
    $quantidade3 = $_POST["quantidade3"];
    $opcao12 = isset($_POST["opcao12"]) ? "Maca rígida" : "";
    $quantidade4 = $_POST["quantidade4"];
    $opcao13 = isset($_POST["opcao13"]) ? "Coxins Estabeliza" : "";
    $quantidade5 = $_POST["quantidade5"];
    $opcao14 = isset($_POST["opcao14"]) ? "Cânula" : "";
    $quantidade6 = $_POST["quantidade6"];
    $opcao15 = isset($_POST["opcao15"]) ? "Tirante cabeça" : "";
    $quantidade7 = $_POST["quantidade7"];
    $opcao16 = isset($_POST["opcao16"]) ? "Tirante aranha" : "";
    $quantidade8 = $_POST["quantidade8"];
    $opcao17 = isset($_POST["opcao17"]) ? "T.T.F" : "";
    $opcao18 = isset($_POST["opcao18"]) ? "Adulto" : "";
    $opcao19 = isset($_POST["opcao19"]) ? "Infantil" : "";
    $quantidade9 = $_POST["quantidade9"];
    $outros = isset($_POST["outros"]) ? "Outros" : "";
    $quantidade10 = $_POST["quantidade10"];


    $comando = $pdo->prepare("INSERT INTO mate_hosp 
    (nOcorrencia, opcao1, quantidade, opcao2, opcao3, opcao4, opcao5,quantidade1 ,opcao6, opcao7, opcao8, quantidade2,
    opcao9, opcao10, opcao11, quantidade3, opcao12, quantidade4, opcao13, quantidade5, opcao14, quantidade6, opcao15, quantidade7, 
    opcao16, quantidade8, opcao17, opcao18, opcao19, quantidade9, outros, quantidade10)

    VALUES (:nOco, :op1, :qtd, :op2, :op3, :op4, :op5, :qtd1, :op6, :op7, :op8, :qtd2, :op9, :op10, :op11, :qtd3, :op12, :qtd4, :op13, :qtd5,
    :op14, :qtd6, :op15, :qtd7, :op16, :qtd8, :op17, :op18, :op19, :qtd9, :outros, :qtd10)");


    $ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":qtd", $quantidade);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":qtd1", $quantidade1);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":op7", $opcao7);
    $comando->bindParam(":op8", $opcao8);
    $comando->bindParam(":qtd2", $quantidade2);
    $comando->bindParam(":op9", $opcao9);
    $comando->bindParam(":op10", $opcao10);
    $comando->bindParam(":op11", $opcao11);
    $comando->bindParam(":qtd3", $quantidade3);
    $comando->bindParam(":op12", $opcao12);
    $comando->bindParam(":qtd4", $quantidade4);
    $comando->bindParam(":op13", $opcao13);
    $comando->bindParam(":qtd5", $quantidade5);
    $comando->bindParam(":op14", $opcao14);
    $comando->bindParam(":qtd6", $quantidade6);
    $comando->bindParam(":op15", $opcao15);
    $comando->bindParam(":qtd7", $quantidade7);
    $comando->bindParam(":op16", $opcao16);
    $comando->bindParam(":qtd8", $quantidade8);
    $comando->bindParam(":op17", $opcao17);
    $comando->bindParam(":op18", $opcao18);
    $comando->bindParam(":op19", $opcao19);
    $comando->bindParam(":qtd9", $quantidade9);
    $comando->bindParam(":outros", $outros);
    $comando->bindParam(":qtd10", $quantidade10);


    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

}
?>