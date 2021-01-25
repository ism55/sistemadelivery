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
</head>
<body class="text-center">




	<div class="container">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">ChinoDeliveryApp</h3>
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link active" href="./home.php">Compras</a>
					<a class="nav-link" href="./contabilidad.php">Contabilidad</a>
				</nav>
			</div>
		</header>

		<main role="main" class="inner cover">



			<div class="container">
				<div class="row w-100 p-3">
					<div class="col">
						<h1 class="cover-heading">Sistema de Gestión</h1>
						<p class="lead">Registra a continuación los datos de la compra</p>
					</main>
					<form class="form" id="formulario" onsubmit="imprSelec('comboslista');$.post('registrar.php', $('#formulario').serialize()); alert('Registrado')">


						<label for="inputCliente" class="">Número de teléfono cliente</label>
						<input type="tel" id="inputCliente" class="form-control" placeholder="Número de teléfono cliente"  autofocus name="cliente" required>

						<label for="inputDeli" class="">Número de teléfono delivery</label>
						<input type="tel" id="inputDeli" class="form-control" placeholder="Número de teléfono delivery"  name="delivery" required>

						<label for="inputzona" class="">Dirección del envío</label>
						<input type="text" id="inputzona" class="form-control" placeholder="Zona del envío"  name="zona" required>
						<!--  ################################################################# -->
						<!--                    FORMAS DE PAGO                 -->
						<!--  ################################################################# -->

						<p>Forma de pago:</p>
						<div class="form-check">
							<input type="radio" name="formaRadio" value="Transferencia" class="form-check-input" id="rdTransfer" required> 
							<label class="form-check-label" for="rdTransfer">Transferencia o Pago móvil</label>
						</div>
						<div class="form-check">
							<input type="radio" name="formaRadio"  value="Efectivo" class="form-check-input" id="rdEfect"> 
							<label class="form-check-label" for="rdEfect">Efectivo</label>
						</div>
						<div class="form-check">
							<input type="radio" name="formaRadio" value="Ambos" class="form-check-input" id="rdAmbos"> 
							<label class="form-check-label" for="rdAmbos">Ambos</label>
						</div>


						<div class="container">
							<div class="row w-100 p-3">
								<div class="col">
									<!--  ################################################################# -->
									<!--                   MEGA COMBOS                 -->
									<!--  ################################################################# -->
									<div class="card">
										<div class="card-header text-dark">
											Mega Combos
										</div>
										<div class="card-body text-dark">
											<!--  ################################################################# -->
											<!--                   MEGA COMBO #1                  -->
											<!--  ################################################################# -->
											<div class="container">
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo1mas" class="col-form-label"> Mega Combo 1</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo1mas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label  class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo1menos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo1" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo1" id="combo1" class="cantCombo1 form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo1" class="col-form-label">$</label>
														<input type="number" min="0" name="totalcombo1" id="totalcombo1" class=" form-control" value="0" readonly>
													</div>
												</div>

												<!--  ################################################################# -->
												<!--                   MEGA COMBO #2                  -->
												<!--  ################################################################# -->

												<div class="row form-group">
													<div class="col">
														<label for="btn_combo2mas" class="col-form-label">Mega Combo 2</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo2mas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo2menos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo2" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo2" class="cantCombo2 form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo2" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo2" id="totalcombo2" class=" form-control" readonly>
													</div>
												</div>

												<!--  ################################################################# -->
												<!--                   MEGA COMBO #3                  -->
												<!--  ################################################################# -->
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo3mas" class="col-form-label"> Mega Combo 3</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo3mas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo3menos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo3" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo3" class="cantCombo3 form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo3" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo3" id="totalcombo3" class=" form-control" readonly>
													</div>
												</div>
												<!--  ################################################################# -->
												<!--                   MEGA COMBO #4                  -->
												<!--  ################################################################# -->
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo4mas" class="col-form-label"> Mega Combo 4</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo4mas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo4menos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo4" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo4" class="cantCombo4 form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo4" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo4" id="totalcombo4" class=" form-control" readonly>
													</div>
												</div>

												<!--  ################################################################# -->
												<!--                   MEGA COMBO #5                  -->
												<!--  ################################################################# -->
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo5mas" class="col-form-label"> Mega Combo 5</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo5mas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo5menos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo5" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo5" class="cantCombo5 form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo5" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo5" id="totalcombo5" class=" form-control" readonly>
													</div>
												</div>
												<!--  ################################################################# -->
												<!--                   MEGA COMBO #6                  -->
												<!--  ################################################################# -->
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo6mas" class="col-form-label"> Mega Combo 6</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo6mas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo6menos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col-2">
														<label for="combo6" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo6" class="cantCombo6 form-control" value="0" readonly>
													</div>
													<div class="col-2">
														<label for="totalcombo6" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo6" id="totalcombo6" class=" form-control" readonly>
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
											Combos Duos
										</div>
										<div class="card-body text-dark">
											<!--  ################################################################# -->
											<!--                    COMBO DUO #1                  -->
											<!--  ################################################################# -->
											<div class="container">
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo1duomas" class="col-form-label">  Combo Duo 1</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo1duomas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label  class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo1duomenos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo1duo" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo1duo" id="combo1duo" class="cantCombo1duo form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo1duo" class="col-form-label">$</label>
														<input type="number" min="0" name="totalcombo1duo" id="totalcombo1duo" class=" form-control" value="0" readonly>
													</div>
												</div>

												<!--  ################################################################# -->
												<!--                    COMBO DUO #2                  -->
												<!--  ################################################################# -->

												<div class="row form-group">
													<div class="col">
														<label for="btn_combo2duomas" class="col-form-label"> Combo Duo 2</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo2duomas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo2duomenos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo2duo" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo2duo" class="cantCombo2duo form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo2duo" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo2duo" id="totalcombo2duo" class=" form-control" readonly>
													</div>
												</div>

												<!--  ################################################################# -->
												<!--                    COMBO DUO #3                  -->
												<!--  ################################################################# -->
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo3duomas" class="col-form-label">  Combo Duo 3</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo3duomas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo3duomenos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo3duo" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo3duo" class="cantCombo3duo form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo3duo" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo3duo" id="totalcombo3duo" class=" form-control" readonly>
													</div>
												</div>
												<!--  ################################################################# -->
												<!--                    COMBO DUO #4                  -->
												<!--  ################################################################# -->
												<div class="row form-group">
													<div class="col">
														<label for="btn_combo4duomas" class="col-form-label"> Combo Duo 4</label>
													</div>
													<div class="col">
														<label  class="col-form-label">Agregar</label>
														<button type="button" id="btn_combo4duomas" class="btn btn-sm btn-success btn-block">+</button>
													</div>
													<div class="col">
														<label class="col-form-label">Quitar</label>
														<button type="button" id="btn_combo4duomenos" class="btn btn-sm btn-danger btn-block">-</button>
													</div>
													<div class="col">
														<label for="combo4duo" class="col-form-label">Cant</label>
														<input type="number" min="0" name="combo4duo" class="cantCombo4duo form-control" value="0" readonly>
													</div>
													<div class="col">
														<label for="totalcombo4duo" class="col-form-label">$</label>
														<input type="number" min="0" value="0" name="totalcombo4duo" id="totalcombo4duo" class=" form-control" readonly>
													</div>
												</div>

											</div>  
										</div>
									</div>
								</div>

							</div>
						</div>





						<div class="container">
							<!--  ################################################################# -->
							<!--                    IMPRIMIR ORDEN                  -->
							<!--  ################################################################# -->
							<div class="row form-group">
								<button type="button" class="btn btn-sm btn-primary btn-block" onClick="imprSelec('comboslista')">Imprimir orden</button>
							</div>
							<!--  ################################################################# -->
							<!--                    REGISTRAR ORDEN                 -->
							<!--  ################################################################# -->
							<div class="row form-group">
								<button type="submit" id="cargar" class="btn btn-sm btn-warning btn-block">Cargar a Base de Datos</button>
							</div>

						</div> 


					</form>
					<!--  ################################################################# -->
					<!--                    RECIBO DE COMPRA          -->
					<!--  ################################################################# -->
				</div>
				<div class="col-3">
					<div class="card border-dark mb-3 " style="max-width: 30rem;">
						<div class="card-header text-dark">ChinoDelivery</div>
						<div class="card-body text-dark">
							<h5 class="card-title">Recibo de compra</h5>
							<p class="card-text">Datos del pedido</p>

							<div class="container-fluid" id="factura" style="text-align: justify;">
								<div class="row">
									<div class="col">
										<span>Numero del cliente: </span>
									</div>
									<div class="col">
										<span id="numCliente"></span><br>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<span>Numero del repartidor: </span>
									</div>
									<div class="col">
										<span id="numRepartidor"></span><br>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<span>Dirección: </span>
									</div>
									<div class="col">
										<span id="linkMapa"></span><br>
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
											<div class="row"><div id="listaCombo1duo"></div></div>
											<div class="row"><div id="listaCombo2duo"></div></div>
											<div class="row"><div id="listaCombo3duo"></div></div>
											<div class="row"><div id="listaCombo4duo"></div></div>
										</div><br>
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
							</div>
							<a href="#" class="card-link text-info" onClick='CopyToClipboard("factura")'>Copiar texto</a>
							<a href="#"  target="_blank" id="enlaceCliente" class="card-link text-info" onClick='SendToClient()'>Enviar a Cliente</a>
							<a href="#"  target="_blank" id="enlaceDelivery" class="card-link text-info" onClick='SendToDelivery()'>Enviar a Repartidor</a>
						</div>
					</div>



				</div>
			</div>
		</div>





		

		<footer class="mastfoot mt-auto">
			<div class="inner">
				<p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">@Neurona.Servicios</a></p>
			</div>
		</footer>
	</div>



	<script type="text/javascript">

		var contcombo1  = 0;
		var contcombo2  = 0;
		var contcombo3  = 0;
		var contcombo4  = 0;
		var contcombo5  = 0;
		var contcombo6  = 0;
		var contcombo1duo  = 0;
		var contcombo2duo  = 0;
		var contcombo3duo  = 0;
		var contcombo4duo  = 0;
		var totalglobal = 0;
		var precioMegaCombo1 = 25;
		var precioMegaCombo2 = 25;
		var precioMegaCombo3 = 20;
		var precioMegaCombo4 = 0;
		var precioMegaCombo5 = 0;
		var precioMegaCombo6 = 0;
		var precioCombo1duo = 15;
		var precioCombo2duo = 15;
		var precioCombo3duo = 20;
		var precioCombo4duo = 20;
  ////////////////////////////////////////////////////////////////////////
  /////                  MEGA COMBO # 1                           //////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo1mas").click(function   () {

  	contcombo1+=1;


  	$('input[name=combo1]').val(contcombo1);
  	$('input[name=totalcombo1]').val(contcombo1*precioMegaCombo1);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo1]').val()>0){
  		$('#listaCombo1').text("x" + contcombo1 + " Combos Mega #1");}
  	})


  $("#btn_combo1menos").click(function   () {

  	contcombo1-=1;
  	if(contcombo1<0){contcombo1=0;}


  	$('input[name=combo1]').val(contcombo1);
  	$('input[name=totalcombo1]').val(contcombo1*precioMegaCombo1);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo1]').val()>0){
  		$('#listaCombo1').text("x" + contcombo1 + " Combos Mega #1");
  	}
  	else {
  		$('#listaCombo1').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
/////////                    MEGA  COMBO # 2                ////////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo2mas").click(function   () {

  	contcombo2+=1;

  	$('input[name=combo2]').val(contcombo2);
  	$('input[name=totalcombo2]').val(contcombo2*precioMegaCombo2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo2]').val()>0){
  		$('#listaCombo2').text("x" + contcombo2 + " Combos Mega #2");}
  	})


  $("#btn_combo2menos").click(function   () {

  	contcombo2-=1;
  	if(contcombo2<0){contcombo2=0;}

  	$('input[name=combo2]').val(contcombo2);
  	$('input[name=totalcombo2]').val(contcombo2*precioMegaCombo2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo2]').val()>0){
  		$('#listaCombo2').text("x" + contcombo2 + " Combos Mega #2");
  	}
  	else {
  		$('#listaCombo2').text("");
  	}
  })


  ////////////////////////////////////////////////////////////////////////
  /////                  MEGA COMBO # 3                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo3mas").click(function   () {

  	contcombo3+=1;


  	$('input[name=combo3]').val(contcombo3);
  	$('input[name=totalcombo3]').val(contcombo3*precioMegaCombo3);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo3]').val()>0){
  		$('#listaCombo3').text("x" + contcombo3 + " Combos Mega #3");}
  	})


  $("#btn_combo3menos").click(function   () {

  	contcombo3-=1;
  	if(contcombo3<0){contcombo3=0;}

  	$('input[name=combo3]').val(contcombo3);
  	$('input[name=totalcombo3]').val(contcombo3*precioMegaCombo3);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo3]').val()>0){
  		$('#listaCombo3').text("x" + contcombo3 + " Combos Mega #3");
  	}
  	else {
  		$('#listaCombo3').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////                  MEGA COMBO # 4                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo4mas").click(function   () {

  	contcombo4+=1;


  	$('input[name=combo4]').val(contcombo4);
  	$('input[name=totalcombo4]').val(contcombo4*precioMegaCombo4);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo4]').val()>0){
  		$('#listaCombo4').text("x" + contcombo4 + " Combos Mega #4");}
  	})


  $("#btn_combo4menos").click(function   () {

  	contcombo4-=1;
  	if(contcombo4<0){contcombo4=0;}

  	$('input[name=combo4]').val(contcombo4);
  	$('input[name=totalcombo4]').val(contcombo4*precioMegaCombo4);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo4]').val()>0){
  		$('#listaCombo4').text("x" + contcombo4 + " Combos Mega #4");
  	}
  	else {
  		$('#listaCombo4').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////                  MEGA COMBO # 5                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo5mas").click(function   () {

  	contcombo5+=1;


  	$('input[name=combo5]').val(contcombo5);
  	$('input[name=totalcombo5]').val(contcombo5*precioMegaCombo5);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo5]').val()>0){
  		$('#listaCombo5').text("x" + contcombo5 + " Combos Mega #5");}
  	})


  $("#btn_combo5menos").click(function   () {

  	contcombo5-=1;
  	if(contcombo5<0){contcombo5=0;}

  	$('input[name=combo5]').val(contcombo5);
  	$('input[name=totalcombo5]').val(contcombo5*precioMegaCombo5);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo5]').val()>0){
  		$('#listaCombo5').text("x" + contcombo5 + " Combos Mega #5");
  	}
  	else {
  		$('#listaCombo5').text("");
  	}
  })
  ////////////////////////////////////////////////////////////////////////
  /////                  MEGA COMBO # 6                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo6mas").click(function   () {

  	contcombo6+=1;


  	$('input[name=combo6]').val(contcombo6);
  	$('input[name=totalcombo6]').val(contcombo6*precioMegaCombo6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo6]').val()>0){
  		$('#listaCombo6').text("x" + contcombo6 + " Combos Mega #6");}
  	})


  $("#btn_combo6menos").click(function   () {

  	contcombo6-=1;
  	if(contcombo6<0){contcombo6=0;}

  	$('input[name=combo6]').val(contcombo6);
  	$('input[name=totalcombo6]').val(contcombo6*precioMegaCombo6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo6]').val()>0){
  		$('#listaCombo6').text("x" + contcombo6 + " Combos Mega #6");
  	}
  	else {
  		$('#listaCombo6').text("");
  	}
  })

////////////////////////////////////////////////////////////////////////
  /////                   COMBO DUO # 1                           //////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo1duomas").click(function   () {

  	contcombo1duo+=1;


  	$('input[name=combo1duo]').val(contcombo1duo);
  	$('input[name=totalcombo1duo]').val(contcombo1duo*precioCombo1duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo1duo]').val()>0){
  		$('#listaCombo1duo').text("x" + contcombo1duo + " Combos Duo #1");}
  	})


  $("#btn_combo1duomenos").click(function   () {

  	contcombo1duo-=1;
  	if(contcombo1duo<0){contcombo1duo=0;}


  	$('input[name=combo1duo]').val(contcombo1duo);
  	$('input[name=totalcombo1duo]').val(contcombo1duo*precioCombo1duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo1duo]').val()>0){
  		$('#listaCombo1duo').text("x" + contcombo1duo + " Combos Duo #1");
  	}
  	else {
  		$('#listaCombo1duo').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
/////////                      COMBO DUO # 2                ////////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo2duomas").click(function   () {

  	contcombo2duo+=1;

  	$('input[name=combo2duo]').val(contcombo2duo);
  	$('input[name=totalcombo2duo]').val(contcombo2duo*precioCombo2duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo2duo]').val()>0){
  		$('#listaCombo2duo').text("x" + contcombo2duo + " Combos Duo #2");}
  	})


  $("#btn_combo2duomenos").click(function   () {

  	contcombo2duo-=1;
  	if(contcombo2duo<0){contcombo2duo=0;}

  	$('input[name=combo2duo]').val(contcombo2duo);
  	$('input[name=totalcombo2duo]').val(contcombo2duo*precioCombo2duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo2duo]').val()>0){
  		$('#listaCombo2duo').text("x" + contcombo2duo + " Combos Duo #2");
  	}
  	else {
  		$('#listaCombo2duo').text("");
  	}
  })


  ////////////////////////////////////////////////////////////////////////
  /////                   COMBO DUO # 3                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo3duomas").click(function   () {

  	contcombo3duo+=1;


  	$('input[name=combo3duo]').val(contcombo3duo);
  	$('input[name=totalcombo3duo]').val(contcombo3duo*precioCombo3duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo3duo]').val()>0){
  		$('#listaCombo3duo').text("x" + contcombo3duo + " Combos Duo #3");}
  	})


  $("#btn_combo3duomenos").click(function   () {

  	contcombo3duo-=1;
  	if(contcombo3duo<0){contcombo3duo=0;}

  	$('input[name=combo3duo]').val(contcombo3duo);
  	$('input[name=totalcombo3duo]').val(contcombo3duo*precioCombo3duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo3duo]').val()>0){
  		$('#listaCombo3duo').text("x" + contcombo3duo + " Combos Duo #3");
  	}
  	else {
  		$('#listaCombo3duo').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////                   COMBO DUO # 4                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo4duomas").click(function   () {

  	contcombo4duo+=1;


  	$('input[name=combo4duo]').val(contcombo4duo);
  	$('input[name=totalcombo4duo]').val(contcombo4duo*precioCombo4duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo4duo]').val()>0){
  		$('#listaCombo4duo').text("x" + contcombo4duo + " Combos Duo #4");}
  	})


  $("#btn_combo4duomenos").click(function   () {

  	contcombo4duo-=1;
  	if(contcombo4duo<0){contcombo4duo=0;}

  	$('input[name=combo4duo]').val(contcombo4duo);
  	$('input[name=totalcombo4duo]').val(contcombo4duo*precioCombo4duo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=combo4duo]').val()>0){
  		$('#listaCombo4duo').text("x" + contcombo4 + " Combos Duo #4");
  	}
  	else {
  		$('#listaCombo4duo').text("");
  	}
  })



/////////////////////////////////////////////////////////////////////

$("input[name=cliente]").change(function (){
	$("#numCliente").text($("input[name=cliente]").val());
})


$("input[name=delivery]").change(function (){
	$("#numRepartidor").text($("input[name=delivery]").val());
})

//https://goo.gl/maps/hucD4VrEXJvWdy457

$("input[name=formaRadio]").change(function (){
	$("#formaPago").text($("input[name=formaRadio]:checked").val());
})

$("input[name=zona]").change(function (){
	$("#linkMapa").text($("input[name=zona]").val());
})


///////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////


function CopyToClipboard(containerid) {
     // Create a new textarea element and give it id='t'
     let textarea = document.createElement('textarea')
     textarea.id = 't'
     // Optional step to make less noise on the page, if any!
     textarea.style.height = 0
     // Now append it to your page somewhere, I chose <body>
     document.body.appendChild(textarea)
     // Give our textarea a value of whatever inside the div of id=containerid
     textarea.value = document.getElementById(containerid).innerText
     // Now copy whatever inside the textarea to clipboard
     let selector = document.querySelector('#t')
     selector.select()
     document.execCommand('copy')
     // Remove the textarea
     document.body.removeChild(textarea)
 } 


 function SendToClient(){

 	let textarea = document.createElement('textarea')
 	textarea.id = 't'
     // Optional step to make less noise on the page, if any!
     textarea.style.height = 0
     // Now append it to your page somewhere, I chose <body>
     document.body.appendChild(textarea)
     // Give our textarea a value of whatever inside the div of id=containerid
     document.getElementById("comboslista").innerText
     textarea.value = document.getElementById("comboslista").innerText

     var auxval = "Su pedido es:\n\n" + textarea.value + "\n\n" + "Por un total de: " + document.getElementById("totalCompra").innerText + "$";

     document.getElementById('enlaceCliente').setAttribute('href', "http://wa.me/"+ $('input[name=cliente]').val() + "?" + "text=" + encodeURIComponent(auxval));

     //+56979184554?text=Hola%20quiero%20contactarlo
     document.body.removeChild(textarea)

     
 }

 function SendToDelivery(){

 	let textarea = document.createElement('textarea')
 	textarea.id = 't'
     // Optional step to make less noise on the page, if any!
     textarea.style.height = 0
     // Now append it to your page somewhere, I chose <body>
     document.body.appendChild(textarea)
     // Give our textarea a value of whatever inside the div of id=containerid
     document.getElementById("comboslista").innerText
     textarea.value = document.getElementById("comboslista").innerText

     var auxval = "El pedido es:\n\n" + textarea.value + "\n\n" + "A la dirección:\n\n" + document.getElementById("linkMapa").innerText  + "\n\n" + "Contacto del cliente:\n\n" + $("input[name=cliente]").val();

     document.getElementById('enlaceDelivery').setAttribute('href', "http://wa.me/"+ $('input[name=delivery]').val() + "?" + "text=" + encodeURIComponent(auxval));

     //+56979184554?text=Hola%20quiero%20contactarlo
     document.body.removeChild(textarea)


 }



 function imprSelec(X){
 	var orden=document.getElementById(X);
 	var ventimp=window.open(' ','popimpr');
 	ventimp.document.write(orden.innerHTML);
 	ventimp.document.close();
 	ventimp.print();
 	ventimp.close();
 }


 function sumarTodo () {


 	return parseInt($("input[name=totalcombo1]").val())+ parseInt($("input[name=totalcombo2]").val()) + parseInt($("input[name=totalcombo3]").val())+parseInt($("input[name=totalcombo4]").val())+ parseInt($("input[name=totalcombo5]").val()) +  parseInt($("input[name=totalcombo6]").val()) + parseInt($("input[name=totalcombo1duo]").val()) + parseInt($("input[name=totalcombo2duo]").val()) +parseInt($("input[name=totalcombo3duo]").val()) + parseInt($("input[name=totalcombo4duo]").val()) ;
 }

</script>
</body>
</html>


