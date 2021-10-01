<?php

    include_once '../database.php';


    if(isset($_SESSION['rol'])){
      switch($_SESSION['rol']){
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
        $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE correo = :username AND contra = :password');
        $query->execute(['username' => $usuario, 'password' => $contra]);

        $row = $query->fetch(PDO::FETCH_NUM);

        if($row == true){
            $rol = $row[7];

            $_SESSION['rol'] = $rol;
            switch($rol){
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
                header('location ../index.php');
              break;
            }
        } else{
            // no existe el usuario
            echo('
              <script type="text/javascript">
                alert("No se encontro el usuario");
                location.href = "../login.php";
              </script>
            ');
        }


    }

?>
