<?php 


$cliente		=	$_POST['cliente'];
$delivery		=	$_POST['delivery'];
$zona			=	$_POST['zona'];
$formapago		=	$_POST['formaRadio'];
$combo1			=	$_POST['combo1'];
$totalcombo1	=	$_POST['totalcombo1'];
$combo2			=	$_POST['combo2'];
$totalcombo2	=	$_POST['totalcombo2'];
$combo3			=	$_POST['combo3'];
$totalcombo3	=	$_POST['totalcombo3'];		


include('delivery.php');

$rs = mysqli_query($conex,"SELECT MAX(id) AS id FROM compras");
if ($row = mysqli_fetch_row($rs)) {
$id = trim($row[0]);
}


$sql = "INSERT INTO compras VALUES ('$id'+1,'$cliente', '$delivery','$zona','$formapago','$combo1','$totalcombo1','$combo2','$totalcombo2','$combo3','$totalcombo3',CURRENT_TIMESTAMP)";

if (mysqli_query($conex, $sql)) {
      echo "<script language='javascript'>alert('Registro Correcto')</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conex);
}
mysqli_close($conex);



 ?>