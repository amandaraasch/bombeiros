<?php
session_start();
include('../conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtenha os valores das caixas de seleção do POST

$obs = $_POST["obs"];

$comando = $pdo->prepare("INSERT INTO obs_import (nOcorrencia, obs ) VALUES (:nOcorrencia, :obs)");

    // Obtém o número de ocorrência da sessão
    $ocorrencia = $_SESSION["id"];

    $comando->bindParam(":nOcorrencia", $ocorrencia);
    $comando->bindParam(":obs", $obs);
    

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }
}
?>