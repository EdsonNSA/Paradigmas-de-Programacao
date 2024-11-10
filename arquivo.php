<?php
// Exibir uma mensagem na tela
echo "Hello, World!\n";

// Solicitar ao usuário que insira dois números para soma
$num1 = (int)readline("Digite o primeiro número: ");
$num2 = (int)readline("Digite o segundo número: ");
$soma = $num1 + $num2;
echo "A soma de $num1 e $num2 é: $soma\n";

// Criar uma função para calcular a área de um retângulo
function calcular_area_retangulo($largura, $altura) {
    return $largura * $altura;
}

// Solicitar ao usuário que insira os valores da largura e altura do retângulo
$largura = (int)readline("Digite a largura do retângulo: ");
$altura = (int)readline("Digite a altura do retângulo: ");
$area = calcular_area_retangulo($largura, $altura);
echo "A área de um retângulo com largura $largura e altura $altura é: $area\n";
?>
