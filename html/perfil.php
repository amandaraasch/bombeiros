<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="Website Icon" type="png"
    href="../img/noar.png">
    <title>PERFIL</title>
</head>
<body>
    <div class="azul">
            <div class="Login">
            <?php
                        session_start();
                        include ("../conecta.php");
                        $logado = $_SESSION["logado"];

                        $comando = $pdo->prepare("SELECT * FROM usuarios where login='$logado'");
                        $resultado = $comando->execute();
                
                        while( $linhas = $comando->fetch()){
                    
                            $login = $linhas["login"];



                        }




                ?>
                        <?php
                            echo("$login");
                        ?>
            </div>
        <img class="foto" src="../img/perfil.png" width="200px">
    </div>
    <div class= "texto">
        <div class="um">
            <div class="prof">
                BOMBEIRO
                <br>
                <div class= "local">
                <img class="localizacao" src="../img/local.png">
               <p> Joinville, SC<p>
                </div>
                
            </div>
        </div>
        <div class="dois">
            <div class="txt1">
                <b>1326</b>

                </div>
            <div class="txt2">Pacientes atendidos</div>
        </div>
    </div>
    <div class="descricao">
        <div class="titulo">
            Descrição
        </div>
    </div>
    <button class="ok"><b>FECHAR PERFIL</b></button></a> 
    <div class="rodape"></div>

    
</body>
</html>