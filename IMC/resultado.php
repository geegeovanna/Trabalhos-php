<?php

$peso = $_POST["peso"];
$altura = $_POST["altura"];

$IMC = $peso / ($altura * $altura);

echo "O seu Índice de Massa Corporal é: <br> $IMC"; 

?>