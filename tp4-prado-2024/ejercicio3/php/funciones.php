<?php
const MONTO_DIARIO = 4000;

function pagoDiario($dia, $horas, $turno)
{
    $monto = $horas * MONTO_DIARIO;
    if($turno == "nocturno")
    {
        $monto *= 1.28;
    }

    if($dia == "sabado" )
    {
        $monto *= 1.12;
    }elseif($dia == "domingo")
    {
        $monto *= 1.26;
    }
    return $monto;
}


?>