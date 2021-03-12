<?php 

include('delivery.php');

$sql = "SELECT numrepartidor from compras";
$resultado  = $conex->query($sql);
if ($resultado) {
	//echo "Query correcto";

} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conex);
}

$cons = "SELECT * FROM repartidores";
$obtener= $conex->query($cons);


$conszonas = "SELECT * FROM zonas";
$obtenerzonas= $conex->query($conszonas);

if ($obtenerzonas) {
	//echo "Query correcto";
} else {
	echo "Error: " . $conszonas . "<br>" . mysqli_error($conex);
}

$constasa = "SELECT tasa from tasadeldia WHERE fecha_hora=(SELECT MAX(fecha_hora) FROM tasadeldia)";
$restasa  = $conex->query($constasa);


if ($restasa) {
	//echo "Query correcto";
} else {
	echo "Error: " . $constasa . "<br>" . mysqli_error($conex);
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
	<meta name="viewport" content="initial-scale=1">
	<title>Chinodelivery</title>
	<link rel="icon" href=".\img\logo.png" type="image/png" />
	<link rel="canonical" href="./estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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




	
	<header class="masthead mb-auto">
		<div class="inner">

			<img src="./img/logo.png" width="100em" height="100em" class="masthead-brand">
			<nav class="nav nav-masthead justify-content-center">
				<a class="nav-link active" href="./home.php">COMPRAS</a>
				<a class="nav-link" href="./contabilidad.php">CONTABILIDAD</a>
				<a class="nav-link" href="./menu.php">PRODUCTOS</a>
			</nav>
		</div>
	</header>

	<div class="row w-100 p-3">
		<div class="col">
			<h1 class="cover-heading">Sistema de Gestión</h1>
			<p class="lead">Registra a continuación los datos de la compra</p>
		</div>
	</div>
	<form class="form" action="registrar_tasa.php" method="POST" onsubmit="alert('Registrando tasa')">
		<div class="w-25">
			<label><h4>Tasa del día</h4></label>
			<input id="tasaDia" class="form-control" type="number" name="registrotasa" min="0" placeholder="Bs" 
			<?php foreach ( $restasa as $row_tasa){ ?>

				value=<?php echo "'".$row_tasa['tasa']."'"?>
				

				

			<?php } ?>
			
			>
			<button type="submit" class="btn btn-sm btn-success btn-block">Registrar Tasa</button>

		</div>
	</form>
	<form class="form" id="formulario" onsubmit="imprSelec('comboslista');var option =  $('option:selected', '#inputSector'); var name = $('option:selected', '#inputSector')[0].innerHTML; $('option:selected', '#inputSector').val(name);$.post('registrar.php', $('#formulario').serialize());">

		<main>
			
			<section>
				<div style="float:left; min-height: 50vh;" class="w-50 p-3">
					<label for="inputCliente" class="" style="float:left"><br><h6>Número de teléfono cliente</h6></label>
					<input type="tel" id="inputCliente" class="form-control" placeholder="Número de teléfono cliente"  autofocus name="cliente" required>

					

					<label for="inputDeli" class="" style="float:left"><br><h6>Número de teléfono delivery</h6></label>
					<select name="delivery" class="form-control" id="inputDeli">
						<option value="0">Ninguno</option>

						<?php foreach ( $obtener as $opciones){ ?>

							<option value=<?php echo "'".$opciones['telefono']."'"?>>
								<?php echo $opciones['nombre'].": ".$opciones['telefono']?>

							</option>

						<?php } ?>

					</select>
					

					<label for="inputSector" class="" style="float:left"><br><h6>Zona del envío</h6></label>
					
					<select name="sector" class="form-control" id="inputSector">
						<option value="0" name="Gratis">Gratis</option>

						<?php foreach ( $obtenerzonas as $row_zona){ ?>

							<option name=<?php echo "'".$row_zona['destino']."'"?> value=<?php echo "'".$row_zona['precio']."'"?>>
								<?php echo $row_zona['destino']?>

							</option>

						<?php } ?>

					</select>

					<label for="inputzona" class="" style="float:left"><br><h6>Ubicación (Google Maps) / Dirección</h6></label>
					<input type="text" id="inputzona" class="form-control" placeholder="Ubicación"  name="zona" required>
					
					<label for="inputzonaextra" class="" style="float:left"><br><h6>Referencia de zona de envio</h6></label>
					<input type="text" id="inputzonaextra" class="form-control" placeholder="Referencia de zona de envio"  autofocus name="zonaextra" required>

					   

					<!--  ################################################################# -->
					<!--                    FORMAS DE PAGO                 -->
					<!--  ################################################################# -->

					<label for="tipoPago" class="" style="float:left"><br><h6>Forma de pago</h6></label>
					<select id="tipoPago" name="formaRadio" class="form-control">
						<option value="">Ninguno</option>
						<option value="Transferencia">Transferencia Banesco o Pago móvil</option>
						<option value="Efectivo">Efectivo</option>
						<option value="Ambos">Mixto</option>
						<option value="PayPal">Paypal</option>
						

					</select>
					
					<label for="inputbolivares" class="" style="float:left"><br><h6>Bolívares</h6></label>
					<input type="number" min="0" step='.01' value="0" id="inputbolivares" class="form-control" placeholder="USD"  name="bolivares" step='.01' required>

					<label for="inputdolares" class="" style="float:left"><br><h6>Dólares</h6></label>
					<input type="number" min="0" step='.01' value ="0" id="inputdolares" class="form-control" placeholder="USD"  name="dolares" step='.01' required>

					<label for="tipoPago" class="" style="float:left"><br><h6>Descuento especial</h6></label>
					<select id="descuento" name="selectDescuento" class="form-control">
						<option value="1" name="0%">Ninguno</option>
						<option value="0.95" name="5%">5%</option>
						<option value="0.90" name="10%">10%</option>
						<option value="0.85" name="15%">15%</option>
						<option value="0.80" name="20%">20%</option>
						

					</select>

					

					<input type="number" value="0" min="0" id="inputotal" class="form-control" name="inputotal"  step='.01' hidden>


					<br>
					<h5>CULMINAR PEDIDO</h5>
					<br>
					<div class="container">
						<!--  ################################################################# -->
						<!--                    IMPRIMIR ORDEN                  -->
						<!--  ################################################################# -->
						<hr>
						<div class="row form-group">
							<button type="button" class="btn btn-sm btn-primary btn-block" onClick="imprSelec('comboslista')">Imprimir orden</button>
						</div>
						<!--  ################################################################# -->
						<!--                    REGISTRAR ORDEN                 -->
						<!--  ################################################################# -->
						<hr>
						<div class="row form-group">
							<button type="submit" id="cargar" class="btn btn-sm btn-warning btn-block">Cargar a Base de Datos</button>
						</div>

					</div> 
				</div>

				<div style="float:left; min-height:50vh" class="w-50 p-3">
					
					<!--  ################################################################# -->
					<!--                    RECIBO DE COMPRA          -->
					<!--  ################################################################# -->
					<div class="">
						

						<div class="card border-dark mb-3 " style="max-width: 30rem;">
							<a href='./home.php'><button type='button' class='btn btn-sm btn-warning btn-block'><h4>REFRESCAR PÁGINA</h4></button></a>
							<div class="card-header text-dark">
								<h5 class="card-title">Datos del pedido</h5></div>
								<div class="card-body text-dark">



									<div class="container-fluid" id="factura" style="text-align: justify;">
										<div class="row">
											<div class="col">
												<span>Número del cliente: </span>
											</div>
											<div class="col">
												<span id="numCliente"></span><br>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<span>Número del repartidor: </span>
											</div>
											<div class="col">
												<span id="numRepartidor"></span><br>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<span>Zona: </span>
											</div>
											<div class="col">
												<span id="nombreZona"></span><br>
											</div>
										</div>
										
										<div class="row">
											<div class="col">
												<span>Ubicación: </span>
											</div>
											<div class="col">
												<span id="linkMapa"></span><br>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span>Ubicación datos extras: </span>
											</div>
											<div class="col">
												<span id="zonaextra"></span><br>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<span>Forma de pago: </span>
											</div>
											<div class="col">
												<span id="formaPago"></span><br>
											</div>
										</div>


										<div class="row">
											<div class="col">
												<span>Pedido: </span>
											</div>
											<div class="col">
												<div id="comboslista">
													<div class="row"><div id="listaCombo1"></div></div>
													<div class="row"><div id="listaCombo2"></div></div>
													<div class="row"><div id="listaCombo3"></div></div>
													<div class="row"><div id="listaCombo4"></div></div>
													<div class="row"><div id="listaCombo5"></div></div>
													<div class="row"><div id="listaCombo6"></div></div>
													<div class="row"><div id="listaCombo7"></div></div>
													<div class="row"><div id="listaCombo1duo"></div></div>
													<div class="row"><div id="listaCombo2duo"></div></div>
													<div class="row"><div id="listaCombo3duo"></div></div>
													<div class="row"><div id="listaCombo4duo"></div></div>
													<div class="row"><div id="listaCombo5duo"></div></div>
													<div class="row"><div id="listaCombo6duo"></div></div>
													<div class="row"><div id="listaCombo7duo"></div></div>
													<div class="row"><div id="listakombo1"></div></div>
													<div class="row"><div id="listakombo2"></div></div>
													<div class="row"><div id="listakombo3"></div></div>
													<div class="row"><div id="listakombo4"></div></div>
													<div class="row"><div id="listakombo5"></div></div>
													<div class="row"><div id="listakombo6"></div></div>
													<div class="row"><div id="listakombo7"></div></div>
													<div class="row"><div id="listakombo8"></div></div>
													<div class="row"><div id="listavegetariano"></div></div>
													<div class="row"><div id="listapollo"></div></div>
													<div class="row"><div id="listajamon"></div></div>
													<div class="row"><div id="listacerdo"></div></div>
													<div class="row"><div id="listaespecial"></div></div>
													<div class="row"><div id="listacamarones"></div></div>
													<div class="row"><div id="listakowloon"></div></div>
													<div class="row"><div id="listapolloycamarones"></div></div>
													<div class="row"><div id="listalmvegetariano"></div></div>
													<div class="row"><div id="listalmpollo"></div></div>
													<div class="row"><div id="listalmcerdo"></div></div>
													<div class="row"><div id="listalmespecial"></div></div>
													<div class="row"><div id="listalmcamarones"></div></div>
													<div class="row"><div id="listalmpolloycamarones"></div></div>
													<div class="row"><div id="listalmkowloon"></div></div>
													<div class="row"><div id="listalmcarne"></div></div>
													<div class="row"><div id="listapagridulce"></div></div>
													<div class="row"><div id="listapsoya"></div></div>
													<div class="row"><div id="listapcurry"></div></div>
													<div class="row"><div id="listapostras"></div></div>
													<div class="row"><div id="listapajonjoli"></div></div>
													<div class="row"><div id="listapasado"></div></div>
													<div class="row"><div id="listacostras"></div></div>
													<div class="row"><div id="listaccurry"></div></div>
													<div class="row"><div id="listacbrocoli"></div></div>
													<div class="row"><div id="listacvegetales"></div></div>
													<div class="row"><div id="listacostilla"></div></div>
													<div class="row"><div id="listacerdoa"></div></div>
													<div class="row"><div id="listacerdosyp"></div></div>
													<div class="row"><div id="listacerdocurry"></div></div>
													<div class="row"><div id="listacerdoostra"></div></div>
													<div class="row"><div id="listalumpias"></div></div>
													<div class="row"><div id="listaracionlumpias"></div></div>
													<div class="row"><div id="listawantonf"></div></div>
													<div class="row"><div id="listafideoss"></div></div>
													<div class="row"><div id="listafuyong"></div></div>
													<div class="row"><div id="listacostillaunidad"></div></div>
													<div class="row"><div id="listarefresco2"></div></div>
													<div class="row"><div id="listarefrescol"></div></div>
													<div class="row"><div id="listarefresco1"></div></div>
													<div class="row"><div id="listalipton"></div></div>
													<div class="row"><div id="listaagua6"></div></div>
													<div class="row"><div id="listapanc"></div></div>
													<div class="row"><div id="listasopaw"></div></div>
													<div class="row"><div id="listaswantonmien"></div></div>
													<div class="row"><div id="listacsvegetales"></div></div>
													<div class="row"><div id="listacspollo"></div></div>
													<div class="row"><div id="listacscerdo"></div></div>
													<div class="row"><div id="listacscarne"></div></div>
													<div class="row"><div id="listacscamarones"></div></div>
													<div class="row"><div id="listacspolloyc"></div></div>
													<div class="row"><div id="listacsjamon"></div></div>
													<div class="row"><div id="listacsespecial"></div></div>
													<div class="row"><div id="listacskowloon"></div></div>
													<div class="row"><div id="listacomboclasico1"></div></div>
													<div class="row"><div id="listacomboclasico2"></div></div>
													<div class="row"><div id="listacombosuper1"></div></div>
													<div class="row"><div id="listacombosuper2"></div></div>
													<div class="row"><div id="listacombosuper3"></div></div>
													<div class="row"><div id="listacmvegetariano"></div></div>
													<div class="row"><div id="listacmpollo"></div></div>
													<div class="row"><div id="listacmcerdo"></div></div>
													<div class="row"><div id="listacmespecial"></div></div>
													<div class="row"><div id="listacmcamarones"></div></div>
													<div class="row"><div id="listacmpolloycamarones"></div></div>
													<div class="row"><div id="listacmkowloon"></div></div>
													<div class="row"><div id="listacmcarne"></div></div>
													<div class="row"><div id="listaitem1"></div></div>
													<div class="row"><div id="listaitem2"></div></div>
													<div class="row"><div id="listaitem3"></div></div>
													<div class="row"><div id="listaitem4"></div></div>
													<div class="row"><div id="listaitem5"></div></div>													
												</div><br>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span>Subtotal: </span>
											</div>
											<div class="col">
												<span id="subtotalCompra"></span><br>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span>Costo del Delivery: </span>
											</div>
											<div class="col">
												<span id="pagoDelivery"></span><br>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span>Total: </span>
											</div>
											<div class="col">
												<span id="totalCompra"></span><br>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span>Pago en Bs: </span>
											</div>
											<div class="col">
												<span id="pagoBs"></span><br>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<span>Pago en USD: </span>
											</div>
											<div class="col">
												<span id="pagoUSD"></span><br>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<span>Cambio: </span>
											</div>
											<div class="col">
												<span id="pagoFaltante"></span><br>
											</div>
										</div>
										
									</div>
									<a href="#" class="card-link text-info" onClick='CopyToClipboard("factura")'>Copiar texto</a>
									<a href="#"  target="_blank" id="enlaceCliente" class="card-link text-info" onClick='SendToClient()'>Enviar a Cliente</a>
									<a href="#"  target="_blank" id="enlaceDelivery" class="card-link text-info" onClick='SendToDelivery()'>Enviar a Repartidor</a>
									<a href="#"  target="_blank" id="enlaceCliente2" class="card-link text-info" onClick='SendToClient2()'>Cambio Cliente</a>
								</div>
							</div>
						</div>

					</div>

				</div>

			</section>

		</main>







		<section>
			<div class="container-fluid">
				<div id="accordion">
					<div class="row w-100 p-3">
						<div class="col">
							<!--  ################################################################# -->
							<!--                   MEGA COMBOS                 -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Mega Combos
									</button>
								</div>
								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                   MEGA COMBO #1                  -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo1mas" class="col-form-label"> Mega Combo 1</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo1mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_combo1menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo1" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo1" id="combo1" class="cantCombo1 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo1" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalcombo1" id="totalcombo1" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   MEGA COMBO #2                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo2mas" class="col-form-label">Mega Combo 2</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo2mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo2menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo2" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo2" class="cantCombo2 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo2" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo2" id="totalcombo2" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   MEGA COMBO #3                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo3mas" class="col-form-label"> Mega Combo 3</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo3mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo3menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo3" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo3" class="cantCombo3 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo3" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo3" id="totalcombo3" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   MEGA COMBO #4                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo4mas" class="col-form-label"> Mega Combo 4</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo4mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo4menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo4" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo4" class="cantCombo4 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo4" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo4" id="totalcombo4" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   MEGA COMBO #5                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo5mas" class="col-form-label"> Mega Combo 5</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo5mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo5menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo5" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo5" class="cantCombo5 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo5" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo5" id="totalcombo5" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   MEGA COMBO #6                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo6mas" class="col-form-label"> Mega Combo 6</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo6mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo6menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo6" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo6" class="cantCombo6 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo6" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo6" id="totalcombo6" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   MEGA COMBO #7                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo7mas" class="col-form-label"> Mega Combo 7</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo7mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo7menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo7" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo7" class="cantCombo7 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo7" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo7" id="totalcombo7" class=" form-control" readonly>
												</div>
											</div>

										</div>
									</div>  
								</div>
							</div>
						</div>

						<div class="col">
							<!--  ################################################################# -->
							<!--                    COMBOS  DUOS               -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapseduo" aria-expanded="true" aria-controls="collapseduo">
									Combos Duos
									</button>	
								</div>
								<div id="collapseduo" class="collapse" aria-labelledby="headingduo" data-parent="#accordion">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                    COMBO DUO #1                  -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo1duomas" class="col-form-label">  Combo Duo 1</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo1duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_combo1duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo1duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo1duo" id="combo1duo" class="cantCombo1duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo1duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalcombo1duo" id="totalcombo1duo" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    COMBO DUO #2                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo2duomas" class="col-form-label"> Combo Duo 2</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo2duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo2duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo2duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo2duo" class="cantCombo2duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo2duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo2duo" id="totalcombo2duo" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    COMBO DUO #3                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo3duomas" class="col-form-label">  Combo Duo 3</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo3duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo3duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo3duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo3duo" class="cantCombo3duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo3duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo3duo" id="totalcombo3duo" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                    COMBO DUO #4                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo4duomas" class="col-form-label"> Combo Duo 4</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo4duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo4duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo4duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo4duo" class="cantCombo4duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo4duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo4duo" id="totalcombo4duo" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                    COMBO DUO #5                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo5duomas" class="col-form-label"> Combo Duo 5</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo5duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo5duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo5duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo5duo" class="cantCombo5duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo5duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo5duo" id="totalcombo5duo" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    COMBO DUO #6                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo6duomas" class="col-form-label">  Combo Duo 6</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo6duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo6duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo6duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo6duo" class="cantCombo6duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo6duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo6duo" id="totalcombo6duo" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                    COMBO DUO #7                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_combo7duomas" class="col-form-label"> Combo Duo 7</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_combo7duomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_combo7duomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="combo7duo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="combo7duo" class="cantCombo7duo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcombo7duo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcombo7duo" id="totalcombo7duo" class=" form-control" readonly>
												</div>
											</div>

										</div>  
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<!--  ################################################################# -->
							<!--                    Kombos               -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsekombo" aria-expanded="true" aria-controls="collapsekombo">
									Kombos
									</button>	
								</div>
								<div id="collapsekombo" class="collapse" aria-labelledby="headingkombo" data-parent="#accordion">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                    Kombo #1                  -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo1mas" class="col-form-label">  Kombo 1</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo1mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_kombo1menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo1" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo1" id="kombo1" class="cantkombo1 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo1" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalkombo1" id="totalkombo1" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    kombo #2                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo2mas" class="col-form-label"> kombo 2</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo2mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo2menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo2" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo2" class="cantkombo2 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo2" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo2" id="totalkombo2" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    kombo #3                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo3mas" class="col-form-label">  kombo 3</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo3mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo3menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo3" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo3" class="cantkombo3 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo3" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo3" id="totalkombo3" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   kombo #4                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo4mas" class="col-form-label"> kombo 4</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo4mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo4menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo4" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo4" class="cantkombo4 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo4" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo4" id="totalkombo4" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   kombo #5                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo5mas" class="col-form-label"> kombo 5</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo5mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo5menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo5" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo5" class="cantkombo5 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo5" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo5" id="totalkombo5" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   kombo #6                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo6mas" class="col-form-label"> kombo 6</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo6mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo6menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo6" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo6" class="cantkombo6 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo6" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo6" id="totalkombo6" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   kombo #7                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo7mas" class="col-form-label"> kombo 7</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo7mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo7menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo7" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo7" class="cantkombo7 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo7" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo7" id="totalkombo7" class=" form-control" readonly>
												</div>
											</div><!--  ################################################################# -->
											<!--                   kombo #8                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kombo8mas" class="col-form-label"> kombo 8</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kombo8mas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kombo8menos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kombo8" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kombo8" class="cantkombo8 form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkombo8" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkombo8" id="totalkombo8" class=" form-control" readonly>
												</div>
											</div>
										</div>  
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<!--  ################################################################# -->
							<!--                   Arroz frito               -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsearroz" aria-expanded="true" aria-controls="collapsearroz">
										Arroz frito
									</button>
									
								</div>
								<div id="collapsearroz" class="collapse" aria-labelledby="headingarroz" data-parent="#accordion">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                   Vegetariano                 -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_vegetarianomas" class="col-form-label"> Arroz frito vegetariano</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_vegetarianomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_vegetarianomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="vegetariano" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="vegetariano" id="vegetariano" class="cantvegetariano form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalvegetariano" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalvegetariano" id="totalvegetariano" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    Arroz con pollo                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_pollomas" class="col-form-label"> Arroz frito con pollo</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_pollomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_pollomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="pollo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="pollo" class="cantpollo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpollo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpollo" id="totalpollo" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    Arroz frito con Jamon                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_jamonmas" class="col-form-label">  Arroz frito con jamón</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_jamonmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_jamonmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="jamon" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="jamon" class="cantjamon form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totaljamon" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totaljamon" id="totaljamon" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   Arroz frito con cerdo                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cerdomas" class="col-form-label"> Arroz frito con cerdo</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cerdomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cerdomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cerdo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cerdo" class="cantcerdo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcerdo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcerdo" id="totalcerdo" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   Arroz frito especial                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_especialmas" class="col-form-label"> Arroz frito especial</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_especialmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_especialmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="especial" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="especial" class="cantespecial form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalespecial" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalespecial" id="totalespecial" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                Arroz frito con camarones                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_camaronesmas" class="col-form-label"> Arroz frito con camarones</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_camaronesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_camaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="camarones" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="camarones" class="cantcamarones form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcamarones" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcamarones" id="totalcamarones" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--            Arroz frito con kowloon               -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_kowloonmas" class="col-form-label"> Arroz frito con kowloon</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_kowloonmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_kowloonmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="kowloon" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="kowloon" class="cantkowloon form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalkowloon" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalkowloon" id="totalkowloon" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                Arroz frito con pollo y camarones                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_polloycamaronesmas" class="col-form-label"> Arroz frito con pollo y camarones</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_polloycamaronesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_polloycamaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="polloycamarones" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="polloycamarones" class="cantpolloycamarones form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpolloycamarones" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpolloycamarones" id="totalpolloycamarones" class=" form-control" readonly>
												</div>
											</div>
										</div>  
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>


			<div class="container-fluid">
				<div id="accordion2">
					<div class="row w-100 p-3">
						<div class="col">
							<!--  ################################################################# -->
							<!--                  LomMien               -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapselom" aria-expanded="true" aria-controls="collapselom">		
										LomMien
									</button>
								</div>
								<div id="collapselom" class="collapse" aria-labelledby="headinglom" data-parent="#accordion2">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                 LomMien  Vegetariano                 -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmvegetarianomas" class="col-form-label"> LomMien vegetariano</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmvegetarianomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_lmvegetarianomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmvegetariano" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmvegetariano" id="lmvegetariano" class="cantlmvegetariano form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmvegetariano" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totallmvegetariano" id="totallmvegetariano" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                    LomMien pollo                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmpollomas" class="col-form-label"> LomMien con pollo</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmpollomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmpollomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmpollo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmpollo" class="cantlmpollo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmpollo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmpollo" id="totallmpollo" class=" form-control" readonly>
												</div>
											</div>


											<!--  ################################################################# -->
											<!--                   LomMien con cerdo                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmcerdomas" class="col-form-label"> LomMien con cerdo</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmcerdomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmcerdomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmcerdo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmcerdo" class="cantlmcerdo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmcerdo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmcerdo" id="totallmcerdo" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   LomMien especial                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmespecialmas" class="col-form-label"> LomMien especial</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmespecialmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmespecialmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmespecial" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmespecial" class="cantlmespecial form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmespecial" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmespecial" id="totallmespecial" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                LomMien con camarones                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmcamaronesmas" class="col-form-label"> LomMien con camarones</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmcamaronesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmcamaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmcamarones" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmcamarones" class="cantlmcamarones form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmcamarones" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmcamarones" id="totallmcamarones" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                LomMien con pollo y camarones                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmpolloycamaronesmas" class="col-form-label"> LomMien con pollo y camarones</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmpolloycamaronesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmpolloycamaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmpolloycamarones" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmpolloycamarones" class="cantlmpolloycamarones form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmpolloycamarones" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmpolloycamarones" id="totallmpolloycamarones" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                LomMien con carne                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmcarnemas" class="col-form-label"> LomMien con carne</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmcarnemas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmcarnemenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmcarne" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmcarne" class="cantlmcarne form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmcarne" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmcarne" id="totallmcarne" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                LomMien con kowloon                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lmkowloonmas" class="col-form-label"> LomMien con kowloon</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lmkowloonmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_lmkowloonmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lmkowloon" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lmkowloon" class="cantlmkowloon form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallmkowloon" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totallmkowloon" id="totallmkowloon" class=" form-control" readonly>
												</div>
											</div>

										</div>  
									</div>
								</div>
							</div>

						</div>

						<div class="col">
							<!--  ################################################################# -->
							<!--                  Pollo              -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsepollo" aria-expanded="true" aria-controls="collapsepollo">		
										Pollo
									</button>
									
								</div>
								<div id="collapsepollo" class="collapse" aria-labelledby="headingpollo" data-parent="#accordion2">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                 Pollo agridulce                  -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_pagridulcemas" class="col-form-label"> Pollo agridulce</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_pagridulcemas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_pagridulcemenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="pagridulce" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="pagridulce" id="pagridulce" class="cantpagridulce form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpagridulce" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalpagridulce" id="totalpagridulce" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   Pollo con soya                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_psoyamas" class="col-form-label"> Pollo con soya</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_psoyamas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_psoyamenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="psoya" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="psoya" class="cantpsoya form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpsoya" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpsoya" id="totalpsoya" class=" form-control" readonly>
												</div>
											</div>


											<!--  ################################################################# -->
											<!--                   Pollo con curry                   -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_pcurrymas" class="col-form-label"> Pollo con curry</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_pcurrymas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_pcurrymenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="pcurry" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="pcurry" class="cantpcurry form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpcurry" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpcurry" id="totalpcurry" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   Pollo con ostras                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_postrasmas" class="col-form-label"> Pollo con ostras</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_postrasmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_postrasmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="postras" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="postras" class="cantpostras form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpostras" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpostras" id="totalpostras" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                Pollo con ajonjoli y miel                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_pajonjolimas" class="col-form-label"> Pollo con ajonjolí y miel </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_pajonjolimas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_pajonjolimenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="pajonjoli" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="pajonjoli" class="cantpajonjoli form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpajonjoli" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpajonjoli" id="totalpajonjoli" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                Pollo con asado cantones                -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_pasadomas" class="col-form-label"> Pollo con asado cantonés </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_pasadomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_pasadomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="pasado" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="pasado" class="cantpasado form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpasado" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpasado" id="totalpasado" class=" form-control" readonly>
												</div>
											</div>

										</div>  
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<!--  ################################################################# -->
							<!--                  Carne             -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsecarne" aria-expanded="true" aria-controls="collapsecarne">		
											Carne
									</button>
								</div>
								<div id="collapsecarne" class="collapse" aria-labelledby="headingcarne" data-parent="#accordion2">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                 Carne con Ostras                 -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_costrasmas" class="col-form-label"> Carne con ostras</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_costrasmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_costrasmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="costras" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="costras" id="costras" class="cantcostras form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcostras" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalcostras" id="totalcostras" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   Carne con curry                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_ccurrymas" class="col-form-label"> Carne con curry</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_ccurrymas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_ccurrymenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="ccurry" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="ccurry" class="cantccurry form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalccurry" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalccurry" id="totalccurry" class=" form-control" readonly>
												</div>
											</div>


											<!--  ################################################################# -->
											<!--                   Carne con brócoli                   -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cbrocolimas" class="col-form-label"> Carne con brócoli </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cbrocolimas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cbrocolimenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cbrocoli" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cbrocoli" class="cantcbrocoli form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcbrocoli" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcbrocoli" id="totalcbrocoli" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--            Carne con vegetales chinos                  -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cvegetalesmas" class="col-form-label"> Carne con vegetales chinos</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cvegetalesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cvegetalesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cvegetales" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cvegetales" class="cantcvegetales form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcvegetales" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcvegetales" id="totalcvegetales" class=" form-control" readonly>
												</div>
											</div>
										</div>  
									</div>
								</div>
							</div>
						</div>

						<div class="col">
							<!--  ################################################################# -->
							<!--                  Cerdo              -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsecerdo" aria-expanded="true" aria-controls="collapsecerdo">		
											Cerdo
									</button>
								</div>
								<div id="collapsecerdo" class="collapse" aria-labelledby="headingcerdo" data-parent="#accordion2">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                 Costilla                  -->
										<!--  ################################################################# -->
										<div class="">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_costillamas" class="col-form-label">Ración de costilla</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_costillamas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_costillamenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="costilla" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="costilla" id="costilla" class="cantcostilla form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcostilla" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalcostilla" id="totalcostilla" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   Cerdo asado                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cerdoamas" class="col-form-label"> Cerdo asado</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cerdoamas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cerdoamenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cerdoa" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cerdoa" class="cantcerdoa form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcerdoa" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcerdoa" id="totalcerdoa" class=" form-control" readonly>
												</div>
											</div>


											<!--  ################################################################# --> 
											<!--                   Cerdo con sal y pimienta             -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cerdosypmas" class="col-form-label"> Cerdo con sal y pimienta</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cerdosypmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cerdosypmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cerdosyp" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cerdosyp" class="cantcerdosyp form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcerdosyp" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcerdosyp" id="totalcerdosyp" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# --> 
											<!--                   Cerdo con curry             -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cerdocurrymas" class="col-form-label"> Cerdo con curry</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cerdocurrymas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cerdocurrymenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cerdocurry" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cerdocurry" class="cantcerdocurry form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcerdocurry" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcerdocurry" id="totalcerdocurry" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   Cerdo con ostra             -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cerdoostramas" class="col-form-label"> Cerdo con ostra</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cerdoostramas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cerdoostramenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cerdoostra" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cerdoostra" class="cantcerdoostra form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcerdoostra" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcerdoostra" id="totalcerdoostra" class=" form-control" readonly>
												</div>
											</div>

										</div>  
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div id="accordion3">
					<div class="row w-100 p-3">
						<div class="col">
							<!--  ################################################################# -->
							<!--                Otros             -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapseotros" aria-expanded="true" aria-controls="collapseotros">
										Otros
									</button>
								</div>
								<div id="collapseotros" class="collapse" aria-labelledby="headingotros" data-parent="#accordion3">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                Lúmpias                   -->
										<!--  ################################################################# -->
										<div class="container">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_lumpiasmas" class="col-form-label"> Lúmpia</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_lumpiasmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_lumpiasmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="lumpias" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="lumpias" id="lumpias" class="cantlumpias form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totallumpias" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totallumpias" id="totallumpias" class=" form-control" value="0" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                Lúmpias                   -->
											<!--  ################################################################# -->
											
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_racionlumpiasmas" class="col-form-label">Ración Lúmpias</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_racionlumpiasmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_racionlumpiasmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="racionlumpias" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="racionlumpias" id="racionlumpias" class="cantracionlumpias form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalracionlumpias" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalracionlumpias" id="totalracionlumpias" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   Wantón frito                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_wantonfmas" class="col-form-label"> Wantón frito</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_wantonfmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_wantonfmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="wantonf" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="wantonf" class="cantwantonf form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalwantonf" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalwantonf" id="totalwantonf" class=" form-control" readonly>
												</div>
											</div>


											<!--  ################################################################# -->
											<!--                   Fideos singapur                   -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_fideossmas" class="col-form-label"> Fideos singapur</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_fideossmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_fideossmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="fideoss" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="fideoss" class="cantfideoss form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalfideoss" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalfideoss" id="totalfideoss" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   Fu yong                 -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_fuyongmas" class="col-form-label"> Fu yong</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_fuyongmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_fuyongmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="fuyong" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="fuyong" class="cantfuyong form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalfuyong" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalfuyong" id="totalfuyong" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--             pan chino 4 unidades                -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_pancmas" class="col-form-label"> Pan chino 4 unidades </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_pancmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_pancmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="panc" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="panc" class="cantpanc form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalpanc" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalpanc" id="totalpanc" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# -->
											<!--                   Costilla unidad                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_costillaunidadmas" class="col-form-label"> Costilla unidad</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_costillaunidadmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_costillaunidadmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="costillaunidad" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="costillaunidad" class="cantcostillaunidad form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcostillaunidad" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcostillaunidad" id="totalcostillaunidad" class=" form-control" readonly>
												</div>
											</div>
										</div>  
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<!--  ################################################################# -->
							<!--                  Sopa              -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsesopa" aria-expanded="true" aria-controls="collapsesopa">
										Sopa
									</button>
								</div>
								<div id="collapsesopa" class="collapse" aria-labelledby="headingsopa" data-parent="#accordion3">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--               Sopa Wantón                 -->
										<!--  ################################################################# -->
										<div class="container">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_sopawmas" class="col-form-label">Sopa wantón</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_sopawmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_sopawmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="sopaw" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="sopaw" id="sopaw" class="cantsopaw form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalsopaw" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalsopaw" id="totalsopaw" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                  Sopa wantón Mien                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_swantonmienmas" class="col-form-label"> Sopa wantón mien</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_swantonmienmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_swantonmienmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="swantonmien" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="swantonmien" class="cantswantonmien form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalswantonmien" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalswantonmien" id="totalswantonmien" class=" form-control" readonly>
												</div>
											</div>
										</div>  
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<!--  ################################################################# -->
							<!--                  Chop Suey              -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsechop" aria-expanded="true" aria-controls="collapsechop">
										Chop Suey
									</button>
								</div>
								<div id="collapsechop" class="collapse" aria-labelledby="headingchop" data-parent="#accordion3">
									<div class="card-body text-dark">
										<!--  ################################################################# -->
										<!--                 Chop suey de vegetales                  -->
										<!--  ################################################################# -->
										<div class="container">
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_csvegetalesmas" class="col-form-label">Chop Suey de vegetales</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_csvegetalesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label  class="col-form-label">Del</label>
													<button type="button" id="btn_csvegetalesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="csvegetales" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="csvegetales" id="csvegetales" class="cantcsvegetales form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcsvegetales" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' name="totalcsvegetales" id="totalcsvegetales" class=" form-control" value="0" readonly>
												</div>
											</div>

											<!--  ################################################################# -->
											<!--                   Chop suey de pollo                  -->
											<!--  ################################################################# -->

											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cspollomas" class="col-form-label"> Chop Suey de pollo</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cspollomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cspollomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cspollo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cspollo" class="cantcspollo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcspollo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcspollo" id="totalcspollo" class=" form-control" readonly>
												</div>
											</div>


											<!--  ################################################################# --> 
											<!--                   Chop suey de cerdo             -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cscerdomas" class="col-form-label"> Chop Suey de cerdo</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cscerdomas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cscerdomenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cscerdo" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cscerdo" class="cantcscerdo form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcscerdo" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcscerdo" id="totalcscerdo" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# --> 
											<!--                   Chop suey de carne            -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cscarnemas" class="col-form-label"> Chop Suey de carne</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cscarnemas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cscarnemenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cscarne" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cscarne" class="cantcscarne form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcscarne" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcscarne" id="totalcscarne" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# --> 
											<!--                   Chop suey de camarones            -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cscamaronesmas" class="col-form-label"> Chop Suey de camarones</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cscamaronesmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cscamaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cscamarones" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cscamarones" class="cantcscamarones form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcscamarones" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcscamarones" id="totalcscamarones" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# --> 
											<!--             Chop suey de pollo y camarones            -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cspolloycmas" class="col-form-label"> Chop Suey de pollo y camarones</label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cspolloycmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cspolloycmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cspolloyc" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cspolloyc" class="cantcspolloyc form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcspolloyc" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcspolloyc" id="totalcspolloyc" class=" form-control" readonly>
												</div>
											</div>
											<!--  ################################################################# --> 
											<!--             Chop suey de Jamón            -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_csjamonmas" class="col-form-label"> Chop Suey de jamón </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_csjamonmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_csjamonmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="csjamon" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="csjamon" class="cantcsjamon form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcsjamon" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcsjamon" id="totalcsjamon" class=" form-control" readonly>
												</div>
											</div>
											
											<!--  ################################################################# --> 
											<!--             Chop sueye especial            -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_csespecialmas" class="col-form-label"> Chop Suey especial </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_csespecialmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_csespecialmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="csespecial" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="csespecial" class="cantcsespecial form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcsespecial" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcsespecial" id="totalcsespecial" class=" form-control" readonly>
												</div>
											</div>

											<!--  ################################################################# --> 
											<!--             Chop suey kowloon            -->
											<!--  ################################################################# -->
											<hr>
											<div class="row form-group">
												<div class="col">
													<label for="btn_cskowloonmas" class="col-form-label"> Chop Suey kowloon </label>
												</div>
												<div class="col">
													<label  class="col-form-label">Add</label>
													<button type="button" id="btn_cskowloonmas" class="btn btn-sm btn-success btn-block">+</button>
												</div>
												<div class="col">
													<label class="col-form-label">Del</label>
													<button type="button" id="btn_cskowloonmenos" class="btn btn-sm btn-danger btn-block">-</button>
												</div>
												<div class="col">
													<label for="cskowloon" class="col-form-label">Cantidad</label>
													<input type="number" min="0" step='.01' name="cskowloon" class="cantcskowloon form-control" value="0" readonly>
												</div>
												<div class="col">
													<label for="totalcskowloon" class="col-form-label">Subtotal</label>
													<input type="number" min="0" step='.01' value="0" name="totalcskowloon" id="totalcskowloon" class=" form-control" readonly>
												</div>
											</div>
										</div>    
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<!--  ################################################################# -->
							<!--                 Combos clasicos             -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapseclasico" aria-expanded="true" aria-controls="collapseclasico">
										Combos clásicos
									</button>	
								</div>
								<div id="collapseclasico" class="collapse" aria-labelledby="headingclasico" data-parent="#accordion3">
									<div class="card-body text-dark">
										<!--  ################################################################# --> 
										<!--             combo clasico 1           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_comboclasico1mas" class="col-form-label"> Combo clásico 1</label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_comboclasico1mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_comboclasico1menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="comboclasico1" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="comboclasico1" class="cantcomboclasico1 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcomboclasico1" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcomboclasico1" id="totalcomboclasico1" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--             combo clasico 2           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_comboclasico2mas" class="col-form-label"> Combo clásico 2</label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_comboclasico2mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_comboclasico2menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="comboclasico2" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="comboclasico2" class="cantcomboclasico2 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcomboclasico2" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcomboclasico2" id="totalcomboclasico2" class=" form-control" readonly>
											</div>
										</div>

									</div>  
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container-fluid">
				<div id="accordion4">
					<div class="row w-100 p-3">
						<div class="col">
							<!--  ################################################################# -->
							<!--               Combos  super         -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsesuper" aria-expanded="true" aria-controls="collapsesuper">
										Combos Súper 
									</button>
								</div>
								<div id="collapsesuper" class="collapse" aria-labelledby="headingsuper" data-parent="#accordion4">
									<div class="card-body text-dark">
										<!--  ################################################################# --> 
										<!--                   Combos super 1           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_combosuper1mas" class="col-form-label"> Combo súper 1</label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_combosuper1mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_combosuper1menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="combosuper1" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="combosuper1" class="cantcombosuper1 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcombosuper1" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcombosuper1" id="totalcombosuper1" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Combos super 2           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_combosuper2mas" class="col-form-label"> Combo súper 2</label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_combosuper2mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_combosuper2menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="combosuper2" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="combosuper2" class="cantcombosuper2 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcombosuper2" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcombosuper2" id="totalcombosuper2" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Combos super 3           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_combosuper3mas" class="col-form-label"> Combo súper 3</label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_combosuper3mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_combosuper3menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="combosuper3" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="combosuper3" class="cantcombosuper3 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcombosuper3" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcombosuper3" id="totalcombosuper3" class=" form-control" readonly>
											</div>
										</div>

									</div> 
								</div> 
							</div>
						</div>
						<div class="col">
							<!--  ################################################################# -->
							<!--               Chow Mein         -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsechow" aria-expanded="true" aria-controls="collapsechow">
										Chow Mein 
									</button>
									 
								</div>
								<div id="collapsechow" class="collapse" aria-labelledby="headingchow" data-parent="#accordion4">	
									<div class="card-body text-dark">
										<!--  ################################################################# --> 
										<!--                   chow mein  vegetariano       -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmvegetarianomas" class="col-form-label"> Chow mein vegetariano</label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmvegetarianomas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmvegetarianomenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmvegetariano" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmvegetariano" class="cantcmvegetariano form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmvegetariano" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmvegetariano" id="totalcmvegetariano" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein pollo          -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmpollomas" class="col-form-label"> Chow mein pollo </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmpollomas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmpollomenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmpollo" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmpollo" class="cantcmpollo form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmpollo" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmpollo" id="totalcmpollo" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein cerdo           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmcerdomas" class="col-form-label"> Chow mein cerdo </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmcerdomas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmcerdomenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmcerdo" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmcerdo" class="cantcmcerdo form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmcerdo" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmcerdo" id="totalcmcerdo" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein especial           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmespecialmas" class="col-form-label"> Chow mein especial </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmespecialmas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmespecialmenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmespecial" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmespecial" class="cantcmespecial form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmespecial" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmespecial" id="totalcmespecial" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein camarones           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmcamaronesmas" class="col-form-label"> Chow mein camarones </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmcamaronesmas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmcamaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmcamarones" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmcamarones" class="cantcmcamarones form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmcamarones" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmcamarones" id="totalcmcamarones" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein kowloon           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmkowloonmas" class="col-form-label"> Chow mein kowloon </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmkowloonmas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmkowloonmenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmkowloon" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmkowloon" class="cantcmkowloon form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmkowloon" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmkowloon" id="totalcmkowloon" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein carne           -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmcarnemas" class="col-form-label"> Chow mein carne </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmcarnemas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmcarnemenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmcarne" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmcarne" class="cantcmcarne form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmcarne" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmcarne" id="totalcmcarne" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# --> 
										<!--                   Chow mein pollo y camarones          -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_cmpolloycamaronesmas" class="col-form-label"> Chow mein pollo y camarones </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_cmpolloycamaronesmas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_cmpolloycamaronesmenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="cmpolloycamarones" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="cmpolloycamarones" class="cantcmpolloycamarones form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalcmpolloycamarones" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalcmpolloycamarones" id="totalcmpolloycamarones" class=" form-control" readonly>
											</div>
										</div>


									</div> 
								</div>	
							</div>
						</div>
						
						<div class="col">
							<!--  ################################################################# -->
							<!--                bebidas             -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									<button type=button class="btn btn-link" data-toggle="collapse" data-target="#collapsebebidas" aria-expanded="true" aria-controls="collapsebebidas">
										Bebidas
									</button>
								</div>
								<div id="collapsebebidas" class="collapse" aria-labelledby="headingbebidas" data-parent="#accordion4">
									<div class="card-body text-dark">
										

										<!--  ################################################################# -->
										<!--               Refresco 1.5lt                 -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_refresco2mas" class="col-form-label"> Refresco 1.5 lts </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_refresco2mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_refresco2menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="refresco2" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="refresco2" class="cantrefresco2 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalrefresco2" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalrefresco2" id="totalrefresco2" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# -->
										<!--               Refresco 1lt                 -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_refresco1mas" class="col-form-label"> Refresco 1 lts </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_refresco1mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_refresco1menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="refresco1" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="refresco1" class="cantrefresco1 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalrefresco1" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalrefresco1" id="totalrefresco1" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# -->
										<!--          Liptón (Durazno, limón, verde)                -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_liptonmas" class="col-form-label"> Liptón 1.5 Lts (Durazno, limón, verde) </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_liptonmas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_liptonmenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="lipton" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="lipton" class="cantlipton form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totallipton" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totallipton" id="totallipton" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# -->
										<!--               Refresco lata                 -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_refrescolmas" class="col-form-label"> Refresco lata </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_refrescolmas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_refrescolmenos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="refrescol" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="refrescol" class="cantrefrescol form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalrefrescol" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalrefrescol" id="totalrefrescol" class=" form-control" readonly>
											</div>
										</div>
										<!--  ################################################################# -->
										<!--              Agua 600ml                 -->
										<!--  ################################################################# -->
										<hr>
										<div class="row form-group">
											<div class="col">
												<label for="btn_agua6mas" class="col-form-label"> Agua 600 ml </label>
											</div>
											<div class="col">
												<label  class="col-form-label">Add</label>
												<button type="button" id="btn_agua6mas" class="btn btn-sm btn-success btn-block">+</button>
											</div>
											<div class="col">
												<label class="col-form-label">Del</label>
												<button type="button" id="btn_agua6menos" class="btn btn-sm btn-danger btn-block">-</button>
											</div>
											<div class="col">
												<label for="agua6" class="col-form-label">Cantidad</label>
												<input type="number" min="0" step='.01' name="agua6" class="cantagua6 form-control" value="0" readonly>
											</div>
											<div class="col">
												<label for="totalagua6" class="col-form-label">Subtotal</label>
												<input type="number" min="0" step='.01' value="0" name="totalagua6" id="totalagua6" class=" form-control" readonly>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
									
						<div class="col">
							<!--  ################################################################# -->
							<!--                bebidas             -->
							<!--  ################################################################# -->
							<div class="card">
								<div class="card-header text-dark">
									COMBO PERSONALIZADO
								</div>
								<div class="card-body text-dark">
									

									<!--  ################################################################# -->
									<!--               ITEM 1                 -->
									<!--  ################################################################# -->
									<hr>
									<div class="row form-group">
										<div class="col">
										<label for="item1" class="col-form-label">Item</label>
										<input type="text" name="item1" id="item1" class=" form-control" placeholder="Item 1">
										</div>
										
										<div class="col">
											<label for="totalitem1" class="col-form-label">Subtotal</label>
											<input type="number" min="0" step='.01' value="0" name="totalitem1" id="totalitem1" class=" form-control" >
										</div>
											</div>
									<!--  ################################################################# -->
									<!--               ITEM 2                -->
									<!--  ################################################################# -->
									<hr>
									<div class="row form-group">
										<div class="col">
										<label for="item1" class="col-form-label">Item</label>
										<input type="text" name="item2" id="item2" class=" form-control" placeholder="Item 2">
										</div>

											<div class="col">
											<label for="totalitem2" class="col-form-label">Subtotal</label>
											<input type="number" min="0" step='.01' value="0" name="totalitem2" id="totalitem2" class=" form-control" >
										</div>
									</div>
									<!--  ################################################################# -->
									<!--         ITEM 3              		-->
									<!--  ################################################################# -->
									<hr>
									<div class="row form-group">
										<div class="col">
										<label for="item1" class="col-form-label">Item</label>
										<input type="text" name="item3" id="item3" class=" form-control" placeholder="Item 3">
										</div>
										
										<div class="col">
											<label for="totalitem3" class="col-form-label">Subtotal</label>
											<input type="number" min="0" step='.01' value="0" name="totalitem3" id="totalitem3" class=" form-control" >
										</div>
									</div>
									<!--  ################################################################# -->
									<!--               ITEM 4                -->
									<!--  ################################################################# -->
									<hr>
									<div class="row form-group">
										<div class="col">
										<label for="item4" class="col-form-label">Item</label>
										<input type="text" name="item4" id="item4" class=" form-control" placeholder="Item 4">
										</div>
										
										<div class="col">
											<label for="totalitem4" class="col-form-label">Subtotal</label>
											<input type="number" min="0" step='.01' value="0" name="totalitem4" id="totalitem4" class=" form-control" >
										</div>
									</div>
									<!--  ################################################################# -->
									<!--              ITEM 5                 -->
									<!--  ################################################################# -->
									<hr>
									<div class="row form-group">
										<div class="col">
										<label for="item5" class="col-form-label">Item</label>
										<input type="text" name="item5" id="item5" class=" form-control" placeholder="Item 5">
										</div>
										
										<div class="col">
											<label for="totalitem5" class="col-form-label">Subtotal</label>
											<input type="number" min="0" step='.01' value="0" name="totalitem5" id="totalitem5" class=" form-control" >
										</div>
									</div>
									
								</div>  
							</div>
						</div>
						
					</div>
				</div>
					
			</section>





		</form>

		


		<footer class="mastfoot mt-auto">
			<div class="inner">
				<p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">Neurona Servicios</a></p>
			</div>
		</footer>
		


		<?php include('functions.php'); ?>
	</body>
	</html>


