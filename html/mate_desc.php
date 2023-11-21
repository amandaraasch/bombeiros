<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $opcao1 = isset($_POST["opcao1"]) ? "ataduras" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "8" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "12" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "20" : "";
    $quantidade1 = $_POST["quantidade1"];  
    $opcao5 = isset($_POST["opcao5"]) ? "Cateter.tp óculos" : "";
    $quantidade2 = $_POST["quantidade2"];  
    $opcao6 = isset($_POST["opcao6"]) ? "Compressa comum" : "";
    $quantidade3 = $_POST["quantidade3"];
    $opcao7 = isset($_POST["opcao7"]) ? "Kit's" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "H" : "";
    $opcao9 = isset($_POST["opcao9"]) ? "P" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Q" : "";
    $quantidade4 = $_POST["quantidade4"];
    $opcao11 = isset($_POST["opcao11"]) ? "Luvas.DES (pares)" : "";
    $quantidade5 = $_POST["quantidade5"];
    $opcao12 = isset($_POST["opcao12"]) ? "Manta Iluminada" : "";
    $quantidade6 = $_POST["quantidade6"];
    $opcao13 = isset($_POST["opcao13"]) ? "Máscara.DESC" : "";
    $quantidade7 = $_POST["quantidade7"];
    $opcao14 = isset($_POST["opcao14"]) ? "Pás do dea" : "";
    $quantidade8 = $_POST["quantidade8"];
    $opcao15 = isset($_POST["opcao15"]) ? "Sonda de aspiração" : "";
    $quantidade9 = $_POST["quantidade9"];
    $opcao16 = isset($_POST["opcao16"]) ? "Soro fisiológico" : "";
    $quantidade10 = $_POST["quantidade10"];
    $opcao17 = isset($_POST["opcao17"]) ? "talas.PAP" : "";
    $opcao18 = isset($_POST["opcao18"]) ? "P" : "";
    $opcao19 = isset($_POST["opcao19"]) ? "G" : "";
    $quantidade11 = $_POST["quantidade11"];
    $opcao20 = isset($_POST["opcao20"]) ? "Outros" : "";
    $quantidade12 = $_POST["quantidade12"];

    $comando = $pdo->prepare("INSERT INTO mate_desc 
    (nOcorrencia, opcao1, opcao2, opcao3, opcao4, quantidade1, opcao5, quantidade2, opcao6, quantidade3, opcao7, opcao8, opcao9, opcao10, quantidade4, opcao11, quantidade5,
    opcao12, quantidade6, opcao13, quantidade7, opcao14, quantidade8, opcao15, quantidade9, opcao16, quantidade10, opcao17, opcao18, opcao19, quantidade11, opcao20, quantidade12)

    VALUES (:nOco, :op1, :op2, :op3, :op4, :qnt1, :op5, :qnt2, :op6, :qnt3, :op7, :op8, :op9, :op10, :qnt4, :op11, :qnt5, :op12, :qnt6, :op13, :qnt7,
    :op14, :qnt8, :op15, :qnt9, :op16, :qnt10, :op17, :op18, :op19, :qnt11, :op20, :qnt12)");



    $ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":qnt1", $quantidade1);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":qnt2", $quantidade2);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":qnt3", $quantidade3);
    $comando->bindParam(":op7", $opcao7);
    $comando->bindParam(":op8", $opcao8);
    $comando->bindParam(":op9", $opcao9);
    $comando->bindParam(":op10", $opcao10);
    $comando->bindParam(":qnt4", $quantidade4);
    $comando->bindParam(":op11", $opcao11);
    $comando->bindParam(":qnt5", $quantidade5);
    $comando->bindParam(":op12", $opcao12);
    $comando->bindParam(":qnt6", $quantidade6);
    $comando->bindParam(":op13", $opcao13);
    $comando->bindParam(":qnt7", $quantidade7);
    $comando->bindParam(":op14", $opcao14);
    $comando->bindParam(":qnt8", $quantidade8);
    $comando->bindParam(":op15", $opcao15);
    $comando->bindParam(":qnt9", $quantidade9);
    $comando->bindParam(":op16", $opcao16);
    $comando->bindParam(":qnt10", $quantidade10);
    $comando->bindParam(":op17", $opcao17);
    $comando->bindParam(":op18", $opcao18);
    $comando->bindParam(":op19", $opcao19);
    $comando->bindParam(":qnt11", $quantidade11);
    $comando->bindParam(":op20", $opcao20);
    $comando->bindParam(":qnt12", $quantidade12);
  

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

}
?>
    

