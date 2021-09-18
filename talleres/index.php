<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Talleres |</title>

    <?php include_once '../includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php include_once '../includes/nav.php'; ?>
    </header>
    <div class="container" style="margin: 2% auto;">
      <section>
        <?php
        include_once '../consultas/conexion.php';

        if(!$conexion){
          die('error connecting to database');
        } else{
          $res = $conexion->query("SELECT * FROM talleres");

          //Ciclo que imprime tas reseñas en la tabla
          while($datos=$res->fetch_array(MYSQLI_BOTH))
          {
            $res = $conexion->query("SELECT * FROM img_talleres WHERE id_taller = ".$datos['id']);
            $datos_img = $res->fetch_array();
              echo('
                <div class="card" style="margin-bottom: 1%;">
                  <div class="card-body">
                    <div class="box" style="height: 350px;">
                      <a href="taller.php?id="'.$datos['id'].'"> <img src="'.$datos_img['dir_img'].'" class="box" style="height: 350px;" alt="'.$datos_img['nom_img'].'"> </a>
                    </div>

                    <h5 class="card-title " style="margin-top: 1%;">'.$datos['nom_taller'].'</h5>
                    <p class="card-text placeholder-glow">'.$datos['resumen_taller'].'</p>
                    <a href="taller.php?id="'.$datos['id'].'" class="btn col-6 float-end" style="width: 200px; border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
                  </div>
                </div>
              ');
          }

          // Cuenta las filas para saber ssi estan vacias
          $res1 = $conexion->query("SELECT * FROM talleres");
          $filas = $res1->fetch_array();

          if($filas>0);
          else {
              echo('
                <div class="card" style="margin-bottom: 1%;">
                  <div class="card-body">
                    <div>
                      <a href="#"> <img src="../assets/img/placeholder_m.png" class="box" style="height: 350px;" alt=""> </a>
                    </div>
                    <h5 class="card-title placeholder-glow" style="margin-top: 1%;">
                      <span class="placeholder col-6 placeholder-lg"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                      <span class="placeholder col-7 placeholder-s"></span>
                      <span class="placeholder col-4 placeholder-s"></span>
                      <span class="placeholder col-4 placeholder-s"></span>
                      <span class="placeholder col-6 placeholder-s"></span>
                      <span class="placeholder col-8 placeholder-s"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style="width: 200px; border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
                  </div>
                </div>
              ');
          }
        }
         ?>

      </section>
    </div>
  </body>
</html>
