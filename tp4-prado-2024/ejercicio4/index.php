<?php
$ruta = "css/";
require_once("php/encabezado.php");
?>
    <header class="bg-primary text-white text-center py-3">
        <h1>Formulario de Depósito</h1>
    </header>
    <main class="bg-light py-4 container-fluid">
        <section class="row container bg-white p-4 rounded justify-content-center">
            <form class = "form col-4 border rounded border-black p-4" action = "php/ganancias.php" method="post">
                <fieldset>
                    <legend class="text-center">Depósito Inicial</legend>
                    <hr>
                    <section class="form-group">
                        <label for="depositoInicial">Depósito Inicial</label>
                        <input type="number" class="form-control mb-3" id="depositoInicial" name="depositoInicial" >
                    </section>
                    
                    <section class="form-group">
                        <label>Plazo</label><br>
                        <section class="form-check form-switch">
                            <input type="radio" id="plazo30" name="plazo" class="form-check-input" value="30" checked>
                            <label class="custom-control-label" for="plazo30">30 días</label>
                        </section>
                        <section class="form-check form-switch">
                            <input type="radio" id="plazo45" name="plazo" class="form-check-input" value="45">
                            <label class="custom-control-label" for="plazo45">45 días</label>
                        </section>
                        <section class="form-check form-switch">
                            <input type="radio" id="plazo60" name="plazo" class="form-check-input" value="60">
                            <label class="custom-control-label" for="plazo60">60 días</label>
                        </section>
                        <section class="form-check form-switch">
                            <input type="radio" id="plazo90" name="plazo" class="form-check-input" value="90">
                            <label class="custom-control-label" for="plazo90">90 días</label>
                        </section>
                    </section>
                    
                    <section class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </section>
                </fieldset>
            </form>
        </section>
    </main>
<?php
require_once("php/pie.php");
?>