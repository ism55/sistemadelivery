<?php 

include('delivery.php');

$sql = "SELECT SUM(ventacombo1) AS total_combo1, SUM(ventacombo2) AS total_combo2 from compras";

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
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Chinodelivery</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">
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
  <link href="cover.css" rel="stylesheet">


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
          }
          

            echo "['Combo Duo 1',     ".$suma_combo1."],";
            echo "['Combo Duo 2',     ".$suma_combo2."]";
?>


 
        ]);

        var options = {
          title: 'Combos vendidos',
          backgroundColor: { fill:'transparent' }
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




    </main>

    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">@Neurona.Servicios</a></p>
      </div>
    </footer>
  </div>

</body>
</html>


