<?php
session_start();
include("conecta.php");

if (isset($_SESSION["logado"])) {
    $logado = $_SESSION["logado"];

    // Verifica se um arquivo foi enviado
    if (isset($_FILES['novaFoto'])) {
        $foto = file_get_contents($_FILES['novaFoto']['tmp_name']);

        // Atualiza a foto no banco de dados
        $comando = $pdo->prepare("UPDATE perfil SET foto = :foto WHERE id_perfil = :id_perfil");
        $comando->bindParam(':foto', $foto, PDO::PARAM_LOB);
        $comando->bindParam(':id_perfil', $logado);
        $comando->execute();

        // Redireciona de volta para o perfil após a atualização
        header('Location: html/perfil.php');
        exit();
    } else {
        // Se nenhum arquivo foi enviado, você pode lidar com isso aqui
        echo 'Nenhum arquivo enviado.';
    }
}
?>