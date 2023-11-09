<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $mais5 = isset($_POST["+5"]) ? "sim" : "não";
    $aber_ocu = isset($_POST["aber_ocu"]) ? "Abertura Ocular" : "";
    $opcao1 = isset($_POST["opcao1"]) ? "Espontânea" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Comando Verbal" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Estímulo Doloroso" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "Nenhuma" : "";
    $resp_verb = isset($_POST["resp_verb"]) ? "Resposta Verbal" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Orientado" : "";
    $opcao6 = isset($_POST["opcao6"]) ? "Confuso" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "Palavras Inapropriadas" : "";
    $opcao8 = isset($_POST["opcao8"]) ? "Palavras Incompreensíveis" : "";
    $opcao9 = isset($_POST["opcao9"]) ? "Nenhuma" : "";
    $resp_moto = isset($_POST["resp_moto"]) ? "Resposta Motora" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Obedece Comandos" : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Localizado Por" : "";
    $opcao12 = isset($_POST["opcao12"]) ? "Movimento de Retirada" : "";
    $opcao13 = isset($_POST["opcao13"]) ? "Flexão Anormal" : "";
    $opcao14 = isset($_POST["opcao14"]) ? "Extensão Anormal" : "";
    $opcao15 = isset($_POST["opcao15"]) ? "Nenhuma" : "";
    $menos5 = isset($_POST["-5"]) ? "sim" : "não";
    $aber_ocu16 = isset($_POST["aber_ocu16"]) ? "Abertura Ocular" : "";
    $opcao17 = isset($_POST["opcao17"]) ? "Espontânea" : "";
    $opcao18 = isset($_POST["opcao18"]) ? "Comando Verbal" : "";
    $opcao19 = isset($_POST["opcao19"]) ? "Estímulo Doloroso" : "";
    $opcao20 = isset($_POST["opcao20"]) ? "Nenhuma" : "";
    $resp_verb21 = isset($_POST["resp_verb21"]) ? "Resposta Verbal" : "";
    $opcao22 = isset($_POST["opcao22"]) ? "Palavras Apropriadas" : "";
    $opcao23 = isset($_POST["opcao23"]) ? "Palavras Inapropriadas" : "";
    $opcao24 = isset($_POST["opcao24"]) ? "Choro Persistente/Grutos" : "";
    $opcao25 = isset($_POST["opcao25"]) ? "Sons Incompreensíveis" : "";
    $opcao26 = isset($_POST["opcao26"]) ? "Nenhuma Resposta Verbal" : "";
    $resp_moto27 = isset($_POST["resp_moto27"]) ? "Resposta Motora" : "";
    $opcao28 = isset($_POST["opcao28"]) ? "Obedece Prontamente" : "";
    $opcao29 = isset($_POST["opcao29"]) ? "Localiza Dor/Estímulo Tátil" : "";
    $opcao30 = isset($_POST["opcao30"]) ? "Retirar-Segmento Estimulado" : "";
    $opcao31 = isset($_POST["opcao31"]) ? "Flexão Anormal" : "";
    $opcao32 = isset($_POST["opcao32"]) ? "Extensão Anormal" : "";
    $opcao33 = isset($_POST["opcao33"]) ? "Ausência" : "";

    $comando = $pdo->prepare("INSERT INTO ava_pac
    (nOcorrencia, `+5`, aber_ocu, opcao1, opcao2, opcao3, opcao4, resp_verb, opcao5, opcao6, opcao7, opcao8, opcao9, resp_moto, 
    opcao10, opcao11, opcao12, opcao13, opcao14, opcao15, `-5`, aber_ocu16, opcao17, opcao18, opcao19,
    opcao20, resp_verb21, opcao22, opcao23, opcao24, opcao25, opcao26, resp_moto27, 
    opcao28, opcao29, opcao30, opcao31, opcao32, opcao33)
    VALUES (:nOco, :mais5, :aber, :op1, :op2, :op3, :op4, :resp_verb, :op5, :op6, :op7, :op8, :op9, :resp_moto,
    :op10, :op11, :op12, :op13, :op14, :op15, :menos5, :aber_ocu16, :op17, :op18, :op19,
    :op20, :resp_verb21, :op22, :op23, :op24, :op25, :op26, :resp_moto27, :op28, :op29, :op30, :op31, :op32, :op33)");

    // Obtém o número de ocorrência da sessão
    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOco", $ocorrencia);
    $comando->bindParam(":mais5", $mais5);
    $comando->bindParam(":aber", $aber_ocu);
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":resp_verb", $resp_verb);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":op7", $opcao7);
    $comando->bindParam(":op8", $opcao8);
    $comando->bindParam(":op9", $opcao9);
    $comando->bindParam(":resp_moto", $resp_moto);
    $comando->bindParam(":op10", $opcao10);
    $comando->bindParam(":op11", $opcao11);
    $comando->bindParam(":op12", $opcao12);
    $comando->bindParam(":op13", $opcao13);
    $comando->bindParam(":op14", $opcao14);
    $comando->bindParam(":op15", $opcao15);
    $comando->bindParam(":menos5", $menos5);
    $comando->bindParam(":aber_ocu16", $aber_ocu16);
    $comando->bindParam(":op17", $opcao17);
    $comando->bindParam(":op18", $opcao18);
    $comando->bindParam(":op19", $opcao19);
    $comando->bindParam(":op20", $opcao20);
    $comando->bindParam(":resp_verb21", $resp_verb21);
    $comando->bindParam(":op22", $opcao22);
    $comando->bindParam(":op23", $opcao23);
    $comando->bindParam(":op24", $opcao24);
    $comando->bindParam(":op25", $opcao25);
    $comando->bindParam(":op26", $opcao26);
    $comando->bindParam(":resp_moto27", $resp_moto27);
    $comando->bindParam(":op28", $opcao28);
    $comando->bindParam(":op29", $opcao29);
    $comando->bindParam(":op30", $opcao30);
    $comando->bindParam(":op31", $opcao31);
    $comando->bindParam(":op32", $opcao32);
    $comando->bindParam(":op33", $opcao33);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
}
?>
