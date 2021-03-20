<?php
$precioMegaCombo1 = $_POST['1'];
$precioMegaCombo2 = $_POST['3'];
$precioMegaCombo3 = $_POST['4'];
$precioMegaCombo4 = $_POST['5'];
$precioMegaCombo5 = $_POST['6'];
$precioMegaCombo6 = $_POST['7'];
$precioMegaCombo7 = $_POST['8'];
$precioCombo1duo = $_POST['9'];
$precioCombo2duo = $_POST['10'];
$precioCombo3duo = $_POST['11'];
$precioCombo4duo = $_POST['12'];
$precioCombo5duo = $_POST['13'];
$precioCombo6duo = $_POST['14'];
$precioCombo7duo = $_POST['15'];
$preciokombo1 = $_POST['16'];
$preciokombo2 = $_POST['17'];
$preciokombo3 = $_POST['18'];
$preciokombo4 = $_POST['19'];
$preciokombo5 = $_POST['20'];
$preciokombo6 = $_POST['21'];
$preciokombo7 = $_POST['22'];
$preciokombo8 = $_POST['23'];
$preciovegetariano = $_POST['24'];
$preciopollo = $_POST['25'];
$preciojamon = $_POST['26'];
$preciocerdo = $_POST['27'];
$precioespecial = $_POST['28'];
$preciocamarones = $_POST['29'];
$preciokowloon = $_POST['30'];
$preciopolloycamarones = $_POST['31'];
$preciolmvegetariano = $_POST['32'];
$preciolmpollo = $_POST['33'];
$preciolmcerdo = $_POST['34'];
$preciolmespecial = $_POST['35'];
$preciolmcamarones = $_POST['36'];
$preciolmkowloon = $_POST['37'];
$preciolmcarne = $_POST['38'];
$preciolmpolloycamarones = $_POST['39'];
$preciopagridulce = $_POST['40'];
$preciopsoya = $_POST['41'];
$preciopcurry = $_POST['42'];
$preciopostras = $_POST['43'];
$preciopajonjoli = $_POST['44'];
$preciopasado = $_POST['45'];
$preciocostras = $_POST['46'];
$precioccurry = $_POST['47'];
$preciocbrocoli = $_POST['48'];
$preciocvegetales = $_POST['49'];
$preciocostilla = $_POST['50'];
$preciocerdoa = $_POST['51'];
$preciocerdosyp = $_POST['52'];
$preciolumpias = $_POST['53'];
$preciowantonf = $_POST['54'];
$preciofideoss = $_POST['55'];
$preciofuyong = $_POST['56'];
$preciorefresco2 = $_POST['57'];
$preciolipton = $_POST['58'];
$preciorefrescol = $_POST['59'];
$precioagua6 = $_POST['74'];
$preciopanc = $_POST['60'];
$preciosopaw = $_POST['61'];
$precioswantonmien = $_POST['62'];
$preciocsvegetales = $_POST['63'];
$preciocspollo = $_POST['64'];
$preciocscerdo = $_POST['65'];
$preciocscarne = $_POST['66'];
$preciocscamarones = $_POST['67'];
$preciocspolloyc = $_POST['68'];
$preciocomboclasico1 = $_POST['69'];
$preciocomboclasico2 = $_POST['70'];
$preciocombosuper1 = $_POST['71'];
$preciocombosuper2 = $_POST['72'];
$preciocombosuper3 = $_POST['73'];
$preciocmvegetariano = $_POST['149'];
$preciocmpollo = $_POST['150'];
$preciocmcerdo = $_POST['151'];
$preciocmespecial = $_POST['152'];
$preciocmkowloon = $_POST['153'];
$preciocmcarne = $_POST['154'];
$preciocmcamarones = $_POST['155'];
$preciocmpolloycamarones = $_POST['156'];
$preciocerdocurry = $_POST['158'];
$preciocerdoostra = $_POST['157'];
$preciocsjamon = $_POST['159'];
$preciocsespecial = $_POST['160'];
$preciocskowloon = $_POST['161'];
$preciocostillaunidad = $_POST['162'];
$precioracionlumpias = $_POST['163'];


include('delivery.php');
//echo "<script language= javascript'>alert('$tasa')</script>";

$sql = "INSERT INTO `menus` (`precio`,`id`) VALUES ($precioMegaCombo1,1),
($precioMegaCombo2,3),
($precioMegaCombo3,4),
($precioMegaCombo4,5),
($precioMegaCombo5,6),
($precioMegaCombo6,7),
($precioMegaCombo7,8),
($precioCombo1duo,9),
($precioCombo2duo,10),
($precioCombo3duo,11),
($precioCombo4duo,12),
($precioCombo5duo,13),
($precioCombo6duo,14),
($precioCombo7duo,15),
($preciokombo1,16),
($preciokombo2,17),
($preciokombo3,18),
($preciokombo4,19),
($preciokombo5,20),
($preciokombo6,21),
($preciokombo7,22),
($preciokombo8,23),
($preciovegetariano,24),
($preciopollo,25),
($preciojamon,26),
($preciocerdo,27),
($precioespecial,28),
($preciocamarones,29),
($preciokowloon,30),
($preciopolloycamarones,31),
($preciolmvegetariano,32),
($preciolmpollo,33),
($preciolmcerdo,34),
($preciolmespecial,35),
($preciolmcamarones,36),
($preciolmkowloon,37),
($preciolmcarne,38),
($preciolmpolloycamarones,39),
($preciopagridulce,40),
($preciopsoya,41),
($preciopcurry,42),
($preciopostras,43),
($preciopajonjoli,44),
($preciopasado,45),
($preciocostras,46),
($precioccurry,47),
($preciocbrocoli,48),
($preciocvegetales,49),
($preciocostilla,50),
($preciocerdoa,51),
($preciocerdosyp,52),
($preciolumpias,53),
($preciowantonf,54),
($preciofideoss,55),
($preciofuyong,56),
($preciorefresco2,57),
($preciolipton,58),
($preciorefrescol,59),
($precioagua6,74),
($preciopanc,60),
($preciosopaw,61),
($precioswantonmien,62),
($preciocsvegetales,63),
($preciocspollo,64),
($preciocscerdo,65),
($preciocscarne,66),
($preciocscamarones,67),
($preciocspolloyc,68),
($preciocomboclasico1,69),
($preciocomboclasico2,70),
($preciocombosuper1,71),
($preciocombosuper2,72),
($preciocombosuper3,73),
($preciocmvegetariano,149),
($preciocmpollo,150),
($preciocmcerdo,151),
($preciocmespecial,152),
($preciocmkowloon,153),
($preciocmcarne,154),
($preciocmcamarones,155),
($preciocmpolloycamarones,156),
($preciocerdocurry,158),
($preciocerdoostra,157),
($preciocsjamon,159),
($preciocsespecial,160),
($preciocskowloon,161),
($preciocostillaunidad,162),
($precioracionlumpias,163)

ON DUPLICATE KEY UPDATE `precio` = VALUES(`precio`)";
//echo "$sql";





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
        <img src="./img/logo.png" width="100em" height="100em" class="masthead-brand">
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

      <?php

      if (mysqli_query($conex, $sql)) {

        echo "Registro con éxito.<a href='.\menu.php'><button type='button' class='btn btn-sm btn-success btn-block'><h3>REGRESAR</h3></button></a>";
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