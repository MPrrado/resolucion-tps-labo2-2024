<?php
require_once("php/header.php");
define('NUMEROS_ELEGIDO', array(1,3,4,7,10,12,14,16,20,22));
$contador = 0;
$arregloNumero = [];
//generamos 10 numeros aleatorios
for($i=0; $i <10 ; $i++)
{
    $numero = mt_rand(1,22); //generamos el primer numero
    if(in_array($numero, $arregloNumero)) //verificamos que no exista en nuestro arreglo del sorteo del dia
    {
        do //si pertenece a nuestro arreglo que genere uno hasta que no pertenezca
        {
            $numero = mt_rand(1,22);
        }while(in_array($numero, $arregloNumero));
    }
    $arregloNumero[$i] = $numero; // lo agregamos a nuestro arreglo del sorteo del dia
    if(in_array($numero, NUMEROS_ELEGIDO)) // si un numero generado del sorteo del dis esta en nuestro carton elegido entonces agregamos un acierto
    {
        $contador++;
    }
}
// $contador = 10;
sort($arregloNumero); //ordenamos el arreglo de menor a mayor

?>

<main class = "container-fluid">
    <section class = "row justify-content-center">
        <article class = "col-3">
            <table class = " table mt-3">
                <h2 class = "text-center">TUQUI 10</h2> 
                <section class = "d-flex flex-row justify-content-center">
                    <figure class= "w-50">
                        <img src="img/tuqui_logo.jpg" alt="tuqui10" class="img-fluid w-100">
                    </figure>
                </section>
                <tbody class = "">
                    <?php
                    for ($i = 0; $i < count(NUMEROS_ELEGIDO); $i+=2)
                    {
                        
                        echo '
                        <tr>
                            <td class = "p-3 text-center border border-success">'.NUMEROS_ELEGIDO[$i].'
                            </td>
                            <td class = "p-3 text-center border border-success">'.NUMEROS_ELEGIDO[$i+1].'
                            </td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </article>
        <article class = "text-center col-5 ">
            <table class = "table mt-5">
                <h2>Sorteo del Día</h2>
                <tbody>
                        <?php
                        echo'<tr>';
                        for($i = 0; $i < count($arregloNumero)/2; $i++)
                        {
                            echo '<td class = "p-3 text-center border border-success">'.$arregloNumero[$i].'</td>';
                        }
                        echo'</tr>';
                        echo'<tr>';
                        for($i = 5; $i <10; $i++)
                        {
                            echo '<td class = "p-3 text-center border border-success">'.$arregloNumero[$i].'</td>';
                        }
                        echo'</tr>';
                        ?> 
                </tbody>
            </table>
            <?php
            if($contador == count(NUMEROS_ELEGIDO))
            {
                echo '<p class = "text-success fw-bold"> <strong>GANADOR DEL POZO DE $35.000.000. </strong></p>';
                
            }else
            {
                echo '<p class = "text-danger fw-bold"> <strong>El número de acierto es: '.$contador.' </strong></p>';
            }
            ?>

        </article>
    </section>
</main>
<?php
require_once("php/footer.php");
?>