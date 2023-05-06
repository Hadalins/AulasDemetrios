<?php
//escrava uma variavel que recebe 2 numeros soma eles 
//e multilicao resultado pela metado do segundo valor 
$valor1 = 5;
$valor2 = 10;
$total = ($valor1 + $valor2) * ($valor2 /2);
echo"$total";

echo"<br>";

//Escreva um codigo que recebe um valor e exibe 15% desse valor
$v = 100;
$r = (100 * 15) / 100;
echo"$r";

echo"<br>";

//outro modo de fazer
$v = 100;
$r = 100 * 0.15;
echo"$r";

echo"<br>";

//

$valor = 1200;
$parcelas = 12;
$juros = 0.1;

$vt = ($valor*0.12) + $valor ;
echo"$vt";

echo"<br>";

$vp = ($vt / $parcelas);
echo"$vp";

echo"<br>";

// OUtra forma de fazer 

$valor = 1200;
$juros = $valor*0.12;
$total = $valor + $juros;
$parcela = $total/12;
echo"$total"."<br>";
echo"$parcela"; 

echo"<br>";

//Escreva um codigo que receba um valor, converta-o em anos 
//exiba a idade e informe se ele é maior de idade ou menor de idade 

$valor = 10000;
$idade = $valor / 365;
echo "sua idade é ".number_format($idade). " anos";
echo "<br>";
if ($idade >= 18) { 
    echo'Maior de idade';}
else  {
    echo'Menor de idade';
}

echo"<br>";

//Escreva um codigo que receba 2 valores, o primeiro valor vai determinar
// a quantidade de linhase o segundo valor, a quantidade de colunas.
//repita a palavra FPB nas linhas e colunas

$v = 3;
    for($i=0; $i<3; $i++) {
        for($j=0; $j<=$i; $j++) {
            echo"FPB";
        }
        echo "<br>";
    }
      
echo"<br>"


?>