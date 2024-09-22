<?php
require_once("php/encabezado.php");
require_once("php/funciones.php");


?>
<header class = "text-center bg-warning p-3">
    <h1>SISTEMA COMISIONES</h1>
</header>

<main class ="container-fluid mt-3" >
    <section class = "row justify-content-center">
        <article class = "col-6">
            <h2>COMISION 1</h2>
            <hr>
            <?php
            //obtenemos los datos de las 3 comisiones
            $promedio = calculoPromedio($comision1);
            $cantidadAprobados = cantidadAprobados($comision1);
            $cantidaDesaprobados = cantidadDesaprobados($comision1);
            verEstadisticas($promedio,$cantidadAprobados,$cantidaDesaprobados);
            ?>
            <hr>
            <h2>COMISION 2</h2>
            <hr>
            <?php
            //obtenemos los datos de las 3 comisiones
            $promedio = calculoPromedio($comision2);
            $cantidadAprobados = cantidadAprobados($comision2);
            $cantidaDesaprobados = cantidadDesaprobados($comision2);
            verEstadisticas($promedio,$cantidadAprobados,$cantidaDesaprobados);
            ?>
            <hr>
            <h2>COMISION 3</h2>
            <hr>
            <?php
            //obtenemos los datos de las 3 comisiones
            $promedio = calculoPromedio($comision3);
            $cantidadAprobados = cantidadAprobados($comision3);
            $cantidaDesaprobados = cantidadDesaprobados($comision3);
            verEstadisticas($promedio,$cantidadAprobados,$cantidaDesaprobados);
            ?>
            <hr>
        </article>
    </section>
</main>

<?php
require_once("php/pie.php");
?>