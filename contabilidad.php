<?php

include('delivery.php');

$sql = "SELECT SUM(total) AS total_total, SUM(bs) AS total_bs, SUM(usd) AS total_usd, numrepartidor from compras";

$resultado  = $conex->query($sql);


$cons = "SELECT * FROM repartidores";
$obtener = $conex->query($cons);

$comprasPorFecha = $conex->query(' SELECT * FROM `compras` ORDER BY `compras`.`fecha_hora` DESC');


if ($resultado) {
  //echo "Query correcto";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conex);
}


date_default_timezone_set('America/Caracas');
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
          <a class="nav-link" href="./">COMPRAS</a>
          <a class="nav-link active" href="./contabilidad.php">CONTABILIDAD</a>
          <a class="nav-link" href="./menu.php">PRODUCTOS</a>
        </nav>
      </div>
    </header>
    <div class="row w-100 p-3">
      <div class="col">
        <h2 class="cover-heading">Contabilidad de pedidos</h2>
        <p class="lead">Aquí puede observar el balance de ventas</p>
      </div>
    </div>
    <main role="main" class="inner cover">

      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DE HOY</h2>
        <thead>
          <tr>
            <th scope="col">CLIENTE</th>
            <th scope="col">REPARTIDOR</th>
            <th scope="col">ZONA</th>
            <th scope="col">UBICACIÓN</th>
            <th scope="col">COMISIÓN</th>
            <th scope="col">MÉTODO DE PAGO</th>
            <th scope="col">MONTO EN BS</th>
            <th scope="col">MONTO EN USD</th>
            <th scope="col">TOTAL</th>

          </tr>
        </thead>

        <?php
        //date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_efectivo = 0;
        $suma_diaria_transfer = 0;
        $suma_diaria_ambos = 0;
        $suma_diaria_paypal = 0;
        ?>





        <?php foreach ($comprasPorFecha as $row) {  // aca puedes hacer la consulta e iterarla con each. 
          $timestamp = date_parse($row['fecha_hora']);

          echo '<tr scope="row">';
          if ($timestamp["day"] === $fecha_actual["day"]) {
            if ($row['formapago'] === "Efectivo") {
              $suma_diaria_efectivo = $suma_diaria_efectivo + $row['total'] + $row['total'];
            }

            if ($row['formapago'] === "Transferencia") {
              $suma_diaria_transfer = $suma_diaria_transfer + $row['total'] + $row['total'];
            }

            if ($row['formapago'] === "Ambos") {
              $suma_diaria_ambos = $suma_diaria_ambos + $row['total'] + $row['total'];
            }

            if ($row['formapago'] === "PayPal") {
              $suma_diaria_paypal = $suma_diaria_paypal + $row['total'] + $row['total'];
            }

            echo "<td>" . $row['numcliente'] . "</td>";
            echo "<td>" . $row['numrepartidor'] . "</td>";
            echo "<td>" . $row['zona'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['zonaComision'] . "</td>";
            echo "<td>" . $row['formapago'] . "</td>";
            echo "<td>" . $row['bs'] . "</td>";
            echo "<td>" . $row['usd'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo '</tr>';
          }
        }

        ?>
      </table>

      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL DÍA: BANESCO</h2>
        <thead>
          <tr>

            <th scope="col">BS</th>
            <th scope="col">USD</th>


          </tr>
        </thead>

        <?php
        //date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["day"] === $fecha_actual["day"]) {

            if ($row['formapago'] === "Transferencia") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>

      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL DÍA: EFECTIVO</h2>
        <thead>
          <tr>

            <th scope="col">BS</th>
            <th scope="col">USD</th>


          </tr>
        </thead>

        <?php
        //date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["day"] === $fecha_actual["day"]) {

            if ($row['formapago'] === "Efectivo") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>


      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL DÍA: MIXTO</h2>
        <thead>
          <tr>
            <th scope="col">BS</th>
            <th scope="col">USD</th>
          </tr>
        </thead>

        <?php

        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["day"] === $fecha_actual["day"]) {

            if ($row['formapago'] === "Ambos") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>
      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL DÍA: PAYPAL</h2>
        <thead>
          <tr>
            <th scope="col">BS</th>
            <th scope="col">USD</th>
          </tr>
        </thead>

        <?php

        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["day"] === $fecha_actual["day"]) {

            if ($row['formapago'] === "PayPal") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>
      <br>
      <hr style="border-color: white;">
      <br>
      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL MES: TRANSFERENCIA</h2>
        <thead>
          <tr>
            <th scope="col">BS</th>
            <th scope="col">USD</th>
          </tr>
        </thead>

        <?php
        date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["month"] === $fecha_actual["month"]) {

            if ($row['formapago'] === "Transferencia") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>


      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL MES: EFECTIVO</h2>
        <thead>
          <tr>
            <th scope="col">BS</th>
            <th scope="col">USD</th>
          </tr>
        </thead>

        <?php
        date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["month"] === $fecha_actual["month"]) {

            if ($row['formapago'] === "Efectivo") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>

      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL MES: MIXTO</h2>
        <thead>
          <tr>
            <th scope="col">BS</th>
            <th scope="col">USD</th>
          </tr>
        </thead>

        <?php
        date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["month"] === $fecha_actual["month"]) {

            if ($row['formapago'] === "Ambos") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>
      <table class="table table-dark table-striped table-hover">
        <h2>VENTAS DEL MES: PAYPAL</h2>
        <thead>
          <tr>
            <th scope="col">BS</th>
            <th scope="col">USD</th>
          </tr>
        </thead>

        <?php
        date_default_timezone_set('America/Caracas');
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_bs = 0;
        $suma_diaria_usd = 0;
        $suma_diaria_ambos = 0;
        ?>

        <?php foreach ($conex->query('SELECT * from compras') as $row) { // aca puedes hacer la consulta e iterarla con each. 
        ?>
          <?php $timestamp = date_parse($row['fecha_hora']) ?>

        <?php

          echo '<tr scope="row">';
          if ($timestamp["month"] === $fecha_actual["month"]) {

            if ($row['formapago'] === "PayPal") {
              $suma_diaria_usd = $suma_diaria_usd + $row['usd'];
              $suma_diaria_bs = $suma_diaria_bs + $row['bs'];
            }
          }
        }
        echo "<td>" . $suma_diaria_bs . "</td>";
        echo "<td>" . $suma_diaria_usd . "</td>";

        echo '</tr>';
        ?>
      </table>

      <hr style="border-color: white;">
      <!--<div id="piechart" style="width: 900px; height: 500px;  transform: scale(0.5)"></div>-->



      <table class="table table-dark table-striped table-hover">
        <h2>COMISIONES ACUMULADAS POR DIA</h2>
        <thead>
          <tr>
            <th scope="col">Repartidor</th>
            <th scope="col">Comisión acumulada</th>
          </tr>
        </thead>

        <?php




        foreach ($obtener as $repartidores) {
          echo '<tr scope="row">';
          $acumulado1 = 0;
          //echo $repartidores['nombre'];
          foreach ($comprasPorFecha as $row) {  // aca puedes hacer la consulta e iterarla con each. 
            $timestamp = date_parse($row['fecha_hora']);

            if ($timestamp["day"] === $fecha_actual["day"]) {

              if ($row['numrepartidor'] === $repartidores['telefono']) {

                $acumulado1 = $acumulado1 + $row['zonaComision'];
                //echo $timestamp['day'];
              }
            }
          }
          //echo $acumulado1;
          //echo "&nbsp";

          echo "<td>" . $repartidores['nombre'] . "</td>";
          echo "<td>" . $acumulado1 . "</td>";
          echo '</tr>';
        }

        ?>
      </table>

      <table class="table table-dark table-striped table-hover">
        <h2>COMISIONES ACUMULADAS POR SEMANA</h2>
        <thead>
          <tr>
            <th scope="col">Repartidor</th>
            <th scope="col">Comisión acumulada</th>
          </tr>
        </thead>

        <?php

        $hoy = date("Y-m-d H:i:s");
        foreach ($conex->query("SELECT WEEK('$hoy',5)") as $prueba) {
        }

        //echo $prueba["WEEK('$hoy')"];
        //echo " ";

        foreach ($obtener as $repartidores) {
          echo '<tr scope="row">';
          $acumulado1 = 0;
          //echo $repartidores['nombre'];
          foreach ($comprasPorFecha as $row) {  // aca puedes hacer la consulta e iterarla con each.
            $cadena = $row['fecha_hora'];
            foreach ($conex->query("SELECT WEEK('$cadena',5)") as $semana) {

              if ($prueba["WEEK('$hoy',5)"] ==  $semana["WEEK('$cadena',5)"]) {

                if ($row['numrepartidor'] === $repartidores['telefono']) {

                  $acumulado1 = $acumulado1 + $row['zonaComision'];

                  if ($timestamp["day"] === $fecha_actual["day"]) {

                    //echo $timestamp['day'];
                  }
                }
              }
            }
          }
          //echo $acumulado1;
          //echo "&nbsp";

          echo "<td>" . $repartidores['nombre'] . "</td>";
          echo "<td>" . $acumulado1 . "</td>";
          echo '</tr>';
        }

        ?>
      </table>


      <table class="table table-dark table-striped table-hover">
        <h2>COMISIONES ACUMULADAS POR MES</h2>
        <thead>
          <tr>

            <th scope="col">Repartidor</th>
            <th scope="col">Comisión acumulada</th>


          </tr>
        </thead>

        <?php




        foreach ($obtener as $repartidores) {
          echo '<tr scope="row">';
          $acumulado1 = 0;
          //echo $repartidores['nombre'];
          foreach ($comprasPorFecha as $row) {  // aca puedes hacer la consulta e iterarla con each. 
            $timestamp = date_parse($row['fecha_hora']);
            $cadena = $row['fecha_hora'];

            if ($timestamp["month"] === $fecha_actual["month"]) {

              if ($row['numrepartidor'] === $repartidores['telefono']) {

                $acumulado1 = $acumulado1 + $row['zonaComision'];
                //echo $timestamp['day'];
              }
            }
          }
          //echo $acumulado1;
          //echo "&nbsp";

          echo "<td>" . $repartidores['nombre'] . "</td>";
          echo "<td>" . $acumulado1 . "</td>";
          echo '</tr>';
        }





        ?>
      </table>
    </main>
    <a href="./excel.php">
      <button type='button' class='btn btn-sm btn-success btn-block'>
        <h3>DESCARGAR HISTÓRICO MENSUAL</h3>
      </button>
    </a>
    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">Neurona Servicios</a></p>
      </div>
    </footer>
  </div>





</body>

</html>