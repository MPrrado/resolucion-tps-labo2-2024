<?php
$ruta = "../css/";
require_once("encabezado.php");
require_once("funciones.php");
if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo '
    <header class="text-center ">
        <h1>INICIO DE SESION</h1>
    </header>
    <main class="container-fluid">
        <section class="row justify-content-center mt-4">
            <section class = "col-4 border p-4 text-center rounded border-black">
                <p><strong>Email: '. $email .'</strong></p>         
                <p><strong>Contraseña: '. $pass .'</strong></p>         
            </section>
        </section>
    </main>
    ';

}else
{
    echo '<p>ERROR COMPLETE CON TODOS LOS DATOS EL FORMULARIO</p>';    
}

?>


<?php
require_once("pie.php");

?>