<?php 

include('delivery.php');

$sql = "SELECT SUM(total) AS total_total, SUM(bs) AS total_bs, SUM(usd) AS total_usd, numrepartidor from compras";

$resultado  = $conex->query($sql);


$cons = "SELECT * FROM repartidores";
$obtener= $conex->query($cons);



if ($resultado) {
      //echo "Query correcto";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conex);
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
  <title>Chinodelivery</title>

  <link rel="canonical" href="./estilos.css">
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


  <script type="text/javascript" src="loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Combo', 'Vendidos'],
        <?php  

        while ($fila =$resultado->fetch_assoc()){
          $suma_combo1  = $fila['total_combo1'];
          $suma_combo2  = $fila['total_combo2'];
          $suma_combo3  = $fila['total_combo3'];
        }
        

        echo "['Combo Duo 1',     ".$suma_combo1."],";
        echo "['Combo Duo 2',     ".$suma_combo2."],";
        echo "['Combo Duo 3',     ".$suma_combo3."]";
        ?>



        ]);

      var options = {
        title: 'Combos vendidos totales',
        backgroundColor: { fill:'transparent' },
        titleTextStyle: { color: 'white', fontSize: '20'},
        legend: {
          "textStyle": {
            color: 'white', 
            fontSize: 15
          }}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  </head>
  <body class="text-center">




    <div class="container">
      <header class="masthead mb-auto">
        <div class="inner">
          <img src="./img/logo.png" width="100em" height="100em" class="masthead-brand">
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="./home.php">COMPRAS</a>
            <a class="nav-link active" href="./contabilidad.php">CONTABILIDAD</a>
            <a class="nav-link" href="./menu.php">PRODUCTOS</a>
          </nav>
        </div>
      </header>
      <div class="row w-100 p-3">
        <div class="col">
         <h1 class="cover-heading">Contabilidad de pedidos</h1>
         <p class="lead">Aquí puede observar el balance de ventas</p>
       </div>
     </div>
     <main role="main" class="inner cover">
       
      <table class="table table-dark table-striped table-hover">
        <h1>VENTAS DE HOY</h1>
        <thead>
          <tr>
            <th scope="col">CLIENTE</th>
            <th scope="col">REPARTIDOR</th>
            <th scope="col">ZONA</th>
            <th scope="col">UBICACIÓN</th>
            <th scope="col">MÉTODO DE PAGO</th>
            <th scope="col">MONTO EN BS</th>
            <th scope="col">MONTO EN USD</th>
            <th scope="col">TOTAL</th>

          </tr>
        </thead>

        <?php 
        date_default_timezone_set('America/Caracas'); 
        $fecha_actual = date_parse(date("Y-m-d H:i:s"));
        $suma_diaria_efectivo=0;
        $suma_diaria_transfer=0;
        $suma_diaria_ambos=0;
        ?>

            <?php foreach ($conex->query(' SELECT * FROM `compras` ORDER BY `compras`.`fecha_hora` DESC') as $row){  // aca puedes hacer la consulta e iterarla con each. 
              $timestamp = date_parse($row['fecha_hora']);

              echo '<tr scope="row">';
              if ($timestamp["day"] === $fecha_actual["day"]){
                if ($row['formapago'] === "Efectivo"){
                  $suma_diaria_efectivo = $suma_diaria_efectivo + $row['total'] + $row['total'];
                }

                if ($row['formapago'] === "Transferencia"){
                  $suma_diaria_transfer = $suma_diaria_transfer + $row['total'] + $row['total'];
                }

                if ($row['formapago'] === "Ambos"){
                  $suma_diaria_ambos = $suma_diaria_ambos + $row['total'] + $row['total'];
                }

                echo "<td>".$row['numcliente']."</td>" ;
                echo "<td>".$row['numrepartidor']."</td>" ;
                echo "<td>".$row['zona']."</td>" ;
                echo "<td>".$row['direccion']."</td>" ;
                echo "<td>".$row['formapago']."</td>" ;
                echo "<td>".$row['bs']."</td>" ;
                echo "<td>".$row['usd']."</td>" ;
                echo "<td>".$row['total']."</td>" ;
                echo '</tr>';
              }
            }
            
            ?>
          </table>

          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL DÍA: TRANSFERENCIA</h1>
            <thead>
              <tr>

                <th scope="col">BS</th>
                <th scope="col">USD</th>
                

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_bs=0;
            $suma_diaria_usd=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["day"] === $fecha_actual["day"]){

                if ($row['formapago'] === "Transferencia"){
                  $suma_diaria_usd = $suma_diaria_usd + $row['usd'] ;
                  $suma_diaria_bs = $suma_diaria_bs + $row['bs'] ;
                }

              }

            }
            echo "<td>".$suma_diaria_bs."</td>" ;
            echo "<td>".$suma_diaria_usd ."</td>" ;
            
            echo '</tr>';
            ?>
          </table>

          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL DÍA: EFECTIVO</h1>
            <thead>
              <tr>

                <th scope="col">BS</th>
                <th scope="col">USD</th>
                

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_bs=0;
            $suma_diaria_usd=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["day"] === $fecha_actual["day"]){

                if ($row['formapago'] === "Efectivo"){
                  $suma_diaria_usd = $suma_diaria_usd + $row['usd'] ;
                  $suma_diaria_bs = $suma_diaria_bs + $row['bs'] ;
                }

              }

            }
            echo "<td>".$suma_diaria_bs."</td>" ;
            echo "<td>".$suma_diaria_usd ."</td>" ;
            
            echo '</tr>';
            ?>
          </table>


          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL DÍA: AMBOS</h1>
            <thead>
              <tr>

                <th scope="col">BS</th>
                <th scope="col">USD</th>
                

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_bs=0;
            $suma_diaria_usd=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["day"] === $fecha_actual["day"]){

                if ($row['formapago'] === "Ambos"){
                  $suma_diaria_usd = $suma_diaria_usd + $row['usd'] ;
                  $suma_diaria_bs = $suma_diaria_bs + $row['bs'] ;
                }

              }

            }
            echo "<td>".$suma_diaria_bs."</td>" ;
            echo "<td>".$suma_diaria_usd ."</td>" ;
            
            echo '</tr>';
            ?>
          </table>
          <br>
          <hr>
          <br>
          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL MES: TRANSFERENCIA</h1>
            <thead>
              <tr>

                <th scope="col">BS</th>
                <th scope="col">USD</th>
                

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_bs=0;
            $suma_diaria_usd=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["month"] === $fecha_actual["month"]){

                if ($row['formapago'] === "Ambos"){
                  $suma_diaria_usd = $suma_diaria_usd + $row['usd'] ;
                  $suma_diaria_bs = $suma_diaria_bs + $row['bs'] ;
                }

              }

            }
            echo "<td>".$suma_diaria_bs."</td>" ;
            echo "<td>".$suma_diaria_usd ."</td>" ;
            
            echo '</tr>';
            ?>
          </table>


          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL MES: EFECTIVO</h1>
            <thead>
              <tr>

                <th scope="col">BS</th>
                <th scope="col">USD</th>
                

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_bs=0;
            $suma_diaria_usd=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["month"] === $fecha_actual["month"]){

                if ($row['formapago'] === "Efectivo"){
                  $suma_diaria_usd = $suma_diaria_usd + $row['usd'] ;
                  $suma_diaria_bs = $suma_diaria_bs + $row['bs'] ;
                }

              }

            }
            echo "<td>".$suma_diaria_bs."</td>" ;
            echo "<td>".$suma_diaria_usd ."</td>" ;
            
            echo '</tr>';
            ?>
          </table>

          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL MES: AMBOS</h1>
            <thead>
              <tr>

                <th scope="col">BS</th>
                <th scope="col">USD</th>
                

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_bs=0;
            $suma_diaria_usd=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["month"] === $fecha_actual["month"]){

                if ($row['formapago'] === "Ambos"){
                  $suma_diaria_usd = $suma_diaria_usd + $row['usd'] ;
                  $suma_diaria_bs = $suma_diaria_bs + $row['bs'] ;
                }

              }

            }
            echo "<td>".$suma_diaria_bs."</td>" ;
            echo "<td>".$suma_diaria_usd ."</td>" ;
            
            echo '</tr>';
            ?>
          </table>

          <!--<div id="piechart" style="width: 900px; height: 500px;  transform: scale(0.5)"></div>-->

        </main>

        <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">Neurona Servicios</a></p>
          </div>
        </footer>
      </div>

    </body>
    </html>


