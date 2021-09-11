<?php
  include_once 'consultas/conexion.php';

  if(!$conexion){
    die('error connecting to database');
  } else{
    $res = $conexion->query("SELECT * FROM publicaciones");

    //Ciclo que imprime tas reseñas en la tabla
    while($datos=$res->fetch_array(MYSQLI_BOTH))
    {
      $resimg = $conexion->query("SELECT * FROM img_pub WHERE id_pub = ".$datos['id']);
      // Cuenta el numero de comentarios de cada reseña
      $img = mysqli_num_rows($resimg);
        echo('
        <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">
          <div class="box">
            <img src="'.$img['dir_img'].'" alt="" class="box">
          </div>
          <div class="card-body">
            <h5 class="card-title">'.$datos['tema'].'</h5>
            <p class="card-text">'.$datos['contenido'].'</p>
            <a href="#" tabindex="-1" class="btn col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
          </div>
        </div>
        ');
    }

    // Cuenta las filas para saber ssi estan vacias
    $res1 = $conexion->query("SELECT * FROM publicaciones");
    $filas = $res1->fetch_array();

    if($filas>0);
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
            <p class="card-text placeholder-glow">
              <span class="placeholder col-7 placeholder-s" ></span>
              <span class="placeholder col-4 placeholder-s" ></span>
              <span class="placeholder col-4 placeholder-s" ></span>
              <span class="placeholder col-6 placeholder-s" ></span>
              <span class="placeholder col-8 placeholder-s" ></span>
            </p>
            <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
          </div>
        </div>
        ');
      }

    }
  }
 ?>
