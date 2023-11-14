

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

                        $comando = $pdo->prepare("SELECT * FROM cadastro where login='$logado'");
                        $resultado = $comando->execute();
                        $cep="";
                        while( $linhas = $comando->fetch()){
                    
                            $login = $linhas["login"];
                            $cep = $linhas["cep"];
                            $descricao = $linhas["descricao"];
                            $senha = $linhas["senha"];

                            $url = "https://viacep.com.br/ws/{$cep}/json/";

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            $response = curl_exec($ch);
                            curl_close($ch);

                            $data = json_decode($response, true);
                            $logradouro = $data['logradouro'];
                            $bairro = $data['bairro'];
                            $cidade = $data['localidade'];
                            $estado = $data['uf'];




                        }




                ?>
                        <?php
                            echo("$login");
                        ?>
            </div>
            
        
        <img class="foto" src="../img/perfil2.png" width="200px">
    </div>
    <div class= "texto">
        <div class="um">
            <div class="prof">
                BOMBEIRO
                <br>
                <div class= "local">
                <img class="localizacao" src="../img/local.png"> <p><?php echo("$cidade, $estado "); ?> <p> 
               

                </div>
                
            </div>
        </div>
        <div class="dois">
            <div class="txt1">
                <b><?php echo("$senha "); ?> </b>

                </div>
            <div class="txt2">Código de Acesso</div>
        </div>
    </div>
    <div class="descricao">
        <div class="titulo"  > 
            Descrição
        </div>
       <p> <?php echo("$descricao "); ?> <P>
    </div>
    <a href="pagina1.html">
    <button class="ok"><b>FECHAR PERFIL</b></button>
</a>
    <div class="rodape"></div>

    
</body>
</html>