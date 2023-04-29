<?php
$a = 1.72;
$p = 87;

$imc = $p / ($a*$a);
    if ($imc < 18.5 ){
        echo "Abaixo do Peso"; }
            elseif ($imc>18.5 && $imc<25){
                echo "Peso Ideal"; }
                    elseif ($imc>25 && $imc<=30){
                        echo "Acima do peso"; }
                            else {
                                echo "obesidade";
                            }

?>