<?php

//Fazer a tabuada de um numero especifico.  EX:
// 1 * 1 = 1
// 1 * 2 = 2
//etc...
// Utilizar o loop while

$num = 1;
$mult = 1;

while ($mult <= 10) {
    echo "{$num} * {$mult} = ". $num * $mult . " <br> ";
  //  echo "{$num} * {$mult} = . $num * $mult .  <br> ";
    $mult++;
}