<?php
$ruta = "css/";
require_once("php/encabezado.php");


?>

    <header class="bg-primary text-white text-center py-3">
        <h1>Registro Enfermería</h1>
    </header>
    <main class="container-fluid bg-light py-4">
        <section class="row justify-content-center bg-white p-4 rounded">
            <form class = "form col-4 border rounded border-black p-4" method="get" action="php/procesa.php" >
                <fieldset>
                    <legend class="text-start ">Registro enfermería</legend>
                    <hr>
                    
                    <section class="form-group">
                        <label for="horasTrabajadas">Horas Trabajadas</label>
                        <input type="number" class="form-control mb-3" id="horasTrabajadas" name="horasTrabajadas" >
                    </section>
                    
                    <section class="form-group">
                        <label for="turno">Turno</label>
                        <select class="form-control mb-3" id="turno" name="turno" >
                            <option value="mañana">Mañana</option>
                            <option value="nocturno">Nocturno</option>
                        </select>
                    </section>
                    
                    <section class="form-group">
                        <label>Días de la semana</label><br>
                        <input class="form-check-input" type="checkbox" id="lunes" value="lunes" name = "dias[]">
                        <label class="form-check-label" for="lunes">Lunes</label><br>
                        
                        <input class="form-check-input" type="checkbox" id="martes" value="martes" name = "dias[]">
                        <label class="form-check-label" for="martes">Martes</label><br>
                        
                        <input class="form-check-input" type="checkbox" id="miercoles" value="miercoles" name = "dias[]">
                        <label class="form-check-label" for="miercoles">Miércoles</label><br>
                        
                        <input class="form-check-input" type="checkbox" id="jueves" value="jueves" name = "dias[]">
                        <label class="form-check-label" for="jueves">Jueves</label><br>
                        
                        <input class="form-check-input" type="checkbox" id="viernes" value="viernes" name = "dias[]">
                        <label class="form-check-label" for="viernes">Viernes</label><br>
                        
                        <input class="form-check-input" type="checkbox" id="sabado" value="sabado" name = "dias[]">
                        <label class="form-check-label" for="sabado">Sábado</label><br>
                        
                        <input class="form-check-input" type="checkbox" id="domingo" value="domingo" name = "dias[]">
                        <label class="form-check-label" for="domingo">Domingo</label><br>
                    </section>
                    
                    <section class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </section>
                </fieldset>
            </form>
        </section>
    </main>

<?php
require_once("php/pie.php");
?>