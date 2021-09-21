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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#scrollspyHeading1">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading3">Link</a>
              </li>
            </ul>

            <!-- BOTON AÑADIR TALLER -->
            <ul class="nav float-end">
              <li class="nav-item">
                <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#aniadir" class="btn placeholder" style="border-radius: 40px 0px; padding: 10px 50px; background: #1b3e8c;"></button>
              </li>
            </ul>
          </nav>

          <div class="modal fade" id="aniadir" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">A&ntilde;adir taller</h5>
                  <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="" action="index.html" method="post">
                    <label for="nom_taller">Taller:</label>
                    <input id="nom_taller" class="form-control form-control-lg" type="text" placeholder="Nombre de taller" aria-label=".form-control-lg example">
                    <label for="desc_taller" class="form-label">Descripci&oacute;n del taller:</label>
                    <textarea class="form-control" id="desc_taller" rows="3" placeholder="Descripci&oacute;n"></textarea>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Selecciona la imagen del banner:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Selecciona la imagen del flyer:</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#aniadirImg" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="aniadirImg" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                  <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Hide this modal and show the first with the button below.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal">Back to first</button>
                </div>
              </div>
            </div>
          </div>

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
          <div class="card" style=" height: 300px; border: 0; margin: auto 1.5%;">
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
            <div class="row">

              <?php
                for ($i=0; $i <= 2; $i++) {
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
               ?>

            </div>
          </div>

          <!-- TABLA PARA GESTIONAR COMENTARIOS  -->
          <section class="card" style="border: 0;">
            <div class="card-body bg-light" style="margin: 2%;">
              <div class="placeholder-glow">
                <h4 class="text-center"> Comentarios </h4>
              </div>
              <div class="placeholder-glow">
                <table class="table table-striped table-hover">
                  <tr>
                    <td colspan='3' width='400%' align='center' class='celda'> No hay comentarios en este taller </td>
                  </tr>
                </table>
              </div>
          </section>
        </div>
      </section>

      <!-- POPUP AÑADIR -->
      <!-- <div class="modal fade" id="anadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">A&ntilde;adir taller</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="" action="index.html" method="post">
              <div class="modal-body">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="text" class="form-control" aria-describedby="passwordHelpBlock">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Escribe la descripción aquí" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Descripción del taller</label>
                </div>
                  <label for="formFile" class="form-label">Elige una imagen para el banner </label>
                  <input class="form-control" type="file" id="formFile">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="button" data-bs-toggle="modal" data-bs-target="#anadir_img" class="btn placeholder btn-abrir-popup" style="border-radius: 40px 0px; padding: 10px 50px; background: #1b3e8c;"></button>
              </div>
            </form>
          </div>
        </div>
      </div> -->

      <!-- POPUP AÑADIR -->
      <!-- <div class="modal fade" id="anadir_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">A&ntilde;adir tres imagenes sobre el taller</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="" action="index.html" method="post">
              <div class="modal-body">
                <label for="formFile" class="form-label">Elige una imagen para el banner </label>
                <input class="form-control" type="file" id="formFile">
                <label for="" class="form-label">Password</label>
                <input type="text" class="form-control" aria-describedby="">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Escribe la descripción aquí" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Descripción del taller</label>
                </div>

                <label for="formFile" class="form-label">Elige una imagen para el banner </label>
                <input class="form-control" type="file" id="formFile">
                <label for="" class="form-label">Password</label>
                <input type="text" class="form-control" aria-describedby="">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Escribe la descripción aquí" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Descripción del taller</label>
                </div>

                <label for="formFile" class="form-label">Elige una imagen para el banner </label>
                <input class="form-control" type="file" id="formFile">
                <label for="" class="form-label">Password</label>
                <input type="text" class="form-control" aria-describedby="">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Escribe la descripción aquí" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Descripción del taller</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div> -->


    </div>
  </body>
</html>
