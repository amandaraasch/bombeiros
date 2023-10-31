<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST
    $opcao1 = isset($_POST["opcao1"]) ? "Causado por animais " : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Com meio de transporte" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Desmoronamento/Deslizamento" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "Emergência médica" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Queda de altura 2M" : "";
    $opcao6 = isset($_POST["opcao6"]) ? "Tentativa de suicídio" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "Queda própria altura " : "";
    $opcao8 = isset($_POST["opcao8"]) ? "Afogamento " : "";
    $opcao9 = isset($_POST["opcao9"]) ?  "Agressão " : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Atropelamento " : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Choque elétrico" : "";
    $opcao12 = isset($_POST["opcao12"]) ? "Desabamento " : "";
    $opcao13 = isset($_POST["opcao13"]) ? "Doméstico " : "";
    $opcao14 = isset($_POST["opcao14"]) ? "Esportivo " : "";
    $opcao15 = isset($_POST["opcao15"]) ? "Intoxicação " : "";
    $opcao16 = isset($_POST["opcao16"]) ? "Queda de bicicleta" : "";
    $opcao17 = isset($_POST["opcao17"]) ? "Queda de moto " : "";
    $opcao18 = isset($_POST["opcao18"]) ? "Queda nível <2m" : ""; // Corrigido de '&lt;' para '<'
    $opcao19 = isset($_POST["opcao19"]) ? "Trabalho " : "";
    $opcao20 = isset($_POST["opcao20"]) ? "Transferência " : "";
    $opcao21 = $_POST["Outros"]; // Opção 21 (campo de texto)

    // Crie uma consulta SQL para inserir os valores na tabela (substitua "sua_tabela" pelo nome da sua tabela)
    $comando = $pdo->prepare("INSERT INTO tipo_ocorrencia (nOcorrencia,opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, opcao7, opcao8, opcao9, opcao10, opcao11, opcao12, opcao13, opcao14, opcao15, opcao16, opcao17, opcao18, opcao19, opcao20, Outros)
    VALUES (:nOco,:op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13, :op14, :op15, :op16, :op17, :op18, :op19, :op20, :op21 )");

   
    $ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":op7", $opcao7);
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
    $comando->bindParam(":op18", $opcao18);
    $comando->bindParam(":op19", $opcao19);
    $comando->bindParam(":op20", $opcao20);
    $comando->bindParam(":op21", $opcao21);
    
    if ($comando->execute()) {
        
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
}
?>