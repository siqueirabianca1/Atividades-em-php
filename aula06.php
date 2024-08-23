<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

body
{
    
    background-color: lightpink;
}
</style>

</head>
<body>
<?php
echo "<h1> Arrays - Vetores </h1>";
$carros = array ('Fiest','Palio','Corsa','Siena');
echo $carros [1], "<br>";
echo $carros [3],"<br>";
// Adicionando novos elementos
$carros [4]= "Clio";
$carros [11] = "Versa";
$carros [ ] ="Sandero";
echo $carros [4] , "<br>"; //Resultado Clio
echo $carros [5] , "<br>"; //Sem resultado
echo $carros [11] , "<br>"; //Resultado versa
echo $carros [12] , "<br>"; // Reaultado Sandero

$carros ["s1"] = "Siena"; //usando strig como indice
echo $carros ["s1"] , "<br>"; // Resultado Siena
echo [13], "<br>";
$carros [13] = "Ferrari";
echo $carros[13], "<br>";
$carros[5] = "fusca";

echo"<h1>Impressão completa da Array</h1>";
 
echo "<pre>";
print_r($carros);
 
echo"<h1>Impressão completa da Array</h1>";

echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<pre>";
var_dump ($carros);
echo "</pre>";


  ?>
</body>
</html>