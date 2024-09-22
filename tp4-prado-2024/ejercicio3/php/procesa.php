<?php
$ruta = "../css/";
require_once("encabezado.php");
require_once("funciones.php");
if(!empty($_GET['horasTrabajadas']) && !empty($_GET['turno']) && !empty($_GET['dias']))
{
    $horasTrabajadas = $_GET['horasTrabajadas'];
    $turno = $_GET['turno'];
    $dias = $_GET['dias'];
    $total = 0;
    echo '
    <header class="bg-primary text-white text-center py-3">
        <h1>Procesa Datos</h1>
    </header>
    <main class=" container-fluid bg-light py-4">
        <section class="row justify-content-center bg-white p-4 rounded">
            <table class="table table-striped w-25">
                <thead class="thead-dar">
                    <tr>
                        <th scope="col">Día</th>
                        <th scope="col">Honorario</th>
                    </tr>
                </thead>
                <tbody>';
    foreach($dias as $dia)
    {
        echo'
        <tr>
            <td>'.$dia. '</td>';
        $honorario = pagoDiario($dia, $horasTrabajadas, $turno);
        echo'
            <td>$'.$honorario. '</td>
        </tr>';
        $total += $honorario;
        
    }
    echo '     
                </tbody>
                <tfooter>
                    <tr> 
                        <td><strong> TOTAL</strong></td>
                        <td>$'
                        . $total .
                        '</td>
                    </tr>
            </table>
        </section>
    </main>';

}else
{
    echo '<p>ERROR COMPLETE CON TODOS LOS DATOS EL FORMULARIO</p>';    
}

?>
    <!-- <header class="bg-primary text-white text-center py-3">
        <h1>Procesa Datos</h1>
    </header>
    <main class="bg-light py-4">
        <section class="container bg-white p-4 rounded">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Día</th>
                        <th scope="col">Honorario</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </section>
    </main> -->
<?php
require_once("pie.php");

?>