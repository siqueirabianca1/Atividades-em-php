<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $P = $_POST["P"];
    $A = $_POST["A"];
    $imc = $P / ($A * $A);
    echo "O IMC é: " ,$imc;
     if ( $imc <= 18.4 )
        $classificacao = "Você está abaixo do peso";
    elseif ($imc < 25 ) 
        $classificacao = "Você está no peso ideal";
    elseif($imc < 30)
      $classificacao = "Você está acima do peso";
    elseif($imc < 35)
      $classificacao = "Você está com obesidade grau I";
    elseif($imc < 40)
      $classificacao = "Você está com obesidade grau II";
    else
      $classificacao = "Você está com obesidade grau III";

    header("Location: Aula11.php?imc=$imc&P=$P&A=$A&classificacao=$classificacao");
    ?>
    
</body>
</html>