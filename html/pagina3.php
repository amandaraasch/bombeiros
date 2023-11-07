<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <link rel="stylesheet" href="../css/pagina2.css">
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
           <div class="titulo"><b>FOLHA DE ATENDIMENTO</b></div> 
           <div class="sub">Preencha os dados:</div> 
        </div>
    </div>

    <div id="principal" class="principal">

        <div id="d1" class="d1" >
          <div class="empurrar"></div>
          <div class="inicial">

            <div class="teste" id="teste" onclick="animar('d1');">

              <div id="imageDiv">

                <img class="okay4"  id="okay4" src="../img/okay.png" width="20px">

              </div>

              </div>

            <br><p>LOCALIZAÇÃO DOS TRAUMAS</p></br>
          </div>
          <br>

            <div class="esconder" id="esconder1">
<br>
              <div id="resultado">Clique em uma parte do corpo.</div>
              <br>
            
           
            <div class="corpo" style="background-image: url('../img/corpo..png');">
              <div id="div_traumas_localizados" onclick="inserirImagem(event)">
              <div class="parte" id="cabeca" data-nome="Cabeça"></div>

              
              <div class="parte" id="tronco" data-nome="Tronco"></div>

              
              <div class="parte" id="membrosinferiores" data-nome="Membro Inferior" ></div>

              
              <div class="parte" id="membrosinferiores2" data-nome="Membro Inferior"></div>

              
              <div class="parte" id="membrossuperiores" data-nome="Membro Superior"></div>
             

           
              <div class="parte" id="membrossuperiores2" data-nome="Membro Superior"></div>
              

              <div class="parte2" id="cabeca2" data-nome="Cabeça"></div>
              

              
              <div class="parte2" id="tronco2" data-nome="Tronco"></div>
              

              
              <div class="parte2" id="membrosinferiores1" data-nome="Membro Inferior" ></div>
              

             
              <div class="parte2" id="membrosinferiores02" data-nome="Membro Inferior"></div>
             

              
              <div class="parte2" id="membrossuperiores1" data-nome="Membro Superior"></div>
              
              
              <div class="parte2" id="membrossuperiores02" data-nome="Membro Superior"></div></div>
             
          </div>
        
          <div id="resultados">Selecione o trauma:
           <br>
          <button class="trauma" type="button" onclick="MudarImagemFratura()">Fraturas/Luxações/Entorses</button>
          <button class="trauma" type="button" onclick="MudarImagemFerimento()">Ferimentos Diversos</button>
          <button class="trauma" type="button" onclick="MudarImagemHemorragia()">Hemorragias</button>
          <button class="trauma" type="button" onclick="MudarImagemEviceração()">Eviceração</button>
          <button class="trauma" type="button" onclick="MudarImagemFABFAF()">F.A.B/F.A.F </button>
          <button class="trauma" type="button" onclick="MudarImagemAmputação()">Amputação </button>
          <div></div>
          
          </div>
          
          <BR>
            <br>

            <form method="post" action="" id="form4">  
          <div class="rela"><B>RELATÓRIO</B></div>
          <div class="tabela"> 
            <div class="local">LOCAL: <input class="R1" type="text" id="resultado1" name="resultado1" value="" > </div>
            <div class="lado">LADO:   <input class="R2" type="text" id="resultado2" name="resultado2" value="" > </div>
            <div class="face">FACE:   <input class="R3" type="text" id="resultado3" name="resultado3" value="" > </div>
            <div class="tipo">TIPO:   <input class="R4" type="text" id="resultado4" name="resultado4" value="" > </div>
          </div>
            
            <input class="enviar" type="button" name="enviar" value="Enviar" onclick="lo_tra()" >
              
          </form>

            </div>
        </div>   <br>

        <div id="d2" class="d2">
          <div class="empurrar"></div>
          <div class="inicial">
            <div class="teste" id="teste" onclick="animar('d2');">
            
              <div id="imageDiv">

                <img class="okay5"  id="okay5" src="../img/okay.png" width="20px">

              </div>
            </div>

            <br><p>QUEIMADURAS</p></br>
          </div>
          <br>
            <div class="esconder" id="esconder2">
            <br>
              <form method="post" action="" id="form5">
              <div class="espaco">Local da queimadura:</div> <br>
              <input class="caixinha" type="checkbox" name="opcao1" value=""> Cabeça <br>
              <input class="caixinha" type="checkbox" name="opcao2" value=""> Pescoço <br>
              <input class="caixinha" type="checkbox" name="opcao3" value=""> T.ANT  <br>
              <input class="caixinha" type="checkbox" name="opcao4" value=""> T.POS  <br>
              <input class="caixinha" type="checkbox" name="opcao5" value=""> Genit. <br>
              <input class="caixinha" type="checkbox" name="opcao6" value=""> M.I.D  <br>
              <input class="caixinha" type="checkbox" name="opcao7" value=""> M.I.E  <br>
              <input class="caixinha" type="checkbox" name="opcao8" value=""> M.S.D  <br>
              <input class="caixinha" type="checkbox" name="opcao9" value=""> M.S.E  <br> <br>

              <div class="espaco">Grau da queimadura:</div> <br>
              <input class="caixa2" type="radio" name="opcao1" value="">1° Grau<br>
              <input class="caixa2" type="radio" name="opcao2" value="">2° Grau<br>
              <input class="caixa2" type="radio" name="opcao3" value="">3° Grau<br>
                <br>
                <br>
                <br>
                <input class="enviar" type="button" name="enviar" value="Enviar" onclick="quei()" >
            </form>
            </div>
        </div>   <br>

        
        <div id="d3" class="d3">
          <div class="empurrar"></div>
          <div class="inicial">
          <div class="teste" id="teste" onclick="animar('d3');">
          
            <div id="imageDiv">

              <img class="okay6"  id="okay6" src="../img/okay.png" width="20px">

            </div>
          
          </div>
          
          <br><p>IMPRENSSA</p></br> <br>
          </div>
          <br>

            <div class="esconder" id="esconder3">
                <br>
                
            <form  method="post" action="" id="form6">
                <div class="espaco">Divulgar na imprensa?</div>
                <input class="caixa2" type="radio" name="opcao1" value=""> Sim <br>
                <input class="caixa2" type="radio" name="opcao2" value=""> Não<br>
               <br>
                <input class="enviar" type="button" name="enviar" value="Enviar" onclick="formdificil()">
              </form>
            </div>
        
        </div>   <br>

    </div>
    
    <div class="menu2">
      <a href="pagina2.html">
        <img src="../img/setinha.png">
       </a>
       <a href="pagina4.html">
      <img class="setaa" src="../img/setinha2.png">
    </a>
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
        $("#" + ID).animate({ height: "130px" });
    } else { // Caso contrário, abrir a div para 850px
       
        if(ID=="d1")
        {
          $("#" + ID).animate({ height: "1250px" });
          esconder1.style.display="block"// esconder as div com os dados
        }

        if(ID=="d2")
        {
          $("#" + ID).animate({ height: "630px" });
          esconder2.style.display="block"
        }

        if(ID=="d3")
        {
          $("#" + ID).animate({ height: "300px" });
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

   //para primeiro forms

function lo_tra() {
    var dados = $('#form4').serialize();

            $.ajax({
                type: "POST",
                url: "lo_tra.php",
                data: dados,
                dataType: 'json',
                                
                success: function(meu_json)
                {
                  okay4.style.display="block"
                  
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
          

      //segundo forms

      function quei() {
    var dados = $('#form5').serialize();

            $.ajax({
                type: "POST",
                url: "quei.php",
                data: dados,
                dataType: 'json',
                                
                success: function(meu_json)
                {
                  okay5.style.display="block"
                  
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
      
      //pro terceiro form

      function formdificil() {
    var dados = $('#form6').serialize();

            $.ajax({
                type: "POST",
                url: "impressa.php",
                data: dados,
                dataType: 'json',
                                
                success: function(meu_json)
                {
                  okay6.style.display="block"
                  
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
      document.querySelectorAll('.parte').forEach(function(parte) {
    parte.addEventListener('click', function() {
        let nome = this.getAttribute('data-nome');
        let lado = "";
        let face = "Frontal"; // Por padrão, assumindo que todos são da face anterior.

        switch (this.id) {
            case "cabeca":
            case "tronco":
                lado = "Central";
                break;
            case "membrosinferiores2":
            case "membrossuperiores":
                lado = "Direito";
                break;
            case "membrosinferiores":
            case "membrossuperiores2":
                lado = "Esquerdo";
                break;
        }

        // Exibindo os resultados
        
        document.getElementById('resultado1').value = nome;
        document.getElementById('resultado2').value = lado;
        document.getElementById('resultado3').value = face;
    });
});
document.querySelectorAll('.parte2').forEach(function(parte2) {
    parte2.addEventListener('click', function() {
        let nome = this.getAttribute('data-nome');
        let lado = "";
        let face = "Posterior"; // Por padrão, assumindo que todos são da face anterior.

        switch (this.id) {
            case "cabeca2":
            case "tronco2":
                lado = "Central";
                break;
            case "membrosinferiores1":
            case "membrossuperiores1":
                lado = "Direito";
                break;
            case "membrosinferiores02":
            case "membrossuperiores02":
                lado = "Esquerdo";
                break;
        }

        // Exibindo os resultados
        
        document.getElementById('resultado1').value = nome;
        document.getElementById('resultado2').value = lado;
        document.getElementById('resultado3').value = face;
    });
});
var ImagemAtual = "seta.png";

function inserirImagem(event) {
    var DivDasImagens = document.getElementById("div_traumas_localizados");
    if (DivDasImagens.contains(event.target)) {
        var x = event.clientX - DivDasImagens.getBoundingClientRect().left;
        var y = event.clientY - DivDasImagens.getBoundingClientRect().top;

   
        var novaImagem = document.createElement("img");
        novaImagem.src = ImagemAtual;

       
        novaImagem.style.width = "40px"; 

        novaImagem.style.position = "absolute"; 
        novaImagem.style.left = x-11 + "px";
        novaImagem.style.top = y-11 + "px";
        novaImagem.style.zIndex = "1"; 

        DivDasImagens.appendChild(novaImagem);


        novaImagem.addEventListener('click', function () {
            DivDasImagens.removeChild(novaImagem);
        });
    }
}
function MudarImagemFratura(){
    ImagemAtual = "../img/FRATURAS.png";
    document.getElementById('resultado4').value = "Fraturas/Luxações/Entorses";
}
function MudarImagemFerimento(){
    ImagemAtual = "../img/FERIMENTOS.png";
    document.getElementById('resultado4').value = "Ferimentos Diversos";

}
function MudarImagemHemorragia(){
    ImagemAtual = "../img/HEMORRAGIA.png";
    document.getElementById('resultado4').value = "Hemorragia";
}
function MudarImagemEviceração(){
    ImagemAtual = "../img/EVISCERAÇÃO.png";
    document.getElementById('resultado4').value = "Evisceração";
}
function MudarImagemFABFAF(){
    ImagemAtual = "../img/FAB.png";
    document.getElementById('resultado4').value = "F.A.B/F.A.F";
}
function MudarImagemAmputação(){
    ImagemAtual = "../img/AMPUTACAO.png";
    document.getElementById('resultado4').value = "Amputação";
}

</script>