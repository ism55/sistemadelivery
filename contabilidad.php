<?php 

include('delivery.php');

$sql = "SELECT SUM(ventacombo1) AS total_combo1, SUM(ventacombo2) AS total_combo2, SUM(ventacombo3) AS total_combo3 from compras";

$resultado  = $conex->query($sql);


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


  <head>
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
            <h3 class="masthead-brand">ChinoDeliveryApp</h3>
            <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link" href="./home.php">Compras</a>
              <a class="nav-link active" href="./contabilidad.php">Contabilidad</a>
            </nav>
          </div>
        </header>

        <main role="main" class="inner cover">



          <div id="piechart" style="width: 900px; height: 500px;"></div>

          <table class="table table-dark table-striped table-hover">
            <h1>VENTAS DEL DIA</h1>
            <thead>
              <tr>

                <th scope="col">TRANSFERENCIA Y PAGO MOVIL</th>
                <th scope="col">EFECTIVO</th>
                <th scope="col">AMBOS</th>

              </tr>
            </thead>

            <?php 
            date_default_timezone_set('America/Caracas'); 
            $fecha_actual = date_parse(date("Y-m-d H:i:s"));
            $suma_diaria_efectivo=0;
            $suma_diaria_transfer=0;
            $suma_diaria_ambos=0;
            ?>

            <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
              <?php $timestamp = date_parse($row['fecha_hora']) ?> 

              <?php 

              echo '<tr scope="row">';
              if ($timestamp["day"] === $fecha_actual["day"]){


               if ($row['formapago'] === "Efectivo"){
                $suma_diaria_efectivo = $suma_diaria_efectivo + $row['totalcombo1'] + $row['totalcombo2'];
              }

              if ($row['formapago'] === "Transferencia"){
                $suma_diaria_transfer = $suma_diaria_transfer + $row['totalcombo1'] + $row['totalcombo2'];
              }



              if ($row['formapago'] === "Ambos"){
                $suma_diaria_ambos = $suma_diaria_ambos + $row['totalcombo1'] + $row['totalcombo2'];
              }




            }


          }
          echo "<td>".$suma_diaria_transfer."</td>" ;
          echo "<td>".$suma_diaria_efectivo ."</td>" ;
          echo "<td>".$suma_diaria_ambos."</td>" ;
          echo '</tr>';
          ?>
        </table>


        <table class="table table-dark table-striped table-hover">
          <h1>VENTAS DEL MES</h1>
          <thead>
            <tr>

              <th scope="col">TRANSFERENCIA Y PAGO MOVIL</th>
              <th scope="col">EFECTIVO</th>
              <th scope="col">AMBOS</th>

            </tr>
          </thead>

          <?php 
          date_default_timezone_set('America/Caracas'); 
          $fecha_actual = date_parse(date("Y-m-d H:i:s"));
          $suma_mensual_efectivo=0;
          $suma_mensual_transfer=0;
          $suma_mensual_ambos=0;
          ?>

          <?php foreach ($conex->query('SELECT * from compras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
            <?php $timestamp = date_parse($row['fecha_hora']) ?> 
            
            <?php 

            echo '<tr scope="row">';
            if ($timestamp["month"] === $fecha_actual["month"]){


             if ($row['formapago'] === "Efectivo"){
              $suma_mensual_efectivo = $suma_mensual_efectivo + $row['totalcombo1'] + $row['totalcombo2'];
            }

            if ($row['formapago'] === "Transferencia"){
              $suma_mensual_transfer = $suma_mensual_transfer + $row['totalcombo1'] + $row['totalcombo2'];
            }



            if ($row['formapago'] === "Ambos"){
              $suma_mensual_ambos = $suma_mensual_ambos + $row['totalcombo1'] + $row['totalcombo2'];
            }




          }


        }
        echo "<td>".$suma_mensual_transfer."</td>" ;
        echo "<td>".$suma_mensual_efectivo ."</td>" ;
        echo "<td>".$suma_mensual_ambos."</td>" ;
        echo '</tr>';
        ?>
      </table>




    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">@Neurona.Servicios</a></p>
      </div>
    </footer>
  </div>

</body>
</html>


