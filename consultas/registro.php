<?php
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $num_cel = $_POST['num_cel'];
  $contra = $_POST['contra'];

  include_once 'conexion.php';

  if(!$conexion){
    die('error conectando la base de datos');
  } else {
    $conexion->query("INSERT INTO usuarios(nombre, apellido, correo, num_cel, contra, id_rol) VALUES('$nombre', '$apellido', '$email', $num_cel, '$contra', 3)");

    $res = $conexion->query("SELECT * FROM usuarios WHERE correo = '$email'");
        $filas = $res->fetch_array();
        if($filas>0) {
          echo ("
          <script type='text/javascript'>
            alert('Usuario registrado.');
            location.href = '../login.php';
          </script>
          ");
        } else {
          echo'
          <script type="text/javascript">
            alert("El usuario no se pudo registrar.");
            location.href = "../login.php";
          </script>
          ';
        }
  }
 ?>
