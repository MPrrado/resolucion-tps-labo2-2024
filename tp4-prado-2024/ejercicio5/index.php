<?php
$ruta = "css/";
require_once("php/encabezado.php");
?>

    <header class="text-center my-4">
        <h1>INICIO DE SESION</h1>
    </header>
    <main class="d-flex justify-content-center align-items-center vh-100">
        <section class="col-12 col-md-4">
            <form class=" p-4" method="post" action="php/procesa.php">
                <legend>Inicie Sesion</legend>
                <hr>
                <section class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required name="email">
                </section>
                <section class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name = "password"required>
                </section>
                <section class="text-center">
                    <input type="submit" class="btn btn-success text-dark" value="Sign In">
                </section>
            </form>
        </section>
    </main>
</body>
</html>


<?php
require_once("php/pie.php");
?>
