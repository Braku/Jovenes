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
          </nav>

          <!-- EDITAR BANNER -->

          <div class="card-body">
            <div class="card">
              <img src="assets/img/placeholder_m.png" style="height: 300px;" class="box-banner d-block w-100" alt="...">
              <div class="card-img-overlay">
                <a href="#" class="btn float-end align-bottom" style="padding: 20px; background-color: rgb(135, 136, 150);"></a>
              </div>
            </div>
          </div>

          <!-- EDITAR FLYER TITULO Y DESCRIPCION -->

          <div class="card" style=" height: 300px; border: 0; margin: auto 1.5%;">
            <div class="row g-0">
              <div class="col-md-3">
                <img src="assets/img/placeholder_m.png" style="height: 300px; width: 250px;" class="box-banner" alt="...">
                <div class="card-img-overlay" style=" width: 250px;">
                  <a href="#" class=" btn float-end" style="padding: 20px; background-color: #878896;"></a>
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
                <a href="#" class="align-bottom btn float-end" style="padding: 50px 30px; border-radius: 50px 0; background-color: #878896;"></a>
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
                              <a href="#" class="btn float-end align-bottom" style="padding: 20px; background-color: rgb(135, 136, 150);"></a>
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
    </div>
  </body>
</html>
