<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Descubra qual o seu IMC</h1>

<div>
 <form action="Aula11-recebe.php" method="post"> 
    <label for="P">Peso:</label><br>
    <input type="text" name="P" required placeholder="O seu Peso"  value="<?php echo (isset($_GET["P"])?$_GET["P"]:"");?>"> <br>
    <label for="A">Altura:</label><br>
    <input type="text" name="A" required placeholder="A sua Altura" value="<?php echo (isset($_GET["A"])?$_GET["A"]:"");?>"> <br>
    <button type="submit">Enviar</button>
    
    <h2><?php echo (isset($_GET["imc"])?number_format($_GET["imc"],2):"");?></h2>
    <h2><?php echo (isset($_GET["classificacao"])?$_GET["classificacao"]:"");?></h2>
 </form>
</div>

</body>
</html>