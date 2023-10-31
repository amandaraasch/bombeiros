<?php

session_start();
$id=$_SESSION["id"];

include('../conecta.php');

$comando = $pdo->prepare("SELECT * FROM paciente where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $nome=$linhas ["Nomepac"];
    $data=$linhas ["Data"];
    $sexo=$linhas ["Sexo"];
    $cpf=$linhas ["CPFpac"];
    $idade=$linhas ["Idadepac"];
    $nome_hosp=$linhas ["Nome_hospital"];
    $fone=$linhas ["Telefone"];
    $localidade=$linhas ["Localidade"];
    $nomeA=$linhas["NOMEACOM"];
    $idadeA=$linhas["IDADEACOM"];

   




}
$comando = $pdo->prepare("SELECT * FROM sv_form where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

   
    $pressao=$linhas["pressao_arterial"];
    $pressao2=$linhas["pressao2"];
    $pulso=$linhas["pulso"];
    $temperatura=$linhas["temperatura"];
    $saturacao=$linhas["saturacao"];
    $perfusao=$linhas["perfusao_maior"];
    $perfusao2=$linhas["perfusao_menor"];
    $maior=$linhas["opcao1"];
    $menor=$linhas["opcao2"];
    $respiracao=$linhas["respiracao"];




}
$comando = $pdo->prepare("SELECT * FROM pes_form where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $opcao1=$linhas["opcao1"];
    $opcao2=$linhas["opcao2"];
    $opcao3=$linhas["opcao3"];
    $opcao4=$linhas["opcao4"];
    $opcao5=$linhas["opcao5"];
    $opcao6=$linhas["opcao6"];
    $opcao7=$linhas["opcao7"];
    $opcao8=$linhas["opcao8"];
    $opcao9=$linhas["opcao9"];
    $opcao10=$linhas["opcao10"];
    $opcao11=$linhas["opcao11"];
    $opcao12=$linhas["opcao12"];
    $opcao13=$linhas["opcao13"];
    $opcao14=$linhas["opcao14"];
    $opcao15=$linhas["opcao15"];
    $opcao16=$linhas["opcao16"];
    $opcao17=$linhas["opcao17"];
    $opcao18=$linhas["opcao18"];
    $opcao19=$linhas["opcao19"];
    $outros=$linhas["Outros"];
    $opcao21=$linhas["opcao21"];

}
 
$comando = $pdo->prepare("SELECT * FROM tipo_ocorrencia where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $animais=$linhas["opcao1"];
    $transporte=$linhas["opcao2"];
    $desmoronamento=$linhas["opcao3"];
    $emergencia=$linhas["opcao4"];
    $queda=$linhas["opcao5"];
    $suicidio=$linhas["opcao6"];
    $queda_altura=$linhas["opcao7"];
    $afogamento=$linhas["opcao8"];
    $agressao=$linhas["opcao9"];
    $atropelamento=$linhas["opcao10"];
    $choque=$linhas["opcao11"];
    $desabamento=$linhas["opcao12"];
    $domestico=$linhas["opcao13"];
    $esportivo=$linhas["opcao14"];
    $intoxicacao=$linhas["opcao15"];
    $queda_bike=$linhas["opcao16"];
    $queda_moto=$linhas["opcao17"];
    $queda_nivel=$linhas["opcao18"];
    $trabalho=$linhas["opcao19"];
    $transferencia=$linhas["opcao20"];
    $outross=$linhas["Outros"];

}
$comando = $pdo->prepare("SELECT * FROM ve_form where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $ciclista=$linhas["opcao1"];
    $cond_moto=$linhas["opcao2"];
    $gestante=$linhas["opcao3"];
    $pass_frente=$linhas["opcao4"];
    $pass_moto=$linhas["opcao5"];
    $cond_carro=$linhas["opcao6"];
    $clinico=$linhas["opcao7"];
    $trauma=$linhas["opcao8"];
    $pass_tras=$linhas["opcao9"];
    $pedestre=$linhas["opcao10"];

}
$comando = $pdo->prepare("SELECT * FROM ss_form where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $abdomen=$linhas["opcao1"];
    $afundamento=$linhas["opcao2"];
    $agitacao=$linhas["opcao3"];
    $amnesia=$linhas["opcao4"];
    $angina=$linhas["opcao5"];
    $apneia=$linhas["opcao6"];
    $bradi=$linhas["opcao7"];
    $bradp=$linhas["opcao8"];
    $bronco=$linhas["opcao9"];
    $cefaleia=$linhas["opcao10"];
    $cianose=$linhas["opcao11"];
    $labios=$linhas["opcao12"];
    $extremidades=$linhas["opcao13"];
    $consulsao=$linhas["opcao14"];
    $decorticao=$linhas["opcao15"];
    $deformidade=$linhas["opcao16"];
    $descerebracao=$linhas["opcao17"];
    $desmaio=$linhas["opcao18"];
    $desv_tra=$linhas["opcao19"];
    $dispineia=$linhas["opcao20"];
    $dor_local=$linhas["opcao21"];
    $edema=$linhas["opcao22"];
    $generalizado=$linhas["opcao23"];
    $localizado=$linhas["opcao24"];
    $enfisema=$linhas["opcao25"];
    $estase=$linhas["opcao26"];
    $face=$linhas["opcao26"];
    $hemorragia=$linhas["opcao28"];
    $interna=$linhas["opcao29"];
    $externa=$linhas["opcao30"];
    $hiper=$linhas["opcao31"];
    $hipo=$linhas["opcao32"];
    $nau=$linhas["opcao33"];
    $naso=$linhas["opcao34"];
    $obito=$linhas["opcao35"];
    $otorre=$linhas["opcao36"];
    $otorra=$linhas["opcao37"];
    $ovaca=$linhas["opcao38"];
    $parada=$linhas["opcao39"];
    $card=$linhas["opcao40"];
    $resp=$linhas["opcao41"];
    $pri=$linhas["opcao42"];
    $pru=$linhas["opcao43"];
    $pupilas=$linhas["opcao44"];
    $an=$linhas["opcao45"];
    $iso=$linhas["opcao46"];
    $midri=$linhas["opcao47"];
    $mio=$linhas["opcao48"];
    $rea=$linhas["opcao49"];
    $nrea=$linhas["opcao50"];
    $sede=$linhas["opcao51"];
    $sinal=$linhas["opcao52"];
    $sinalg=$linhas["opcao53"];
    $sudo=$linhas["opcao54"];
    $taquip=$linhas["opcao55"];
    $taquic=$linhas["opcao56"];
    $tont=$linhas["opcao57"];
    $ooutros=$linhas["Outros"];


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <link rel="stylesheet" href="../css/relatorio.css">
    <link rel="Website Icon" type="png"
    href="../img/logo_grande.png">
    <script src="../jquery-1.8.2.min.js"></script>
    <title>INICIAL</title>


</head>
<body>

    <div class="verm"> 
      <div id="menu-button">&#9776;  </div>

       <div id="menu">
        
        <ul>
          <li><img class="boneco" src="../img/bombeiro (1).png"><a href="perfil.php">Perfil </a></li>
        </ul>

       </div>
</div>

       
    </div>

    <div class="um">
        <img class="logo" src="../img/logo_grande.png" width="100px">
        <div class="escrita">
           <div class="titulo"><b>VER RELATÓRIO FINAL </b></div> 
           <div class="sub">Verifique os dados:</div> 
        </div>
    </div>

   <div class="rela">
    <br>
    <P>DADOS PACIENTE:</P>
    <br>
    Nome: <?php echo($nome);?> <br>
    <br>
    Data:<?php echo($data);?><br>
    <br>
    Sexo:<?php echo($sexo);?><br>
    <br>
    RG/CPF:<?php echo($cpf);?><br>
    <br>
    Idade:<?php echo($idade);?><br>
    <br>
    Nome hospital:<?php echo($nome_hosp);?><br>
    <br>
    Fone:<?php echo($fone);?><br>
    <br>
    Local ocorrência:<?php echo($localidade);?><br>
    <br>
    <P>DADOS ACOMPANHANTE:</P>
    <br>
    Nome: <?php echo($nomeA);?><br>
    <br>
    Idade:<?php echo($idadeA);?><br>
    <br>
    <P>SINAIS VITAIS:</P>
    <br>
    Pressão arterial:<?php echo($pressao) ?> X <?php echo($pressao2);?> <br>
    <br>
    Pulso:  <?php echo($pulso);?><br>
    <br>
    Temperatura:  <?php echo($temperatura);?> : <?php echo($maior);?>  <?php echo($menor);?><br>
    <br>
    Saturação: <?php echo($saturacao);?><br>
    <br>
    Perfusão: <?php echo($perfusao);?> <?php echo($perfusao2);?><br>
    <br>
    Respiração: <?php echo($respiracao);?><br>
    <br>
    <P>PROBLEMAS ENCONTRADOS:</P>
    <br>
    <?php echo("$opcao1");?>: <br>
    <?php echo($opcao2);?> : <?php echo($opcao3);?>  <?php echo($opcao3);?><br>
    
    <?php echo($opcao5);?>: <?php echo($opcao6);?> <?php echo($opcao7);?> <br>
   
    <?php echo($opcao8);?>:  <?php echo($opcao9);?> <?php echo($opcao10);?> <?php echo($opcao11);?><br>
   
    <?php echo($opcao12);?>:  <?php echo($opcao13);?> <?php echo($opcao14);?> <?php echo($opcao15);?> <?php echo($opcao16);?> <?php echo($opcao17);?> <?php echo($opcao18);?> <?php echo($opcao19);?> <br>
   
    <?php echo($outros);?>:<?php echo($opcao21);?> <br>
    
    <P>TIPO DE OCORRÊNCIA:</P>
    
    
    <?php echo($animais);?> <br>
    
    <?php echo($transporte);?>  
   
    <?php echo( $desmoronamento);?>  
    
    <?php echo($emergencia);?> 
    
    <?php echo($queda);?> 
    
    <?php echo($suicidio);?> 
    
    <?php echo($queda_altura);?> 

    <?php echo($afogamento);?> 
    
    <?php echo($agressao);?> 
    
    <?php echo($atropelamento);?> 
    
    <?php echo($choque);?> 
    
    <?php echo($desabamento);?>
    
    <?php echo($domestico);?> 
    
    <?php echo($esportivo);?> 
    
    <?php echo($intoxicacao);?> 
    
    <?php echo($queda_bike);?>
   
    <?php echo( $queda_moto);?> 
    
    <?php echo($queda_nivel);?> 
    
    <?php echo($trabalho);?> 

    <?php echo($transferencia);?> 

    <?php echo($outross);?> 


    <P>AVALIAÇÃO DO PACIENTE:</P>
    <br>
    <P>LOCALIZAÇÃO DOS TRAUMAS:</P>
    Local:<br>
    <br>
    Lado:<br>
    <br>
    Face:<br>
    <br>
    Tipo:<br>
    
    <br>
    <P>QUEIMADURAS:</P>
    <br>
    <P>OBJETOS RECOLHIDOS:</P>
    <br>
    <P>SINAI E SINTOMAS:</P>
    <br>
    <P>FORMA DE CONDUÇÃO:</P>
    <br>
    <?php echo($abdomen);?>
    <?php echo($afundamento);?>
    <?php echo($agitacao);?>
    <?php echo($amnesia);?>
    <?php echo($angina);?>
    <?php echo($apneia);?>
    <?php echo($bradi);?>
    <?php echo($bradp);?>
    <?php echo($bronco);?>
    <?php echo($cefaleia);?>
    <?php echo($cianose);?> :   <?php echo($labios);?>  <?php echo($extremidades);?>  
    <?php echo($consulsao);?>
    <?php echo($decorticao);?>    
    <?php echo($deformidade);?>  
    <?php echo($descerebracao);?>  
    <?php echo($desmaio);?>  
    <?php echo( $desv_tra);?>  
    <?php echo($dispineia);?>  
    <?php echo($dor_local);?>  
    <?php echo( $edema);?>  <?php echo($generalizado);?>  <?php echo($localizado);?>  
    
    <?php echo($enfisema);?>  
    <?php echo($estase);?>  
    <?php echo( $face);?>  
    <?php echo($hemorragia);?>  <?php echo($interna);?>   <?php echo($externa);?>   
    <?php echo($hiper);?>  
    <?php echo($hipo);?>  
    <?php echo( $nau);?>  
    <?php echo(  $naso);?>  
    <?php echo($obito);?>  
    <?php echo($otorre);?>  
    <?php echo($otorra);?>  
    <?php echo($ovaca);?>  

    <?php echo($parada);?>  <?php echo($card);?>  <?php echo($resp);?> 
     
    <?php echo($pri);?>  
    <?php echo($pru);?>
    <?php echo($pupilas);?>    <?php echo( $an);?>    <?php echo($iso);?>   <?php echo($midri);?>   <?php echo($mio);?>   <?php echo($rea);?>   <?php echo($nrea);?>
    <?php echo( $sede);?>
    <?php echo( $sinal);?>
    <?php echo( $sinalg);?>
    <?php echo($sudo);?>
    <?php echo( $taquip);?>
    <?php echo(  $taquic);?>
    <?php echo(  $tont);?>
    <?php echo( $ooutros );?>





    <P>VÍTIMA ERA:</P>
    <br>

    <?php echo($ciclista);?>
    <?php echo( $cond_moto);?>
    <?php echo($gestante);?>
    <?php echo($pass_frente);?>
    <?php echo($pass_moto);?>
    <?php echo( $cond_carro);?>
    <?php echo($clinico);?>
    <?php echo($trauma);?>
    <?php echo( $pass_tras);?>
    <?php echo($pedestre);?>

    <P>DECISÃO DE TRANSPORTE:</P>
    <br>
    <P>OBSERVAÇÕES IMPORTANTES:</P>
    <br>
    <P>TERMO DE RECUSA:</P>
    <br>
    <P>AMNASE GESTACIONAL:</P>
    <br>
    Período gestacional:<br>
    <br>
    Fez pré natal:<br>
    <br>
    Nome médico:<br>
    <br>
    Possibilidade de complicações:<br>
    <br>
    Primeiro filho: <br>
    <br>
    Quantos:<br>
    <br>
    Horário inicio das contrações: <br>
    <br>
    Duração contrações:<br>
    <br>
    Intervalo Contrações:<br>
    <br>
    Pressão na região do quadril ou vontade de evacuar:<br>
    <br>
    Ruptura da bolsa:<br>
    <br>
    Inspesão visual:<br>
    <br>
    Parto realizado: <br>
    <br>
    Sexo do bebê:<br>
    <br>
    Nome do bebê:
    <br>
    <br>

    <P>PROCESSOS EFETUADOS:</P>
    <br>
    <P>AMNASE DA EMERGÊNCIA:</P>
    <br>
    O que aconteceu:<br>
    <br>
    Aconteceu outras vezes:<br>
    <br>
    A quanto tempo isso aconteceu:<br>
    <br>
    Possui problemas de saúde:<br>
    <br>
    Quais:<br>
    <br>
    Faz uso de medicações:<br>
    <br>
    Horário da última medicação:<br>
    <br>
    Quais:<br>
    <br>
    Alérgico a algo:<br>
    <br>
    Qual alergia:<br>
    <br>
    Ingeriu líquido ou alimento> 2 horas:<br>
    <br>
    Que horas:<br>
    <br>


    <P>MATERIAIS UTILIZADOS DESCARTÁVEIS:</P>
    <br>
    <P>MATERIAIS UTILIZADOS DEIXADOS NO HOSPITAL:</P>
    <br>
    <P>DIVILGAR IMPRENSSA:</P>
    <br>
    <P>DADOS FINAIS:</P>
    <br>
   </div>
  <br>
  <div class="oi"></div>
    
    <div class="menu2">
        <input class="terminar" input="button" name="terminar" value="ENVIAR RELATÓRIO"></input>
    </div>
   
</body>
<script>
   


    function animar(ID) {
    var divHeight = $("#" + ID).height();

    esconder1.style.display="none"
    esconder2.style.display="none"
    esconder3.style.display="none"
    
    // Se a div estiver aberta (com altura maior que 130px), fechar a div
    if (divHeight > 130) {
       
    } else { // Caso contrário, abrir a div para 850px
       
        if(ID=="d1")
        {
          $("#" + ID).animate({ height: "1550px" });
          esconder1.style.display="block"// esconder as div com os dados
        }

        if(ID=="d2")
        {
          $("#" + ID).animate({ height: "700px" });
          esconder2.style.display="block"
        }

        if(ID=="d3")
        {
          $("#" + ID).animate({ height: "580px" });
          esconder3.style.display="block"
        }


        // Fechar as outras divs, caso estejam abertas
        if (ID !== "d1") {
            $("#d1").animate({ height: "130px" });
        }
        if (ID !== "d2") {
            $("#d2").animate({ height: "130px" });
        }
        if (ID !== "d3") {
            $("#d3").animate({ height: "130px" });
        }
    }
}
 const menuButton = document.getElementById('menu-button');
  const menu = document.getElementById('menu');

menuButton.addEventListener('click', () => {
menu.classList.toggle('open');
});

    function ajax() {
    var dados = $('#form1').serialize();

            $.ajax({
                type: "POST",
                url: "arquivopac.php",
                data: dados,
                dataType: 'json',
                                
                success: function(meu_json)
                {
                    okay.style.display="block"
                    var valores = meu_json;          // Vem do arquivo.php
                    var lista = valores.empregados;  // Pega os dados dos "empregados"
                  
                },
                error: function(xhr, status, error) {
                    // Aqui poderíamos preencher uma <div> com o innerHTML por exemplo
                    console.error('Ocorreu um erro ao enviar os dados: ' + error);
                },
                beforeSend: function(xhr) {
                    // Faz algo antes do envio, como exibir uma animação por exemplo.
                },
                complete: function(xhr, status) {
                    // Faz algo após a conclusão, como ocultar uma animação por exemplo. 
                    // Vai ser executado mesmo se ocorrer um erro.
                },
                timeout: 5000    // Define um tempo limite de 5 segundos (5000 milissegundos)
            });
          }
            
          


</script>