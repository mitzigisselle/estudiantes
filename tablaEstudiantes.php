
<!--SELECT CodigoPostal, Nombre, Telefono FROM Clientes ORDER BY Nombre;-->

<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_estudiantes, 
                    paterno,
                    materno,
                    nombre, 
                    matricula,
                    fecha,
                    especialidad,
                    sexo,
                    imagen
            FROM t_estudiantes ORDER BY paterno";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-hover">
    <thead>
        <th>ID</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Nombre</th>
        <th>Matricula</th>
        <th>Fecha</th>
        <th>Especialidad</th>
        <th>Sexo</th>
        <th>Imagen</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  
        ?>
        <tr>
            <td><?php echo $mostrar['id_estudiantes'];?></td>
            <td><?php echo $mostrar['paterno'];?></td>
            <td><?php echo $mostrar['materno'];?></td>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['matricula'];?></td>
            <td><?php echo $mostrar['fecha'];?></td>
            <td><?php echo $mostrar['especialidad'];?></td>
            <td><?php echo $mostrar['sexo']; ?></td>
            <td><a href=""><?php echo $mostrar['imagen'];?></a></td>
            <td>
                <form action="servidor/eliminar.php" method="POST">
                    <input type="text" hidden name="idEstudiantes" value="<?php echo $mostrar['id_estudiantes']?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>