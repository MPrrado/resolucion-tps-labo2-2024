<?php
require_once("php/header.php");
require_once("php/juegos.php");
//CONSTANTES
const CANTIDAD_VENTAS = 1000;

//variables
$descuento = 0;
$cantidadAge = 0;
$cantidadNBA = 0;
$cantidadBaldur = 0;
$cantidadFallout = 0;
$cantidadCoD = 0;
$totalAge = 0;
$totalNBA = 0;
$totalBaldur = 0;
$totalFallout = 0;
$totalCoD = 0;
for($i = 0 ; $i <CANTIDAD_VENTAS; $i++)
{ 
    $key = array_rand($juegos);
    if($i <= 10)
    {
        $descuento = 0.2;
    }elseif($i <= 190)
    {
        $decuento = 0.4;
    }elseif($i <= 300)
    {
        $decuento = 0.6;
    }else 
    {
        $descuento = 0.7;
    }
    switch($key)
    {
        case 'Age Of Mythology Retold':
            $totalAge = $totalAge + $juegos[$key]* $descuento;
            $cantidadAge++;
            break;
        case 'NBA 2K25':
            $totalNBA = $totalNBA + $juegos[$key]* $descuento;
            $cantidadNBA++;
            break;
        case 'Baldurs Gate III':
            $totalBaldur = $totalBaldur + $juegos[$key]* $descuento;
            $cantidadBaldur++;
            break;
        case 'Fallout 76':
            $totalFallout = $totalFallout + $juegos[$key]* $descuento;
            $cantidadFallout++;
            break;
        case 'CoD Black Ops 6':
            $totalCoD = $totalCoD + $juegos[$key]* $descuento;
            $cantidadCoD++;
            break;
    }
}
$totalRecaudado = $totalAge + $totalNBA + $totalBaldur + $totalFallout + $totalCoD;
$totalVentas = $cantidadAge + $cantidadNBA + $cantidadBaldur + $cantidadFallout + $cantidadCoD;

$totalAge = number_format($totalAge, 2, ',', '.');
$totalNBA = number_format($totalNBA, 2, ',', '.');
$totalBaldur = number_format($totalBaldur, 2, ',', '.');
$totalFallout = number_format($totalFallout, 2, ',', '.');
$totalCoD = number_format($totalCoD, 2, ',', '.');
$totalRecaudado = number_format($totalRecaudado, 2, ',', '.');
?>
<section class="container-fluid">
    <section class="row">
        <aside class="col-md-2 bg-secondary text-center py-3 d-flex flex-column align-items-center">
            <figure>
                <img src="img/Age Of Mythology Retold.jpg" alt="Imagen 1" class="img-fluid mb-3">
            </figure>
            <p>Age Of Mythology Retold - $<?php echo $juegos['Age Of Mythology Retold'];?></p>
            <figure>
                <img src="img/Baldurs Gate III.jpg" alt="Imagen 1" class="img-fluid mb-3">
            </figure>
            <p>Baldurs Gate III - $<?php echo $juegos['Baldurs Gate III'];?></p>
            <figure>
                <img src="img/CoD Black Ops 6.jpg" alt="Imagen 1" class="img-fluid mb-3">
            </figure>
            <p>CoD Black Ops 6 - $<?php echo $juegos['CoD Black Ops 6'];?></p>
            <figure>
                <img src="img/Fallout 76.jpg" alt="Imagen 1" class="img-fluid mb-3">
            </figure>
            <p>Fallout 76 - $<?php echo $juegos['Fallout 76'];?></p>
            <figure>
                <img src="img/NBA 2K25.jpg" alt="Imagen 1" class="img-fluid mb-3">
            </figure>
            <p>NBA 2K25 - $<?php echo $juegos['NBA 2K25'];?></p>
        </aside>
        <main class="col-md-10 bg-light py-3">
            <h1 class="text-center my-4">Tabla de Juegos</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Juego</th>
                        <th>Cantidad</th>
                        <th>Recaudado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo 'Age Of Mythology Retold'; ?></td>
                        <td><?php echo $cantidadAge; ?></td>
                        <td>$<?php echo $totalAge; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo 'NBA 2K25'; ?></td>
                        <td><?php echo $cantidadNBA; ?></td>
                        <td>$<?php echo $totalNBA; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo 'Baldurs Gate III'; ?></td>
                        <td><?php echo $cantidadBaldur; ?></td>
                        <td>$<?php echo $totalBaldur; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo 'Fallout 76'; ?></td>
                        <td><?php echo $cantidadFallout; ?></td>
                        <td>$<?php echo $totalFallout; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo 'CoD Black Ops 6'; ?></td>
                        <td><?php echo $cantidadCoD; ?></td>
                        <td>$<?php echo $totalCoD; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right my-4">
                <h3>Total Ventas: <?php echo $totalVentas; ?></h3>
                <h3>Total Recaudado: $<?php echo $totalRecaudado; ?></h3>
            </div>
        </main>
    </section>
</section>

<?php
require_once("php/footer.php");

?>