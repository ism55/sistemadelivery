<?php


$cliente		=	$_POST['cliente'];
$delivery		=	$_POST['delivery'];
$zona			=	$_POST['nombreSector'];
$zonaComision	= 	$_POST['valorSector'];
$generico		=	$_POST['generico'];
$genericoValor	=	$_POST['genericoValor'];
$direccion        =     $_POST['zona'];
$formapago		=	$_POST['formaRadio'];
$total		=     $_POST['inputotal'];
$bs	=	$_POST['bolivares'];
$usd		=	$_POST['dolares'];


include('delivery.php');

$rs = mysqli_query($conex, "SELECT MAX(id) AS id FROM compras");
if ($row = mysqli_fetch_row($rs)) {
	$id = trim($row[0]);
}

$zona = rtrim($zona);
$zona = ltrim($zona);




if ($generico != '' || $genericoValor != '') {
	$direccion = $generico;
	$zonaComision = $genericoValor;
} else {
	foreach ($conex->query(' SELECT * FROM `zonas`') as $fila) {

		if ($fila['destino'] == $zona) {
			echo $fila['Delivery'];
			$zonaComision = $fila['Delivery'];
		}
	}
}


$sql = "INSERT INTO compras VALUES ('$id'+1,'$cliente', '$delivery','$direccion','$zona','$formapago','$bs','$usd','$total',CURRENT_TIMESTAMP,'$zonaComision')";

if (mysqli_query($conex, $sql)) {
	echo "<script language='javascript'>alert('Registro Correcto')</script>";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conex);
}
mysqli_close($conex);
