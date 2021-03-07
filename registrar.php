<?php 


$cliente		=	$_POST['cliente'];
$delivery		=	$_POST['delivery'];
$zona			=	$_POST['sector'];
$direccion        =     $_POST['zona'];
$formapago		=	$_POST['formaRadio'];
$total		=     $_POST['inputotal'];
$bs	=	$_POST['bolivares'];
$usd		=	$_POST['dolares'];

include('delivery.php');

$rs = mysqli_query($conex,"SELECT MAX(id) AS id FROM compras");
if ($row = mysqli_fetch_row($rs)) {
	$id = trim($row[0]);
}


$sql = "INSERT INTO compras VALUES ('$id'+1,'$cliente', '$delivery','$direccion','$zona','$formapago','$bs','$usd','$total',CURRENT_TIMESTAMP)";

if (mysqli_query($conex, $sql)) {
	echo "<script language='javascript'>alert('Registro Correcto')</script>";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conex);
}
mysqli_close($conex);



?>