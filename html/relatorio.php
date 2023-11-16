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
$comando = $pdo->prepare("SELECT * FROM ava_pac where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $idade=$linhas["+5"];
    $idade2=$linhas["-5"];
    $aber_ocu=$linhas["aber_ocu"];
    $espontanea=$linhas["opcao1"];
    $coman_verb=$linhas["opcao2"];
    $estim_dolo=$linhas["opcao3"];
    $nenhuma=$linhas["opcao4"];
    $resp_verb=$linhas["resp_verb"];
    $orientado=$linhas["opcao5"];
    $confuso=$linhas["opcao6"];
    $pala_ina=$linhas["opcao7"];
    $pala_inco=$linhas["opcao8"];
    $nada=$linhas["opcao9"];
    $resp_moto=$linhas["resp_moto"];
    $obedece=$linhas["opcao10"];
    $localizado=$linhas["opcao11"];
    $movimento=$linhas["opcao12"];
    $flexao=$linhas["opcao13"];
    $extensao=$linhas["opcao14"];
    $nd=$linhas["opcao15"];
    $aber_ocular16=$linhas["aber_ocular16"];
    $espontanea2=$linhas["opcao17"];
    $coman_verb2=$linhas["opcao18"];
    $estim_dolo2=$linhas["opcao19"];
    $nenhuma2=$linhas["opcao20"];
    $resp_verb21=$linhas["resp_verb21"];
    $pala_apro=$linhas["opcao22"];
    $pala_ina2=$linhas["opcao23"];
    $choro=$linhas["opcao24"];
    $sons=$linhas["opcao25"];
    $never=$linhas["opcao26"];
    $resp_moto27=$linhas["resp_moto27"];
    $obedece2=$linhas["opcao28"];
    $localiza=$linhas["opcao29"];
    $retira=$linhas["opcao30"];
    $flexao2=$linhas["opcao31"];
    $extensao2=$linhas["opcao32"];
    $ausencia=$linhas["opcao33"];

}
$comando = $pdo->prepare("SELECT * FROM quei where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $cab=$linhas["opcao1"];
    $pes=$linhas["opcao2"];
    $tan=$linhas["opcao3"];
    $tpos=$linhas["opcao4"];
    $genit=$linhas["opcao5"];
    $mid=$linhas["opcao6"];
    $mie=$linhas["opcao7"];
    $msd=$linhas["opcao8"];
    $mse=$linhas["opcao9"];
    $pgrau=$linhas["1grau"];
    $sgrau=$linhas["2grau"];
    $tgrau=$linhas["3grau"];





}

$comando = $pdo->prepare("SELECT * FROM lo_tra where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $local=$linhas["local"];
    $lado=$linhas["lado"];
    $face=$linhas["face"];
    $tipo=$linhas["tipo"];
    

}
$comando = $pdo->prepare("SELECT * FROM form_cond where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $deitada=$linhas["opcao1"];
    $semi=$linhas["opcao2"];
    $sentada=$linhas["opcao3"];
   
    

}
$comando = $pdo->prepare("SELECT * FROM deci_trans where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $cri=$linhas["opcao1"];
    $ins=$linhas["opcao2"];
    $pi=$linhas["opcao3"];
    $es=$linhas["opcao4"];
    $m=$linhas["m"];
    $s1=$linhas["s1"];
    $s2=$linhas["s2"];
    $s3=$linhas["s3"];
    $demandante=$linhas["demandante"];
    $equipe=$linhas["equipe"];
    

}
$comando = $pdo->prepare("SELECT * FROM obs_import where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $obs=$linhas["obs"];
    
}
$comando = $pdo->prepare("SELECT * FROM term_rec where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $nome=$linhas["nomme"];
    $rg=$linhas["rg"];
    $ass=$linhas["ass"];
    $test=$linhas["test"];
    
}
$comando = $pdo->prepare("SELECT * FROM amn_ges where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $periodo=$linhas["periodo"];
    $com_pre=$linhas["opcao1"];
    $sem_pre=$linhas["opcao2"];
    $com_comp=$linhas["opcao3"];
    $sem_compli=$linhas["opcao4"];
    $op=$linhas["opcao5"];
    $neop=$linhas["opcao6"];
    $qtd_filhos=$linhas["qtd_filhos"];
    $ini_contra=$linhas["ini_contra"];
    $dura_contra=$linhas["dura_contra"];
    $inter_contra=$linhas["inter_contra"];
    $com_pre=$linhas["opcao7"];
    $sem_pre=$linhas["opcao8"];
    $com_rup=$linhas["opcao9"];
    $sem_rup=$linhas["opcao10"];
    $com_inp=$linhas["opcao11"];
    $sem_inp=$linhas["opcao12"];
    $parto_re=$linhas["opcao13"];
    $parto_nr=$linhas["opcao14"];
    $fe=$linhas["opcao15"];
    $ma=$linhas["opcao16"];
    $nome_bb=$linhas["nome_bb"];
    $nome_med=$linhas["nome_med"];




    
}
$comando = $pdo->prepare("SELECT * FROM proc_efe where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $aspiracao=$linhas["opcao1"];
    $ava_ini=$linhas["opcao2"];
    $ava_dire=$linhas["opcao3"];
    $ava_cont=$linhas["opcao4"];
    $chave=$linhas["opcao5"];
    $canula=$linhas["opcao6"];
    $deso=$linhas["opcao7"];
    $emprego=$linhas["opcao8"];
    $gere=$linhas["opcao9"];
    $limpeza=$linhas["opcao10"];
    $curativos=$linhas["opcao11"];
    $compre=$linhas["opcao12"];
    $encrava=$linhas["opcao13"];
    $ocular=$linhas["opcao14"];
    $queimadura=$linhas["opcao15"];
    $simples=$linhas["opcao16"];
    $tpontas=$linhas["opcao17"];
    $imo=$linhas["opcao18"];
    $midi=$linhas["opcao19"];
    $mies=$linhas["opcao20"];
    $mses=$linhas["opcao21"];
    $msdi=$linhas["opcao22"];
    $qua=$linhas["opcao23"];
    $cer=$linhas["opcao24"];
    $maca=$linhas["opcao25"];
    $macari=$linhas["opcao26"];
    $ponte=$linhas["opcao26"];
    $ret=$linhas["opcao28"];
    $rcp=$linhas["opcao29"];
    $rola90=$linhas["opcao30"];
    $rola180=$linhas["opcao31"];
    $toma_deci=$linhas["opcao32"];
    $toma_choque=$linhas["opcao33"];
    $uso_ca=$linhas["opcao34"];
    $uso_colar=$linhas["opcao35"];
    $tamanho=$linhas["tam"];
    $ked=$linhas["opcao36"];
    $ttf=$linhas["opcao37"];
    $vent=$linhas["opcao38"];
    $oxi=$linhas["opcao39"];
    $rea=$linhas["opcao40"];
    $meio=$linhas["opcao41"];
    $celesc=$linhas["celesc"];
    $policia=$linhas["policia"];
    $militar=$linhas["militar"];
    $pre=$linhas["pre"];
    $prf=$linhas["prf"];
    $def_civil=$linhas["def_civil"];
    $igp=$linhas["igp/pc"];
    $samu=$linhas["opcao43"];
    $usa=$linhas["usa"];
    $usb=$linhas["usb"];
    $cit=$linhas["opcao43"];
    $outros=$linhas["outrosss"];


}


$comando = $pdo->prepare("SELECT * FROM amn_emer where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $sinais_s=$linhas["ss"];
    $ja_acon=$linhas["opcao1"];
    $n_acon=$linhas["opcao2"];
    $tempo=$linhas["tempo"];
    $ppro=$linhas["opcao3"];
    $nppro=$linhas["opcao4"];
    $quaiss=$linhas["quais"];
    $tomou=$linhas["opcao5"];
    $n_tomou=$linhas["opcao6"];
    $horaio_med=$linhas["horario"];
    $quais_med=$linhas["quais-med"];
    $e_alergico=$linhas["opcao7"];
    $sn_alergico=$linhas["opcao8"];
    $especifique=$linhas["especifique"];
    $ingeriu=$linhas["opcao9"];
    $n_ingeriu=$linhas["opcao19"];
    $hora_ingeriu=$linhas["horas"];

    
}
$comando = $pdo->prepare("SELECT * FROM impre where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $quero=$linhas["sim"];
    $n_quero=$linhas["nao"];
   
    
}
$comando = $pdo->prepare("SELECT * FROM dados_finais where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $n_usb=$linhas["n_usb"];
    $digita=$linhas["opcao1"];
    $n_ocorr=$linhas["n_ocorr"];
    $digita2=$linhas["opcao2"];
    $desp=$linhas["desp"];
    $hch=$linhas["h.ch"];
    $km_final=$linhas["km_final"];
    $cod=$linhas["opcao3"];
    

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
    <title>RELATÓRIO</title>


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
    Nome: <?php echo("<span class='banco' $nome</span>");?> <br>
    <br>
    Data:<?php echo("<span class='banco' $data</span>");?><br>
    <br>
    Sexo:<?php echo("<span class='banco' $sexo</span>");?><br>
    <br>
    RG/CPF:<?php echo("<span class='banco' $cpf</span>");?><br>
    <br>
    Idade:<?php echo("<span class='banco'$idade</span>");?><br>
    <br>
    Nome hospital:<?php echo("<span class='banco' $nome_hosp</span>");?><br>
    <br>
    Fone:<?php echo("<span class='banco' $fone</span>");?><br>
    <br>
    Local ocorrência:<?php echo("<span class='banco' $localidade</span>");?><br>
    <br>
    <P>DADOS ACOMPANHANTE:</P>
    <br>
    Nome: <?php echo("<span class='banco' $nomeA</span>");?><br>
    <br>
    Idade:<?php echo("<span class='banco' $idadeA</span>");?><br>
    <br>
    <P>SINAIS VITAIS:</P>
    <br>
    Pressão arterial:<?php echo("<span class='banco'$pressao</span>") ?> X <?php echo("<span class='banco'$pressao2</span>");?> <br>
    <br>
    Pulso:  <?php echo("<span class='banco'$pulso</span>");?><br>
    <br>
    Temperatura:  <?php echo("<span class='banco'$temperatura</span>");?> : <?php echo("<span class='banco'$maior</span>");?>  <?php echo("<span class='banco'$menor</span>");?><br>
    <br>
    Saturação: <?php echo("<span class='banco'$saturacao</span>");?><br>
    <br>
    Perfusão: <?php echo("<span class='banco'$perfusao</span>");?> <?php echo("<span class='banco'$perfusao2</span>");?><br>
    <br>
    Respiração: <?php echo("<span class='banco'$respiracao</span>");?><br>
    <br>
    <P>PROBLEMAS ENCONTRADOS:</P>
    <br>
    <?php echo("<span class='banco'$opcao1</span>");?>: <br>
    <?php echo("<span class='banco'$opcao2</span>");?> : <?php echo("<span class='banco'$opcao3</span>");?>  <?php echo("<span class='banco'$opcao3</span>");?><br>
    
    <?php echo("<span class='banco'$opcao5</span>");?>: <?php echo("<span class='banco'$opcao6</span>");?> <?php echo("<span class='banco'$opcao7</span>");?> <br>
   
    <?php echo("<span class='banco'$opcao8</span>");?>:  <?php echo("<span class='banco'$opcao9</span>");?> <?php echo("<span class='banco'$opcao10</span>");?> <?php echo("<span class='banco'$opcao11</span>");?><br>
   
    <?php echo("<span class='banco'$opcao12</span>");?>:  <?php echo("<span class='banco'$opcao13</span>");?> <?php echo("<span class='banco'$opcao14</span>");?> <?php echo("<span class='banco'$opcao15</span>");?> <?php echo("<span class='banco'$opcao16</span>");?> <?php echo("<span class='banco'$opcao17</span>");?> <?php echo("<span class='banco'$opcao18</span>");?> <?php echo("<span class='banco'$opcao19</span>");?> <br>
   
    <?php echo("<span class='banco'$outros</span>");?>:<?php echo("<span class='banco'$opcao21</span>");?> <br>
    
    <P>TIPO DE OCORRÊNCIA:</P>
    
    
    <?php echo("<span class='banco'$animais</span>");?> <br>
    
    <?php echo("<span class='banco'$transporte</span>");?>  
   
    <?php echo("<span class='banco' $desmoronamento</span>");?>  
    
    <?php echo("<span class='banco'$emergencia</span>");?> 
    
    <?php echo("<span class='banco'$queda</span>");?> 
    
    <?php echo("<span class='banco'$suicidio</span>");?> 
    
    <?php echo("<span class='banco'$queda_altura</span>");?> 

    <?php echo("<span class='banco'$afogamento</span>");?> 
    
    <?php echo("<span class='banco'$agressao</span>");?> 
    
    <?php echo("<span class='banco'$atropelamento</span>");?> 
    
    <?php echo("<span class='banco'$choque</span>");?> 
    
    <?php echo("<span class='banco'$desabamento</span>");?>
    
    <?php echo("<span class='banco'$domestico</span>");?> 
    
    <?php echo("<span class='banco'$esportivo</span>");?> 
    
    <?php echo("<span class='banco'$intoxicacao</span>");?> 
    
    <?php echo("<span class='banco'$queda_bike</span>");?>
   
    <?php echo( "<span class='banco'$queda_moto</span>");?> 
    
    <?php echo("<span class='banco'$queda_nivel</span>");?> 
    
    <?php echo("<span class='banco'$trabalho</span>");?> 

    <?php echo("<span class='banco'$transferencia</span>");?> 

    <?php echo("<span class='banco'$outross</span>");?> 


    <P>AVALIAÇÃO DO PACIENTE:</P>
    <br>
    <div class="organiza" >Idade: <?php  echo("<span class='banco'>$idade</span>");?> <?php echo("<span class='banco'>$idade2");?></div><br>
    <br>
    <div class="organiza" >Abertura Ocular:<?php echo("<span class='banco'>$espontanea</span>");?> <?php echo("<span class='banco'>$espontanea2</span>");?><?php echo("<span class='banco'>$nenhuma</span>");?> <?php echo("<span class='banco'>$nenhuma2</span>");?> <?php echo("<span class='banco'>$coman_verb</span>");?> <?php echo("<span class='banco'>$coman_verb2</span>");?><?php echo("<span class='banco'>$estim_dolo</span>");?> <?php echo("<span class='banco'>$estim_dolo2</span>");?></div><br>
    <br>
    <div class="organiza" >Resposta Verbal:<?php echo("<span class='banco'>$orientado</span>");?> <?php echo("<span class='banco'>$confuso</span>");?><?php echo("<span class='banco'>$pala_ina</span>");?> <?php echo("<span class='banco'>$pala_ina2</span>");?><?php echo("<span class='banco'>$pala_apro</span>");?> <?php echo("<span class='banco'>$never</span>");?><?php echo("<span class='banco'>$choro</span>");?> <?php echo("<span class='banco'>$sons</span>");?></div><br>
    <br>
    <div class="organiza" >Resposta motora:<?php echo("<span class='banco'>$obedece</span>");?><?php echo("<span class='banco'>$obedece2</span>");?><?php echo("<span class='banco'>$localiza</span>");?> <?php echo("<span class='banco'>$retira</span>");?><?php echo("<span class='banco'>$localizado</span>");?><?php echo("<span class='banco'>$espontanea</span>");?> <?php echo("<span class='banco'>$movimento</span>");?><?php echo("<span class='banco'>$flexao</span>");?> <?php echo("<span class='banco'>$extensao</span>");?><?php echo("<span class='banco'>$nd</span>");?><?php echo("<span class='banco'>$flexao2</span>");?><?php echo("<span class='banco'>$extensao2</span>");?><?php echo("<span class='banco'>$ausencia</span>");?></div><br>
    <br>

    <P>LOCALIZAÇÃO DOS TRAUMAS:</P>
   <div class="organiza"> Local:  <?php echo("<span class='banco'>$local</span>");?> </div><br>
    <br>
    <div class="organiza"> Lado: <?php echo("<span class='banco'>$lado</span>");?></div><br>
    <br>
    <div class="organiza">Face: <?php echo("<span class='banco'>$face</span>");?></div><br>
    <br>
    <div class="organiza">Tipo: <?php echo("<span class='banco'>$tipo</span>");?></div><br>
    
    <br>
    <P>QUEIMADURAS:</P>
    <br>
    <div class="organiza"> Local:<?php echo("<span class='banco'>$cab</span>");?><?php echo("<span class='banco'>$pes</span>");?><?php echo("<span class='banco'>$mie</span>");?> <?php echo("<span class='banco'>$mid</span>");?> <?php echo("<span class='banco'>$msd</span>");?> <?php echo("<span class='banco'>$mse</span>");?> <?php echo("<span class='banco'>$genit</span>");?> <?php echo("<span class='banco'>$tan</span>");?> <?php echo("<span class='banco'>$tpos</span>");?></div><br>
    <br>
    <div class="organiza"> Grau:<?php echo("<span class='banco'>$pgrau</span>");?> <?php echo("<span class='banco'>$sgrau</span>");?> <?php echo("<span class='banco'>$tgrau</span>");?></div><br>
    <br>
    <P>OBJETOS RECOLHIDOS:</P>
    <br>
    <P>SINAI E SINTOMAS:</P>
    <br>
    <?php echo("<span class='banco'>$abdomen</span>");?>
    <?php echo("<span class='banco'>$afundamento</span>");?>
    <?php echo("<span class='banco'>$agitacao</span>");?>
    <?php echo("<span class='banco'>$amnesia</span>");?>
    <?php echo("<span class='banco'>$angina</span>");?>
    <?php echo("<span class='banco'>$apneia</span>");?>
    <?php echo("<span class='banco'>$bradi</span>");?>
    <?php echo("<span class='banco'>$bradp</span>");?>
    <?php echo("<span class='banco'>$bronco</span>");?>
    <?php echo("<span class='banco'>$cefaleia</span>");?>
    <?php echo("<span class='banco'>$cianose</span>");?> :   <?php echo("<span class='banco'>$labios</span>");?>  <?php echo("<span class='banco'>$extremidades</span>");?>  
    <?php echo("<span class='banco'>$consulsao</span>");?>
    <?php echo("<span class='banco'>$decorticao</span>");?>    
    <?php echo("<span class='banco'>$deformidade</span>");?>  
    <?php echo("<span class='banco'>$descerebracao</span>");?>  
    <?php echo("<span class='banco'>$desmaio</span>");?>  
    <?php echo( "<span class='banco'>$desv_tra</span>");?>  
    <?php echo("<span class='banco'>$dispineia</span>");?>  
    <?php echo("<span class='banco'>$dor_local</span>");?>  
    <?php echo( "<span class='banco'>$edema</span>");?>  <?php echo("<span class='banco'>$generalizado</span>");?>  <?php echo("<span class='banco'>$localizado</span>");?>  
    
    <?php echo("<span class='banco'>$enfisema</span>");?>  
    <?php echo("<span class='banco'>$estase</span>");?>  
    <?php echo( "<span class='banco'>$face</span>");?>  
    <?php echo("<span class='banco'>$hemorragia</span>");?>  <?php echo("<span class='banco'>$interna</span>");?>   <?php echo("<span class='banco'>$externa</span>");?>   
    <?php echo("<span class='banco'>$hiper</span>");?>  
    <?php echo("<span class='banco'>$hipo</span>");?>  
    <?php echo("<span class='banco'> $nau</span>");?>  
    <?php echo("<span class='banco'> $naso</span>");?>  
    <?php echo("<span class='banco'>$obito</span>");?>  
    <?php echo("<span class='banco'>$otorre</span>");?>  
    <?php echo("<span class='banco'>$otorra</span>");?>  
    <?php echo("<span class='banco'>$ovaca</span>");?>  

    <?php echo("<span class='banco'>$parada</span>");?>  <?php echo("<span class='banco'>$card</span>");?>  <?php echo("<span class='banco'>$resp</span>");?> 
     
    <?php echo("<span class='banco'>$pri</span>");?>  
    <?php echo("<span class='banco'>$pru</span>");?>
    <?php echo("<span class='banco'>$pupilas</span>");?>    <?php echo( "<span class='banco'>$an</span>");?>    <?php echo("<span class='banco'>$iso</span>");?>   <?php echo("<span class='banco'>$midri</span>");?>   <?php echo("<span class='banco'>$mio</span>");?>   <?php echo("<span class='banco'>$rea</span>");?>   <?php echo("<span class='banco'>$nrea</span>");?>
    <?php echo( "<span class='banco'>$sede</span>");?>
    <?php echo("<span class='banco'> $sinal</span>");?>
    <?php echo( "<span class='banco'>$sinalg</span>");?>
    <?php echo("<span class='banco'>$sudo</span>");?>
    <?php echo( "<span class='banco'>$taquip</span>");?>
    <?php echo( "<span class='banco'> $taquic</span>");?>
    <?php echo( "<span class='banco'> $tont</span>");?>
    <?php echo( "<span class='banco'>$ooutros </span>");?><br>
    <br>
    <P>FORMA DE CONDUÇÃO:</P>
    <br>
    <?php echo( "<span class='banco'>$deitada </span>");?><br>
    <?php echo( "<span class='banco'>$semi </span>");?><br>
    <?php echo( "<span class='banco'>$sentada </span>");?><br>



    <P>VÍTIMA ERA:</P>
    <br>

    <?php echo("<span class='banco'>$ciclista</span>");?>
    <?php echo("<span class='banco'> $cond_moto</span>");?>
    <?php echo("<span class='banco'>$gestante</span>");?>
    <?php echo("<span class='banco'>$pass_frente</span>");?>
    <?php echo("<span class='banco'>$pass_moto</span>");?>
    <?php echo("<span class='banco'> $cond_carro</span>");?>
    <?php echo("<span class='banco'>$clinico</span>");?>
    <?php echo("<span class='banco'>$trauma</span>");?>
    <?php echo("<span class='banco'> $pass_tras</span>");?>
    <?php echo("<span class='banco'>$pedestre</span>");?>

    <P>DECISÃO DE TRANSPORTE:</P>
    <br>
    <?php echo("<span class='banco'>$cri</span>");?>
    <?php echo("<span class='banco'> $ins</span>");?>
    <?php echo("<span class='banco'>$pi</span>");?>
    <?php echo("<span class='banco'>$es</span>");?>
    <?php echo("<span class='banco'>$m</span>");?>
    <?php echo("<span class='banco'> $s1</span>");?>
    <?php echo("<span class='banco'>$s2</span>");?>
    <?php echo("<span class='banco'>$s3</span>");?>
    <?php echo("<span class='banco'> $demandante</span>");?>
    <?php echo("<span class='banco'>$equipe</span>");?>



    <P>OBSERVAÇÕES IMPORTANTES:</P>
    <br>
    <?php echo("<span class='banco'>$obs</span>");?><br>
    <br>
    <P>TERMO DE RECUSA:</P>
    <br>
    <?php echo("<span class='banco'>$nome</span>");?>
    <?php echo("<span class='banco'>$rg</span>");?>
    <?php echo("<span class='banco'> $ass</span>");?>
    <?php echo("<span class='banco'>$test</span>");?>

    <P>AMNASE GESTACIONAL:</P>
    <br>
    Período gestacional: <?php echo("<span class='banco'>$periodo</span>");?><br>
    <br>
    Fez pré natal: <?php echo("<span class='banco'>$com_pre</span>");?> <?php echo("<span class='banco'>$sem_pre</span>");?><br>
    <br>
    Nome médico: <?php echo("<span class='banco'>$nome_med</span>");?><br>
    <br>
    Possibilidade de complicações: <?php echo("<span class='banco'>$com_comp</span>");?> <?php echo("<span class='banco'>$sem_compli</span>");?><br>
    <br>
    Primeiro filho:  <?php echo("<span class='banco'>$op</span>");?> <?php echo("<span class='banco'>$neop</span>");?><br>
    <br>
    Quantos: <?php echo("<span class='banco'>$qtd_filhos</span>");?><br>
    <br>
    Horário inicio das contrações:  <?php echo("<span class='banco'>$ini_contra</span>");?><br>
    <br>
    Duração contrações: <?php echo("<span class='banco'>$dura_contra</span>");?><br>
    <br>
    Intervalo Contrações: <?php echo("<span class='banco'>$inter_contra</span>");?><br>
    <br>
    Pressão na região do quadril ou vontade de evacuar: <?php echo("<span class='banco'>$com_pre</span>");?> <?php echo("<span class='banco'>$sem_pre</span>");?><br>
    <br>
    Ruptura da bolsa: <?php echo("<span class='banco'>$com_rup</span>");?> <?php echo("<span class='banco'>$sem_rup</span>");?><br>
    <br>
    Inspesão visual: <?php echo("<span class='banco'>$com_inp</span>");?> <?php echo("<span class='banco'>$sem_inp</span>");?><br>
    <br>
    Parto realizado:  <?php echo("<span class='banco'>$parto_re</span>");?> <?php echo("<span class='banco'>$parto_nr</span>");?><br>
    <br>
    Sexo do bebê: <?php echo("<span class='banco'>$fe</span>");?> <?php echo("<span class='banco'>$ma</span>");?><br>
    <br>
    Nome do bebê: <?php echo("<span class='banco'>$nome_bb</span>");?>
    <br>
    <br>

    <P>PROCESSOS EFETUADOS:</P>
    <br>
    <?php echo("<span class='banco'>$aspiracao</span>");?>
    <?php echo("<span class='banco'>$ava_ini</span>");?>
    <?php echo("<span class='banco'> $ava_dire</span>");?>
    <?php echo("<span class='banco'>$ava_cont</span>");?>
    <?php echo("<span class='banco'>$chave</span>");?>
    <?php echo("<span class='banco'>$canula</span>");?>
    <?php echo("<span class='banco'> $deso</span>");?>
    <?php echo("<span class='banco'>$emprego</span>");?>
    <?php echo("<span class='banco'>$gere</span>");?>
    <?php echo("<span class='banco'>$limpeza</span>");?>
    <?php echo("<span class='banco'> $curativos</span>");?>
    <?php echo("<span class='banco'>$compre</span>");?>
    <?php echo("<span class='banco'>$encrave</span>");?>
    <?php echo("<span class='banco'>$ocular</span>");?>
    <?php echo("<span class='banco'> $queimadura</span>");?>
    <?php echo("<span class='banco'>$simples</span>");?>
    <?php echo("<span class='banco'>$tpontas</span>");?>
    <?php echo("<span class='banco'> $imo</span>");?>
    <?php echo("<span class='banco'>$midi</span>");?>
    <?php echo("<span class='banco'>$mies</span>");?>
    <?php echo("<span class='banco'> $mses$</span>");?>
    <?php echo("<span class='banco'>$msdi</span>");?>
    <?php echo("<span class='banco'>$qua</span>");?>
    <?php echo("<span class='banco'> $cer</span>");?>
    <?php echo("<span class='banco'>$maca</span>");?>
     <?php echo("<span class='banco'>$macari</span>");?>
    <?php echo("<span class='banco'> $ponte</span>");?>
    <?php echo("<span class='banco'>$ret</span>");?>
    <?php echo("<span class='banco'>$rpc</span>");?>
     <?php echo("<span class='banco'>$rola90</span>");?>
    <?php echo("<span class='banco'> $rola180</span>");?>
    <?php echo("<span class='banco'>$uso_ca</span>");?>
    <?php echo("<span class='banco'>$uso_colar</span>");?>
     <?php echo("<span class='banco'>$toma_choque</span>");?>
    <?php echo("<span class='banco'> $toma_deci</span>");?>
    <?php echo("<span class='banco'>$tamanho</span>");?>
    <?php echo("<span class='banco'>$ked</span>");?>
     <?php echo("<span class='banco'>$ttf</span>");?>
    <?php echo("<span class='banco'> $vent</span>");?>
    <?php echo("<span class='banco'>$oxi</span>");?>
    <?php echo("<span class='banco'>$rea</span>");?><br>
     <?php echo("<span class='banco'>$meio</span>");?>  <?php echo("<span class='banco'> $celesc</span>");?><?php echo("<span class='banco'>$militar</span>");?>
    <?php echo("<span class='banco'>$pre</span>");?><?php echo("<span class='banco'>$prf</span>");?><?php echo("<span class='banco'> $policia</span>");?><?php echo("<span class='banco'>$def_civil</span>");?><?php echo("<span class='banco'>$igp</span>");?><br><br>
    <?php echo("<span class='banco'>$samu</span>");?> <?php echo("<span class='banco'>$usa</span>");?> <?php echo("<span class='banco'> $usb</span>");?><br>
    <?php echo("<span class='banco'>$cit</span>");?>
     <?php echo("<span class='banco'>$outrosss</span>");?>
   






    <P>AMNASE DA EMERGÊNCIA:</P>
    <br>
    O que aconteceu:<?php echo("<span class='banco'>$sinais_s</span>");?><br>
    <br>
    Aconteceu outras vezes:<?php echo("<span class='banco'>$ja_acon</span>");?><?php echo("<span class='banco'>$n_acon</span>");?><br>
    <br>
    A quanto tempo isso aconteceu:<?php echo("<span class='banco'>$tempo</span>");?><br>
    <br>
    Possui problemas de saúde:<?php echo("<span class='banco'>$ppro</span>");?><?php echo("<span class='banco'>$nppro</span>");?><br>
    <br>
    Quais:<?php echo("<span class='banco'>$quais</span>");?><br>
    <br>
    Faz uso de medicações:<?php echo("<span class='banco'>$tomou</span>");?><?php echo("<span class='banco'>$n_tomou</span>");?><br>
    <br>
    Horário da última medicação:<?php echo("<span class='banco'>$horario_med</span>");?><br>
    <br>
    Quais:<?php echo("<span class='banco'>$quais_med</span>");?><br>
    <br>
    Alérgico a algo:<?php echo("<span class='banco'>$e_alergico</span>");?><?php echo("<span class='banco'>$sn_alergico</span>");?><br>
    <br>
    Qual alergia:<?php echo("<span class='banco'>$especifique</span>");?><br>
    <br>
    Ingeriu líquido ou alimento> 2 horas:<?php echo("<span class='banco'>$ingeriu</span>");?><?php echo("<span class='banco'>$n_ingeriu</span>");?><br>
    <br>
    Que horas:<?php echo("<span class='banco'>$hora_ingeriu</span>");?><br>
    <br>


    <P>MATERIAIS UTILIZADOS DESCARTÁVEIS:</P>
    <br>
    <P>MATERIAIS UTILIZADOS DEIXADOS NO HOSPITAL:</P>
    <br>
    <P>DIVILGAR NA IMPRENSSA:</P>
    <br>
    <?php echo("<span class='banco'>$quero</span>");?>
    <?php echo("<span class='banco'>$n_quero</span>");?>
    <br>
    <P>DADOS FINAIS:</P>
    <br>
    <?php echo("<span class='banco'>$n_usb</span>");?> <?php echo("<span class='banco'>$digita</span>");?><br>
    <?php echo("<span class='banco'>$n_ocor</span>");?> <?php echo("<span class='banco'>$digita2</span>");?><br>
    <?php echo("<span class='banco'>$desp</span>");?>
    <?php echo("<span class='banco'>$hch</span>");?>
    <?php echo("<span class='banco'>$km_final</span>");?>
    <?php echo("<span class='banco'>$cod/span>");?>
   </div>
  <br>
  <div class="oi"></div>
  <div id="gerarRelatorioContainer">
          <a id="gerarRelatorio" href="../html/relatorio.php">ENVIAR RELATÓRIO </a>
         
        </div>
    <div class="menu2">
        
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