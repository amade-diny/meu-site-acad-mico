<?php
echo "<h2>Lista de Indicações</h2>";
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Telefone</th><th>Indicador</th><th>Número do Indicador</th><th>Status</th></tr>";

if (file_exists("indicacoes.txt")) {
    $linhas = file("indicacoes.txt");
    foreach ($linhas as $linha) {
        $dados = explode(",", $linha);
        echo "<tr>
                <td>$dados[0]</td>
                <td>$dados[1]</td>
                <td>$dados[2]</td>
                <td>$dados[3]</td>
                <td>$dados[4]</td>
              </tr>";
    }
}
echo "</table>";
?>
