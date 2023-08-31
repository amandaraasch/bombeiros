<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adm.css">
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <link rel="Website Icon" type="png"
    href="../img/noar.png">
    <title>ADM</title>
</head>
<body>
    <div class="menu">
        <div class="menu2">
           <img class="logo" src="../img/logo_grande.png" >
            <div class="casa">
                <img class="casinha" src="../img/casinha.png">
            </div>
           <div class="add">
                <img class="add2"src="../img/add.png">
            </div>
            <div class="sair">
                <img class="saindo"src="../img/sair.png">
            </div>
        </div>
    </div>
    
    <div class="div2">
         <div class="ola">
                <div class="bemvindo"><br><P>Bem Vindo(a)!</P></div>
                <?php
                    session_start();
                    include ("../conecta.php");
                    $logado = $_SESSION["logado"];
                   

                    $comando = $pdo->prepare("SELECT * FROM usuarios where login='$logado'");
                    $resultado = $comando->execute();
            
                    while( $linhas = $comando->fetch()){
                        $email = $linhas["login"];
                    }




                ?>
                
            
                <div class="nome">
                    <?php
                    echo("$email");
                    ?>
                </div> 
                <div class="perfil">
                    <img class="bombe" src="../img/bombeiro (1).png">
                </div> 
       
            </div>

            <div class="cadastrados">
            <div class="cada"> CADASTRADOS</div>
            <form>
    
    <div class="prin">
        <div class="tabela">
        
        <table class="tabela_redonda" cellspacing="0" >
           
                
                <tr class="table_heading">
                    
                    <td >LOGIN</td>
                    <td class="verde">SENHA</td>
                    <td class="verde">CEP</td>
                    <td class="verde">PERMISSÃO</td>
                   
                   
                </tr>
                
            
            <?php
                include("../conecta.php"); //conecta com o banco de dados
                $comando = $pdo->prepare("SELECT * FROM cadastro");
                $resultado = $comando->execute();
        
                while( $linhas = $comando->fetch()){
                    $login = $linhas["login"];
                    $nome = $linhas["senha"];
                    $cpf = $linhas["cep"];
                    
                    echo("
                        <tr>
                        <td >$login</td>
                        <td >$nome</td>
                        <td >$cpf</td>
                       
                        <td ><button onclick=\"excluir('$login');\"><b>EXCLUIR</b></button></td>
                        </tr>
                    ");
                }
            
            ?>
            
        </table> 
    </div> 
    </div>
</form>
            </div>
 </div>
    <div class="div3">
       
    </div>
</body>
<script>
    function excluir(login)
    {
     
        window.open("../excluir.php?login="+login,"_blank");
    }
</script>
</html>