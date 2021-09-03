<?php

    include_once 'conexion.php';

     session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        // destroy the session
        session_destroy();
    }

    if(isset($_SESSION['id_rol'])){
        switch($_SESSION['id_rol']){
            case 1:
                header('location: ../indexA.php');
            break;

            case 2:
              header('location: ../indexA.php');
            break;

            case 3:
              header('location: ../indexU.php');
            break;

            default:
              header('location: ../index.php');
            break;
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $usuario = $_POST['username'];
        $contra = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE usuario = :user AND contra = :passw');
        $query->execute(['user' => $usuario, 'passw' => $contra]);

        $row = $query->fetch(PDO::FETCH_NUM);

        if($row == true){
            $rol = $row[4];

            $_SESSION['id_rol'] = $rol;
            switch($rol){
              case 1:
                  header('location: ../indexA.php');
              break;

              case 2:
                header('location: ../indexC.php');
              break;

              case 3:
                header('location: ../indexU.php');
              break;

              default:
                header('location ../index.php');
              break;
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }


    }

?>
