<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acerca de |</title>

    <?php include_once '../includes/head.php' ?>

  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php include_once '../includes/nav.php'; ?>
    </header>
    <div class="container" style="padding: 0; margin: auto auto 20% auto;">
      <section class="card" style="margin-top: 2%; border: 0px; border-radius: 0px;">
        <div class="card-body text-center justify-content-center">
          <div class="">
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
        </div>
      </section>
      <section class="card" style="border: 0px; border-radius: 0px;">
        <article class="row">
          <div class="col-sm-6">
            <div class="card" style="margin-top: 2%; border: 0px;">
              <div class="card-body justify-content-left float-start">
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
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="margin-top: 2%; border: 0px;">
              <div class="card-body text-end justify-content-right float-end">
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
            </div>
          </div>
        </article>
      </section>

      <!-- PRESENTACION EQUIPO RE-EDUCAR -->

      <section class="card" style="border: 0px; border-radius: 0px;">
        <article>
          <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">

              <?php
                include_once '../consultas/conexion.php';

                $res = $conexion->query("SELECT * FROM usuarios WHERE id_rol = 1 && 2");

                while($datos = $res->fetch_array(MYSQLI_BOTH)) {
                  for ($i=0; $i < 3; $i++) {
                    if ($i == 0) {
                      echo ('
                      <div class="carousel-item active">
                        <div class="row text-center" style="margin: 0;">
                      ');
                    } else {
                      echo ('
                      <div class="carousel-item">
                        <div class="row text-center" style="margin: 0;">
                      ');
                    }
                        echo ('
                        <div class="box-user col" style="padding: 3%;">
                          <button type="button" data-bs-toggle="collapse" style="border: 0px; border-radius: 125px;" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                            <img src="../assets/img/placeholder_m.png" style="height: 250px; width: 250px; border-radius: 125px;"  alt="" class="mx-auto d-block">
                          </button>
                          <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="text-center placeholder-glow card card-body">
                              <h5>
                                <span class="placeholder col-8 placeholder"></span>
                              </h5>
                              <p class="">
                                <span class="placeholder col-7 placeholder-s"></span>
                                <span class="placeholder col-6 placeholder-s"></span>
                                <span class="placeholder col-4 placeholder-s"></span>
                                <span class="placeholder col-4 placeholder-s"></span>
                              </p>
                            </div>
                          </div>
                        </div>
                        ');

                    echo ('
                      </div>
                    </div>
                    ');
                  }
                }

                if($datos > 0);
                else {
                  for ($i=1; $i <= 3; $i++) {
                    if ($i == 1) {
                      echo ('
                      <div class="carousel-item active">
                        <div class="row text-center" style="margin: 0;">
                      ');
                    } else {
                      echo ('
                      <div class="carousel-item">
                        <div class="row text-center" style="margin: 0;">
                      ');
                    }

                    for ($j=1; $j <= 3; $j++) {

                      echo ('
                      <div class="box-user col" style="padding: 3%;">
                        <button type="button" data-bs-toggle="collapse" style="border: 0px; border-radius: 125px;" data-bs-target="#multiCollapseExample" aria-expanded="false" aria-controls="multiCollapseExample">
                          <img src="../assets/img/placeholder_m.png" style="height: 250px; width: 250px; border-radius: 125px;"  alt="" class="mx-auto d-block">
                        </button>
                        <div class="collapse multi-collapse" id="multiCollapseExample">
                          <div class="text-center placeholder-glow card card-body">
                            <h5>
                              <span class="placeholder col-8 placeholder"></span>
                            </h5>
                            <p class="">
                              <span class="placeholder col-7 placeholder-s"></span>
                              <span class="placeholder col-6 placeholder-s"></span>
                              <span class="placeholder col-4 placeholder-s"></span>
                              <span class="placeholder col-4 placeholder-s"></span>
                            </p>
                          </div>
                        </div>
                      </div>
                      ');
                    }
                    echo ('
                      </div>
                    </div>
                    ');
                  }
                }


               ?>


            <button class="carousel-control-prev" style="width: 3%;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style="width: 3%;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </article>
      </section>
      <section class="card" style="border: 0px; border-radius: 0px;">
        <div class="card-body text-center bg-light align-items-center" style="height: 500px; margin: 6%;">
          <div class="">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-6 placeholder-lg"></span>
              </h5>
          </div>
            <div class="" style="height: auto;">
              <p class="card-text placeholder-glow">
                <span class="placeholder col-7 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-4 placeholder-s"></span>
                <span class="placeholder col-6 placeholder-s"></span>
                <span class="placeholder col-8 placeholder-s"></span>
              </p>
            </div>

        </div>
      </section>
    </div>
  </body>
</html>
