<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header class="container" >
      <?php include_once 'includes/nav.php'; ?>
      <div style="margin-top: 2%; width: 99.999%;" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner box-banner">
          <div class="carousel-item active">
            <img src="assets/img/placeholder_m.png" class="d-block w-100" alt="...">
            <div class=" txt-banner">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/placeholder_m.png" class="d-block w-100" alt="...">
            <div class=" txt-banner">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/placeholder_m.png" class="d-block w-100" alt="...">
            <div class=" txt-banner">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
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
    </header>
    <div class="container bg-light" style=" margin-bottom: 5%; width: 82.6%; height: 100%;">
      <section class="card float-start" style="width: 73%; height: auto; border-radius: 0;" style="margin-bottom: 10%;">
        <?php
          for ($i=0; $i < 4; $i++) {
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
         ?>
      </section>

      <aside class="float-end bg-light overflow-auto" style="width: 27%; height: 100%;">
        <?php
          include_once 'consultas/conexion.php';

          if(!$conexion){
            die('error connecting to database');
          } else{
            $res = $conexion->query("SELECT * FROM publicaciones");

            //Ciclo que imprime tas reseñas en la tabla
            while($datos=$res->fetch_array(MYSQLI_BOTH))
            {
              $resNum = $conexion->query("SELECT * FROM ");
              // Cuenta el numero de comentarios de cada reseña
              $numComments = mysqli_num_rows($resNum);
                echo('
                <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">
                  <div class="box">
                    <img src="assets/img/placeholder_m.png" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                      <span class="placeholder col-6" placeholder-lg></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                      <span class="placeholder col-7" placeholder-s></span>
                      <span class="placeholder col-4" placeholder-s></span>
                      <span class="placeholder col-4" placeholder-s></span>
                      <span class="placeholder col-6" placeholder-s></span>
                      <span class="placeholder col-8" placeholder-s></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
                  </div>
                </div>
                ');
            }

            // Cuenta las filas para saber ssi estan vacias
            $res1 = $conexion->query("SELECT * FROM publicaciones");
            $filas = $res1->fetch_array();

            if($filas>0);
            else {
              for ($i=0; $i < 5; $i++) {
                echo('
                <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">
                  <div class="box">
                    <img src="assets/img/placeholder_m.png" alt="">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                      <span class="placeholder col-6" placeholder-lg></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                      <span class="placeholder col-7" placeholder-s></span>
                      <span class="placeholder col-4" placeholder-s></span>
                      <span class="placeholder col-4" placeholder-s></span>
                      <span class="placeholder col-6" placeholder-s></span>
                      <span class="placeholder col-8" placeholder-s></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
                  </div>
                </div>
                ');
              }

            }
          }
         ?>
      </aside>
    </div>
  </body>
</html>
