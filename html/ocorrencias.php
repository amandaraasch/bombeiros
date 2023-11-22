<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ocorrencias.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <link rel="Website Icon" type="png"
    href="../img/noar.png">
    <title>Ocorrências</title>
</head>
<body>
    <div class="menu">
        <div title="Tela inicial" class="voltar">
            <a href="adm.php" onclick="return showAlertt();">
            <img title="Tela inicial" class="seta" src="../img/voltar.png">
            </a>
        </div>
        <div class="pesquisar">
            <input type="search" id="searchBox" placeholder="Digite sua pesquisa...">
        </div>
    </div>
    <div class="ocorrencias">
        <div class="um">
            <div class="dois">
                <div class="logo">
                    <img src="../img/logo_grande.png" width="250px">
                </div>
                <div class="dadospessoais"> <p>Enviado por:</p></div>
                <div class="dados">
                
                  <p> <b> Nome bombeiro:</b> 
                    <br>
                    <br>
                    <b>Localidade bombeiro:</b>
                    <br>
                    <br>
                    <b>Descrição bombeiro:</b>
                    <br>
                  
                </p>

                </div>
            </div>
            <div class="doisemeio">
                <div class="dadospessoais2"> <p>Relatório da ocorrência:</p>
                
                

                </div>
            </div>
            <div class="tres">
               
                <div class="calendario">
                    <div class="cabecalho">
                        <button id="btnAnterior">←</button>
                        <span id="mesAno"></span>
                        <button id="btnProximo">→</button>
                    </div>
                    <div class="semana">
                        <span>Dom</span>
                        <span>Seg</span>
                        <span>Ter</span>
                        <span>Qua</span>
                        <span>Qui</span>
                        <span>Sex</span>
                        <span>Sab</span>
                    </div>
                    <div class="dias"></div>
                   
                <div class="oco">

                <?php
                    // Inclua o arquivo de conexão com o banco de dados
                    include("../conecta.php");
        
                    // Função para listar usuários
                    function listarUsuarios($pdo) {
                        $sql = "SELECT nOcorrencia, Nomepac,`Data`  FROM paciente";
                        $stmt = $pdo->query($sql);
        
                        if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch()) {
                                echo "<div class='usuario' >";
                                echo "<div class='informacoes'data-id='"  . $row["nOcorrencia"] . "' onclick='redirectToProfile(this)'>";
                                echo "<div class='informacoes1 '>  ID:  &nbsp " . $row["nOcorrencia"] . "</div>";
                                echo "<div class='informacoes2 '>  NOME: &nbsp" . $row["Nomepac"] . "</div>";
                                echo "<div class='informacoes3 '>  DATA: &nbsp" . $row["Data"] . "</div>";
                                echo "</div>";
                                echo "<div class=' ' data-userid='" . $row["nOcorrencia"] . "'>Excluir</div>";
                                echo "</div>";
                            }
                        } else {
                            echo "Nenhum usuário encontrado.";
                        }
                    }
        
                    // Listar usuários
                    listarUsuarios($pdo);
                    ?>
                </div>
            </div>
        </div>

            
        <script src="calendario.js"></script>
    <script>
        function showAlertt() {
            alert('Você irá para a tela inicial!');
            return true; // permite que a navegação continue após mostrar o alerta
        }

        const mesAno = document.getElementById('mesAno');
        const containerDias = document.querySelector('.dias');
        const btnAnterior = document.getElementById('btnAnterior');
        const btnProximo = document.getElementById('btnProximo');

        let dataAtual = new Date();
        let mesAtual = dataAtual.getMonth();
        let anoAtual = dataAtual.getFullYear();

        function mostrarCalendario(mes, ano) {
            const primeiroDia = (new Date(ano, mes)).getDay();
            const totalDiasMes = 32 - new Date(ano, mes, 32).getDate();

            mesAno.textContent = `${mesPorNome(mes)} ${ano}`;
            containerDias.innerHTML = "";

            for (let i = 0; i < primeiroDia; i++) {
                const span = document.createElement("span");
                containerDias.appendChild(span);
            }

            for (let i = 1; i <= totalDiasMes; i++) {
                const span = document.createElement("span");
                span.textContent = i;

                span.addEventListener('click', function () {
                    alert(`Você selecionou o dia ${i} do mês ${mes + 1}`);
                    // Adicione mais lógica conforme necessário, como alterar a aparência, fazer uma solicitação AJAX, etc.
                });

                if (i === dataAtual.getDate() && mes === dataAtual.getMonth() && ano === dataAtual.getFullYear()) {
                    span.style.backgroundColor = "#e2353b";
                }

                containerDias.appendChild(span);
            }
        }

        function mesPorNome(mes) {
            const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
            return meses[mes];
        }

        btnAnterior.addEventListener('click', function () {
            mesAtual--;
            if (mesAtual < 0) {
                mesAtual = 11;
                anoAtual--;
            }
            mostrarCalendario(mesAtual, anoAtual);
        });

        btnProximo.addEventListener('click', function () {
            mesAtual++;
            if (mesAtual > 11) {
                mesAtual = 0;
                anoAtual++;
            }
            mostrarCalendario(mesAtual, anoAtual);
        });

        mostrarCalendario(mesAtual, anoAtual);




        //listagem

        $(document).ready(function () {
    // Função para listar usuários
    function listarUsuarios(ordenacao) {
        $.ajax({
            url: 'listar_oco.php',
            method: 'GET',
            data: { ordenacao: ordenacao },
            success: function (data) {
                $('.cadastros').html(data);
            }
        });
    }

    $('.cadastros').on('click', '.excluir', function () {
        var userId = $(this).data('userid');
        if (confirm('Tem certeza de que deseja excluir este usuário?')) {
            $.ajax({
                url: 'excluir.php',
                method: 'POST',
                data: { id: userId },
                success: function (data) {
                    // Atualize a lista de usuários após a exclusão
                    listarUsuarios($('#ordenacao').val());
                    alert(data); // Exibe uma mensagem com o resultado da exclusão
                }
            });
        }
    });

    // Quando o valor selecionado no <select> muda, chame a função de ordenação
    $('#ordenacao').on('change', function () {
        listarUsuarios($(this).val());
    });

    // Chame a função listarUsuarios com a ordenação padrão
    listarUsuarios($('#ordenacao').val());
});

function redirectToProfile(element) {
    const userId = element.getAttribute('data-id');
    if (userId) {
        window.location.href = 'hist_oco.php?nOcorrencia=' + nOcorrencia;
    }
}








       </script>
</body>
</html>