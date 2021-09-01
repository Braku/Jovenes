<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header>
      <?php include_once 'includes/nav.php'; ?>
    </header>
    <div class="contenedor">
      <section>
        <?php
        include_once 'consultas/conexion.php';

        if(!$conexion){
          die('error connecting to database');
        } else{
          $res = $conexion->query("SELECT * FROM talleres");

          //Ciclo que imprime tas reseñas en la tabla
          while($datos=$res->fetch_array(MYSQLI_BOTH))
          {
            // $resNum = $conexion->query("SELECT * FROM talleres");
            // Cuenta el numero de comentarios de cada reseña
            // $numComments = mysqli_num_rows($resNum);
              echo('
                <div class="card" style="margin-bottom: 1%;">
                  <div class="card-body">
                    <div class="box" style="height: 350px;">
                      <a href="#"> <img src="assets/img/placeholder_m.png" style=" margin-top: -33%;" alt=""> </a>
                    </div>
                    <h5 class="card-title " style="margin-top: 1%;">
                      '.$datos['nom_taller'].'
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

          // Cuenta las filas para saber ssi estan vacias
          $res1 = $conexion->query("SELECT * FROM publicaciones");
          $filas = $res1->fetch_array();

          if($filas>0);
          else {
              echo('
                <div class="card" style="margin-bottom: 1%;">
                  <div class="card-body">
                    <div class="box" style="height: 350px;">
                      <a href="#"> <img src="assets/img/placeholder_m.png" style=" margin-top: -33%;" alt=""> </a>
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
