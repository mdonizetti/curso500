<?php

//Fazer a tabuada de um numero especifico.  EX:
// 1 * 1 = 1
// 1 * 2 = 2
//etc...
// Utilizar o FOR

//pego na NET
$a = 1;
while ($a <= 9) {
    for ($i=0; $i <= 10; $i++) { 
        echo "$a * $i = ".$a * $i;
        echo "<br>";           
    }
    echo "<br>";
    $a++;
}
?>



<?php
// do Professor

$tabuada = 1;

for ($i = 0; $i <=10; $i++) {
    echo "$tabuada * $i = " . ($tabuada * $i) . "<br>";
}

