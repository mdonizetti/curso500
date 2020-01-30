<?php

// Consegui fazer um calculadora com operaçoes básicas usando SWITCH para chegar quais operaçõs deverão ser executadas


$valor1 = "10";
$valor2 = "20";
$operacao = "+";

switch ($operacao) { 
    case '+':
        echo $valor1 + $valor2;
    break;
    case '-':
        echo $valor1 - $valor2;
    break;
    case '/':
        echo $valor1 / $valor2;
    break;  
    case '*':
        echo $valor1 * $valor2;
    break;
    default:
        echo "Operação Invalida";
}


