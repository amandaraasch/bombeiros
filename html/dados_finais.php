<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $n_usb = $_POST["n_usb"];
    $opcao1 = isset($_POST["opcao1"]) ? "Cód.IR" : "";
    $n_ocorr = $_POST["n_ocorr"];
    $opcao2 = isset($_POST["opcao2"]) ? "Cód.PS" : "";
    $desp = $_POST["desp"];
    $h_ch = $_POST["h_ch"];
    $km_final = $_POST["km_final"];
    $opcao3 = isset($_POST["opcao3"]) ? "CÓD.SIA/SUS" : "";


    $comando = $pdo->prepare("INSERT INTO dados_finais 
    (nOcorrencia, n_usb, opcao1, n_ocorr, opcao2, desp, h_ch, km_final,
    opcao3 )

    VALUES (:nOco, :nusb, :op1, :nocor, :op2, :desp, :hch, :kmfin, :op3 )");

    $ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":nusb", $n_usb);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":nocor", $n_ocorr);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":desp", $desp);
    $comando->bindParam(":hch", $h_ch);
    $comando->bindParam(":kmfin", $km_final);
    $comando->bindParam(":op3", $opcao3);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }





}

