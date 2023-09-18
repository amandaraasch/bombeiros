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
        <?php
            include("../conecta.php"); //conecta com o banco de dados
            $comando = $pdo->prepare("SELECT * FROM cadastro");
            $resultado = $comando->execute();
            
            while($linhas = $comando->fetch()){
                $login = $linhas["login"];
                $senha = $linhas["senha"];
                $cep = $linhas["cep"];
                $id = $linhas["id"]; // supondo que você tenha uma coluna ID para identificar unicamente cada usuário
        ?>
                <div class="usuario">
                    <strong>Usuário:</strong> <?php echo $login; ?><br>
                    <strong>CEP:</strong> <?php echo $cep; ?><br>
                    <br>
                    <button  type="button" class="exclui" onclick="excluir('<?php echo $id; ?>');">Remover</button>
                </div>
        <?php
            }
        ?>
    </div>
</form>

<div class="motivacional">
<div class="lembre"> <b>Lembre-se<b></div>
<p>Seu valor vai além das palavras; em cada gesto de socorro, você toca vidas. Continue sendo essa inspiração!<p>
    <img class="cora" src="../img/coracao.png" >
</div>        
</div>

 </div>
    <div class="div3">
            <?php
        include("../conecta.php");

        // Conta o número de usuários que não são administradores
        $consultaNaoAdm = $pdo->prepare("SELECT COUNT(*) as count FROM cadastro WHERE adm = 'n'");
        $consultaNaoAdm->execute();
        $resultadoNaoAdm = $consultaNaoAdm->fetch();
        $numeroNaoAdm = $resultadoNaoAdm['count'];

        $consultaAdm = $pdo->prepare("SELECT COUNT(*) as count FROM usuarios WHERE adm = 's'");
        $consultaAdm->execute();
        $resultadoAdm = $consultaAdm->fetch();
        $numeroAdm = $resultadoAdm['count'];
        ?>
         
        <div class="numeross">
       <div class="numerousu"><?php echo $numeroNaoAdm; ?><p> N° de Usuários Cadastrados<p></div>
       <div class="numeroadm"><?php echo $numeroAdm; ?> <p>N° de Administradores<p> </div>
       
    </div>
</body>
<script>

    function excluir(id) {
    // Aqui você pode fazer uma chamada AJAX para excluir o usuário com base no ID
    // ou redirecionar para uma página PHP que realiza a exclusão.
    if (confirm("Você tem certeza que deseja excluir este usuário?")) {
        // Exemplo de redirecionamento para uma página PHP:
        window.location.href = 'excluir_usuario.php?id=' + id;
    }
}
    
</script>
</html>