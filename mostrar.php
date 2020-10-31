<form method="POST" action="index.php">

    <input type="submit" class="btn btn-success btn-block" value="Mostrar tarea" name="mostrar"><br>



    <?php 
        if(isset($_POST['mostrar'])){
    ?>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">

                    <head>
                        <tr>
                    <h1>Nombre</h1>
                    <h1>Descripcion</h1>
                    <h1>Fecha de Registro</h1> 
                        </tr>
                    </head>
                    <body>
                        <?php 
                            $query = "SELECT * FROM tareas";
                            $resultado_tabla = mysqli_query($connect, $query);
                            while($row = mysqli_fetch_array($resultado_tabla)){
                        ?>
                        <tr>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['fecha_registro']; ?></td>
                            

                            <td>

                            <a href="EDITAR.php?idtareas=<?php echo $row['idtareas'];?>" class="btn btn-secondary">
                                Editar
                                </a>
                              <a href="ELIMINAR.php?idtareas=<?php echo $row['idtareas'];?>" class="btn btn-danger">
                                Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </body>


                    </table>
    <?php  } ?>
</form>