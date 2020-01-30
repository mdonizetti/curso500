<?php


$media = "7";

switch ($media) { 
    case '10':
        echo "você foi muito bem";
    case '9':
    case '8':
    case '7':
    case '6':
        echo "Parabéns";
        break;
    case '0':
        echo "você foi mal";
        break;
}

