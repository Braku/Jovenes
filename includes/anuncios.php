<?php
  include_once 'consultas/conexion.php';

  if(!$conexion){
    die('error connecting to database');
  } else{
    $res = $conexion->query("SELECT * FROM anuncios");

    //Ciclo que imprime tas reseñas en la tabla
    while($datos=$res->fetch_array(MYSQLI_BOTH))
    {
      echo('
        <div class="card-body">
          <h5 class="card-title placeholder-glow>'.$datos['tema'].'</h5>
          <p class="card-text placeholder-glow">'.$datos['parrafo'].'</p>
        </div>
      ');
    }

    // Cuenta las filas para saber ssi estan vacias
    $res1 = $conexion->query("SELECT * FROM anuncios");
    $filas = $res1->fetch_array();

    if($filas>0);
    else {
      for ($i=0; $i < 5; $i++) {
        echo('
          <div class="card-body">
            <h5 class="card-title placeholder-glow">
              <span class="placeholder col-6 placeholder-lg"></span>
            </h5>
            <p class="card-text placeholder-glow">
              <span class="placeholder col-7 placeholder-s"></span>
              <span class="placeholder col-4 placeholder-s"></span>
              <span class="placeholder col-4 placeholder-s"></span>
              <span class="placeholder col-6 placeholder-s"></span>
              <span class="placeholder col-8 placeholder-s"></span>
            </p>
          </div>
        ');
      }

    }
  }
 ?>
