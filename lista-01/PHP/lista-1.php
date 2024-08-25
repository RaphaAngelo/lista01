<?php
// Solicita ao usuário o nome do remédio e o intervalo em horas através de um formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicamento = $_POST['medicamento'];
    $intervaloHoras = intval($_POST['intervaloHoras']);

    // Converte o intervalo de horas para segundos
    $intervaloSegundos = $intervaloHoras * 3600;

    // Configura a página para recarregar automaticamente após o intervalo especificado
    header("Refresh: $intervaloSegundos");

    // Exibe a mensagem de lembrete
    echo "<h2>Hora de tomar o remédio: $medicamento</h2>";
    echo "<p>Este lembrete será mostrado a cada $intervaloHoras horas.</p>";
} else {
?>
    <!-- Formulário HTML para obter o nome do remédio e o intervalo -->
    <form method="post" action="">
        <label for="medicamento">Nome do remédio:</label><br>
        <input type="text" id="medicamento" name="medicamento" required><br><br>
        <label for="intervaloHoras">Intervalo (em horas):</label><br>
        <input type="number" id="intervaloHoras" name="intervaloHoras" min="1" required><br><br>
        <input type="submit" value="Configurar Lembrete">
    </form>
<?php
}
?>
