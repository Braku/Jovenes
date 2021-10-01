<?php
  if(isset($_GET['cerrar_sesion'])){
    session_unset();

    // destroy the session
    session_destroy();
  }

    if(!isset($_SESSION['rol'])){
      header('location: login.php');
    }else{
      if($_SESSION['rol'] == 3){
        header('location: indexU.php');
      }
    }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <a class="btn float-end" href="?cerrar_sesion=1" style="background: #CB661A; color: rgb(209, 209, 209); border-radius: 25px 0;">Cerrar sesion</a>

      <?php
        include_once 'includes/nav.php';
        include_once 'includes/carousel.php';
      ?>

    </header>
    <div class="container bg-light" style="height: 100%; padding: 0;">
      <section class="card float-start" style="width: 73%; height: auto; border-radius: 0; margin-bottom: 10%;">
        <?php include_once 'includes/anuncios.php'; ?>
      </section>

      <aside class="float-end bg-light overflow-auto" style="width: 27%; height: 100%">
        <?php include_once 'includes/aside.php'; ?>
      </aside>
    </div>
  </body>
</html>
