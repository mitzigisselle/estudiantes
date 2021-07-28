<?php include "header.php"; ?>

    
<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
        <h1 class="font-weight-light">Información personal de estudiante de sistemas</h1>
        <p class="lead">
            <div class="row">
                <div class="col-sm-12">
                    <form action="servidor/agregarEstudiante.php" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="nombre">Nombre o nombres</label>
                                <input type="text" name="nombre" required class="form-control">
                            </div>
                            <div class="col">
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" name="paterno" required class="form-control">
                            </div>
                            <div class="col">
                                <label for="materno">Apellido Materno</label>
                                <input type="text" name="materno" required class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="matricula">Matricula</label>
                                <input type="number" name="matricula" required class="form-control">
                            </div>
                            <div class="col">
                                <label for="calendario">Fecha de nacimiento</label>
                                <input type="date" name="calendario" id="calendario" required class="form-control">
                            </div>
                            <div class="col">
                                <label for="especialidad">Especialidad</label>
                                <input type="text" name="especialidad" required class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label for="sexo">Sexo</label>
                                <input type="text" name="sexo" required class="form-control">
                            </div>
                            <div class="col">
                                <label>Imagen de perfil: </label>
                                <input type="file" name="imagen" class="form-control" required>
                            </div>
                            <div class="col"></div>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla Estudiantes</h3>
                        <?php include "tablaEstudiantes.php";?>
                    </div>
                </div>
            <br>
        </p>
    </div>
</div>
</div>


<?php include "footer.php"; ?>


<script type="text/javascript">
	$(document).ready(function(){
		$("#calendario").datepicker({
			changeMonth: true,
      		changeYear: true,
      		yearRange: '1900:' + 2018,
			dateFormat: "yy-mm-dd"
		});

		$('#calendario').change(function(){
			$.ajax({
				type:"POST",
				data:"fecha=" + $('#calendario').val(),
				url:"php/calcularEdad.php",
				success:function(r){
					$('#edadCalculada').text(r + " años");
				}
			});
		});
	});
</script>



