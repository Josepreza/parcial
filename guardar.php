<?php 
include("DB.php");

if(isset($_POST['Registrar'])){
    $nombre = $_POST['nombredelatarea'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    

$query = "INSERT INTO tareas(titulo,descripcion,fecha_registro)
VALUES('$nombre','$descripcion','$fecha')";
$resultado = mysqli_query($connect,$query);

if(!$resultado){
    die("Error al guardar");
}else{
   $_SESSION['mensaje'] = "Tarea Registrada con Exito";
   $_SESSION['mensaje_tipo'] = "success";
   header("Location: INDEX.php");
}
}
?>