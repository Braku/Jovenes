<?php
  include_once 'consultas/conexion.php';

  if(!$conexion){
    die('error connecting to database');
  } else{
    $res = $conexion->query("SELECT * FROM img_banner");

    //Ciclo que imprime tas reseñas en la tabla
    while($datos=$res->fetch_array(MYSQLI_BOTH))
    {
      echo ('
        <div style="margin-top: 2%; width: auto;" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            ');
            //Se le indica al carrusel cual es el inicial para activarlo
              if($datos['id']==0){
                echo ('
                <div class="carousel-item active">
                  <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                  </div>
                ');
              } else {
                echo ('
                <div class="carousel-item">
                  <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                  </div>
                ');
              }

      echo ('
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      ');
    }

    // Cuenta las filas para saber ssi estan vacias
    $res1 = $conexion->query("SELECT * FROM img_banner");
    $filas = $res1->fetch_array();

    if($filas>0);
    else {
        echo ('
          <div style="margin-top: 2%; width: auto;" id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              ');
              for ($i=0; $i < 3; $i++) {
                if($i==0){
                  echo ('
                  <div class="carousel-item active">
                    <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5> <span class="placeholder col-6" placeholder-lg></span> </h5>
                      <p> <span class="placeholder col-7" placeholder-s></span> </p>
                    </div>
                    </div>
                  ');
                } else {
                  echo ('
                  <div class="carousel-item">
                    <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5> <span class="placeholder col-6" placeholder-lg></span> </h5>
                      <p> <span class="placeholder col-7" placeholder-s></span> </p>
                    </div>
                    </div>
                  ');
                }

              }
        echo ('
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        ');

    }
  }
 ?>
