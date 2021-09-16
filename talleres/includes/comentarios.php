<div class="card-body" style="max-width: 100%;">
  <script type="text/javascript">
    alert('No se encontro el taller');
  </script>
  <div class="row g-0">
    <section class="container mt-5">
      <div class="row d-flex justify-content-left">
        <div class="col-md-8 card-body placeholder-glow">
          <div class="headings justify-content-between align-items-center mb-3">
            <h5>
              <span class="placeholder col-4 placeholder-lg"></span>
            </h5>
          </div>
          <?php

          include_once '../consultas/conexion.php';

          if(!$conexion) {
            die('error connecting to database');
          } else {

            $res = $conexion->query("SELECT * FROM comentarios WHERE id_pub = ".$_GET['id']);

            while($datos = $res->fetch_array(MYSQLI_BOTH)) {
              echo ('
                <div class="card p-3" style=" border: 0;">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="user flex-row align-items-center">
                      <img src="../assets/img/placeholder_u.jpg" width="50px" class="user-img rounded-circle mr-2">
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
              ');
            }

            $filas = $res->fetch_array();
            if ($filas == 0) {
              for ($i=0; $i < 2; $i++) {
                echo ('
                  <div class="card p-3" style=" border: 0;">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="user flex-row align-items-center">
                        <img src="../assets/img/placeholder_u.jpg" width="50px" class="user-img rounded-circle mr-2">
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
                ');
              }
            }
          }
           ?>



        </div>
      </div>
    </section>
  </div>
</div>

<?php

 ?>
