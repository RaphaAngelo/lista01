// Solicita ao usuário o nome do remédio e o intervalo em horas
const medicamento = prompt("Digite o nome do remédio:");
const intervaloHoras = parseInt(prompt("Digite o intervalo em horas para tomar o remédio:"), 10);

// Converte o intervalo de horas para milissegundos
const intervaloMilissegundos = intervaloHoras * 60 * 60 * 1000;

// Função para exibir o alerta
function lembrarDeTomarRemedio() {
  alert(`Hora de tomar o remédio: ${medicamento}`);
}

// Configura o alerta para ser mostrado no intervalo especificado
setInterval(lembrarDeTomarRemedio, intervaloMilissegundos);

// Exibe uma mensagem inicial ao usuário
alert(`Você será lembrado de tomar o remédio "${medicamento}" a cada ${intervaloHoras} horas.`);
