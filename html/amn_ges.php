<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    
    $periodo = $_POST["periodo"];
    $opcao1 = isset($_POST["opcao1"]) ? "Sim" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Não" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Sim" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "Não" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Sim" : "";
    $opcao6 = isset($_POST["opcao6"]) ? "Não" : "";
    $qtd_filhos = $_POST["qtd_filhos"];
    $ini_contra = $_POST["ini_contra"];
    $dura_contra = $_POST["dura_contra"];
    $intervalo = $_POST["opcao7"];
    $opcao8 = isset($_POST["opcao8"]) ? "Sim" : "";
    $opcao9 = isset($_POST["opcao9"]) ? "Não" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Sim" : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Não" : "";
    $opcao12 = isset($_POST["opcao12"]) ? "Sim" : "";
    $opcao13 = isset($_POST["opcao13"]) ? "Não" : "";
    $opcao14 = isset($_POST["opcao14"]) ? "Sim" : "";
    $opcao15 = isset($_POST["opcao15"]) ? "Não" : "";
    $opcao16 = isset($_POST["opcao16"]) ? "Sim" : "";
    $opcao17 = isset($_POST["opcao17"]) ? "Não" : "";
    $nomebb = $_POST["nome_bb"];


    $comando = $pdo->prepare("INSERT INTO amn_ges 
    (nOcorrencia, opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, qtd_filhos,ini_contra,dura_contra, opcao7, opcao8, opcao9, opcao10, opcao11,
    opcao12, opcao13, opcao14, opcao15, opcao16, opcao17, nome_bb )

    VALUES (:nOco, :op1, :op2, :op3, :op4, :op5, :op6, :qtdf , :inic, :durc, :op7, :op8, :op9, :op10, :op11, :op12, :op13,
    :op14, :op15, :op16, :op17, :nmbb)");


    $ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":qtdf", $qtd_filhos);
    $comando->bindParam(":inic", $ini_contra);
    $comando->bindParam(":durc", $dura_contra);
    $comando->bindParam(":op7", $intervalo);
    $comando->bindParam(":op8", $opcao8);
    $comando->bindParam(":op9", $opcao9);
    $comando->bindParam(":op10", $opcao10);
    $comando->bindParam(":op11", $opcao11);
    $comando->bindParam(":op12", $opcao12);
    $comando->bindParam(":op13", $opcao13);
    $comando->bindParam(":op14", $opcao14);
    $comando->bindParam(":op15", $opcao15);
    $comando->bindParam(":op16", $opcao16);
    $comando->bindParam(":op17", $opcao17);
    $comando->bindParam(":nmbb", $nomebb);

    
    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

}