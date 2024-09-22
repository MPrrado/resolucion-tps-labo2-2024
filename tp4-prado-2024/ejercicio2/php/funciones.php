<?php
$comision1 = [2, 3, 5, 9, 4, 7, 3, 5, 10, 3, 6, 8];
$comision2 = [4, 3, 1, 10, 4, 7, 4, 5, 10, 5, 10, 1, 6, 6, 8];
$comision3 = [5, 7, 9, 3, 8, 5, 2, 7, 10, 1];

function calculoPromedio($comision)
{
    $suma = 0;
    foreach ($comision as $nota) {
        $suma += $nota;
    }
    $promedio = (float)$suma / count($comision);

    return round($promedio, 2);
}

function cantidadAprobados($comision)
{
    $contadorAprobados = 0;
    foreach ($comision as $nota) {
        if ($nota >= 4) {
            $contadorAprobados++;
        }
    }
    return $contadorAprobados;
}

function cantidadDesaprobados($comision)
{
    $contadorDesaprobados = 0;
    foreach ($comision as $nota) {
        if ($nota <= 3) {
            $contadorDesaprobados++;
        }
    }
    return $contadorDesaprobados;
}

function verEstadisticas($promedio, $cantidadAprobados, $cantidadDesaprobados) 
{
    echo
    '<p><strong>PROMEDIO: </strong>'. $promedio .'</p>
    <p><strong>CANTIDAD APROBADOS: </strong>'. $cantidadAprobados .'</p>
    <p><strong>CANTIDAD DESAPROBADOS: </strong>'. $cantidadDesaprobados .'</p>';
}
