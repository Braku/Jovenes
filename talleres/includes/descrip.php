<?php
  include_once '../consultas/conexion.php';
  if(!$conexion){
    die('error connecting to database');
  } else{
    $res = $conexion->query("SELECT * FROM talleres WHERE id = ".$_GET['id']);


    //Ciclo que imprime los comentarios en la tabla
    while($datos = $res->fetch_array(MYSQLI_BOTH))
    {
      $res_banner = $conexion->query("SELECT * FROM img_dtaller WHERE id_taller = ". $_GET['id']);
      $datos_img = $res_banner->fetch_array();

      echo('
      <div class="card-body">
        <div class="">
          <div class="">
            <img src="'.$datos1['dir_img'].'" style="height: 300px; width: 250px; padding: 0 20px;" class="box-banner float-start" alt="'.$datos1['nom_img'].'">
          </div>
          <div class="placeholder-glow">
            <h4 class="card-title">
              <span class="placeholder col-3 placeholder"></span>
            </h4>
            <div class=" placeholder-glow card-body">
              <p>'.$datos['nom_taller'].'</p>
            </div>
          </div>
        </div>
      </div>
      ');
    }

    // Cuenta las filas para saber si estan vacias
    if($datos>0);
    else {
      echo('
      <div class="card-body">
        <div class="">
          <div class="">
            <img src="../assets/img/placeholder_m.png" style="height: 300px; width: 250px; padding: 0 20px;" class="box-banner float-start" alt="...">
          </div>
          <div class="placeholder-glow">
            <h4 class="card-title">
              <span class="placeholder col-3 placeholder"></span>
            </h4>
            <div class=" placeholder-glow card-body">
              <p class="">
                <span class="placeholder col-7 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-6 placeholder-s"></span>
                <span class="placeholder col-3 placeholder-s"></span>
                <span class="placeholder col-7 placeholder-s"></span>
                <span class="placeholder col-3 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-5 placeholder-s"></span>
                <span class="placeholder col-3 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-5 placeholder-s"></span>
                <span class="placeholder col-3 placeholder-s"></span>
                <span class="placeholder col-5 placeholder-s"></span>
                <span class="placeholder col-1 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-1 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-5 placeholder-s"></span>
                <span class="placeholder col-5 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-7 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-2 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
              </p>
            </div>
          </div>
        </div>
      </div>
      ');

    }

  }
?>
