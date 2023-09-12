<?php

$capital = $_POST["capital"]; 
$taxa = $_POST["taxa"]; 
$tempo = $_POST["tempo"]; 

$juros = $capital * ($taxa/100) * $tempo; 

echo "O total do seu Juros Simples é: <br> $juros";

 ?>