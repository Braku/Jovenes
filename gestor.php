<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <header>
      <div class="container" style="margin-bottom: 2%;">
        <?php include_once 'includes/nav.php' ?>
      </div>
    </header>
    <div class="container">
      <section class="card float-start" style="width: 73%; height: auto; border-radius: 0; margin-bottom: 10%;">
        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="card-body" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0">
          <div class="card-body active" id="scrollspyHeading1">
            <form class="" action="index.html" method="post">
              
            </form>
          </div>
          <div class="card-body" id="scrollspyHeading2">
            <h4 >First heading</h4>
            <p>...</p>
          </div>
          <div class="card-body" id="scrollspyHeading3">
            <h4>First heading</h4>
            <p>...</p>
          </div>
        </div>
      </section>
      <aside class="float-end bg-light overflow-auto" style="width: 27%; height: 100%">

            <?php
            include_once 'consultas/conexion.php';

            if(!$conexion){
              die('error connecting to database');
            } else{
              $res = $conexion->query("SELECT * FROM usuarios");

              //Ciclo que imprime tas reseñas en la tabla
              while($datos=$res->fetch_array(MYSQLI_BOTH))
              {
                $resimg = $conexion->query("SELECT * FROM img_usuarios WHERE id_usuario = ".$_SESSION['id']);
                // Cuenta el numero de comentarios de cada reseña
                $img = mysqli_num_rows($resimg);
                  echo('
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  ');
              }

              // Cuenta las filas para saber ssi estan vacias
              $res1 = $conexion->query("SELECT * FROM publicaciones");
              $filas = $res1->fetch_array();

              if($filas>0);
              else {
                echo ('
                  <div class="card" style="width: 100%; border-radius: 0;" aria-hidden="true">
                    <div class="box-user">
                      <img src="assets/img/placeholder_m.png" alt="" class="mx-auto d-block">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title placeholder-glow">
                        <span class="placeholder col-6" placeholder-lg></span>
                      </h5>
                      <p class="card-text placeholder-glow">
                        <span class="placeholder col-11" placeholder-s></span>
                        <span class="placeholder col-4" placeholder-s></span>
                        <span class="placeholder col-5" placeholder-s></span>

                      </p>
                      <a href="#" tabindex="-1" class="btn disabled placeholder col-6 float-end" style=" border-radius: 50px 0; background: #1D3E85; padding: 7px 20px;"></a>
                    </div>
                  </div>
                ');

              }
            }

             ?>


      </aside>
    </div>
  </body>
</html>
