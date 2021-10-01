<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php
        include_once 'includes/nav.php';
       ?>
    </header>
    <div class="container" style="height: 100%; padding: 0;">
      <section class="card" style="margin-top: 2%; border-radius: 0;">
        <div class="">
          <nav id="navbar-example2" class="navbar navbar-light px-3">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <?php
                  include_once 'consultas/conexion.php';
                  $res_nav = $conexion->query("SELECT * FROM talleres");

                  while ($datos = $res_nav->fetch_array(MYSQLI_BOTH)) {
                    echo('
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Talleres</a>
                      <ul class="dropdown-menu">
                        <li class="">
                          <a class="dropdown-item" href="?id='.$datos['id'].'">'.$datos['nom_taller'].'</a>
                        </li>
                      </ul>
                    ');
                  }

                  $filas = $res_nav->fetch_array();

                  if($filas>0);
                  else {
                    echo('
                      <button class="nav-link" aria-current="page" onclick="show('.'talleres'.')">Talleres</button>
                    ');
                  }
                 ?>

              </li>
              <li class="nav-item">
                <button class="nav-link" aria-current="page" onclick="show('anuncios')">Anuncios</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" onclick="show('perfil')">Perfil</button>
              </li>
            </ul>

            <!-- BOTON AÑADIR TALLER -->
            <ul class="nav float-end">
              <li class="nav-item">
                <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#aniadir" class="btn" style="border-radius: 40px 0px; padding: 10px 25px; color: white; background: #405FA0;">Agregar taller</button>
              </li>
            </ul>
          </nav>

          <!-- MODAL -->
          <div>
            <div class="modal fade" id="aniadir" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">A&ntilde;adir taller</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="agregar_taller.php" method="post">
                      <label for="nom_taller">Taller:</label>
                      <input id="nom_taller" class="form-control form-control-lg" type="text" placeholder="Nombre de taller" aria-label=".form-control-lg example">
                      <label for="desc_taller" class="form-label">Descripci&oacute;n del taller:</label>
                      <textarea class="form-control" id="desc_taller" rows="3" placeholder="Descripci&oacute;n"></textarea>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Selecciona la imagen del banner:</label>
                        <input class="form-control" type="file" id="img_banner">
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Selecciona la imagen del flyer:</label>
                        <input class="form-control" type="file" id="img_flyer">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#aniadirImg" data-bs-toggle="modal" data-bs-dismiss="modal">Siguiente</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="aniadirImg" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Relleno taller</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="agregar_taller.php" method="post">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Selecciona una imagen sobre el taller:</label>
                        <input class="form-control" type="file" id="img_dtaller">
                        <label for="desc_taller" class="form-label">Frase:</label>
                        <textarea class="form-control" id="frase" rows="3" placeholder="Frase para pie de imagen"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Selecciona la imagen sobre el taller:</label>
                        <input class="form-control" type="file" id="img_dtaller1">
                        <label for="desc_taller" class="form-label">Frase:</label>
                        <textarea class="form-control" id="frase1" rows="3" placeholder="Frase para pie de imagen"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Selecciona la imagen sobre el taller:</label>
                        <input class="form-control" type="file" id="img_dtaller2">
                        <label for="desc_taller" class="form-label">Frase:</label>
                        <textarea class="form-control" id="frase2" rows="3" placeholder="Frase para pie de imagen"></textarea>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal">Agregar</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion accordion-flush" id="accordionExample">
            <?php
              include_once 'consultas/conexion.php';
              $res = $conexion->query("SELECT * FROM talleres");

              while ($datos = $res->fetch_array(MYSQLI_BOTH)) {
                echo ('
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#'.$datos['nom_taller'].'" aria-expanded="true" aria-controls="'.$datos['nom_taller'].'">
                      '.$datos['nom_taller'].'
                    </button>
                  </h2>
                  <div id="'.$datos['nom_taller'].'" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div id="talleres" style="">
                      <!-- EDITAR BANNER -->
                      <div class="card-body">
                        <div class="card">
                          <img src="assets/img/placeholder_m.png" style="height: 300px;" class="box-banner d-block w-100" alt="...">
                          <div class="card-img-overlay">
                            <a href="#" class="disabled placeholder btn float-end align-bottom" style="padding: 8px 20px; background-color: rgb(135, 136, 150);"></a>
                          </div>
                        </div>
                      </div>

                      <!-- EDITAR FLYER TITULO Y DESCRIPCION -->
                      <div class="card" style="height: 300px; border: 0; margin: auto 1.5%;">
                        <div class="row g-0">
                          <div class="col-md-3">
                            <img src="assets/img/placeholder_m.png" style="height: 300px; width: 250px;" class="box-banner" alt="...">
                            <div class="card-img-overlay" style=" width: 250px;">
                              <a href="#" class="disabled placeholder btn float-end" style="padding: 8px 20px; background-color: #878896;"></a>
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class=" placeholder-glow card-body">
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
                          <div class="col-md-2">
                            <a href="#" class="disabled placeholder align-bottom btn float-end" style="padding: 50px 30px; border-radius: 50px 0; background-color: #878896;"></a>
                          </div>
                        </div>
                      </div>

                      <!-- EDITAR TRES IMAGENES -->
                      <div class="card-body">
                        <div class="row">');
                          $res_img = $conexion->query("SELECT * FROM img_dtaller WHERE id_taller = ". $datos['id']);
                          while($datos_img = $res_img->fetch_array(MYSQLI_BOTH)) {
                            echo ('
                            <div class="col">
                              <div class="card" style="border: 0;">
                                <div class="card-body">
                                  <div>
                                    <div class="card">
                                      <img src="'.$datos_img['dir_img'].'" style="height: 200px;" class="box-banner" alt="'.$datos_img['nom_img'].'">
                                      <div class="card-img-overlay">
                                        <a href="#" class=" disabled placeholder btn float-end align-bottom" style="padding: 8px 20px; background-color: rgb(135, 136, 150);"></a>
                                      </div>
                                    </div>
                                    <div class="" style="margin: 2% 0;">
                                      <h5 class="card-title placeholder-glow">
                                      </h5>
                                      <p class="card-text placeholder-glow">'.$datos_img['frase'].'</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            ');
                          }

                          if($datos_img == 3);
                          else {
                            for ($i = 0; $i < 3 - $datos_img; $i++) {
                              echo ('
                              <div class="col">
                                <div class="card" style="border: 0;">
                                  <div class="card-body">
                                    <div>
                                      <div class="card">
                                        <img src="assets/img/placeholder_m.png" style="height: 200px;" class="box-banner" alt="...">
                                        <div class="card-img-overlay">
                                          <a href="#" class=" disabled placeholder btn float-end align-bottom" style="padding: 8px 20px; background-color: rgb(135, 136, 150);"></a>
                                        </div>
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
                          }

                        echo('

                        </div>
                      </div>

                      <!-- TABLA PARA GESTIONAR COMENTARIOS  -->
                      <div class="card" style="border: 0;">
                        <div class="card-body bg-light" style="margin: 2%;">
                          <div class="placeholder-glow">
                            <h4 class="text-center"> Comentarios </h4>
                          </div>
                          <div class="placeholder-glow">
                            <table class="table table-striped table-hover">
                            ');
                                $res1 = $conexion->query("SELECT * FROM comentarios WHERE id_taller = ".$_GET['id']);

                                while ($datos1 = $res1->fetch_array(MYSQLI_BOTH)) {
                                  echo ('
                                    <tr>
                                      <td colspan="3" width="400%" align="center" class="celda"> No hay comentarios en este taller </td>
                                    </tr>
                                  ');
                                }

                                $filas1 = $res1->fetch_array();

                                if($filas1>0);
                                else {
                                    echo('
                                      <tr>
                                        <td colspan="3" width="400%" align="center" class="celda"> No hay comentarios en este taller </td>
                                      </tr>
                                    ');
                                  }

                              echo('

                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Taller
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-center">
                        <p>No se encontraron talleres</p>
                      </div>
                    </div>
                  </div>
                ');
              }

              $filas = $res->fetch_array();

              if($filas>0);
              else {
                echo ('

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Taller
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-center">
                        <p>No se encontraron talleres</p>
                      </div>
                    </div>
                  </div>
                ');
              }
             ?>
          </div>

        </div>
      </section>



    </div>
  </body>
</html>
