<?php
session_start();
include("../conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os valores das caixas de seleção do POST

    $opcao1  = isset($_POST["opcao1"]) ? "Aspiração" : "";
    $opcao2  = isset($_POST["opcao2"]) ? "Avaliação inicia" : "";
    $opcao3  = isset($_POST["opcao3"]) ? "Avaliação dirigida" : "";
    $opcao4  = isset($_POST["opcao4"]) ? "Avaliação continuada" : "";
    $opcao5  = isset($_POST["opcao5"]) ? "Chave de rauteck" : "";
    $opcao6  = isset($_POST["opcao6"]) ? "Cânula de guedel" : "";
    $opcao7  = isset($_POST["opcao7"]) ? "Desobstrução de v.a" : "";
    $opcao8  = isset($_POST["opcao8"]) ? "Emprego do d.e.a" : "";
    $opcao9  = isset($_POST["opcao9"]) ? "Gerenciamento de riscos" : "";
    $opcao10 = isset($_POST["opcao10"]) ? "Limpeza de ferimento" : "";
    $opcao11 = isset($_POST["opcao11"]) ? "Curativos" : "";
    $opcao12 = isset($_POST["opcao12"]) ? "Compressivo" : "";
    $opcao13 = isset($_POST["opcao13"]) ? "Encravamento" : "";
    $opcao14 = isset($_POST["opcao14"]) ? "Ocular" : "";
    $opcao15 = isset($_POST["opcao15"]) ? "Queimadura" : "";
    $opcao16 = isset($_POST["opcao16"]) ? "Simples" : "";
    $opcao17 = isset($_POST["opcao17"]) ? "3 pontas" : "";
    $opcao18 = isset($_POST["opcao18"]) ? "Imobilizações " : "";
    $opcao19 = isset($_POST["opcao19"]) ? "Membro inf.dir" : "";
    $opcao20 = isset($_POST["opcao20"]) ? "Membro inf.esq" : "";
    $opcao21 = isset($_POST["opcao21"]) ? "membro sup.dir" : "";
    $opcao22 = isset($_POST["opcao22"]) ? "membro sp.esq" : "";
    $opcao23 = isset($_POST["opcao23"]) ? "Quadril" : "";
    $opcao24 = isset($_POST["opcao24"]) ? "Cervical " : "";
    $opcao25 = isset($_POST["opcao25"]) ? "Maca sobre rodas" : "";
    $opcao26 = isset($_POST["opcao26"]) ? "Maca rígida" : "";
    $opcao27 = isset($_POST["opcao27"]) ? "Ponte" : "";
    $opcao28 = isset($_POST["opcao28"]) ? "Retirado capacete" : "";
    $opcao29 = isset($_POST["opcao29"]) ? "R.C.P" : "";
    $opcao30 = isset($_POST["opcao30"]) ? "Rolamento 90°" : "";
    $opcao31 = isset($_POST["opcao31"]) ? "Rolamento 180°" : "";
    $opcao32 = isset($_POST["opcao32"]) ? "Tomada decisão" : "";
    $opcao33 = isset($_POST["opcao33"]) ? "Tomada choque" : "";
    $opcao34 = isset($_POST["opcao34"]) ? "Uso de cânula" : "";
    $opcao35 = isset($_POST["opcao35"]) ? "Uso colar" : "";
    $tam = isset($_POST["tam"]);
    $opcao36 = isset($_POST["opcao36"]) ? "Uso ked" : "";
    $opcao37 = isset($_POST["opcao37"]) ? "Uso ttf" : "";
    $opcao38 = isset($_POST["opcao38"]) ? "Ventilação suporte" : "";
    $opcao39 = isset($_POST["opcao39"]) ? "Oxigenioterapia_lpm" : "";
    $opcao40 = isset($_POST["opcao40"]) ? "Reanimador_lpm" : "";
    $opcao41 = isset($_POST["opcao41"]) ? "Meios auxiliares" : "";
    $celesc = isset($_POST["celesc"]) ? "Celesc " : "";
    $policia = isset($_POST["policia"]) ? "Polícia" : "";
    $civil = isset($_POST["civil"]) ? "Civil" : "";
    $militar = isset($_POST["militar"]) ? "Militar" : "";
    $pre = isset($_POST["pre"]) ? "PRE" : "";
    $prf = isset($_POST["prf"]) ? "PRF" : "";
    $def_civil = isset($_POST["def_civil"]) ? "Def.civil" : "";
    $igppc = isset($_POST["igppc"]) ? "IGP/PC" : "";
    $opcao42 = isset($_POST["opcao42"]) ? "Samu" : "";
    $usa = isset($_POST["usa"]) ? "USA" : "";
    $usb = isset($_POST["usb"]) ? "USB" : "";
    $opcao43 = isset($_POST["opcao43"]) ? "CIT" : "";
    $outros = $_POST["outros"]; 

   $comando = $pdo->prepare("INSERT INTO proc_efe
    (nOcorrencia, opcao1, opcao2, opcao3, opcao4, opcao5, opcao6, opcao7, opcao8, opcao9, opcao10, opcao11, opcao12, opcao13, 
    opcao14, opcao15, opcao16, opcao17, opcao18, opcao19, opcao20, opcao21, opcao22, opcao23, opcao24, opcao25, opcao26,opcao27,opcao28,opcao29,opcao30, opcao31, opcao32, opcao33, opcao34, opcao35, tam,
    opcao36, opcao37, opcao38, opcao39, opcao40, opcao41, celesc, policia, civil, militar, pre, prf, def_civil,igppc,opcao42, usa, usb, opcao43, outros)

    values (:nOco,:op1, :op2, :op3, :op4, :op5, :op6, :op7, :op8, :op9, :op10, :op11, :op12, :op13,
     :op14, :op15, :op16, :op17, :op18, :op19, :op20, :op21, :op22, :op23, :op24, :op25, :op26, :op27, :op28, :op29,
    :op30, :op31,:op32,:op33,:op34,:op35,:tam,:op36, :op37, :op38, :op39, :op40, :op41, :celesc, :policia, :civil, :militar, :pre, :prf, :def_civil, :igppc, :op42, :usa, :usb, :op43, :outros )");


$ocorrencia = $_SESSION["id"];
    $comando->bindParam(":nOco", $ocorrencia);
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
    $comando->bindParam(":tam", $tam);
    $comando->bindParam(":op36", $opcao36);
    $comando->bindParam(":op37", $opcao37);
    $comando->bindParam(":op38", $opcao38);
    $comando->bindParam(":op39", $opcao39);
    $comando->bindParam(":op40", $opcao40);
    $comando->bindParam(":op41", $opcao41);
    $comando->bindParam(":celesc", $celesc);
    $comando->bindParam(":policia", $policia);
    $comando->bindParam(":civil", $civil);
    $comando->bindParam(":militar", $militar);
    $comando->bindParam(":pre", $pre);
    $comando->bindParam(":prf", $prf);
    $comando->bindParam(":def_civil", $def_civil);
    $comando->bindParam(":igppc", $igppc);
    $comando->bindParam(":op42", $opcao42);
    $comando->bindParam(":usa", $usa);
    $comando->bindParam(":usb", $usb);
    $comando->bindParam(":op43", $opcao43);
    $comando->bindParam(":outros", $outros);


    if ($comando->execute()) {
        echo ("{\"Resp\":1}");
    } else {
        echo ("{\"Resp\":0}");
    }

}