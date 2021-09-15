<?php

      $nom_taller = $_POST['nom_taller'];
      $resumen = $_POST['resumen'];

      $nom = $_REQUEST['titulo'];
      $banner = $_FILES['foto']['name'];
      $ruta = $_FILES['foto']['tmp_name'];
      $destino = "../assets/img/banner_taller/".$banner;
      copy($ruta, "../assets/img/banner_taller/");

      include_once 'conexion.php';
      if(!$conexion){
        die('error connecting to database');
      } else{
        $query="INSERT INTO talleres(nom_taller, resumen_taller) VALUES('$nom_taller', '$resumen') ";
        $conexion->query($query);

        $res = $conexion->query("SELECT * FROM talleres WHERE nom_taller = '$nom_taller'");
        $filas = $res->fetch_array();
        if($filas>0) {
          // $res1 = $conexion->query("SELECT * FROM talleres WHERE nom_taller = '$nom_taller'");
          // $datos = $res1->fetch_array();
          $query1="INSERT INTO banners(dir_img, id_taller, nom_img) VALUES('$destino', '".$filas['id']."', '$nom')";
          $conexion->query($query1);

          echo ("<script type='text/javascript'>
          alert('Reseña publicada.');
          </script>");
          header("location: ../verResenia.php");
        } else {
          echo'<script type="text/javascript">
          alert("La reseña no se ha podido publicar.");
          </script>';
        }

      }
?>
