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
            <div title="Tela inicial" class="casa">
                <img title="Tela inicial" class="casinha" src="../img/casinha.png">
            </div>
           <div title="Ocorrências" class="add">
           <a href="ocorrencias.html" onclick="return showAlertt();">
            <img title="Ocorrências" class="add2"src="../img/ficha.png">
            </a>
        </div>
            <div title="Sair" class="sair">
                <a href="login.html" onclick="return showAlert();">
                <img title="Sair" class="saindo"src="../img/sair.png">
                </a>
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
                   

                    $comando = $pdo->prepare("SELECT * FROM cadastro where login='$logado'");
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
                    <strong>Usuário:</strong> <?php echo $login; ?>
                    <strong>CEP:</strong> <?php echo $cep; ?>
                    
                    <button  type="button" class="exclui" onclick="excluir('<?php echo $id; ?>' ,'<?php echo $login; ?>');">Remover</button>
                </div>
        <?php
            }
        ?>
    </div>
</form>

<div class="motivacional">
    <img class="alerta" src="../img/alerta.png"> 
<div class="lembre">  <b>Página Responsável pela administração dos usuários cadastrados.<b></div>
<p><p>
    
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

        $consultaAdm = $pdo->prepare("SELECT COUNT(*) as count FROM cadastro WHERE adm = 's'");
        $consultaAdm->execute();
        $resultadoAdm = $consultaAdm->fetch();
        $numeroAdm = $resultadoAdm['count'];
        ?>
         
        <div class="numeross">
       <div class="numerousu"><?php echo $numeroNaoAdm; ?><p> N° de Usuários Cadastrados<p></div>
       <div class="numeroadm"><?php echo $numeroAdm; ?> <p>N° de Administradores<p> </div>
        </div>
        <div class="inserir">
        <div class="um">
        <b> CADASTRAR USUÁRIO:</b>
     </div>
    
     <form action="../cadastrar.php" method="post" onsubmit="return validarCampo()">
        <div class="tres">
          
            <div class="HOMI">
                <input class="caixa" type="login" id="login" name="login" placeholder="Usuário">
            </div>
            <br>
            <div class="senha">
                <input class="caixa" type="senha" id="senha" name="senha" placeholder="Senha">
            </div>
            <div class="cpf">
                <input class="caixa" type="cep" id="cep" name="cep" placeholder="CEP"  onkeyup="ValidarCEP()";>
            </div>
            <div class="descricao">
                <input class="caixa" type="descricao" id="descricao" name="descricao" placeholder="Descrição Pessoal">
            </div>
            <div id="mensagemErro" ></div>
            
        </div>
        <button class="entrar" type="submit">CONFIRMAR</button>
        
    </form>
        </div>
       
    </div>
</body>
<script>
 function showAlert() {
        alert('Você irá sair dessa página!');
        return true; // permite que a navegação continue após mostrar o alerta
    }
    function showAlertt() {
        alert('Você irá para página de ocorrências!');
        return true; // permite que a navegação continue após mostrar o alerta
    }

function validarCEP() {
            const cepInput = document.getElementById("cep");
            const resultadoElement = document.getElementById("resultado");

            const cepRegex = /^\d{5}-\d{3}$/; // Formato esperado: 00000-000

            if (cepRegex.test(cepInput.value)) {
                resultadoElement.textContent = "CEP válido!";
                resultadoElement.style.color = "green";
            } else {
                resultadoElement.textContent = "CEP inválido. Use o formato 00000-000.";
                resultadoElement.style.color = "red";
            }
        }
    function validarCampo() {
      var campo = document.getElementById('login').value;
      
      if (campo === '') {
        document.getElementById('mensagemErro').innerHTML = 'Campo vazio! Por favor, preencha o campo.';
        return false;
      }
      
      
    
        var campo = document.getElementById('senha').value;
      
      if (campo === '') {
        document.getElementById('mensagemErro').innerHTML = 'Campo vazio! Por favor, preencha o campo.';
        return false;
      }
      
      return true;

      var campo = document.getElementById('cpf').value;
      
      if (campo === '') {
        document.getElementById('mensagemErro').innerHTML = 'Campo vazio! Por favor, preencha o campo.';
        return false;
      }
      
      return true;

      var campo = document.getElementById('descricao').value;
      
      if (campo === '') {
        document.getElementById('mensagemErro').innerHTML = 'Campo vazio! Por favor, preencha o campo.';
        return false;
      }
      
      return true;
    }

    function excluir(id, login) {
    // Aqui você pode fazer uma chamada AJAX para excluir o usuário com base no ID
    // ou redirecionar para uma página PHP que realiza a exclusão.
    if (confirm("Você tem certeza que deseja excluir este usuário?")) {
        // Exemplo de redirecionamento para uma página PHP:
        window.location.href = '../excluir.php?id=' + id +"&login=" + login;
    }
}
    
</script>
</html>