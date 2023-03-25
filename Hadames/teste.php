<?php
$nota1 = 3;
$nota2 = 2;
$nota3 = 1;
$media = (($nota1 + $nota2 + $nota3) / 3);
if ($media >= 7) {
    echo "APROVAAAAADO!!!!";
}
elseif (($media < 7) && ($media >= 4)) {
    echo "PROVA FINAL"; 
}
else {
   echo "REPROVADO FIIIIIIIII"; 
}
?>