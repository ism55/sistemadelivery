<?php

include('delivery.php');



$consmenu = "SELECT plato,precio,id from menus";
$resmenu  = $conex->query($consmenu);



if ($resmenu) {
  //      echo "<script>alert('Query correcto')</script>";

} else {
  echo "Error: " . $resmenu . "<br>" . mysqli_error($conex);
}
?>



<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema de Gestion de Ventas por Delivery">
  <meta name="author" content="Neurona Servicios">
  <meta name="generator" content="v01.00.00">
  <title>Chino Caracas Delivery</title>

  <link rel="canonical" href="./estilos.css">
  <link rel="icon" href=".\img\logo.png" type="image/png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="./estilos.css" rel="stylesheet">


  <head>


  </head>

<body class="text-center">




  <div class="container">
    <header class="masthead mb-auto">
      <div class="inner">
        <a href="./"><img src="./img/logo.png" width="100em" height="100em" class="masthead-brand"></a>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link" href="./">COMPRAS</a>
          <a class="nav-link" href="./contabilidad.php">CONTABILIDAD</a>
          <a class="nav-link active" href="./menu.php">PRODUCTOS</a>
        </nav>
      </div>
    </header>
    <div class="row w-100 p-3">
      <div class="col">
        <h1 class="cover-heading">Lista de platos y precios</h1>
        <p class="lead">Aquí puede observar y actualizar el precio de los productos</p>
      </div>
    </div>
    <main role="main" class="inner cover">

      <form class="form" id="actualizaPrecios" onsubmit="alert('Actualizando precios')" action="registrar_menu.php" method="POST">

        <button type="submit" class="btn btn-sm btn-warning btn-block">
          <h2>ACTUALIZAR PRECIOS</h2>
        </button>
        <table class="table table-dark table-striped table-hover">

          <thead>
            <tr>

              <th scope="col">PLATO</th>
              <th scope="col">PRECIO</th>
              <!--<th scope="col">ID</th>-->

            </tr>
          </thead>


          <?php foreach ($resmenu as $row_menu) { // aca puedes hacer la consulta e iterarla con each. 
          ?>


          <?php

            echo '<tr scope="row">';

            $plato = $row_menu['plato'];
            $precio = $row_menu['precio'];
            $id = $row_menu['id'];

            echo "<td>" . $plato . "</td>";
            echo "<td><input type='number' value='$precio' min='0' step='.01' id='$id' name='$id'></input></td>";
            //echo "<td>".$id."</td>" ;
            echo '</tr>';
          }

          ?>
        </table>


      </form>



    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">Neurona Servicios</a></p>
      </div>
    </footer>
  </div>

</body>

</html>