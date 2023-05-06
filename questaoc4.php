<?php
//Escreva um codigo que receba 4 valores, (A,B,C,D) se B foir maior que C e D for Maior que A, e a soma de C com D for maior que a soma de A com B, e se C e D, ambos, for positivo 
//e se A for positivo, escreva "Valores aceitos", se não escreva "Valores não aceitos"


$a = 5*(-1);
$b = 22*(-1);
$c = 10*(-1);
$d = 38*(-1);

if ($b > $c && $d > $a){
    echo'Valores Aceitos';
}
elseif ($c + $d > $a + $b) {
    echo'Valores Aceitos';
}
elseif ($c + $d > 0 && $a > 0 ){
    echo'Valoresw Aceitos';
}
else 
    echo'Valores não aceitos';
?>

