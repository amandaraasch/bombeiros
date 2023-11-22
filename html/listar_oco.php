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
                                echo "</div>";
                            }
                        } else {
                            echo "Nenhum usuário encontrado.";
                        }
                    }
        
                    // Listar usuários
                    listarUsuarios($pdo);
                    ?>