<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST
    $opcao1 = isset($_POST["opcao1"]) ? "Cabeça" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Pescoço" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "T.ANT" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "T.POS" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Genit." : "";
    $opcao6 = isset($_POST["opcao6"]) ? "M.I.D" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "M.I.E" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "M.S.D" : "";
    $opcao9 = isset($_POST["opcao9"]) ? "M.S.E" : "";
    $grau1 = isset($_POST["1grau"]) ? "1° Grau" : "";
    $grau2 = isset($_POST["2grau"]) ? "2° Grau" : "";
    $grau3 = isset($_POST["3grau"]) ? "3° Grau" : "";

    // O SQL está incorreto. Você precisa inserir dados em uma tabela, não em um arquivo PHP.
    // Substitua "quei.php" pelo nome da tabela na qual você deseja inserir os dados.
    $comando = $pdo->prepare("INSERT INTO quei (nOcorrencia, opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, opcao7, opcao8, opcao9, 1grau, 2grau, 3grau) 
    VALUES (:nOco, :op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :1grau, :2grau, :3grau)");

    // Verifique se o comando preparado foi bem-sucedido
    if ($comando) {
        // Obtém o valor da variável de sessão
        $ocorrencia = $_SESSION["id"];
        
        // Substitua as chamadas duplas de bindParam por bindValue
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
        $comando->bindParam(":1grau", $grau1);
        $comando->bindParam(":2grau", $grau2);
        $comando->bindParam(":3grau", $grau3);

        if ($comando->execute()) {
            echo "{\"Resp\":1}";
        } else {
            echo "{\"Resp\":0}";
        }
    } else {
        // Lidar com o erro de preparação do comando
        echo "Erro na preparação do comando.";
    }
}
?>