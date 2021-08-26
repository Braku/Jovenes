<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <?php include_once 'includes/nav.php'; ?>
      <div class="banner">
        <img src="" alt="">
        <div class="banner_desc">
            <h1></h1>
            <p></p>
        </div>
      </div>
    </header>
    <div class="contenedor">
      <section>
        <h3></h3>
        <p class="cont_p"></p>
        <h5 class="autor"></h5>
      </section>
      <aside class="">
        <?php
          include_once 'consultas/conexion.php';

          if(!$conexion){
            die('error connecting to database');
          } else{
            $res = $conexion->query("SELECT * FROM posts");


            //Ciclo que imprime tas reseñas en la tabla
            while($datos=$res->fetch_array(MYSQLI_BOTH))
            {

              $resNum = $conexion->query("SELECT * FROM comentarios WHERE id_post = ".$datos['id']);
              // Cuenta el numero de comentarios de cada reseña
              $numComments = mysqli_num_rows($resNum);
              echo('
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
              ');
            }

            // Cuenta las filas para saber ssi estan vacias
            $res1 = $conexion->query("SELECT * FROM posts");
            $filas = $res1->fetch_array();

            if($filas>0);
            else {
              echo ('
                <div class="card" style="width: 18rem;">
                  <img src="" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Ver más...</a>
                  </div>
                </div>
              ');

            }
          }
         ?>
      </aside>
    </div>
  </body>
</html>
