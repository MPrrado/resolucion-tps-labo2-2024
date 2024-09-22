<?php
$ruta = "../css/";
require_once("encabezado.php");
require_once("funciones.php");
if(!empty($_POST['depositoInicial']) && !empty($_POST['plazo']))
{
    $depositoInicial = $_POST['depositoInicial'];
    $plazo = $_POST['plazo'];
    $intereses = calcularInteres($depositoInicial,$plazo);
    echo '
    <main class="container-fluid">
        <section class="row justify-content-center ">
            <table class="table table-striped w-50 table-secondary text-center">
                <caption class = "caption-top text-center fw-bold">RESUMEN</caption>
                <thead>
                    <tr>
                        <th>Deposito Inicial</th>
                        <th>Plazo</th>
                        <th>Interes Generados</th>
                        <th>Monto Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$'.$depositoInicial.'</td>
                        <td>'.$plazo.' dias</td>
                        <td>$'.number_format($intereses,2,',','.').'</td>
                        <td class = " border border-black fw-bold ">$<strong>'. number_format($depositoInicial + $intereses,2,',','.').'</strong></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    ';

}else
{
    echo '<p>ERROR COMPLETE CON TODOS LOS DATOS EL FORMULARIO</p>';    
}

?>


<?php
require_once("pie.php");

?>