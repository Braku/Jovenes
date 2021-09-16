<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once '../includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php include_once '../includes/nav.php'; ?>
    </header>
    <div class="contenedor" style="margin: 2% auto;">
      <section class="card" style=" height: auto; border: 0; border-radius: 0;">
        <?php include_once 'includes/descrip.php'; ?>
      </section>

      <section class="card" style="border: 0; border-radius: 0;">
        <div class="card-body">
          <div class="row">
            <?php

            include_once '../consultas/conexion.php';

            if (!$conexion) {
              die('error conectando la base de datos' );
            }

              for ($i=0; $i <= 2; $i++) {
                echo ('
                <div class="col">
                  <div class="card" style="border: 0;">
                    <div class="card-body text-center">
                      <div>
                        <div class="card">
                          <img src="../assets/img/placeholder_m.png" style="height: 200px;" class="box-banner" alt="...">
                        </div>
                        <div class="" style="margin: 2% 0;">
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
                  </div>
                </div>
                ');
              }
             ?>

          </div>
        </div>
      </section>

      <!-- COMENTARIOS -->
      <section class="card" style=" border: 0; border-radius: 0;">
        <?php include_once 'includes/comentarios.php'; ?>
      </section>

    </div>
  </body>
</html>
