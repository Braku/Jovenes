<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php include_once 'includes/nav.php'; ?>
    </header>
    <div class="contenedor" style="margin: 2% auto;">
      <section class="card" style=" height: auto; border: 0; border-radius: 0;">
        <div class="card-body">
          <div class="">
            <div class="">
              <img src="assets/img/placeholder_m.png" style="height: 300px; width: 250px; padding: 0 20px;" class="box-banner float-start" alt="...">
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

      </section>


      <section class="card" style="border: 0; border-radius: 0;">
        <div class="card-body">
          <div class="row">
            <?php
              for ($i=0; $i <= 2; $i++) {
                echo ('
                <div class="col">
                  <div class="card" style="border: 0;">
                    <div class="card-body text-center">
                      <div>
                        <div class="card">
                          <img src="assets/img/placeholder_m.png" style="height: 200px;" class="box-banner" alt="...">
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

      <section class="card" style=" border: 0; border-radius: 0;">
        <div class="card-body" style="max-width: 100%;">
          <div class="row g-0">
            <section class="container mt-5">
              <div class="row d-flex justify-content-left">
                  <div class="col-md-8 card-body placeholder-glow">
                      <div class="headings justify-content-between align-items-center mb-3">
                        <h5>
                          <span class="placeholder col-4 placeholder-lg"></span>
                        </h5>
                      </div>
                      <div class="card p-3" style=" border: 0;">
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="user flex-row align-items-center">
                              <img src="assets/img/placeholder_u.jpg" width="50px" class="user-img rounded-circle mr-2">
                            </div>
                            <div class="card-body">
                                <span class="placeholder col-4 placeholder-s" style="background: #00a4ff;"></span>
                              <p class="">
                                <span class="placeholder col-7 placeholder-xs"></span>
                                <span class="placeholder col-4 placeholder-xs"></span>
                                <span class="placeholder col-2 placeholder-xs"></span>
                                <span class="placeholder col-5 placeholder-xs"></span>
                              </p>
                            </div>
                            <span class="placeholder col-2 placeholder-s"></span>

                          </div>
                      </div>
                      <div class="card p-3" style=" border: 0;">
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="user flex-row align-items-center">
                              <img src="assets/img/placeholder_u.jpg" width="50px" class="user-img rounded-circle mr-2">
                            </div>
                            <div class="card-body">
                                <span class="placeholder col-4 placeholder-s" style="background: #00a4ff;"></span>
                              <p class="">
                                <span class="placeholder col-7 placeholder-xs"></span>
                                <span class="placeholder col-4 placeholder-xs"></span>
                              </p>
                            </div>
                            <span class="placeholder col-2 placeholder-s"></span>

                          </div>
                      </div>
                    </div>
                  </div>
            </section>
            <?php
              // include_once 'consultas/conexion.php';
              // if($conexion == true){
              //   die('error connecting to database');
              // } else{
              //   $res = $conexion->query("SELECT * FROM talleres");
              //   // $datos=$res->fetch_array(MYSQLI_BOTH);
              //   $resComment = $conexion->query("SELECT * FROM comentarios WHERE id_pub = ".$res['id']);
              //
              //   //Ciclo que imprime los comentarios en la tabla
              //   while($datos=$resComment->fetch_array(MYSQLI_BOTH))
              //   {
              //     echo('
              //       <div class="col-md-4">
              //         <img src="assets/img/reeducar.png" class="img-fluid rounded-start" alt="...">
              //       </div>
              //       <div class="col-md-8">
              //         <div class="card-body">
              //           <h3 class="card-title">Card title</h3>
              //           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              //         </div>
              //       </div>
              //     ');
              //   }
              //
              //   // Cuenta las filas para saber si estan vacias
              //   $res1 = $conexion->query("SELECT * FROM talleres");
              //   $filas = $res1->fetch_array();
              //   if($filas>0);
              //   else {
              //     echo('
              //
              //     ');
              //
              //   }
              // }
            ?>

          </div>
        </div>
      </section>
      <?php
        // include_once 'consultas/conexion.php';
        // if(!$conexion){
        //   die('error connecting to database');
        // } else{
        //   $res = $conexion->query("SELECT * FROM talleres");
        //     // $datos=$res->fetch_array(MYSQLI_BOTH);
        //   $resComment = $conexion->query("SELECT * FROM comentarios WHERE id_pub = ".$res['id']);
        //
        //     //Ciclo que imprime los comentarios en la tabla
        //   while($datos=$resComment->fetch_array(MYSQLI_BOTH)){
        //     echo('
        //
        //     ');
        //   }
        //   // Cuenta las filas para saber si estan vacias
        //   $res1 = $conexion->query("SELECT * FROM talleres");
        //   $filas = $res1->fetch_array();
        //   if($filas>0){
        //
        //   } else {
        //     echo('
        //     ');
        //   }
        // }
      ?>
      <!-- <section class="justify-content-center">
      <?php
      // for ($i=0; $i < 3; $i++) {
      //   echo ('
      //     <div class="card justify-content-center" style="display: inline-block; width: 25%;  border-radius: 0;" aria-hidden="true">
      //       <div class="box">
      //         <img src="assets/img/placeholder_m.png" alt="">
      //       </div>
      //       <div class="card-body">
      //         <h5 class="card-title placeholder-glow">
      //           <span class="placeholder col-6" placeholder-lg></span>
      //         </h5>
      //         <p class="card-text placeholder-glow">
      //           <span class="placeholder col-7" placeholder-s></span>
      //           <span class="placeholder col-4" placeholder-s></span>
      //           <span class="placeholder col-4" placeholder-s></span>
      //           <span class="placeholder col-6" placeholder-s></span>
      //           <span class="placeholder col-8" placeholder-s></span>
      //         </p>
      //         <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px; margin-bottom: 20px;"></a>
      //       </div>
      //     </div>
      //   ');
      // }
      ?>
      </section> -->
      <!-- <div class="comentario">
        <form class="" action="consultas/comentar.html" method="post">
          <input type="text" name="" value="Agrega tu comentario...">
          <input type="submit" class="btn btn-primary" name="" value="Comentar">
        </form>
      </div>
      <div class="comentario">
        <h3>Usuario</h3>
        <p>Comentario</p>
        <h5>Fecha</h5>
      </div> -->



    </div>
  </body>
</html>
