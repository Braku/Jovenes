<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php
        include_once 'includes/nav.php';
       ?>
    </header>
    <div class="container" style="height: 100%; padding: 0;">
      <section class="card" style="margin-top: 2%; border-radius: 0;">
        <aside class="float-end overflow-auto" style="width: 27%; height: 100%; border-radius: 0;">

          <?php
            include_once 'consultas/conexion.php';

            if(!$conexion){
              die('error connecting to database');
            } else{
              $res = $conexion->query("SELECT * FROM usuarios WHERE id = ".$_SESSION['id']);
              $datos=$res->fetch_array(MYSQLI_BOTH);

              if($datos>0) {
                $resimg = $conexion->query("SELECT * FROM img_usuarios WHERE id_usuario = ".$_SESSION['id']);
                $img = $resimg->fetch_array();
                echo('
                <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">
                  <div class="box">
                    <img src="'.$img['dir_img'].'" alt="" class="box">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">'.$datos['nombre'].' '.$datos['apellido'].'</h5>
                  </div>
                </div>
                ');
              }
              else {
                for ($i=0; $i < 3; $i++) {
                  echo('
                  <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">
                    <div class="">
                      <img src="assets/img/placeholder_m.png" alt="" class="box">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6 placeholder-lg" ></span>
                      </h5>
                    </div>
                  </div>
                  ');
                }

              }
            }
           ?>


        </aside>
      </section>



    </div>
  </body>
</html>
