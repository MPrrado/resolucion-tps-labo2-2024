<?php
require_once("php/header.php");

//CONSTANTES
const PRIMERAS_LETRAS = "AG";
const INICIO_LONGITUD_PASS = 8;
const FIN_LONGITUD_PASS = 16;

const INICIO_LETRAS = 48;
const FIN_LETRAS = 122;
$pass = '';
$sale = false;
$longitudPass = mt_rand(INICIO_LONGITUD_PASS,FIN_LONGITUD_PASS); //GENERAMOS LA LONGITUD DE LA CONTRASEÑA
for($i = 0; $i < $longitudPass; $i++)
{
    do
    {
        $caracter = mt_rand(INICIO_LETRAS, FIN_LETRAS);
        $caracter = chr($caracter);
        switch($caracter)
        {
            case ':':
            case ';':
            case '<':
            case '=':
            case '>':
            case '?':
            case '@':
            case '[':
            case '\\':
            case ']':
            case '^':
            case '_':
            case '`':
                $sale = false;
                break;
            default:
                $sale = true;
                break;
        }
    }while(!$sale);
    
    $pass.= $caracter;
}

?>

<main>
    <section>
        <h2 class = "text-center text-warning bg-danger">CONSTRASEÑA GENERADA:</h2>
        <p class = "text-center text-succes fs-4"> <?php echo $pass;?></p>
        <p class = "text-center text-succes fs-4"> <?php echo $longitudPass;?></p>
    </section>
</main>
<?php
require_once("php/footer.php");
?>