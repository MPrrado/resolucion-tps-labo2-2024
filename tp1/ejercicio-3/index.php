<?php
    require_once('php/encabezado.php');
    //CONSTANTES
    const TAMANIO_MINIMO = 2500;
    const TAMANIO_MAXIMO = 4000;
    const FACTOR = 1000;

    //declaramos nuestras variables involucradas
    $tamanioPendrive = 16; //en GB
    //tamanios en MB a traves de la generacion de numero aleatorios
    $tamanioArchivo1 = mt_rand(TAMANIO_MINIMO, TAMANIO_MAXIMO);
    $tamanioArchivo2 = mt_rand(TAMANIO_MINIMO, TAMANIO_MAXIMO);
    $tamanioArchivo3 = mt_rand(TAMANIO_MINIMO, TAMANIO_MAXIMO);

    //calculamos el tamaño de los archivos en GB
    $archivo1EnGB = $tamanioArchivo1 / FACTOR; //casteamos
    $archivo2EnGB = $tamanioArchivo2 / FACTOR; //casteamos
    $archivo3EnGB = $tamanioArchivo3 / FACTOR; //casteamos

    //calculamos el espacio libre del pendrive
    $espacioLibrePendrive = $tamanioPendrive - $archivo1EnGB -$archivo2EnGB - $archivo3EnGB;
?>
<main>
    <section>
        <article>
            <h1>Pendrive de <?php echo $tamanioPendrive; ?> GB</h1>
            <hr>
            <p>Archivo 1 (MB): <?php echo $tamanioArchivo1;?></p>
            <p>Archivo 2 (MB): <?php echo $tamanioArchivo2;?></p>
            <p>Archivo 3 (MB): <?php echo $tamanioArchivo3;?></p>
            <hr>
            <p>Archivo 1 (GB): <?php echo number_format($archivo1EnGB, 2 ,',','.') //formateo de numero para que se vea con dos decimales ademas de delimitadores de los mismo como los delimitadores de los miles;?></p>
            <p>Archivo 2 (GB): <?php echo number_format($archivo2EnGB, 2 ,',','.');?></p>
            <p>Archivo 3 (GB): <?php echo number_format($archivo3EnGB, 2 ,',','.');?></p>
            <hr>
            <p>Espacio libre: <?php echo number_format($espacioLibrePendrive, 2, ',','.');?> (GB)</p>
        </article>
    </section>
</main>
<?php
    require_once('php/pie.php');
?>