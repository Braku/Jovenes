<?php
  include_once 'conexion.php';

  if(!$conexion){
    die('error connecting to database');
  } else{
    $res = $conexion->query("SELECT * FROM posts");


    //Ciclo que imprime tas reseñas en la tabla
    while($datos=$res->fetch_array(MYSQLI_BOTH))
    {

      $resNum = $conexion->query("SELECT * FROM comentarios WHERE id_post = ".$datos['id']);
      // Cuenta el numero de comentarios de cada reseña
      $numComments = mysqli_num_rows($resNum);
      echo("
        <tr>
        <td width='82%'> <a href='resenia.php?id= ".$datos['id']."' class='btnTitulo' id='btn-abrir-popup1'>".$datos['titulo']."</a> </td>
        <td width='15%'> <p>".$numComments." comentarios </p> </td>
        <td width='5%'> <a href = 'modificarForm.php?id=".$datos['id']."&titulo=".$datos['titulo']."&resenia=".$datos['resenia']."'>Modificar</a> </td>
        <td width='5%'> <a href = 'consultas/eliminar.php?id=".$datos['id']."'>Eliminar</a> </td>
        </tr>
      ");
    }

    // Cuenta las filas para saber ssi estan vacias
    $res1 = $conexion->query("SELECT * FROM posts");
    $filas = $res1->fetch_array();

    if($filas>0);
    else {
      echo ("
        <tr>
        <td colspan='3' width='400%' align='center' class='celda'> No hay reseñas agregadas </td>
        </tr>
      ");

    }
  }
 ?>

<!-- Offcanvas -->

 <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
   <img src="assets/img/placeholder_m.png" class="box-banner d-block w-100" alt="...">
 </a>

 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
   <div class="offcanvas-header">
     <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <!-- Cuerpo de canvas -->
   <div class="offcanvas-body">
     <div>
       Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
     </div>
   </div>
 </div>
