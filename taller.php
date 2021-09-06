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
    <div class="contenedor">
      <section class="card mb-3">
        <div class="card-body" style="max-width: 100%;">
          <div class="row g-0">
            <section class="container mt-5">
              <div class="row d-flex justify-content-left">
                  <div class="col-md-8">
                      <div class="headings d-flex justify-content-between align-items-center mb-3">
                          <h5>Unread comments(6)</h5>
                      </div>
                      <div class="card p-3">
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="user flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small>
                                  <small class="font-weight-bold">Hmm, This poster looks cool</small></span>
                                </div>
                                <small>2 days ago</small>
                          </div>
                      </div>
                      <div class="card p-3 mt-2">
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="user flex-row align-items-center">
                                <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">olan_sams</small>
                                  <small class="font-weight-bold">Loving your work and profile! </small></span>
                                </div>
                                <small>3 days ago</small>
                          </div>
                      </div>
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

<input type="submit" class="btn btn-primary" name="" value="">
