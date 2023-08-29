<?php
    session_start();
    $login = $_POST["login"]; //pega o input
    $senha = $_POST["senha"];
echo($login);
echo($senha);
    include("conecta.php"); //conecta com o banco de dados

        $comando = $pdo->prepare("SELECT * FROM usuarios where login= '$login' and senha= '$senha' ");
        $resultado = $comando->execute();
        $n = 0;
        $admin = "n";

    while( $linhas = $comando->fetch())

        {
            $n = 1;
            $admin = $linhas["adm"];
            echo("entrei aqui");
        }

        if($n ==0)
        {
            header("Location: index.html");
        }
        if($n ==1)
        {
            if($admin== "s")
        {
            
            $_SESSION["logado"] = $login;
           header("Location: html/adm.php");
        }
        else
        {
            $_SESSION["logado"] = $login;
            header("Location: html/pagina1.html");
        }

        }

echo($admin);
?>