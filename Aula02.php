<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
        p{
            color:red;
        }
    </style>
</head>
<body>
    
<h1> Aprendendo PHP </h1>


<?php

//Esse é um comentário de uma linha
#Posso usar hashtag para comentário
/** 
 * Aqui é um bloco de comentário 
 * Posso escrever em mais de uma linha
*/

echo "Aqui aparece um texto na tela do usuário";
//Podemos colocar tags HTML dentro do  PHP

echo "<h1>Esse é um  título</h1>";
echo "<p> Parágrafo do texto.</p>";

//Comandos de saída:
//echo - imprime uma string na tela
//print- imprime uma string na tela 
print "<p> Texto dentro do print </p>";

// Variáveis em PHP 
// Sempre iniciam com $ seguido do nome de variável
// Não é necessário identificar o tipo do dado
//Para criar uma vaariável basta atribuir um valor a ela 
$nome= "Bianca";
$idade= 17;
$altura = 1.56;
echo "$nome tem $altura m e $idade anos de idade <br>";

// Aritmética Básica 
echo "Operadores Aritméticos.<br>";
echo "a= 10 e b=5<br>.";
$a = 10;
$b= 5;
$c= $a + $b;
echo "A soma de $a e $b é $c<br>";
$c= $a - $b;
echo "A subtração de $a e $b é $c<br>";
$c = $a * $b;
echo "A multiplicação de $a e $b é $c<br>";
$c = $a / $b;
echo " A divisão de $a e $b é $c<br>";
$c = $a % $b;
echo  " O resto da divisão de $a e $b é $c<br>";
$c = $a **$b;
echo "A potência de $a e $b é $c<btr>";


?>

</body>
</html>