<?php
require_once("php/header.php");
define('NUMEROS_ELEGIDO', array(1,3,4,7,10,12,14,16,20,22));
$contador = 0;
$arregloNumero = [];
//generamos 10 numeros aleatorios
for($i=0; $i <10 ; $i++)
{
    $numero = mt_rand(1,22);
    if(in_array($numero, $arregloNumero))
    {
        do
        {
            $numero = mt_rand(1,22);
        }while(in_array($numero, $arregloNumero));
    }
    $arregloNumero[$i] = $numero;
    if($arregloNumero[$i] == NUMEROS_ELEGIDO[$i])
    {
        $contador++;
    }

}

?>

<main class = "container-fluid">
    <section class = "row justify-content-center">
        <article class = "col-2 ">
            <table class = " table mt-5">
                <h2 class = "text-center">TUQUI 10</h2> 
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
            <p><?php print_r($arregloNumero);?></p>
        </article>
    </section>
</main>
<?php
require_once("php/footer.php");
?>