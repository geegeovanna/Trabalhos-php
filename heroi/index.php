<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Herói</title> 
</head> 
<body> 
    <form action="resultado.php" method="post"> 
        Universo : <br> 
        <input type="Radio" id="Marvel" name="universo" value="Marvel">
        <label for="marvel">Marvel</label><br>
        <input type="Radio" id="DC" name="universo" value="DC">
        <label for="dc">DC</label><br> 
        Digite a quantidade de imagens: <input type="text" name="qtd_heroi"><br>
        
        <select id="heroi" name="heroi"> 
            <option value="Thor">Thor</option> 
            <option value="Pantera Negra">Pantera Negra</option> 
            <option value="Feiticeira Escarlate">Feiticeira Escarlate</option> 
            <option value="Homem de ferro">Homem de ferro</option> 
            <option value="Viúva Negra">Viúva Negra</option> 
            <option value="Mulher Maravilha">Mulher Maravilha</option> 
            <option value="Aquaman">Aquaman</option> 
            <option value="Flash">Flash</option> 
            <option value="Super-Man">Super-Man</option> 
            <option value="Batman">Batman</option> </select> 
            
            <input type="submit"> 
    </form> 
</body> 
</html>