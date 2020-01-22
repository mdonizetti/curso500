<?php

$num = 0;

while ($num <= 10) {
    echo "$num <br>";
    $num++;
    //$num = $num +1
    //$num += 1

}


for ($num = 0; $num <= 10; $num++) {
    echo "$num <br>";
}


for ($par = 0, $impar = 1; $par <= 100; $par +=2, $impar +=2){
    echo "Par: $par e Impar: $impar <br>";
}
