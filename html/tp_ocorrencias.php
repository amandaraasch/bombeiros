<?php
include("../conecta.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenha os valores das caixas de seleção do POST
  $opcao1 = isset($_POST["opcao1"]) ? "Causado por animais ": "?"; // 1 para selecionado, 0 para não selecionado
  $opcao2 = isset($_POST["opcao2"]) ? "Com meio de transporte" : "?";
  $opcao3 = isset($_POST["opcao3"]) ? "Desmoranamento/Deslizamento" : "?";
  $opcao4 = isset($_POST["opcao4"]) ? "Emergência médica" : "?";
  $opcao5 = isset($_POST["opcao5"]) ? "Queda de altura 2M" : "?";
  $opcao6 = isset($_POST["opcao6"]) ? "Tentativa de suicídio" : "?";
  $opcao7 = isset($_POST["opcao7"]) ? "Queda própria altura " : "?";

  // Crie uma consulta SQL para inserir os valores na tabela (substitua "sua_tabela" pelo nome da sua tabela)
 
  $comando = $pdo->prepare("INSERT INTO tipo_ocorrencia (opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, opcao7) VALUES (:op1, :op2, :op3, :op4, :op5, :op6, :op7)");
  $comando->bindParam(":op1", $opcao1);
  $comando->bindParam(":op2", $opcao2);
  $comando->bindParam(":op3", $opcao3);
  $comando->bindParam(":op4", $opcao4);
  $comando->bindParam(":op5", $opcao5);
  $comando->bindParam(":op6", $opcao6);
  $comando->bindParam(":op7", $opcao7);

  if ($comando->execute()) {
    echo ('{"Resp":1}');
  } else {
    echo ('{"Resp":0}'); 
  }

}
?>