<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = $_POST['nome'] . "," . $_POST['telefone'] . "," . $_POST['indicador'] . "," . $_POST['indicador_numero'] . ",Pendente\n";

    // Salvar os dados em um arquivo de texto
    file_put_contents("indicacoes.txt", $dados, FILE_APPEND);
    
    echo "Indicação salva com sucesso!";
}
?>
