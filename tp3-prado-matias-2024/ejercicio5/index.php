<?php
require_once("php/header.php");

//CONSTANTES
const INICIO = 1;
const FIN = 12;
const SOTA = "sota";
const CABALLO = "caballo";
const REY = "rey";

$carta1 = mt_rand(INICIO,FIN);
$carta2 = mt_rand(INICIO,FIN);

switch ($carta1)
{
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        $puntaje = $carta1;
        break;
    case 10:
    case 11:
    case 12:
        $puntaje = 0.5;
}

switch ($carta2)
{
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        $puntaje = $puntaje + $carta2;
        break;
    case 10:
    case 11:
    case 12:
        $puntaje =$puntaje + 0.5;
}

switch ($carta1)
{
    case 10:
        $carta1 = SOTA;
        break;
    case 11:
        $carta1 = CABALLO;
        break;
    case 12:
        $carta1 = REY;
        break;
}
switch ($carta2)
{
    case 10:
        $carta2 = SOTA;
        break;
    case 11:
        $carta2 = CABALLO;
        break;
    case 12:
        $carta2 = REY;
        break;
}


?>

<main class="container-fluid">
    <section class ="row justify-content-center">
        <article class ="col-2 bg-info my-5 rounded p-3 border" >
            <p>Carta 1: <strong> <?php echo $carta1;?></strong></p>
            <p>Carta 2: <strong> <?php echo $carta2;?></strong></p>
            <?php
            if ($puntaje == 9.5)
            {
                echo'<p class = "text-success fw-bold"><strong>GANASTE!! </strong></p>';
            }else
            {
                echo'<p class = "text-danger"> Puntaje Obtenido: <strong>'.$puntaje.'</strong></p>';
            }
            ?>
        </article>
    </section>
</main>
<?php
require_once("php/footer.php");
?>