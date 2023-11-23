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
    $aber_ocular16=$linhas["aber_ocu16"];
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

    $nome=$linhas["nome"];
    $rg=$linhas["rg"];
    $ass=$linhas["ass"];
    $test=$linhas["test"];
    
}
$comando = $pdo->prepare("SELECT * FROM amn_ges where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){


    $periodo=$linhas["periodo"];
    $com_pre=$linhas["opcao1"];
    $sem_pree=$linhas["opcao2"];
    $com_comp=$linhas["opcao3"];
    $sem_compli=$linhas["opcao4"];
    $op=$linhas["opcao5"];
    $neop=$linhas["opcao6"];
    $qtd_filhos=$linhas["qtd_filhos"];
    $ini_contra=$linhas["ini_contra"];
    $inter_contra=$linhas["inter_contra"];
    $dura_contra=$linhas["dura_contra"];
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
    $encrave=$linhas["opcao13"];
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
    $rpc=$linhas["opcao29"];
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
    $igp=$linhas["igppc"];
    $samu=$linhas["opcao43"];
    $usa=$linhas["usa"];
    $usb=$linhas["usb"];
    $cit=$linhas["opcao43"];
    $outros=$linhas["outros"];


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
    $quais=$linhas["quais"];
    $tomou=$linhas["opcao5"];
    $n_tomou=$linhas["opcao6"];
    $horario_med=$linhas["horario"];
    $quais_med=$linhas["quaismed"];
    $e_alergico=$linhas["opcao7"];
    $sn_alergico=$linhas["opcao8"];
    $especifique=$linhas["especifique"];
    $ingeriu=$linhas["opcao9"];
    $n_ingeriu=$linhas["opcao10"];
    $hora_ingeriu=$linhas["horas"];

    
}
$comando = $pdo->prepare("SELECT * FROM impre where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $quero=$linhas["opcao1"];
    $n_quero=$linhas["opcao2"];
   
    
}
$comando = $pdo->prepare("SELECT * FROM dados_finais where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $n_usb=$linhas["n_usb"];
    $digita=$linhas["opcao1"];
    $n_ocorr=$linhas["n_ocorr"];
    $digita2=$linhas["opcao2"];
    $desp=$linhas["desp"];
    $hch=$linhas["h_ch"];
    $km_final=$linhas["km_final"];
    $cod=$linhas["opcao3"];
    

}
$comando = $pdo->prepare("SELECT * FROM mate_desc where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $atadurass=$linhas["opcao1"];
    $oito=$linhas["opcao2"];
    $doze=$linhas["opcao3"];
    $vinte=$linhas["opcao4"];
    $mais=$linhas["quantidade1"];
    $tp_oculos=$linhas["opcao5"];
    $maiss=$linhas["quantidade2"];
    $comum=$linhas["opcao6"];
    $kits=$linhas["opcao7"];
    $aga=$linhas["opcao8"];
    $pee=$linhas["opcao9"];
    $que=$linhas["opcao10"];
    $maisss=$linhas["quantidade3"];
    $iluminada=$linhas["opcao11"];
    $maissss=$linhas["quantidade4"];
    $masca=$linhas["opcao12"];
    $maisssss=$linhas["quantidade5"];
    $paz=$linhas["opcao13"];
    $maissssss=$linhas["quantidade6"];
    $aspiracao=$linhas["opcao14"];
    $maisssssss=$linhas["quantidade7"];
    $soro=$linhas["opcao15"];
    $maissssssss=$linhas["quantidade8"];
    $telaspap=$linhas["opcao16"];
    $phe=$linhas["quantidade9"];
    $ge=$linhas["opcao17"];
    $maisssssssss=$linhas["opcao18"];
    $outrosssss=$linhas["opcao19"];
   
    
    
    
    

}
$comando = $pdo->prepare("SELECT * FROM mate_hosp where nOcorrencia='$id'");
$resultado = $comando->execute();

while( $linhas = $comando->fetch()){

    $estabeliza=$linhas["opcao1"];
    $add=$linhas["quantidade"];
    $colar=$linhas["opcao2"];
    $ene=$linhas["opcao3"];
    $pepe=$linhas["opcao4"];
    $pe=$linhas["opcao5"];
    $add2=$linhas["quantidade1"];
    $colar2=$linhas["opcao6"];
    $eme=$linhas["opcao7"];
    $gee=$linhas["opcao8"];
    $add3=$linhas["quantidade2"];
    $ked=$linhas["opcao9"];
    $adulto=$linhas["opcao10"];
    $crianca=$linhas["opcao11"];
    $add4=$linhas["quantidade3"];
    $rigida=$linhas["opcao12"];
    $add5=$linhas["quantidade4"];
    $coxins=$linhas["opcao13"];
    $add6=$linhas["quantidade5"];
    $canola=$linhas["opcao14"];
    $add7=$linhas["quantidade6"];
    $tirante=$linhas["opcao15"];
    $add8=$linhas["quantidade7"];
    $aranha=$linhas["opcao16"];
    $add9=$linhas["quantidade8"];
    $ttf=$linhas["opcao17"];
    $adulto=$linhas["opcao18"];
    $infantil=$linhas["opcao19"];
    $add10=$linhas["quantidade9"];
    $ouou=$linhas["outros"];
    $add11=$linhas["quantidade10"];
    
    
    

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
    Nome: <?php echo( "$nome");?> <br>
    <br>
    Data:<?php echo("$data");?><br>
    <br>
    Sexo:<?php echo("$sexo");?><br>
    <br>
    RG/CPF:<?php echo("$cpf");?><br>
    <br>
    Idade:<?php echo("$idade");?><br>
    <br>
    Nome hospital:<?php echo("$nome_hosp");?><br>
    <br>
    Fone:<?php echo("$fone");?><br>
    <br>
    Local ocorrência:<?php echo($localidade);?><br>
    <br>
    <P>DADOS ACOMPANHANTE:</P>
    <br>
    Nome: <?php echo( $nomeA);?><br>
    <br>
    Idade:<?php echo( $idadeA);?><br>
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
    <?php echo($opcao1);?>: <br>
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
   
    <?php echo($queda_moto);?> 
    
    <?php echo($queda_nivel);?> 
    
    <?php echo($trabalho);?> 

    <?php echo($transferencia);?> 

    <?php echo($outross);?> 


    <P>AVALIAÇÃO DO PACIENTE:</P>
    <br>
    <div class="organiza" >Maior que 5 anos: <?php  echo($idade);?> <br>
    Menos que 5 anos:<?php echo($idade2);?></div><br>
    <br>
    <div class="organiza" >Abertura Ocular:<?php echo($espontanea);?> <?php echo($espontanea2);?><?php echo($nenhuma);?> <?php echo($nenhuma2);?> <?php echo($coman_verb);?> <?php echo($coman_verb2);?><?php echo($estim_dolo);?> <?php echo($estim_dolo2);?></div><br>
    <br>
    <div class="organiza" >Resposta Verbal:<?php echo($orientado);?> <?php echo($confuso);?><?php echo($pala_ina);?> <?php echo($pala_ina2);?><?php echo($pala_apro);?> <?php echo($never);?><?php echo($choro);?> <?php echo($sons);?></div><br>
    <br>
    <div class="organiza" >Resposta motora:<?php echo($obedece);?><?php echo($obedece2);?><?php echo($localiza);?> <?php echo($retira);?><?php echo($localizado);?><?php echo($espontanea);?> <?php echo($movimento);?><?php echo($flexao);?> <?php echo($extensao);?><?php echo($nd);?><?php echo($flexao2);?><?php echo($extensao2);?><?php echo($ausencia);?></div><br>
    <br>

    <P>LOCALIZAÇÃO DOS TRAUMAS:</P>
   <div class="organiza"> Local:  <?php echo($local);?> </div><br>
    <br>
    <div class="organiza"> Lado: <?php echo($lado);?></div><br>
    <br>
    <div class="organiza">Face: <?php echo($face);?></div><br>
    <br>
    <div class="organiza">Tipo: <?php echo($tipo);?></div><br>
    
    <br>
    <P>QUEIMADURAS:</P>
    <br>
    <div class="organiza"> Local:<?php echo($cab);?><?php echo($pes);?><?php echo($mie);?> <?php echo($mid);?> <?php echo($msd);?> <?php echo($mse);?> <?php echo($genit);?> <?php echo($tan);?> <?php echo($tpos);?></div><br>
    <br>
    <div class="organiza"> Grau:<?php echo($pgrau);?> <?php echo($sgrau);?> <?php echo($tgrau);?></div><br>
    <br>
    <P>OBJETOS RECOLHIDOS:</P>
    <br>
    <P>SINAI E SINTOMAS:</P>
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
    <?php echo($desv_tra);?>  
    <?php echo($dispineia);?>  
    <?php echo($dor_local);?>  
    <?php echo($edema);?>  <?php echo($generalizado);?>  <?php echo($localizado);?>  
    
    <?php echo($enfisema);?>  
    <?php echo($estase);?>  
    <?php echo($face);?>  
    <?php echo($hemorragia);?>  <?php echo($interna);?>   <?php echo($externa);?>   
    <?php echo($hiper);?>  
    <?php echo($hipo);?>  
    <?php echo( $nau);?>  
    <?php echo($naso);?>  
    <?php echo($obito);?>  
    <?php echo($otorre);?>  
    <?php echo($otorra);?>  
    <?php echo($ovaca);?>  

    <?php echo($parada);?>  <?php echo($card);?>  <?php echo($resp);?> 
     
    <?php echo($pri);?>  
    <?php echo($pru);?>
    <?php echo($pupilas);?>    <?php echo($an);?>    <?php echo($iso);?>   <?php echo($midri);?>   <?php echo($mio);?>   <?php echo($rea);?>   <?php echo($nrea);?>
    <?php echo($sede);?>
    <?php echo($sinal);?>
    <?php echo($sinalg);?>
    <?php echo($sudo);?>
    <?php echo( $taquip);?>
    <?php echo( $taquic);?>
    <?php echo( $tont);?>
    <?php echo( $ooutros );?><br>
    <br>
    <P>FORMA DE CONDUÇÃO:</P>
    <br>
    <?php echo( $deitada );?><br>
    <?php echo( $semi );?><br>
    <?php echo( $sentada);?><br>



    <P>VÍTIMA ERA:</P>
    <br>

    <?php echo($ciclista);?>
    <?php echo( $cond_moto);?>
    <?php echo($gestante);?>
    <?php echo($pass_frente);?>
    <?php echo($pass_moto);?>
    <?php echo($cond_carro);?>
    <?php echo($clinico);?>
    <?php echo($trauma);?>
    <?php echo( $pass_tras);?>
    <?php echo($pedestre);?>

    <P>DECISÃO DE TRANSPORTE:</P>
    <br>
    Situação:<?php echo($cri);?><?php echo($ins);?><?php echo($pi);?> <?php echo($es);?><br>
    Motorista:<?php echo($m);?><br>
    Socorrista 1:<?php echo( $s1);?><br>
    Socorrista 2:<?php echo($s2);?><br>
    Socorrista 3:<?php echo($s3);?><br>
    Demandante:<?php echo( $demandante);?><br>
    Equipe:<?php echo($equipe);?><br>



    <P>OBSERVAÇÕES IMPORTANTES:</P>
    <br>
    <?php echo($obs);?><br>
    <br>
    <P>TERMO DE RECUSA:</P>
    <br>
    NOME:<?php echo($nome);?><BR>
    RG:<?php echo($rg);?><br>
    ASSINATURA:<?php echo($ass);?><BR>
    TESTEMUNHA:<?php echo($test);?>

    <P>AMNASE GESTACIONAL:</P>
    <br>
    Período gestacional: <?php echo($periodo);?><br>
    <br>
    Fez pré natal: <?php echo($com_pre);?> <?php echo($sem_pree);?><br>
    <br>
    Nome médico: <?php echo($nome_med);?><br>
    <br>
    Possibilidade de complicações: <?php echo($com_comp);?> <?php echo($sem_compli);?><br>
    <br>
    Primeiro filho:  <?php echo($op);?> <?php echo($neop);?><br>
    <br>
    Quantos: <?php echo($qtd_filhos);?><br>
    <br>
    Horário inicio das contrações:  <?php echo($ini_contra);?><br>
    <br>
    Duração contrações: <?php echo($dura_contra);?><br>
    <br>
    Intervalo Contrações: <?php echo($inter_contra);?><br>
    <br>
    Pressão na região do quadril ou vontade de evacuar: <?php echo($com_pre);?> <?php echo($sem_pre);?><br>
    <br>
    Ruptura da bolsa: <?php echo($com_rup);?> <?php echo($sem_rup);?><br>
    <br>
    Inspesão visual: <?php echo($com_inp);?> <?php echo($sem_inp);?><br>
    <br>
    Parto realizado:  <?php echo($parto_re);?> <?php echo($parto_nr);?><br>
    <br>
    Sexo do bebê: <?php echo($fe);?> <?php echo($ma);?><br>
    <br>
    Nome do bebê: <?php echo($nome_bb);?>
    <br>

    <P>PROCESSOS EFETUADOS:</P>
    <br>
    <?php echo($aspiracao);?>
    <?php echo($ava_ini);?>
    <?php echo( $ava_dire);?>
    <?php echo($ava_cont);?>
    <?php echo($chave);?>
    <?php echo($canula);?>
    <?php echo($deso);?>
    <?php echo($emprego);?>
    <?php echo($gere);?>
    <?php echo($limpeza);?>
    <?php echo( $curativos);?>
    <?php echo($compre);?>
    <?php echo($encrave);?>
    <?php echo($ocular);?>
    <?php echo( $queimadura);?>
    <?php echo($simples);?>
    <?php echo($tpontas);?>
    <?php echo( $imo);?>
    <?php echo($midi);?>
    <?php echo($mies);?>
    <?php echo( $mses);?>
    <?php echo($msdi);?>
    <?php echo($qua);?>
    <?php echo( $cer);?>
    <?php echo($maca);?>
     <?php echo($macari);?>
    <?php echo($ponte);?>
    <?php echo($ret);?>
    <?php echo($rpc);?>
     <?php echo($rola90);?>
    <?php echo ($rola180);?>
    <?php echo($uso_ca);?>
    <?php echo($uso_colar);?>
     <?php echo($toma_choque);?>
    <?php echo( $toma_deci);?>
    <?php echo($tamanho);?>
    <?php echo($ked);?>
     <?php echo($ttf);?>
    <?php echo( $vent);?>
    <?php echo($oxi);?>
    <?php echo($rea);?><br>
     <?php echo($meio);?>  <?php echo( $celesc);?><?php echo($militar);?>
    <?php echo($pre);?><?php echo($prf);?><?php echo($policia);?><?php echo($def_civil);?><?php echo($igp);?><br><br>
    <?php echo($samu);?> <?php echo($usa);?> <?php echo( $usb);?><br>
    <?php echo($cit);?>
     <?php echo($outros);?>
   






    <P>AMNASE DA EMERGÊNCIA:</P>
    <br>
    O que aconteceu:<?php echo($sinais_s);?><br>
    <br>
    Aconteceu outras vezes:<?php echo($ja_acon);?><?php echo($n_acon);?><br>
    <br>
    A quanto tempo isso aconteceu:<?php echo($tempo);?><br>
    <br>
    Possui problemas de saúde:<?php echo($ppro);?><?php echo($nppro);?><br>
    <br>
    Quais:<?php echo($quais);?><br>
    <br>
    Faz uso de medicações:<?php echo($tomou);?><?php echo($n_tomou);?><br>
    <br>
    Horário da última medicação:<?php echo($horario_med);?><br>
    <br>
    Quais:<?php echo($quais_med);?><br>
    <br>
    Alérgico a algo:<?php echo($e_alergico);?><?php echo($sn_alergico);?><br>
    <br>
    Qual alergia:<?php echo($especifique);?><br>
    <br>
    Ingeriu líquido ou alimento> 2 horas:<?php echo($ingeriu);?><?php echo($n_ingeriu);?><br>
    <br>
    Que horas:<?php echo($hora_ingeriu);?><br>
    


    <P>MATERIAIS UTIL. DESCARTÁVEIS:</P>
    <br>
    <?php echo($atadurass);?>  <?php echo($oito);?> <?php echo($doze);?>  <?php echo($vinte);?> <?php echo($mais);?> <br>
    <?php echo($tp_oculos);?>  <?php echo($maiss);?><br>
    <?php echo($comum);?><br>
    <?php echo($kits);?>  <?php echo($aga);?><?php echo($pee);?><?php echo($que);?> <?php echo($maisss);?><br>
    <?php echo($iluminada);?>  <?php echo($maissss);?><br>
    <?php echo($masca);?>  <?php echo($maisssss);?><br>
    <?php echo($paz);?>  <?php echo($maissssss);?><br>
    <?php echo($aspiracao);?>  <br>
    <?php echo($soro);?>  <?php echo($maissssssss);?><br>
    <?php echo($telaspap);?>  <?php echo($phe);?> <?php echo($ge);?> <?php echo($maissssssss);?><br>
    <?php echo($outros);?>  <?php echo($maisssssssss);?><br>

    <P>MATERIAIS U.D NO HOSPITAL:</P>
    <br> 
    <?php echo($estabeliza);?>  <?php echo($add);?><br>
    <?php echo($colar);?>  <?php echo($ene);?> <?php echo($pepe);?>  <?php echo($pe);?> <?php echo($add2);?> <br>
    <?php echo($colar2);?>  <?php echo($eme);?> <?php echo($gee);?>  <?php echo($add3);?><br>
    <?php echo($ked);?>  <?php echo($adulto);?> <?php echo($crianca);?>  <?php echo($add4);?><br>
    <?php echo($rigida);?>  <?php echo($add5);?><br>
    <?php echo($coxins);?>  <?php echo($add6);?><br>
    <?php echo($canola);?>  <?php echo($add7);?><br>
    <?php echo($tirante);?>  <?php echo($add8);?><br>
    <?php echo($aranha);?>  <?php echo($add9);?><br>
    <?php echo($ttf);?>  <?php echo($adulto);?> <?php echo($infantil);?>  <?php echo($add10);?><br>
    <?php echo($ouou);?>  <?php echo($add11);?><br>
    <BR>
    <P>DIVILGAR NA IMPRENSSA:</P>
    <br>
    <?php echo($quero);?>
    <?php echo($n_quero);?>
    <br>
    <P>DADOS FINAIS:</P>
    <br>
    N° USB:<?php echo($n_usb);?> <?php echo($digita);?><br>
    N° OCORRÊNCIA:<?php echo($n_ocorr);?> <?php echo($digita2);?><br>
    DESP:<?php echo($desp);?>
    H.CH<?php echo($hch);?>
    KM_FINAL:<?php echo($km_final);?>
    COD:<?php echo($cod);?>
    <BR>
   </div>
  <br>
  <div class="oi"></div>
  <div id="gerarRelatorioContainer">
          <a id="gerarRelatorio" href="animafim.html">ENVIAR RELATÓRIO </a>
         
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