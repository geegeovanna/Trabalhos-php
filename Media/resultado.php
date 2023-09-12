<?php

$primeira = $_POST["primeira"];
$segunda = $_POST["segunda"]; 
$terceira = $_POST["terceira"]; 
$quarta = $_POST["quarta"]; 

$resultado = ($primeira + $segunda + $terceira + $quarta)/ 4;

    if($resultado >= 9){
        echo "Sua menção é MB!! <br> $resultado ";
    }
    else if($resultado >= 7){
        echo "Sua menção é B!! <br> $resultado";
    }
    else if($resultado >= 5){
        echo "Sua menção é R!! <br> $resultado";
    }
    else
    {
        echo "Sua menção é I!! <br> $resultado";
    }

?>