<?php

header("Content-Type: application/vnd.ms-excel; charset-iso-8859-1");
header("Content-Disposition: attachment; filename= historico.xls");
?>


<?php

include('delivery.php');

$sql = "SELECT SUM(total) AS total_total, SUM(bs) AS total_bs, SUM(usd) AS total_usd, numrepartidor from compras";

$resultado  = $conex->query($sql);


$cons = "SELECT * FROM repartidores";
$obtener = $conex->query($cons);

$comprasPorFecha = $conex->query(' SELECT * FROM `compras` ORDER BY `compras`.`fecha_hora` DESC');



date_default_timezone_set('America/Caracas');

$fecha_actual = date_parse(date("Y-m-d H:i:s"));
?>

<table>
    <h2>VENTAS DEL MES</h2>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CLIENTE</th>
            <th scope="col">REPARTIDOR</th>
            <th scope="col">ZONA</th>
            <th scope="col">UBICACIÓN</th>
            <th scope="col">COMISIÓN</th>
            <th scope="col">MÉTODO DE PAGO</th>
            <th scope="col">MONTO EN BS</th>
            <th scope="col">MONTO EN USD</th>
            <th scope="col">TOTAL</th>
            <th scope="col">FECHA</th>

        </tr>
    </thead>

    <?php foreach ($comprasPorFecha as $row) {  // aca puedes hacer la consulta e iterarla con each. 
        $timestamp = date_parse($row['fecha_hora']);

        echo '<tr scope="row">';
        if ($timestamp["month"] === $fecha_actual["month"]) {

            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['numcliente'] . "</td>";
            echo "<td>" . $row['numrepartidor'] . "</td>";
            echo "<td>" . $row['zona'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['zonaComision'] . "</td>";
            echo "<td>" . $row['formapago'] . "</td>";
            echo "<td>" . $row['bs'] . "</td>";
            echo "<td>" . $row['usd'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "<td>" . $row['fecha_hora'] . "</td>";
            echo '</tr>';
        }
    }

    ?>
</table>