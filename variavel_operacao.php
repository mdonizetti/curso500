<?php

$valor1= 10
$valor2= 20

$soma = ($valor1 + $valor2);
$sub = ($valor1 - $valor2);
$div = ($valor1 / $valor2);
$mult = ($valor1 * $valor2); 

echo $soma <br>;
echo $sub <br>;
echo $div <br>;
echo $mult <br>;

?>



<?php
//Fazer uma calculadora com operações básicas
// + - * /
// Utilizar checar qual operação a ser realizada

$valor1 = 10
$valor2 = 20
operacao = "+"

if ($operacao === "+") {
    // $resultado - $valor1 + $valor2;
    echo $valor1 + $valor2;
} elseif ($operacao === "-") {
    echo $valor1 - $valor2;   
} elseif ($operacao === "/") {
    echo $valor1 / $valor2;
} elseif ($operacao === "*") {
    echo $valor1 * $valor2;
}