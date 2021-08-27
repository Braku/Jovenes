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
        <img src="" alt="">
        <h1></h1>
        <p></p>
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

                ');
              }

              // Cuenta las filas para saber ssi estan vacias
              $res1 = $conexion->query("SELECT * FROM posts");
              $filas = $res1->fetch_array();

              if($filas>0);
              else {
                echo('

                ');

              }
            }
           ?>
      </section>
      <section>
        <div class="">
          <img src="" alt="">
        </div>
        <div class="">
          <img src="" alt="">
        </div>
        <div class="">
          <img src="" alt="">
        </div>
      </section>
      <section>
        <div class="comentario">
          <h3>Usuario</h3>
          <form class="" action="consultas/comentar.html" method="post">
            <input type="text" name="" value="Agrega ttu comentario...">
            <input type="submit" class="btn btn-primary" name="" value="Comentar">
          </form>
        </div>
        <div class="comentario">
          <h3>Usuario</h3>
          <p>Comentario</p>
          <h5>Fecha</h5>
        </div>
      </section>
    </div>
  </body>
</html>

<input type="submit" class="btn btn-primary" name="" value="">
