<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $opcao1 = isset($_POST["opcao1"]) ? "Abdomen Sensível/Rígido" : "";
    $opcao2 = isset($_POST["opcao2"]) ? "Afundamendo de crânio" : "";
    $opcao3 = isset($_POST["opcao3"]) ? "Agitação" : "";
    $opcao4 = isset($_POST["opcao4"]) ? "Amnésia" : "";
    $opcao5 = isset($_POST["opcao5"]) ? "Angina de peito " : "";
    $opcao6 = isset($_POST["opcao6"]) ? "Apnéia" : "";
    $opcao7 = isset($_POST["opcao7"]) ? "Bradicardia  " : "";
    $opcao8 = isset($_POST["opcao8"]) ? "Bradpnéia" : "";
    $opcao9 = isset($_POST["opcao9"]) ?  "Bronco Aspirando" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Cefaléia  " : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Cianose " : "";
    $opcao12 = isset($_POST["opcao12"]) ? "Lábios" : "";
    $opcao13 = isset($_POST["opcao13"]) ? "Extremidades" : "";
    $opcao14 = isset($_POST["opcao14"]) ? "Convulsão" : "";
    $opcao15 = isset($_POST["opcao15"]) ? "Decorticação " : "";
    $opcao16 = isset($_POST["opcao16"]) ? "Deformidade " : "";
    $opcao17 = isset($_POST["opcao17"]) ? "Descerebração" : "";
    $opcao18 = isset($_POST["opcao18"]) ? "Desmaio" : ""; 
    $opcao19 = isset($_POST["opcao19"]) ? "Desvio de traquéia" : "";
    $opcao20 = isset($_POST["opcao20"]) ? "Dispnéia " : "";
    $opcao21 = isset($_POST["opcao21"]) ? "Dor local " : "";
    $opcao22 = isset($_POST["opcao22"]) ? "Edema" : "";
    $opcao23 = isset($_POST["opcao23"]) ? "Generalizado" : "";
    $opcao24 = isset($_POST["opcao24"]) ? "Localizado " : "";
    $opcao25 = isset($_POST["opcao25"]) ? "Enfisema Subcutâneo" : "";
    $opcao26 = isset($_POST["opcao26"]) ? "Êstase de jugular" : "";
    $opcao27 = isset($_POST["opcao27"]) ? "Face Pálida " : "";
    $opcao28 = isset($_POST["opcao28"]) ? "Hemorragia " : "";
    $opcao29 = isset($_POST["opcao29"]) ?  "Interna" : "";
    $opcao30 = isset($_POST["opcao30"]) ? "Externa" : "";
    $opcao31 = isset($_POST["opcao31"]) ? "Hipertensão" : "";
    $opcao32 = isset($_POST["opcao32"]) ? "Hipotensão" : "";
    $opcao33 = isset($_POST["opcao33"]) ? "Náuseas e Vômitos" : "";
    $opcao34 = isset($_POST["opcao34"]) ? "Nasoragia" : "";
    $opcao35 = isset($_POST["opcao35"]) ? "Óbito" : "";
    $opcao36 = isset($_POST["opcao36"]) ? "Otorréia" : "";
    $opcao37 = isset($_POST["opcao37"]) ? "Otorragia " : "";
    $opcao38 = isset($_POST["opcao38"]) ? "O V A C E" : ""; 
    $opcao39 = isset($_POST["opcao39"]) ? "Parada" : "";
    $opcao40 = isset($_POST["opcao40"]) ? "Cardíaca" : "";
    $opcao41 = isset($_POST["opcao41"]) ? "Respiratória" : "";
    $opcao42 = isset($_POST["opcao42"]) ? "Priapismo" : "";
    $opcao43 = isset($_POST["opcao43"]) ? "Prurido na pele" : "";
    $opcao44 = isset($_POST["opcao44"]) ? "Pupílas" : "";
    $opcao45 = isset($_POST["opcao45"]) ? "Ansiocoria" : "";
    $opcao46 = isset($_POST["opcao46"]) ? "Isocoria" : "";
    $opcao47 = isset($_POST["opcao47"]) ? "Midriase" : "";
    $opcao48 = isset($_POST["opcao48"]) ? "Miose" : ""; 
    $opcao49 = isset($_POST["opcao49"]) ? "Reagente" : "";
    $opcao50 = isset($_POST["opcao50"]) ? "Ñ Reagente " : "";
    $opcao51 = isset($_POST["opcao51"]) ? "Sede  " : "";
    $opcao52 = isset($_POST["opcao52"]) ? "Sinal de Batile " : "";
    $opcao53 = isset($_POST["opcao53"]) ? "Sinal de Guaxinim " : "";
    $opcao54 = isset($_POST["opcao54"]) ? " Sudorese " : "";
    $opcao55 = isset($_POST["opcao55"]) ? " Taquipnéia" : "";
    $opcao56 = isset($_POST["opcao56"]) ? " Taquicardia " : "";
    $opcao57 = isset($_POST["opcao57"]) ? "Tontura  " : "";
    $opcao58 = $_POST["Outros"]; // Opção 58(campo de texto)



    $comando = $pdo->prepare("INSERT INTO ss_form 
    (nOcorrencia,opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, opcao7, opcao8, opcao9, opcao10, opcao11, opcao12, opcao13, opcao14, opcao15, opcao16, opcao17, opcao18, opcao19, opcao20,
    opcao21, opcao22, opcao23, opcao24, opcao25, opcao26, opcao27, opcao28, opcao29 ,opcao30, opcao31, opcao32, opcao33, opcao34, opcao35, opcao36, opcao37, opcao38, opcao39, opcao40, opcao41, opcao42, opcao43, opcao44, opcao45, opcao46, opcao47,
    opcao48, opcao49, opcao50, opcao51, opcao52, opcao53, opcao54, opcao55, opcao56, opcao57, Outros)

    VALUES (:nOco,:op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13,
     :op14, :op15, :op16, :op17, :op18, :op19, :op20, :op21, :op22, :op23, :op24, :op25, :op26, :op27, :op28 ,:op29, :op30,
      :op31, :op32, :op33, :op34, :op35, :op36, :op37, :op38, :op39, :op40 ,:op41, :op42,
      :op43, :op44, :op45, :op46, :op47, :op48, :op49, :op50, :op51, :op52, :op53, :op54, :op55, :op56, :op57, :op58)");

    //maicol explicou
    $ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
    //continua normal
    $comando->bindParam(":op1", $opcao1);
    $comando->bindParam(":op2", $opcao2);
    $comando->bindParam(":op3", $opcao3);
    $comando->bindParam(":op4", $opcao4);
    $comando->bindParam(":op5", $opcao5);
    $comando->bindParam(":op6", $opcao6);
    $comando->bindParam(":op7", $opcao7);
    $comando->bindParam(":op8", $opcao8);
    $comando->bindParam(":op9", $opcao9);
    $comando->bindParam(":op10", $opcao10);
    $comando->bindParam(":op11", $opcao11);
    $comando->bindParam(":op12", $opcao12);
    $comando->bindParam(":op13", $opcao13);
    $comando->bindParam(":op14", $opcao14);
    $comando->bindParam(":op15", $opcao15);
    $comando->bindParam(":op16", $opcao16);
    $comando->bindParam(":op17", $opcao17);
    $comando->bindParam(":op18", $opcao18);
    $comando->bindParam(":op19", $opcao19);
    $comando->bindParam(":op20", $opcao20);
    $comando->bindParam(":op21", $opcao21);
    $comando->bindParam(":op22", $opcao22);
    $comando->bindParam(":op23", $opcao23);
    $comando->bindParam(":op24", $opcao24);
    $comando->bindParam(":op25", $opcao25);
    $comando->bindParam(":op26", $opcao26);
    $comando->bindParam(":op27", $opcao27);
    $comando->bindParam(":op28", $opcao28);
    $comando->bindParam(":op29", $opcao29);
    $comando->bindParam(":op30", $opcao30);
    $comando->bindParam(":op31", $opcao31);
    $comando->bindParam(":op32", $opcao32);
    $comando->bindParam(":op33", $opcao33);
    $comando->bindParam(":op34", $opcao34);
    $comando->bindParam(":op35", $opcao35);
    $comando->bindParam(":op36", $opcao36);
    $comando->bindParam(":op37", $opcao37);
    $comando->bindParam(":op38", $opcao38);
    $comando->bindParam(":op39", $opcao39);
    $comando->bindParam(":op40", $opcao40);
    $comando->bindParam(":op41", $opcao41);
    $comando->bindParam(":op42", $opcao42);
    $comando->bindParam(":op43", $opcao43);
    $comando->bindParam(":op44", $opcao44);
    $comando->bindParam(":op45", $opcao45);
    $comando->bindParam(":op46", $opcao46);
    $comando->bindParam(":op47", $opcao47);
    $comando->bindParam(":op48", $opcao48);
    $comando->bindParam(":op49", $opcao49);
    $comando->bindParam(":op50", $opcao50);
    $comando->bindParam(":op51", $opcao51);
    $comando->bindParam(":op52", $opcao52);
    $comando->bindParam(":op53", $opcao53);
    $comando->bindParam(":op54", $opcao54);
    $comando->bindParam(":op55", $opcao55);
    $comando->bindParam(":op56", $opcao56);
    $comando->bindParam(":op57", $opcao57);
    $comando->bindParam(":op58", $opcao58);

    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

}
?>