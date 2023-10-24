<?php
session_start();
include('../conecta.php');

$data = $_POST["aniversario"];
$sexo = $_POST["sexo"];
$nome_hospital = $_POST["nome_hospital"];
$nomepac = $_POST["NOMEPAC"];
$idadepac = $_POST["IDADEPAC"];
$cpfpac = $_POST["CPFpac"];
$telefone = $_POST["telefone"];
$nomeacom = $_POST["NOMEACOM"];
$idadeacom = $_POST["IDADEACOM"];
$local = $_POST["Localidade"]; // Added a semicolon here

$array = [
    $data,
    $sexo,
    $nome_hospital,
    $nomepac,
    $idadepac,
    $cpfpac,
    $telefone,
    $nomeacom,
    $idadeacom,
    $local
];

$result = false;

foreach ($array as $valor) {
    if (empty($valor)) {
        $result = true;
    }
}

if($result === true) {
    header("Location: pagina1.html");
    exit();
}

// Use prepared statements to avoid SQL injection
$comando = $pdo->prepare("INSERT INTO paciente(`Data`, Sexo, Nome_hospital, Nomepac, Idadepac, CPFpac, Telefone, NOMEACOM, IDADEACOM, Localidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Associate the values with the parameters in the query
$comando->bindParam(1, $data);
$comando->bindParam(2, $sexo);
$comando->bindParam(3, $nome_hospital);
$comando->bindParam(4, $nomepac);
$comando->bindParam(5, $idadepac);
$comando->bindParam(6, $cpfpac);
$comando->bindParam(7, $telefone);
$comando->bindParam(8, $nomeacom);
$comando->bindParam(9, $idadeacom);
$comando->bindParam(10, $local);

if ($comando->execute()) {
    $_SESSION["id"]= $pdo->lastInsertId();
    echo ("{\"Resp\":1}");
} else {
    echo ("{\"Resp\":0}");
}
?>
