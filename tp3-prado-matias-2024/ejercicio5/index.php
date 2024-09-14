<?php
require_once("php/header.php");

//CONSTANTES
const FILAS = 10;
const COLUMNAS = 10;
$matriz= [[]];
$cantB = 0;
//generamos la matriz con "-" y "B"
for ($i = 0; $i < FILAS; $i++) {
    for ($j = 0; $j < COLUMNAS; $j++) {
        do {
            $n = mt_rand(45, 66);
        } while ($n > 45 && $n < 66);
        $c = chr($n);
        if ($c == 'B' && $cantB < 10) {
            $matriz[$i][$j] = $c;
            $cantB++;
        } else {
            $matriz[$i][$j] = '-';
        }
    }
}

?>

<main class="container-fluid">
    <section class="row justify-content-center">
        <article class="col-6 my-5 bg-info rounded border">
            <h2 class="text-center">BUSCAMINAS</h2>
            <table class="table table-bordered ">
                <tbody>
                    <?php
                    for ($i = 0; $i < FILAS; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < COLUMNAS; $j++) {
                            if ($matriz[$i][$j] == 'B') {

                                echo '<td class="text-center p-0"><img src = "img/mina.jpg" class = "w-100"></td>';
                            } else {

                                echo '<td class="text-center p-0"><img src = "img/vacio.jpg" class = "w-100"></td>';
                            }
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </article>
        <section class = "text-center">
            <?php
                $puntaje= 0;
                do
                {
                    $x = mt_rand(0, 9);
                    $y = mt_rand(0,9);
                    if($matriz[$x][$y] != 'B')
                    {
                        $puntaje++;
                    }
                }while ($matriz[$x][$y] != 'B');
            ?>
            <h2 class = "text-danger">HAS ENCONTRADO UNA BOMBA!! EN LA POSICION: <?php echo 'Fila: '.$x+1 .' Columna: '.$y+1; ?></h2>
            <p class = "text-success fw-bold">PUNTAJE: <?php echo $puntaje; ?></p>
        </section>
    </section>
    <section class="row justify-content-center"></section>
</main>
<?php
require_once("php/footer.php");
?>