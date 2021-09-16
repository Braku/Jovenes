<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio | Re-educar Jovenes</title>

    <?php include_once 'includes/head.php' ?>
  </head>
  <body>
    <header class="container" style="padding: 0;">
      <?php
        include_once 'includes/nav.php';
        include_once 'includes/carousel.php';
      ?>

    </header>
    <div class="container" style="height: 100%; padding: 0;">
      <section class="card float-start" style="width: 73%; height: 100%; border-radius: 0; margin-bottom: 10%;">
        <?php include_once 'includes/anuncios.php'; ?>
      </section>

      <aside class="float-end overflow-auto" style="width: 27%; height: 100%; border-radius: 0;">
        <?php include_once 'includes/aside.php'; ?>
      </aside>
    </div>
  </body>
</html>
