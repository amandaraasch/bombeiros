<?php
            // Inclua o arquivo de conexão com o banco de dados
            include("../conecta.php");

            // Função para recuperar 3 dados da tabela exemplo

            
            function obterTresDados($pdo) {

            
            $sql = "SELECT nOcorrencia, Nomepac, `Data` FROM paciente "; 
            

            
            
            $stmt = $pdo->query($sql);
            

            
            
            if ($stmt !== false) {
                    if ($stmt->rowCount() > 0) {
                        if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch()) {
                                echo "<div class='usuario' >";
                                echo "<div class='informacoes ' data-id=' "  . $row["nOcorrencia"] . "' onclick='redirecionarParaHistOco()'>";
                                echo "<div class='informacoes1 '>  ID:  &nbsp " . $row["nOcorrencia"] . "</div>";
                                echo "<div class='informacoes1 '>  NOME: &nbsp" . $row["Nomepac"] . "</div>";
                                echo "<div class='informacoes1 '>  DATA: &nbsp" . $row["Data"] . "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        
                        }

                    }
                }
            }

            
            obterTresDados($pdo);
            ?>
         