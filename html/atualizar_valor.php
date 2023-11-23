<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os parâmetros necessários foram enviados
    if (isset($_POST['campo'], $_POST['novoValor'], $_POST['nOcorrencia'])) {
        $campo = $_POST['campo'];
        $novoValor = $_POST['novoValor'];
        $nOcorrencia = $_POST['nOcorrencia'];

        // Faça a conexão com o banco de dados (substitua pelos seus dados de conexão)
        include('../conecta.php');

        // Use prepared statements para evitar SQL injection
        $comando = $pdo->prepare("UPDATE paciente SET $campo = :novoValor WHERE nOcorrencia = :nOcorrencia");
        $comando->bindParam(':novoValor', $novoValor);
        $comando->bindParam(':nOcorrencia', $nOcorrencia);

        try {
            // Execute a atualização
            $comando->execute();
            echo "Valor atualizado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao atualizar valor: " . $e->getMessage();
        }
    } else {
        echo "Parâmetros incompletos!";
    }
} else {
    echo "Método de requisição inválido!";
}
?>