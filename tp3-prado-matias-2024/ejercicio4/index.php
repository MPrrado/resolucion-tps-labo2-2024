<?php
require_once("php/header.php");

//CONSTANTES
const INICIO = 200000;
const FIN = 400000;
const COMISION_MENOR = 0.5;
const TOPE_COMISION_MENOR = 300000;
const COMISION_MAYOR = 1;
const COTIZACION_DOLAR_CRYPTO = 1322.74;

//generamos el valor del presupuesto y analizamos cual es la comision
$presupuesto = mt_rand(INICIO, FIN);
?>
<main class="container-fluid">
    <section class="row justify-content-center">
        <article class=" col-3 my-5 bg-warning rounded border">
            <h2 class="text-center">COMPRA USDT</h2>
            <p>Dinero Disponible: $<strong><?php echo number_format($presupuesto, 0, ',', '.'); ?></strong></p>
            <?php
            if ($presupuesto < TOPE_COMISION_MENOR) {

                $presupuestoRestante = $presupuesto - $presupuesto * COMISION_MAYOR / 100;
                echo '<p>Comisión <strong>' . COMISION_MAYOR . '%</strong></p>';
            } else {
                $presupuestoRestante = $presupuesto - $presupuesto * COMISION_MENOR / 100;
                echo '<p>Comisión <strong>' . COMISION_MENOR . '%</strong></p>';

            }
            $usdT = $presupuestoRestante / COTIZACION_DOLAR_CRYPTO;
            ?>
            <p>Dinero restante: $<strong><?php echo number_format($presupuestoRestante, 2, ',', '.'); ?></strong></p>
            <p>Cotización USDT: $<strong><?php echo number_format(COTIZACION_DOLAR_CRYPTO   , 2, ',', '.'); ?></strong></p>
            <p class = "text-danger">USDT adquiridos: <strong><?php echo round($usdT, 4); ?></strong></p>
        </article>
    </section>
</main>
<?php
require_once("php/footer.php");
?>