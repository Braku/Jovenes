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
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/img/reeducar.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Card title</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <?php
        include_once 'consultas/conexion.php';

        if(!$conexion){
          die('error connecting to database');
        } else{
          $res = $conexion->query("SELECT * FROM talleres");


          //Ciclo que imprime tas reseñas en la tabla
          while($datos=$res->fetch_array(MYSQLI_BOTH))
          {

            $resNum = $conexion->query("SELECT * FROM comentarios WHERE id_post = ".$datos['id']);
            // Cuenta el numero de comentarios de cada reseña
            $numComments = mysqli_num_rows($resNum);
            echo('

            ');
          }

          // Cuenta las filas para saber si estan vacias
          $res1 = $conexion->query("SELECT * FROM posts");
          $filas = $res1->fetch_array();

          if($filas>0);
          else {
            echo('

            ');

          }
        }
        ?>
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
      </div>
    </div>
  </body>
</html>

<input type="submit" class="btn btn-primary" name="" value="">
