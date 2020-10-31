<?php include("DB.php"); 


if  (isset($_GET['idtareas'])) {
    $idtareas = $_GET['idtareas'];
    $query = "SELECT * FROM tareas WHERE idtareas=".$idtareas;
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre_completo = $row['titulo'];
      $direccion = $row['descripcion'];
      $fecha_nacimiento = $row['fecha_registro'];      
      
    }
  }
    if(isset($_POST['actualizar'])) 
    $idtareas = $_GET['idtareas'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_registro = $_POST['fecha_registro'];