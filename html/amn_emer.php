<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtenha os valores das caixas de seleção do POST

$ss = $_POST["ss"];
$opcao1 = isset($_POST["opcao1"]) ? "sim" : "";
$opcao2 = isset($_POST["opcao2"]) ? "não" : "";
$tempo = $_POST["tempo"];
$opcao3 = isset($_POST["opcao3"]) ? "Sim" : "";
$opcao4 = isset($_POST["opcao4"]) ? "Não" : "";
$quais = $_POST["quais"];
$opcao5 = isset($_POST["opcao5"]) ? "Sim" : "";
$opcao6 = isset($_POST["opcao6"]) ? "Não" : ""; 
$horario = $_POST["horario"];
$quaismed = $_POST["quaismed"];
$opcao7 = isset($_POST["opcao7"]) ? "Sim" : "";
$opcao8 = isset($_POST["opcao8"]) ? "Não" : "";
$especifique = $_POST["especifique"];
$opcao9 = isset($_POST["opcao9"]) ? "Sim" : "";
$opcao10 = isset($_POST["opcao10"]) ? "Não" : "";
$horas = $_POST["horas"];

$comando = $pdo->prepare("INSERT INTO amn_emer
(nOcorrencia, ss, opcao1, opcao2, tempo, opcao3, opcao4, quais, opcao5,
opcao6, horario, quaismed, opcao7, opcao8, especifique, opcao9, opcao10, horas)

VALUES (:nOco, :ss, :op1, :op2, :tmp, :op3, :op4, :quais, :op5, :op6, :hr, :qumed,
:op7, :op8, :espfiq, :op9, :op10, :hrs)");

 // Obtém o número de ocorrência da sessão
 $ocorrencia = $_SESSION["id"];

 $comando->bindParam(":nOco", $ocorrencia);
 $comando->bindParam(":ss", $ss);
 $comando->bindParam(":op1", $opcao1);
 $comando->bindParam(":op2", $opcao2);
 $comando->bindParam(":tmp", $tempo);
 $comando->bindParam(":op3", $opcao3);
 $comando->bindParam(":op4", $opcao4);
 $comando->bindParam(":quais", $quais);
 $comando->bindParam(":op5", $opcao5);
 $comando->bindParam(":op6", $opcao6);
 $comando->bindParam(":hr", $horario);
 $comando->bindParam(":qumed", $quaismed);
 $comando->bindParam(":op7", $opcao7);
 $comando->bindParam(":op8", $opcao8);
 $comando->bindParam(":espfiq", $especifique);
 $comando->bindParam(":op9", $opcao9);
 $comando->bindParam(":op10", $opcao10);
 $comando->bindParam(":hrs", $horas);

 if ($comando->execute()) {
    echo ("{\"Resp\":1}");
} else {
    echo ("{\"Resp\":0}");
}

}

?>