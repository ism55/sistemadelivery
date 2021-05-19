<?php



$tasa = $_POST['registrotasa'];
include('delivery.php');
//echo "<script language='javascript'>alert('$tasa')</script>";

$sql = "INSERT INTO `tasadeldia` (`tasa`, `fecha_hora`) VALUES ('$tasa', current_timestamp())";

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

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="./estilos.css" rel="stylesheet">


</head>

<body class="text-center">




  <div class="container">
    <header class="masthead mb-auto">
      <div class="inner">
        <a href="./"><img src="./img/logo.png" width="100em" height="100em" class="masthead-brand"></a>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active" href="./">COMPRAS</a>
          <a class="nav-link" href="./contabilidad.php">CONTABILIDAD</a>
          <a class="nav-link" href="./menu.php">PRODUCTOS</a>
        </nav>
      </div>
    </header>
    <div class="row w-100 p-3">
      <div class="col">
        <h1 class="cover-heading">Registro de tasa</h1>
        <p class="lead">Si puede ver esta página, su tasa se configuró correctamente.</p>
      </div>
    </div>
    <main role="main" class="inner cover">

      <?php

      if (mysqli_query($conex, $sql)) {

        echo "Tasa registrada: $tasa Bs con éxito." . "<a href='.\'><button type='button' class='btn btn-sm btn-success btn-block'><h3>REGRESAR</h3></button></a>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conex);
      }
      mysqli_close($conex);
      ?>

    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">Neurona Servicios</a></p>
      </div>
    </footer>
  </div>

</body>

</html>