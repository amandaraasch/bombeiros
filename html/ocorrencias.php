<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ocorrencias.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/effra-heavy" rel="stylesheet">
    <link rel="Website Icon" type="png" href="../img/noar.png">
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
                <div class="dadospessoais">
                    <p>Página de Historico</p>
                </div>
                <div class="dados">
                    <p>
                       <B> Selecione a Ocorrência desejada e acompanhe o relatório</B>
                    </p>
                </div>
            </div>
            <div class="doisemeio">
                <div class="dadospessoais2">
                    <p>Relatório da ocorrência:</p>
                </div>
            </div>
            <div class="tres">
                <div class="calendario">
                    <div class="oco">
                        <?php
                        // Inclua o arquivo de conexão com o banco de dados
                        include("../conecta.php");

                        // Função para recuperar 3 dados da tabela exemplo
                        function obterTresDados($pdo) {
                            $sql = "SELECT nOcorrencia, Nomepac, `Data` FROM paciente ";
                            $stmt = $pdo->query($sql);

                            if ($stmt !== false) {
                                if ($stmt->rowCount() > 0) {
                                    while ($row = $stmt->fetch()) {
                                        echo "<div class='usuario' >";
                                        echo "<a href='hist_oco.php?nOcorrencia=" . $row["nOcorrencia"] . "' class='informacoes'>";
                                        echo "<div class='informacoes1 '>  ID:  &nbsp " . $row["nOcorrencia"] . "</div>";
                                        echo "<div class='informacoes1 '>  NOME: &nbsp" . $row["Nomepac"] . "</div>";
                                        echo "<div class='informacoes1 '>  DATA: &nbsp" . $row["Data"] . "</div>";
                                        echo "</a>";
                                        echo "</div>";
                                    }
                                }
                            }
                        }

                        obterTresDados($pdo);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showAlertt() {
            alert('Você irá para tela inicial!');
            return true; // permite que a navegação continue após mostrar o alerta
        }
    </script>
</body>
</html>
