<?php 

$universo = $_POST["universo"]; 
$heroi = $_POST["heroi"]; 
$qtd_heroi = $_POST["qtd_heroi"]; 

  if($universo == "Marvel"){ 
        if($heroi == "Thor"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Thor.jpg'>"; 
            }
        } 
        else if($heroi == "Pantera Negra"){
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Pantera-negra.jpg'>";
            } 
        } 
        else if($heroi == "Feiticeira Escarlate"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Feiticeira-escarlate.jpg'>";
            }
        } 
        else if($heroi == "Homem de ferro"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Homem-de-ferro.jpeg'>";
            } 
        } 
        else if($heroi == "Viúva Negra"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Viuva-negra.jpeg'>"; 
            }
        } 
        else{
            echo "Personagem Inválido!!";
        }
  } 
  if($universo == "DC"){ 
    
        if($heroi == "Mulher Maravilha"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Mulher-maravilha.jpeg'>"; 
            }
        } 
        else if($heroi == "Aquaman"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Aquaman.jpeg'>"; 
            }
        } 
        else if($heroi == "Flash"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Flash.jpg'>"; 
            }
        } 
        else if($heroi == "Super-Man"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Super-man.jpeg'>"; 
            }
        } 
        else if($heroi == "Batman"){ 
            for($x=1; $x<=$qtd_heroi; $x++){
            echo "<img src='imgs/Batman.jpg'>"; 
            }
        } 
        else
        { 
            echo "Personagem inválido!"; 
        } 
  } 
?>

