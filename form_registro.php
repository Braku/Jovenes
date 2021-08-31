<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php'; ?>
  </head>
  <body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
      <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="user_card">
            <div class="d-flex justify-content-center">
  					  <div class="brand_logo_container">
                <a href="index.php"> <img src="assets/img/reeducar.png" class="brand_logo" alt="Logo"> </a>
  					  </div>
  				  </div>
            <div class="d-flex justify-content-center form_container">
              <form class="" action="registro.php" method="post">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="" class="form-control" placeholder="Nombre(s)" type="text">
                  <input name="" class="form-control" placeholder="Apellido(s)" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                  </div>
                  <input name="" class="form-control" placeholder="Correo electronico" type="email">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                  </div>
                  <input name="" class="form-control" placeholder="Número celular" type="text">
                </div>
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control" placeholder="Ingresa una contrase&ntilde;a" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control" placeholder="Repite la contrase&ntilde;a" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                  <button type="submit" class="btn login_btn azul" style="border-radius: 50px 0px; padding: 5px 20px;"> Crea tu cuenta  </button>
                </div> <!-- form-group// -->
                <p class="text-center">¿Tienes una cuenta? <a href="form_login.php">Ingresa</a> </p>
              </form>
            </div>
          </div>
        </div> <!-- card.// -->

      </div>
      <!--container end.//-->

      <br><br>
  </body>
</html>
