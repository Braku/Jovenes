<?php
  if(isset($_GET['cerrar_sesion'])) {
    session_unset($_SESSION['rol']);

  }

  if(!isset($_SESSION['rol'])) {
    // header('location: index.php');
  }else {
    if($_SESSION['rol'] == 3) {
      header('location: indexU.php');
    } else {
      header('location: indexU.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio | Re-educar Jovenes</title>

    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <a class="btn float-end" href="login.php" style="background: #CB661A; color: rgb(228, 228, 228); border-radius: 25px 0;">Iniciar sesion</a>
      <?php
        include_once 'includes/nav.php';
        include_once 'includes/carousel.php';
      ?>

    </header>
    <div class="container" style="height: 100%; padding: 0;">
      <section class="card float-start" style="width: 73%; height: 100%; border-radius: 0; margin-bottom: 10%;">
        <div class="card-body">
          <form class="" action="anunciar.php" method="post">
            <textarea class="form-control" id="" rows="3" placeholder="Ingresa un anuncio"></textarea>
            <button type="submit" class="btn btn-primary float-end" style="border: 0; background-color: #3D8C6C; margin: 10px 0; border-radius: 50px 0; padding: 5px 20px;">Publicar</button>
          </form>
        </div>
        <?php include_once 'includes/anuncios.php'; ?>
      </section>

      <aside class="float-end overflow-auto" style="width: 27%; height: 100%; border-radius: 0;">
        <?php include_once 'includes/aside.php'; ?>
      </aside>
    </div>
  </body>
</html>
