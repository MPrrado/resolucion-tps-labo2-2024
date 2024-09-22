<?php

const TASA_30 =117;
const TASA_45 =125;
const TASA_60 =137;
const TASA_90 =150;
function calcularInteres($depositoIncial, $dias)
{
    switch($dias)
    {
        case 30:
                $interesesGanados = $depositoIncial * ((TASA_30/100)* $dias /365); 
                break;
        case 45:
                $interesesGanados = $depositoIncial * ((TASA_45/100)* $dias /365); 
                break;
        case 60:
                $interesesGanados = $depositoIncial * ((TASA_60/100)* $dias /365); 
                break;
        case 90:
                $interesesGanados = $depositoIncial * ((TASA_90/100)* $dias /365); 
                break;

    }
    return $interesesGanados;
}


?>