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




	
	<header class="masthead mb-auto">
		<div class="inner">

			<img src="./img/logo.png" width="100em" height="100em" class="masthead-brand">
			<nav class="nav nav-masthead justify-content-center">
				<a class="nav-link active" href="./home.php">Compras</a>
				<a class="nav-link" href="./contabilidad.php">Contabilidad</a>
			</nav>
		</div>
	</header>



	<form class="form" id="formulario" onsubmit="imprSelec('comboslista');$.post('registrar.php', $('#formulario').serialize()); alert('Registrado')">

		<main>
			<div class="row w-100 p-3">
				<div class="col">
					<h1 class="cover-heading">Sistema de Gestión</h1>
					<p class="lead">Registra a continuación los datos de la compra</p>
				</div>
			</div>
			<section>
				<div style="float:left; min-height: 50vh;" class="w-50 p-3">
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
				</div>

				<div style="float:left; min-height:50vh" class="w-50 p-3">
					<!--  ################################################################# -->
					<!--                    RECIBO DE COMPRA          -->
					<!--  ################################################################# -->
					<div class="">
						<div class="card border-dark mb-3 " style="max-width: 30rem;">
							<div class="card-header text-dark">
								<h5 class="card-title">Datos del pedido</h5></div>
								<div class="card-body text-dark">



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
													<div class="row"><div id="listakombo1"></div></div>
													<div class="row"><div id="listakombo2"></div></div>
													<div class="row"><div id="listakombo3"></div></div>
													<div class="row"><div id="listakombo4"></div></div>
													<div class="row"><div id="listakombo5"></div></div>
													<div class="row"><div id="listakombo6"></div></div>
													<div class="row"><div id="listavegetariano"></div></div>
													<div class="row"><div id="listapollo"></div></div>
													<div class="row"><div id="listajamon"></div></div>
													<div class="row"><div id="listacerdo"></div></div>
													<div class="row"><div id="listaespecial"></div></div>
													<div class="row"><div id="listacamarones"></div></div>
													<div class="row"><div id="listalmvegetariano"></div></div>
													<div class="row"><div id="listalmpollo"></div></div>
													<div class="row"><div id="listalmcerdo"></div></div>
													<div class="row"><div id="listalmespecial"></div></div>
													<div class="row"><div id="listalmcamarones"></div></div>
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
													<div class="row"><div id="listalumpias"></div></div>
													<div class="row"><div id="listawantonf"></div></div>
													<div class="row"><div id="listafideoss"></div></div>
													<div class="row"><div id="listafuyong"></div></div>
													<div class="row"><div id="listarefresco2"></div></div>
													<div class="row"><div id="listalipton"></div></div>
													<div class="row"><div id="listarefrescol"></div></div>
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
													<div class="row"><div id="listamarteskombo1"></div></div>
													<div class="row"><div id="listamarteskombo2"></div></div>
													<div class="row"><div id="listamarteskombo3"></div></div>
													<div class="row"><div id="listamarteskombo4"></div></div>
													<div class="row"><div id="listamarteskombo5"></div></div>
													<div class="row"><div id="listamarteskombo6"></div></div>
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

			</section>

		</main>







		<section>
			<div class="container-fluid">
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo1mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label  class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo2mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo3mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo4mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo5mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo6mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
											<button type="button" id="btn_combo6menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="combo6" class="col-form-label">Cant</label>
											<input type="number" min="0" name="combo6" class="cantCombo6 form-control" value="0" readonly>
										</div>
										<div class="col">
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo1duomas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label  class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo2duomas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo3duomas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_combo4duomas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
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

					<div class="col">
						<!--  ################################################################# -->
						<!--                    Kombos               -->
						<!--  ################################################################# -->
						<div class="card">
							<div class="card-header text-dark">
								Kombos
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                    Kombo #1                  -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="kombo1" class="col-form-label">Cant</label>
											<input type="number" min="0" name="kombo1" id="kombo1" class="cantkombo1 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalkombo1" class="col-form-label">$</label>
											<input type="number" min="0" name="totalkombo1" id="totalkombo1" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                    kombo #2                  -->
									<!--  ################################################################# -->

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
											<label for="kombo2" class="col-form-label">Cant</label>
											<input type="number" min="0" name="kombo2" class="cantkombo2 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalkombo2" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalkombo2" id="totalkombo2" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                    kombo #3                  -->
									<!--  ################################################################# -->
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
											<label for="kombo3" class="col-form-label">Cant</label>
											<input type="number" min="0" name="kombo3" class="cantkombo3 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalkombo3" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalkombo3" id="totalkombo3" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   kombo #4                  -->
									<!--  ################################################################# -->
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
											<label for="kombo4" class="col-form-label">Cant</label>
											<input type="number" min="0" name="kombo4" class="cantkombo4 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalkombo4" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalkombo4" id="totalkombo4" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   kombo #5                  -->
									<!--  ################################################################# -->
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
											<label for="kombo5" class="col-form-label">Cant</label>
											<input type="number" min="0" name="kombo5" class="cantkombo5 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalkombo5" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalkombo5" id="totalkombo5" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                   kombo #6                  -->
									<!--  ################################################################# -->
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
											<label for="kombo6" class="col-form-label">Cant</label>
											<input type="number" min="0" name="kombo6" class="cantkombo6 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalkombo6" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalkombo6" id="totalkombo6" class=" form-control" readonly>
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
								Arroz frito
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                   Vegetariano                 -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="vegetariano" class="col-form-label">Cant</label>
											<input type="number" min="0" name="vegetariano" id="vegetariano" class="cantvegetariano form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalvegetariano" class="col-form-label">$</label>
											<input type="number" min="0" name="totalvegetariano" id="totalvegetariano" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                    Arroz con pollo                  -->
									<!--  ################################################################# -->

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
											<label for="pollo" class="col-form-label">Cant</label>
											<input type="number" min="0" name="pollo" class="cantpollo form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpollo" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpollo" id="totalpollo" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                    Arroz frito con Jamon                  -->
									<!--  ################################################################# -->
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
											<label for="jamon" class="col-form-label">Cant</label>
											<input type="number" min="0" name="jamon" class="cantjamon form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totaljamon" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totaljamon" id="totaljamon" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   Arroz frito con cerdo                  -->
									<!--  ################################################################# -->
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
											<label for="cerdo" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cerdo" class="cantcerdo form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcerdo" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcerdo" id="totalcerdo" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   Arroz frito especial                  -->
									<!--  ################################################################# -->
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
											<label for="especial" class="col-form-label">Cant</label>
											<input type="number" min="0" name="especial" class="cantespecial form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalespecial" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalespecial" id="totalespecial" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                Arroz frito con camarones                 -->
									<!--  ################################################################# -->
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
											<label for="camarones" class="col-form-label">Cant</label>
											<input type="number" min="0" name="camarones" class="cantcamarones form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcamarones" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcamarones" id="totalcamarones" class=" form-control" readonly>
										</div>
									</div>

								</div>  
							</div>
						</div>
					</div>

				</div>
			</div>


			<div class="container-fluid">
				<div class="row w-100 p-3">
					<div class="col">
						<!--  ################################################################# -->
						<!--                  LomMien               -->
						<!--  ################################################################# -->
						<div class="card">
							<div class="card-header text-dark">
								LomMien
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                 LomMien  Vegetariano                 -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="lmvegetariano" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lmvegetariano" id="lmvegetariano" class="cantlmvegetariano form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallmvegetariano" class="col-form-label">$</label>
											<input type="number" min="0" name="totallmvegetariano" id="totallmvegetariano" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                    LomMien pollo                  -->
									<!--  ################################################################# -->

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
											<label for="lmpollo" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lmpollo" class="cantlmpollo form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallmpollo" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totallmpollo" id="totallmpollo" class=" form-control" readonly>
										</div>
									</div>


									<!--  ################################################################# -->
									<!--                   LomMien con cerdo                  -->
									<!--  ################################################################# -->
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
											<label for="lmcerdo" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lmcerdo" class="cantlmcerdo form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallmcerdo" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totallmcerdo" id="totallmcerdo" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   LomMien especial                  -->
									<!--  ################################################################# -->
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
											<label for="lmespecial" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lmespecial" class="cantlmespecial form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallmespecial" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totallmespecial" id="totallmespecial" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                LomMien con camarones                 -->
									<!--  ################################################################# -->
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
											<label for="lmcamarones" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lmcamarones" class="cantlmcamarones form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallmcamarones" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totallmcamarones" id="totallmcamarones" class=" form-control" readonly>
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
								Pollo
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                 Pollo agridulce                  -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="pagridulce" class="col-form-label">Cant</label>
											<input type="number" min="0" name="pagridulce" id="pagridulce" class="cantpagridulce form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpagridulce" class="col-form-label">$</label>
											<input type="number" min="0" name="totalpagridulce" id="totalpagridulce" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                   Pollo con soya                  -->
									<!--  ################################################################# -->

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
											<label for="psoya" class="col-form-label">Cant</label>
											<input type="number" min="0" name="psoya" class="cantpsoya form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpsoya" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpsoya" id="totalpsoya" class=" form-control" readonly>
										</div>
									</div>


									<!--  ################################################################# -->
									<!--                   Pollo con curry                   -->
									<!--  ################################################################# -->
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
											<label for="pcurry" class="col-form-label">Cant</label>
											<input type="number" min="0" name="pcurry" class="cantpcurry form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpcurry" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpcurry" id="totalpcurry" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   Pollo con ostras                  -->
									<!--  ################################################################# -->
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
											<label for="postras" class="col-form-label">Cant</label>
											<input type="number" min="0" name="postras" class="cantpostras form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpostras" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpostras" id="totalpostras" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                Pollo con ajonjoli y miel                 -->
									<!--  ################################################################# -->
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
											<label for="pajonjoli" class="col-form-label">Cant</label>
											<input type="number" min="0" name="pajonjoli" class="cantpajonjoli form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpajonjoli" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpajonjoli" id="totalpajonjoli" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                Pollo con asado cantones                -->
									<!--  ################################################################# -->
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
											<label for="pasado" class="col-form-label">Cant</label>
											<input type="number" min="0" name="pasado" class="cantpasado form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpasado" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpasado" id="totalpasado" class=" form-control" readonly>
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
								Carne
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                 Carne con Ostras                 -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="costras" class="col-form-label">Cant</label>
											<input type="number" min="0" name="costras" id="costras" class="cantcostras form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcostras" class="col-form-label">$</label>
											<input type="number" min="0" name="totalcostras" id="totalcostras" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                   Carne con curry                  -->
									<!--  ################################################################# -->

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
											<label for="ccurry" class="col-form-label">Cant</label>
											<input type="number" min="0" name="ccurry" class="cantccurry form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalccurry" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalccurry" id="totalccurry" class=" form-control" readonly>
										</div>
									</div>


									<!--  ################################################################# -->
									<!--                   Carne con brócoli                   -->
									<!--  ################################################################# -->
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
											<label for="cbrocoli" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cbrocoli" class="cantcbrocoli form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcbrocoli" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcbrocoli" id="totalcbrocoli" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--            Carne con vegetales chinos                  -->
									<!--  ################################################################# -->
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
											<label for="cvegetales" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cvegetales" class="cantcvegetales form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcvegetales" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcvegetales" id="totalcvegetales" class=" form-control" readonly>
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
								Cerdo
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                 Costilla                  -->
								<!--  ################################################################# -->
								<div class="container">
									<div class="row form-group">
										<div class="col">
											<label for="btn_costillamas" class="col-form-label">Costilla</label>
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
											<label for="costilla" class="col-form-label">Cant</label>
											<input type="number" min="0" name="costilla" id="costilla" class="cantcostilla form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcostilla" class="col-form-label">$</label>
											<input type="number" min="0" name="totalcostilla" id="totalcostilla" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                   Cerdo asado                  -->
									<!--  ################################################################# -->

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
											<label for="cerdoa" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cerdoa" class="cantcerdoa form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcerdoa" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcerdoa" id="totalcerdoa" class=" form-control" readonly>
										</div>
									</div>


									<!--  ################################################################# --> 
									<!--                   Cerdo con sal y pimienta             -->
									<!--  ################################################################# -->
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
											<label for="cerdosyp" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cerdosyp" class="cantcerdosyp form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcerdosyp" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcerdosyp" id="totalcerdosyp" class=" form-control" readonly>
										</div>
									</div>

								</div>  
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row w-100 p-3">
					<div class="col">
						<!--  ################################################################# -->
						<!--                Otros             -->
						<!--  ################################################################# -->
						<div class="card">
							<div class="card-header text-dark">
								Otros
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                Lúmpias                   -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="lumpias" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lumpias" id="lumpias" class="cantlumpias form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallumpias" class="col-form-label">$</label>
											<input type="number" min="0" name="totallumpias" id="totallumpias" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                   Wantón frito                  -->
									<!--  ################################################################# -->

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
											<label for="wantonf" class="col-form-label">Cant</label>
											<input type="number" min="0" name="wantonf" class="cantwantonf form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalwantonf" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalwantonf" id="totalwantonf" class=" form-control" readonly>
										</div>
									</div>


									<!--  ################################################################# -->
									<!--                   Fideos singapur                   -->
									<!--  ################################################################# -->
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
											<label for="fideoss" class="col-form-label">Cant</label>
											<input type="number" min="0" name="fideoss" class="cantfideoss form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalfideoss" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalfideoss" id="totalfideoss" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                   Fu yong                 -->
									<!--  ################################################################# -->
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
											<label for="fuyong" class="col-form-label">Cant</label>
											<input type="number" min="0" name="fuyong" class="cantfuyong form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalfuyong" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalfuyong" id="totalfuyong" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--               Refresco 2lt                 -->
									<!--  ################################################################# -->
									<div class="row form-group">
										<div class="col">
											<label for="btn_refresco2mas" class="col-form-label"> Refresco 2 lts </label>
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
											<label for="refresco2" class="col-form-label">Cant</label>
											<input type="number" min="0" name="refresco2" class="cantrefresco2 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalrefresco2" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalrefresco2" id="totalrefresco2" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--          Liptón (Durazno, limón, verde)                -->
									<!--  ################################################################# -->
									<div class="row form-group">
										<div class="col">
											<label for="btn_liptonmas" class="col-form-label"> Liptón (Durazno, limón, verde) </label>
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
											<label for="lipton" class="col-form-label">Cant</label>
											<input type="number" min="0" name="lipton" class="cantlipton form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totallipton" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totallipton" id="totallipton" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--               Refresco lata                 -->
									<!--  ################################################################# -->
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
											<label for="refrescol" class="col-form-label">Cant</label>
											<input type="number" min="0" name="refrescol" class="cantrefrescol form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalrefrescol" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalrefrescol" id="totalrefrescol" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--              Agua 600ml                 -->
									<!--  ################################################################# -->
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
											<label for="agua6" class="col-form-label">Cant</label>
											<input type="number" min="0" name="agua6" class="cantagua6 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalagua6" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalagua6" id="totalagua6" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--             pan chino 4 unidades                -->
									<!--  ################################################################# -->
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
											<label for="panc" class="col-form-label">Cant</label>
											<input type="number" min="0" name="panc" class="cantpanc form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalpanc" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalpanc" id="totalpanc" class=" form-control" readonly>
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
								Sopa
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--               Sopa Wantón                 -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="sopaw" class="col-form-label">Cant</label>
											<input type="number" min="0" name="sopaw" id="sopaw" class="cantsopaw form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalsopaw" class="col-form-label">$</label>
											<input type="number" min="0" name="totalsopaw" id="totalsopaw" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                  Sopa wantón Mien                  -->
									<!--  ################################################################# -->

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
											<label for="swantonmien" class="col-form-label">Cant</label>
											<input type="number" min="0" name="swantonmien" class="cantswantonmien form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalswantonmien" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalswantonmien" id="totalswantonmien" class=" form-control" readonly>
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
								Chop Suey
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                 Chop suey de vegetales                  -->
								<!--  ################################################################# -->
								<div class="container">
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
											<label for="csvegetales" class="col-form-label">Cant</label>
											<input type="number" min="0" name="csvegetales" id="csvegetales" class="cantcsvegetales form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcsvegetales" class="col-form-label">$</label>
											<input type="number" min="0" name="totalcsvegetales" id="totalcsvegetales" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                   Chop suey de pollo                  -->
									<!--  ################################################################# -->

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
											<label for="cspollo" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cspollo" class="cantcspollo form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcspollo" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcspollo" id="totalcspollo" class=" form-control" readonly>
										</div>
									</div>


									<!--  ################################################################# --> 
									<!--                   Chop suey de cerdo             -->
									<!--  ################################################################# -->
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
											<label for="cscerdo" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cscerdo" class="cantcscerdo form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcscerdo" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcscerdo" id="totalcscerdo" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# --> 
									<!--                   Chop suey de carne            -->
									<!--  ################################################################# -->
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
											<label for="cscarne" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cscarne" class="cantcscarne form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcscarne" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcscarne" id="totalcscarne" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# --> 
									<!--                   Chop suey de camarones            -->
									<!--  ################################################################# -->
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
											<label for="cscamarones" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cscamarones" class="cantcscamarones form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcscamarones" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcscamarones" id="totalcscamarones" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# --> 
									<!--             Chop suey de pollo y camarones            -->
									<!--  ################################################################# -->
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
											<label for="cspolloyc" class="col-form-label">Cant</label>
											<input type="number" min="0" name="cspolloyc" class="cantcspolloyc form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalcspolloyc" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalcspolloyc" id="totalcspolloyc" class=" form-control" readonly>
										</div>
									</div>
								</div>  
							</div>
						</div>
					</div>
					<div class="col">
						<!--  ################################################################# -->
						<!--                 Martes 2*3 kombos individuales              -->
						<!--  ################################################################# -->
						<div class="card">
							<div class="card-header text-dark">
								Martes 2*3 kombos individuales
							</div>
							<div class="card-body text-dark">
								<!--  ################################################################# -->
								<!--                 Martes Kombo #1                  -->
								<!--  ################################################################# -->
								<div class="container">
									<div class="row form-group">
										<div class="col">
											<label for="btn_marteskombo1mas" class="col-form-label"> Martes de Kombo 1</label>
										</div>
										<div class="col">
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_marteskombo1mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label  class="col-form-label">Del</label>
											<button type="button" id="btn_marteskombo1menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="marteskombo1" class="col-form-label">Cant</label>
											<input type="number" min="0" name="marteskombo1" id="marteskombo1" class="cantmarteskombo1 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalmarteskombo1" class="col-form-label">$</label>
											<input type="number" min="0" name="totalmarteskombo1" id="totalmarteskombo1" class=" form-control" value="0" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                 Martes de 2*3 kombo #2                  -->
									<!--  ################################################################# -->

									<div class="row form-group">
										<div class="col">
											<label for="btn_marteskombo2mas" class="col-form-label"> Martes de kombo 2</label>
										</div>
										<div class="col">
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_marteskombo2mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
											<button type="button" id="btn_marteskombo2menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="marteskombo2" class="col-form-label">Cant</label>
											<input type="number" min="0" name="marteskombo2" class="cantmarteskombo2 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalmarteskombo2" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalmarteskombo2" id="totalmarteskombo2" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--            Martes de 2*3 de kombo #3                  -->
									<!--  ################################################################# -->
									<div class="row form-group">
										<div class="col">
											<label for="btn_marteskombo3mas" class="col-form-label"> martes de kombo 3</label>
										</div>
										<div class="col">
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_marteskombo3mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
											<button type="button" id="btn_marteskombo3menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="marteskombo3" class="col-form-label">Cant</label>
											<input type="number" min="0" name="marteskombo3" class="cantmarteskombo3 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalmarteskombo3" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalmarteskombo3" id="totalmarteskombo3" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--                 Martes 2*3  kombo #4                  -->
									<!--  ################################################################# -->
									<div class="row form-group">
										<div class="col">
											<label for="btn_marteskombo4mas" class="col-form-label"> Martes de kombo 4</label>
										</div>
										<div class="col">
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_marteskombo4mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
											<button type="button" id="btn_marteskombo4menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="marteskombo4" class="col-form-label">Cant</label>
											<input type="number" min="0" name="marteskombo4" class="cantmarteskombo4 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalmarteskombo4" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalmarteskombo4" id="totalmarteskombo4" class=" form-control" readonly>
										</div>
									</div>
									<!--  ################################################################# -->
									<!--             Martes de 2*3  kombo #5                  -->
									<!--  ################################################################# -->
									<div class="row form-group">
										<div class="col">
											<label for="btn_marteskombo5mas" class="col-form-label"> Martes de kombo 5</label>
										</div>
										<div class="col">
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_marteskombo5mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
											<button type="button" id="btn_marteskombo5menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="marteskombo5" class="col-form-label">Cant</label>
											<input type="number" min="0" name="marteskombo5" class="cantmarteskombo5 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalmarteskombo5" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalmarteskombo5" id="totalmarteskombo5" class=" form-control" readonly>
										</div>
									</div>

									<!--  ################################################################# -->
									<!--                Martes de 2*3 kombo #6                  -->
									<!--  ################################################################# -->
									<div class="row form-group">
										<div class="col">
											<label for="btn_marteskombo6mas" class="col-form-label"> Martes de kombo 6</label>
										</div>
										<div class="col">
											<label  class="col-form-label">Add</label>
											<button type="button" id="btn_marteskombo6mas" class="btn btn-sm btn-success btn-block">+</button>
										</div>
										<div class="col">
											<label class="col-form-label">Del</label>
											<button type="button" id="btn_marteskombo6menos" class="btn btn-sm btn-danger btn-block">-</button>
										</div>
										<div class="col">
											<label for="marteskombo6" class="col-form-label">Cant</label>
											<input type="number" min="0" name="marteskombo6" class="cantmarteskombo6 form-control" value="0" readonly>
										</div>
										<div class="col">
											<label for="totalmarteskombo6" class="col-form-label">$</label>
											<input type="number" min="0" value="0" name="totalmarteskombo6" id="totalmarteskombo6" class=" form-control" readonly>
										</div>
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
			<p>Desarrollado por <a href="https://www.instagram.com/neurona.servicios">@Neurona.Servicios</a></p>
		</div>
	</footer>
	



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
		var contkombo1  = 0;
		var contkombo2  = 0;
		var contkombo3  = 0;
		var contkombo4  = 0;
		var contkombo5  = 0;
		var contkombo6  = 0;
		var contvegetariano  = 0;
		var contpollo  = 0;
		var contjamon  = 0;
		var contcerdo  = 0;
		var contespecial  = 0;
		var contcamarones  = 0;
		var contlmvegetariano  = 0;
		var contlmpollo  = 0;
		var contlmcerdo  = 0;
		var contlmespecial  = 0;
		var contlmcamarones  = 0;
		var contpagridulce  = 0;
		var contpsoya  = 0;
		var contpcurry  = 0;
		var contpostras  = 0;
		var contpajonjoli  = 0;
		var contpasado  = 0;
		var contcostras  = 0;
		var contccurry  = 0;
		var contcbrocoli  = 0;
		var contcvegetales  = 0;
		var contcostilla  = 0;
		var contcerdoa  = 0;
		var contcerdosyp  = 0;
		var contlumpias  = 0;
		var contwantonf  = 0;
		var contfideoss  = 0;
		var contfuyong  = 0;
		var contrefresco2  = 0;
		var contlipton  = 0;
		var contrefrescol  = 0;
		var contagua6  = 0;
		var contpanc  = 0;
		var contsopaw  = 0;
		var contswantonmien  = 0;
		var contcsvegetales  = 0;
		var contcspollo  = 0;
		var contcscarne  = 0;
		var contcscerdo  = 0;
		var contcscamarones = 0;
		var contcspolloyc  = 0;
		var contmarteskombo1  = 0;
		var contmarteskombo2  = 0;
		var contmarteskombo3  = 0;
		var contmarteskombo4  = 0;
		var contmarteskombo5  = 0;
		var contmarteskombo6  = 0;
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
		var preciokombo1 = 9;
		var preciokombo2 = 7;
		var preciokombo3 = 6;
		var preciokombo4 = 8;
		var preciokombo5 = 7;
		var preciokombo6 = 7;
		var preciovegetariano = 4;
		var preciopollo = 5;
		var preciojamon = 5;
		var preciocerdo = 5;
		var precioespecial = 6;
		var preciocamarones = 7;
		var preciolmvegetariano = 6;
		var preciolmpollo = 7;
		var preciolmcerdo = 7;
		var preciolmespecial = 8;
		var preciolmcamarones =9;
		var preciopagridulce =7;
		var preciopsoya =8;
		var preciopcurry =8;
		var preciopostras =8;
		var preciopajonjoli =9;
		var preciopasado =11;
		var preciocostras =9;
		var precioccurry =9;
		var preciocbrocoli =10;
		var preciocvegetales =10;
		var preciocostilla =6;
		var preciocerdoa =10;
		var preciocerdosyp =10;
		var preciolumpias =1;
		var preciowantonf =5;
		var preciofideoss =9;
		var preciofuyong =6;
		var preciorefresco2 =3;
		var preciolipton =3;
		var preciorefrescol =1;
		var precioagua6 =0.5;
		var preciopanc =1;
		var preciosopaw =4;
		var precioswantonmien =6;
		var preciocsvegetales =5;
		var preciocspollo =7;
		var preciocscerdo =7;
		var preciocscarne =8;
		var preciocscamarones =9;
		var preciocspolloyc =10;
		var preciomarteskombo1 = 18;
		var preciomarteskombo2 = 14;
		var preciomarteskombo3 = 12;
		var preciomarteskombo4 = 16;
		var preciomarteskombo5 = 14;
		var preciomarteskombo6 = 14;
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

////////////////////////////////////////////////////////////////////////
  /////                   kombo # 1                           //////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_kombo1mas").click(function   () {

  	contkombo1+=1;


  	$('input[name=kombo1]').val(contkombo1);
  	$('input[name=totalkombo1]').val(contkombo1*preciokombo1);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo1]').val()>0){
  		$('#listakombo1').text("x" + contkombo1 + " kombo #1");}
  	})


  $("#btn_kombo1menos").click(function   () {

  	contkombo1-=1;
  	if(contkombo1<0){contkombo1=0;}


  	$('input[name=kombo1]').val(contkombo1);
  	$('input[name=totalkombo1]').val(contkombo1*preciokombo1);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo1]').val()>0){
  		$('#listakombo1').text("x" + contkombo1 + " kombo #1");
  	}
  	else {
  		$('#listakombo1').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
/////////                     kombo # 2                ////////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_kombo2mas").click(function   () {

  	contkombo2+=1;

  	$('input[name=kombo2]').val(contkombo2);
  	$('input[name=totalkombo2]').val(contkombo2*preciokombo2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo2]').val()>0){
  		$('#listakombo2').text("x" + contkombo2 + " kombo #2");}
  	})


  $("#btn_kombo2menos").click(function   () {

  	contkombo2-=1;
  	if(contkombo2<0){contkombo2=0;}

  	$('input[name=kombo2]').val(contkombo2);
  	$('input[name=totalkombo2]').val(contkombo2*preciokombo2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo2]').val()>0){
  		$('#listakombo2').text("x" + contkombo2 + " kombo #2");
  	}
  	else {
  		$('#listakombo2').text("");
  	}
  })


  ////////////////////////////////////////////////////////////////////////
  /////                   kombo # 3                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_kombo3mas").click(function   () {

  	contkombo3+=1;


  	$('input[name=kombo3]').val(contkombo3);
  	$('input[name=totalkombo3]').val(contkombo3*preciokombo3);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo3]').val()>0){
  		$('#listakombo3').text("x" + contkombo3 + " kombo #3");}
  	})


  $("#btn_kombo3menos").click(function   () {

  	contkombo3-=1;
  	if(contkombo3<0){contkombo3=0;}

  	$('input[name=kombo3]').val(contkombo3);
  	$('input[name=totalkombo3]').val(contkombo3*preciokombo3);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo3]').val()>0){
  		$('#listakombo3').text("x" + contkombo3 + " kombo #3");
  	}
  	else {
  		$('#listakombo3').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////                   kombo # 4                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_kombo4mas").click(function   () {

  	contkombo4+=1;


  	$('input[name=kombo4]').val(contkombo4);
  	$('input[name=totalkombo4]').val(contkombo4*preciokombo4);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo4]').val()>0){
  		$('#listakombo4').text("x" + contkombo4 + " kombo #4");}
  	})


  $("#btn_kombo4menos").click(function   () {

  	contkombo4-=1;
  	if(contkombo4<0){contkombo4=0;}

  	$('input[name=kombo4]').val(contkombo4);
  	$('input[name=totalkombo4]').val(contkombo4*preciokombo4);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo4]').val()>0){
  		$('#listakombo4').text("x" + contkombo4 + " kombo #4");
  	}
  	else {
  		$('#listakombo4').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////                   kombo # 5                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_kombo5mas").click(function   () {

  	contkombo5+=1;


  	$('input[name=kombo5]').val(contkombo5);
  	$('input[name=totalkombo5]').val(contkombo5*preciokombo5);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo5]').val()>0){
  		$('#listakombo5').text("x" + contkombo5 + " kombo #5");}
  	})


  $("#btn_kombo5menos").click(function   () {

  	contkombo5-=1;
  	if(contkombo5<0){contkombo5=0;}

  	$('input[name=kombo5]').val(contkombo5);
  	$('input[name=totalkombo5]').val(contkombo5*preciokombo5);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo5]').val()>0){
  		$('#listakombo5').text("x" + contkombo5 + " kombo #5");
  	}
  	else {
  		$('#listakombo5').text("");
  	}
  })

    ////////////////////////////////////////////////////////////////////////
  /////                   kombo # 6                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_kombo6mas").click(function   () {

  	contkombo6+=1;


  	$('input[name=kombo6]').val(contkombo6);
  	$('input[name=totalkombo6]').val(contkombo6*preciokombo6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo6]').val()>0){
  		$('#listakombo6').text("x" + contkombo6 + " kombo #6");}
  	})


  $("#btn_kombo6menos").click(function   () {

  	contkombo6-=1;
  	if(contkombo6<0){contkombo6=0;}

  	$('input[name=kombo6]').val(contkombo6);
  	$('input[name=totalkombo6]').val(contkombo6*preciokombo6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=kombo6]').val()>0){
  		$('#listakombo6').text("x" + contkombo6 + " kombo #6");
  	}
  	else {
  		$('#listakombo6').text("");
  	}
  })
  ////////////////////////////////////////////////////////////////////////
  /////                   Arroz frito vegetariano                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_vegetarianomas").click(function   () {

  	contvegetariano+=1;


  	$('input[name=vegetariano]').val(contvegetariano);
  	$('input[name=totalvegetariano]').val(contvegetariano*preciovegetariano);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=vegetariano]').val()>0){
  		$('#listavegetariano').text("x" + contvegetariano + " Arroz frito vegetariano");}
  	})


  $("#btn_vegetarianomenos").click(function   () {

  	contvegetariano-=1;
  	if(contvegetariano<0){contvegetariano=0;}

  	$('input[name=vegetariano]').val(contvegetariano);
  	$('input[name=totalvegetariano]').val(contvegetariano*preciovegetariano);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=vegetariano]').val()>0){
  		$('#listavegetariano').text("x" + contvegetariano+ " Arroz frito vegetariano");
  	}
  	else {
  		$('#listavegetariano').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                Arroz frito con pollo                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_pollomas").click(function   () {

  	contpollo+=1;


  	$('input[name=pollo]').val(contpollo);
  	$('input[name=totalpollo]').val(contpollo*preciopollo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pollo]').val()>0){
  		$('#listapollo').text("x" + contpollo + "Arroz frito con pollo");}
  	})


  $("#btn_pollomenos").click(function   () {

  	contpollo-=1;
  	if(contpollo<0){contpollo=0;}

  	$('input[name=pollo]').val(contpollo);
  	$('input[name=totalpollo]').val(contpollo*preciopollo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pollo]').val()>0){
  		$('#listapollo').text("x" + contpollo + " Arroz frito con pollo");
  	}
  	else {
  		$('#listapollo').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                  Arroz frito con Jamon                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_jamonmas").click(function   () {

  	contjamon+=1;


  	$('input[name=jamon]').val(contjamon);
  	$('input[name=totaljamon]').val(contjamon*preciojamon);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=jamon]').val()>0){
  		$('#listajamon').text("x" + contjamon + " Arroz frito con jamón");}
  	})


  $("#btn_jamonmenos").click(function   () {

  	contjamon-=1;
  	if(contjamon<0){contjamon=0;}

  	$('input[name=jamon]').val(contjamon);
  	$('input[name=totaljamon]').val(contjamon*preciojamon);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=jamon]').val()>0){
  		$('#listajamon').text("x" + contjamon + " Arroz frito con jamón");
  	}
  	else {
  		$('#listajamon').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                 Arroz frito con cerdo                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cerdomas").click(function   () {

  	contcerdo+=1;


  	$('input[name=cerdo]').val(contcerdo);
  	$('input[name=totalcerdo]').val(contcerdo*preciocerdo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cerdo]').val()>0){
  		$('#listacerdo').text("x" + contcerdo + " Arroz frito con cerdo");}
  	})


  $("#btn_cerdomenos").click(function   () {

  	contcerdo-=1;
  	if(contcerdo<0){contcerdo=0;}

  	$('input[name=cerdo]').val(contcerdo);
  	$('input[name=totalcerdo]').val(contcerdo*preciocerdo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cerdo]').val()>0){
  		$('#listacerdo').text("x" + contcerdo + " Arroz frito con cerdo");
  	}
  	else {
  		$('#listacerdo').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                 Arroz frito especial                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_especialmas").click(function   () {

  	contespecial+=1;


  	$('input[name=especial]').val(contespecial);
  	$('input[name=totalespecial]').val(contespecial*precioespecial);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=especial]').val()>0){
  		$('#listaespecial').text("x" + contespecial + " Arroz frito especial");}
  	})


  $("#btn_especialmenos").click(function   () {

  	contespecial-=1;
  	if(contespecial<0){contespecial=0;}

  	$('input[name=especial]').val(contespecial);
  	$('input[name=totalespecial]').val(contespecial*precioespecial);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=especial]').val()>0){
  		$('#listaespecial').text("x" + contespecial + "Arroz frito especial");
  	}
  	else {
  		$('#listaespecial').text("");
  	}
  })
    ////////////////////////////////////////////////////////////////////////
  /////                 Arroz frito con camarones                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_camaronesmas").click(function   () {

  	contcamarones+=1;


  	$('input[name=camarones]').val(contcamarones);
  	$('input[name=totalcamarones]').val(contcamarones*preciocamarones);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=camarones]').val()>0){
  		$('#listacamarones').text("x" + contcamarones + " Arroz frito con camarones");}
  	})


  $("#btn_camaronesmenos").click(function   () {

  	contcamarones-=1;
  	if(contcamarones<0){contcamarones=0;}

  	$('input[name=camarones]').val(contcamarones);
  	$('input[name=totalcamarones]').val(contcamarones*preciocamarones);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=camarones]').val()>0){
  		$('#listacamarones').text("x" + contcamarones + "Arroz frito con camarones");
  	}
  	else {
  		$('#listacamarones').text("");
  	}
  })

////////////////////////////////////////////////////////////////////////
  /////                   LomMien vegetariano                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_lmvegetarianomas").click(function   () {

  	contlmvegetariano+=1;


  	$('input[name=lmvegetariano]').val(contlmvegetariano);
  	$('input[name=totallmvegetariano]').val(contlmvegetariano*preciolmvegetariano);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmvegetariano]').val()>0){
  		$('#listalmvegetariano').text("x" + contlmvegetariano + "  LomMien vegetariano");}
  	})


  $("#btn_lmvegetarianomenos").click(function   () {

  	contlmvegetariano-=1;
  	if(contlmvegetariano<0){contlmvegetariano=0;}

  	$('input[name=lmvegetariano]').val(contlmvegetariano);
  	$('input[name=totallmvegetariano]').val(contlmvegetariano*preciolmvegetariano);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmvegetariano]').val()>0){
  		$('#listalmvegetariano').text("x" + contlmvegetariano+ "  LomMien vegetariano");
  	}
  	else {
  		$('#listalmvegetariano').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                 LomMien con pollo                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_lmpollomas").click(function   () {

  	contlmpollo+=1;


  	$('input[name=lmpollo]').val(contlmpollo);
  	$('input[name=totallmpollo]').val(contlmpollo*preciolmpollo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmpollo]').val()>0){
  		$('#listalmpollo').text("x" + contlmpollo + " LomMien con pollo");}
  	})


  $("#btn_lmpollomenos").click(function   () {

  	contlmpollo-=1;
  	if(contlmpollo<0){contlmpollo=0;}

  	$('input[name=lmpollo]').val(contlmpollo);
  	$('input[name=totallmpollo]').val(contlmpollo*preciolmpollo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmpollo]').val()>0){
  		$('#listalmpollo').text("x" + contlmpollo + "  LomMien con pollo");
  	}
  	else {
  		$('#listalmpollo').text("");
  	}
  })

  
      ////////////////////////////////////////////////////////////////////////
  /////                  LomMien con cerdo                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_lmcerdomas").click(function   () {

  	contlmcerdo+=1;


  	$('input[name=lmcerdo]').val(contlmcerdo);
  	$('input[name=totallmcerdo]').val(contlmcerdo*preciolmcerdo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmcerdo]').val()>0){
  		$('#listalmcerdo').text("x" + contlmcerdo + "  LomMien con cerdo");}
  	})


  $("#btn_lmcerdomenos").click(function   () {

  	contlmcerdo-=1;
  	if(contlmcerdo<0){contlmcerdo=0;}

  	$('input[name=lmcerdo]').val(contlmcerdo);
  	$('input[name=totallmcerdo]').val(contlmcerdo*preciolmcerdo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmcerdo]').val()>0){
  		$('#listalmcerdo').text("x" + contlmcerdo + "  LomMien con cerdo");
  	}
  	else {
  		$('#listalmcerdo').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                 LomMien especial                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_lmespecialmas").click(function   () {

  	contlmespecial+=1;


  	$('input[name=lmespecial]').val(contlmespecial);
  	$('input[name=totallmespecial]').val(contlmespecial*preciolmespecial);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmespecial]').val()>0){
  		$('#listalmespecial').text("x" + contlmespecial + "  LomMien especial");}
  	})


  $("#btn_lmespecialmenos").click(function   () {

  	contlmespecial-=1;
  	if(contlmespecial<0){contlmespecial=0;}

  	$('input[name=lmespecial]').val(contlmespecial);
  	$('input[name=totallmespecial]').val(contlmespecial*preciolmespecial);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmespecial]').val()>0){
  		$('#listalmespecial').text("x" + contlmespecial + " LomMien especial");
  	}
  	else {
  		$('#listalmespecial').text("");
  	}
  })
    ////////////////////////////////////////////////////////////////////////
  /////                  LomMien con camarones                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_lmcamaronesmas").click(function   () {

  	contlmcamarones+=1;


  	$('input[name=lmcamarones]').val(contlmcamarones);
  	$('input[name=totallmcamarones]').val(contlmcamarones*preciolmcamarones);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmcamarones]').val()>0){
  		$('#listalmcamarones').text("x" + contlmcamarones + " LomMien con camarones");}
  	})


  $("#btn_lmcamaronesmenos").click(function   () {

  	contlmcamarones-=1;
  	if(contlmcamarones<0){contlmcamarones=0;}

  	$('input[name=lmcamarones]').val(contlmcamarones);
  	$('input[name=totallmcamarones]').val(contlmcamarones*preciolmcamarones);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lmcamarones]').val()>0){
  		$('#listalmcamarones').text("x" + contlmcamarones + " LomMien con camarones");
  	}
  	else {
  		$('#listalmcamarones').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Pollo agridulce                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_pagridulcemas").click(function   () {

  	contpagridulce+=1;


  	$('input[name=pagridulce]').val(contpagridulce);
  	$('input[name=totalpagridulce]').val(contpagridulce*preciopagridulce);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pagridulce]').val()>0){
  		$('#listapagridulce').text("x" + contpagridulce + " Pollo agridulce");}
  	})


  $("#btn_pagridulcemenos").click(function   () {

  	contpagridulce-=1;
  	if(contpagridulce<0){contpagridulce=0;}

  	$('input[name=pagridulce]').val(contpagridulce);
  	$('input[name=totalpagridulce]').val(contpagridulce*preciopagridulce);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pagridulce]').val()>0){
  		$('#listapagridulce').text("x" + contpagridulce + " Pollo agridulce");
  	}
  	else {
  		$('#listapagridulce').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Pollo con soya                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_psoyamas").click(function   () {

  	contpsoya+=1;


  	$('input[name=psoya]').val(contpsoya);
  	$('input[name=totalpsoya]').val(contpsoya*preciopsoya);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=psoya]').val()>0){
  		$('#listapsoya').text("x" + contpsoya + " Pollo con soya");}
  	})


  $("#btn_psoyamenos").click(function   () {

  	contpsoya-=1;
  	if(contpsoya<0){contpsoya=0;}

  	$('input[name=psoya]').val(contpsoya);
  	$('input[name=totalpsoya]').val(contpsoya*preciopsoya);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=psoya]').val()>0){
  		$('#listapsoya').text("x" + contpsoya + " Pollo con soya");
  	}
  	else {
  		$('#listapsoya').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Pollo con curry                             ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_pcurrymas").click(function   () {

  	contpcurry+=1;


  	$('input[name=pcurry]').val(contpcurry);
  	$('input[name=totalpcurry]').val(contpcurry*preciopcurry);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pcurry]').val()>0){
  		$('#listapcurry').text("x" + contpcurry + " Pollo con curry");}
  	})


  $("#btn_pcurrymenos").click(function   () {

  	contpcurry-=1;
  	if(contpcurry<0){contpcurry=0;}

  	$('input[name=pcurry]').val(contpcurry);
  	$('input[name=totalpcurry]').val(contpcurry*preciopcurry);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pcurry]').val()>0){
  		$('#listapcurry').text("x" + contpcurry + " Pollo con curry");
  	}
  	else {
  		$('#listapcurry').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Pollo con ostras                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_postrasmas").click(function   () {

  	contpostras+=1;


  	$('input[name=postras]').val(contpostras);
  	$('input[name=totalpostras]').val(contpostras*preciopostras);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=postras]').val()>0){
  		$('#listapostras').text("x" + contpostras + " Pollo con ostras");}
  	})


  $("#btn_postrasmenos").click(function   () {

  	contpostras-=1;
  	if(contpostras<0){contpostras=0;}

  	$('input[name=postras]').val(contpostras);
  	$('input[name=totalpostras]').val(contpostras*preciopostras);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=postras]').val()>0){
  		$('#listapostras').text("x" + contpostras + " Pollo con ostras");
  	}
  	else {
  		$('#listapostras').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                 Pollo con ajonjoli y miel                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_pajonjolimas").click(function   () {

  	contpajonjoli+=1;


  	$('input[name=pajonjoli]').val(contpajonjoli);
  	$('input[name=totalpajonjoli]').val(contpajonjoli*preciopajonjoli);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pajonjoli]').val()>0){
  		$('#listapajonjoli').text("x" + contpajonjoli + " Pollo con ajonjolí y miel");}
  	})


  $("#btn_pajonjolimenos").click(function   () {

  	contpajonjoli-=1;
  	if(contpajonjoli<0){contpajonjoli=0;}

  	$('input[name=pajonjoli]').val(contpajonjoli);
  	$('input[name=totalpajonjoli]').val(contpajonjoli*preciopajonjoli);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pajonjoli]').val()>0){
  		$('#listapajonjoli').text("x" + contpajonjoli + " Pollo con ajonjolí y miel");
  	}
  	else {
  		$('#listapajonjoli').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                 Pollo con asado cantonés                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_pasadomas").click(function   () {

  	contpasado+=1;


  	$('input[name=pasado]').val(contpasado);
  	$('input[name=totalpasado]').val(contpasado*preciopasado);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pasado]').val()>0){
  		$('#listapasado').text("x" + contpasado + " Pollo con asado cantonés");}
  	})


  $("#btn_pasadomenos").click(function   () {

  	contpasado-=1;
  	if(contpasado<0){contpasado=0;}

  	$('input[name=pasado]').val(contpasado);
  	$('input[name=totalpasado]').val(contpasado*preciopasado);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=pasado]').val()>0){
  		$('#listapasado').text("x" + contpasado + " Pollo con asado cantonés");
  	}
  	else {
  		$('#listapasado').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Carne con ostras                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_costrasmas").click(function   () {

  	contcostras+=1;


  	$('input[name=costras]').val(contcostras);
  	$('input[name=totalcostras]').val(contcostras*preciocostras);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=costras]').val()>0){
  		$('#listacostras').text("x" + contcostras + " Carne con ostras");}
  	})


  $("#btn_costrasmenos").click(function   () {

  	contcostras-=1;
  	if(contcostras<0){contcostras=0;}

  	$('input[name=costras]').val(contcostras);
  	$('input[name=totalcostras]').val(contcostras*preciocostras);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=costras]').val()>0){
  		$('#listacostras').text("x" + contcostras + " Carne con ostras");
  	}
  	else {
  		$('#listacostras').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                Carne con curry                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_ccurrymas").click(function   () {

  	contccurry+=1;


  	$('input[name=ccurry]').val(contccurry);
  	$('input[name=totalccurry]').val(contccurry*precioccurry);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=ccurry]').val()>0){
  		$('#listaccurry').text("x" + contccurry + " Carne con curry");}
  	})


  $("#btn_ccurrymenos").click(function   () {

  	contccurry-=1;
  	if(contccurry<0){contccurry=0;}

  	$('input[name=ccurry]').val(contccurry);
  	$('input[name=totalccurry]').val(contccurry*precioccurry);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=ccurry]').val()>0){
  		$('#listaccurry').text("x" + contccurry + " Carne con curry");
  	}
  	else {
  		$('#listaccurry').text("");
  	}
  })


 ////////////////////////////////////////////////////////////////////////
  /////                Carne con brócoli                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cbrocolimas").click(function   () {

  	contcbrocoli+=1;


  	$('input[name=cbrocoli]').val(contcbrocoli);
  	$('input[name=totalcbrocoli]').val(contcbrocoli*preciocbrocoli);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cbrocoli]').val()>0){
  		$('#listacbrocoli').text("x" + contcbrocoli + " Carne con brócoli");}
  	})


  $("#btn_cbrocolimenos").click(function   () {

  	contcbrocoli-=1;
  	if(contcbrocoli<0){contcbrocoli=0;}

  	$('input[name=cbrocoli]').val(contcbrocoli);
  	$('input[name=totalcbrocoli]').val(contcbrocoli*preciocbrocoli);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cbrocoli]').val()>0){
  		$('#listacbrocoli').text("x" + contcbrocoli + " Carne con brócoli");
  	}
  	else {
  		$('#listacbrocoli').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                 Carne con vegetales chinos                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cvegetalesmas").click(function   () {

  	contcvegetales+=1;


  	$('input[name=cvegetales]').val(contcvegetales);
  	$('input[name=totalcvegetales]').val(contcvegetales*preciocvegetales);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cvegetales]').val()>0){
  		$('#listacvegetales').text("x" + contcvegetales + " Carne con vegetales chinos");}
  	})


  $("#btn_cvegetalesmenos").click(function   () {

  	contcvegetales-=1;
  	if(contcvegetales<0){contcvegetales=0;}

  	$('input[name=cvegetales]').val(contcvegetales);
  	$('input[name=totalcvegetales]').val(contcvegetales*preciocvegetales);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cvegetales]').val()>0){
  		$('#listacvegetales').text("x" + contcvegetales + " Carne con vegetales chinos");
  	}
  	else {
  		$('#listacvegetales').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Costillas                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_costillamas").click(function   () {

  	contcostilla+=1;


  	$('input[name=costilla]').val(contcostilla);
  	$('input[name=totalcostilla]').val(contcostilla*preciocostilla);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=costilla]').val()>0){
  		$('#listacostilla').text("x" + contcostilla + " Costillas");}
  	})


  $("#btn_costillamenos").click(function   () {

  	contcostilla-=1;
  	if(contcostilla<0){contcostilla=0;}

  	$('input[name=costilla]').val(contcostilla);
  	$('input[name=totalcostilla]').val(contcostilla*preciocostilla);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=costilla]').val()>0){
  		$('#listacostilla').text("x" + contcostilla + " Costillas");
  	}
  	else {
  		$('#listacostilla').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Cerdo con asado                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cerdoamas").click(function   () {

  	contcerdoa+=1;


  	$('input[name=cerdoa]').val(contcerdoa);
  	$('input[name=totalcerdoa]').val(contcerdoa*preciocerdoa);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cerdoa]').val()>0){
  		$('#listacerdoa').text("x" + contcerdoa + " Cerdo asado");}
  	})


  $("#btn_cerdoamenos").click(function   () {

  	contcerdoa-=1;
  	if(contcerdoa<0){contcerdoa=0;}

  	$('input[name=cerdoa]').val(contcerdoa);
  	$('input[name=totalcerdoa]').val(contcerdoa*preciocerdoa);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cerdoa]').val()>0){
  		$('#listacerdoa').text("x" + contcerdoa + " Cerdo asado");
  	}
  	else {
  		$('#listacerdoa').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                 Cerdo con sal y pimienta                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cerdosypmas").click(function   () {

  	contcerdosyp+=1;


  	$('input[name=cerdosyp]').val(contcerdosyp);
  	$('input[name=totalcerdosyp]').val(contcerdosyp*preciocerdosyp);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cerdosyp]').val()>0){
  		$('#listacerdosyp').text("x" + contcerdosyp + " Cerdo con sal y pimienta");}
  	})


  $("#btn_cerdosypmenos").click(function   () {

  	contcerdosyp-=1;
  	if(contcerdosyp<0){contcerdosyp=0;}

  	$('input[name=cerdosyp]').val(contcerdosyp);
  	$('input[name=totalcerdosyp]').val(contcerdosyp*preciocerdosyp);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cerdosyp]').val()>0){
  		$('#listacerdosyp').text("x" + contcerdosyp + " Cerdo con sal y pimienta");
  	}
  	else {
  		$('#listacerdosyp').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                 Lumpias                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_lumpiasmas").click(function   () {

  	contlumpias+=1;


  	$('input[name=lumpias]').val(contlumpias);
  	$('input[name=totallumpias]').val(contlumpias*preciolumpias);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lumpias]').val()>0){
  		$('#listalumpias').text("x" + contlumpias + " Lumpia");}
  	})


  $("#btn_lumpiasmenos").click(function   () {

  	contlumpias-=1;
  	if(contlumpias<0){contlumpias=0;}

  	$('input[name=lumpias]').val(contlumpias);
  	$('input[name=totallumpias]').val(contlumpias*preciolumpias);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lumpias]').val()>0){
  		$('#listalumpias').text("x" + contlumpias + " lumpia");
  	}
  	else {
  		$('#listalumpias').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                Wantón frito                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_wantonfmas").click(function   () {

  	contwantonf+=1;


  	$('input[name=wantonf]').val(contwantonf);
  	$('input[name=totalwantonf]').val(contwantonf*preciowantonf);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=wantonf]').val()>0){
  		$('#listawantonf').text("x" + contwantonf + " Wantón frito");}
  	})


  $("#btn_wantonfmenos").click(function   () {

  	contwantonf-=1;
  	if(contwantonf<0){contwantonf=0;}

  	$('input[name=wantonf]').val(contwantonf);
  	$('input[name=totalwantonf]').val(contwantonf*preciowantonf);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=wantonf]').val()>0){
  		$('#listawantonf').text("x" + contwantonf + " Wantón frito");
  	}
  	else {
  		$('#listawantonf').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                Fideos singapur                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_fideossmas").click(function   () {

  	contfideoss+=1;


  	$('input[name=fideoss]').val(contfideoss);
  	$('input[name=totalfideoss]').val(contfideoss*preciofideoss);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=fideoss]').val()>0){
  		$('#listafideoss').text("x" + contfideoss + " fideos singapur");}
  	})


  $("#btn_fideossmenos").click(function   () {

  	contfideoss-=1;
  	if(contfideoss<0){contfideoss=0;}

  	$('input[name=fideoss]').val(contfideoss);
  	$('input[name=totalfideoss]').val(contfideoss*preciofideoss);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=fideoss]').val()>0){
  		$('#listafideoss').text("x" + contfideoss + " fideos singapur");
  	}
  	else {
  		$('#listafideoss').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                Fu yong                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_fuyongmas").click(function   () {

  	contfuyong+=1;


  	$('input[name=fuyong]').val(contfuyong);
  	$('input[name=totalfuyong]').val(contfuyong*preciofuyong);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=fuyong]').val()>0){
  		$('#listafuyong').text("x" + contfuyong + " Fu yong");}
  	})


  $("#btn_fuyongmenos").click(function   () {

  	contfuyong-=1;
  	if(contfuyong<0){contfuyong=0;}

  	$('input[name=fuyong]').val(contfuyong);
  	$('input[name=totalfuyong]').val(contfuyong*preciofuyong);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=fuyong]').val()>0){
  		$('#listafuyong').text("x" + contfuyong + " Fu yong");
  	}
  	else {
  		$('#listafuyong').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////                Refresco 2 lts                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_refresco2mas").click(function   () {

  	contrefresco2+=1;


  	$('input[name=refresco2]').val(contrefresco2);
  	$('input[name=totalrefresco2]').val(contrefresco2*preciorefresco2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=refresco2]').val()>0){
  		$('#listarefresco2').text("x" + contrefresco2 + " Refresco 2 lts");}
  	})


  $("#btn_refresco2menos").click(function   () {

  	contrefresco2-=1;
  	if(contrefresco2<0){contrefresco2=0;}

  	$('input[name=refresco2]').val(contrefresco2);
  	$('input[name=totalrefresco2]').val(contrefresco2*preciorefresco2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=refresco2]').val()>0){
  		$('#listarefresco2').text("x" + contrefresco2 + "Refresco 2 lts");
  	}
  	else {
  		$('#listarefresco2').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////                 Lipton                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_liptonmas").click(function   () {

  	contlipton+=1;


  	$('input[name=lipton]').val(contlipton);
  	$('input[name=totallipton]').val(contlipton*preciolipton);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lipton]').val()>0){
  		$('#listalipton').text("x" + contlipton + " liptón (Durazno, verde, limón)");}
  	})


  $("#btn_liptonmenos").click(function   () {

  	contlipton-=1;
  	if(contlipton<0){contlipton=0;}

  	$('input[name=lipton]').val(contlipton);
  	$('input[name=totallipton]').val(contlipton*preciolipton);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=lipton]').val()>0){
  		$('#listalipton').text("x" + contlipton + " liptón (Durazno, verde, limón)");
  	}
  	else {
  		$('#listalipton').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////           Refresco lata                           ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_refrescolmas").click(function   () {

  	contrefrescol+=1;


  	$('input[name=refrescol]').val(contrefrescol);
  	$('input[name=totalrefrescol]').val(contrefrescol*preciorefrescol);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=refrescol]').val()>0){
  		$('#listarefrescol').text("x" + contrefrescol + "Refresco lata");}
  	})


  $("#btn_refrescolmenos").click(function   () {

  	contrefrescol-=1;
  	if(contrefrescol<0){contrefrescol=0;}

  	$('input[name=refrescol]').val(contrefrescol);
  	$('input[name=totalrefrescol]').val(contrefrescol*preciorefrescol);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=refrescol]').val()>0){
  		$('#listarefrescol').text("x" + contrefrescol + " Refresco lata");
  	}
  	else {
  		$('#listarefrescol').text("");
  	}
  })

 ////////////////////////////////////////////////////////////////////////
  /////             Agua 600ml                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_agua6mas").click(function   () {

  	contagua6+=1;


  	$('input[name=agua6]').val(contagua6);
  	$('input[name=totalagua6]').val(contagua6*precioagua6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=agua6]').val()>0){
  		$('#listaagua6').text("x" + contagua6 + " Agua 600 ml");}
  	})


  $("#btn_agua6menos").click(function   () {

  	contagua6-=1;
  	if(contagua6<0){contagua6=0;}

  	$('input[name=agua6]').val(contagua6);
  	$('input[name=totalagua6]').val(contagua6*precioagua6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=agua6]').val()>0){
  		$('#listaagua6').text("x" + contagua6 + " Agua 600 ml");
  	}
  	else {
  		$('#listaagua6').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////            Ración de pan chino                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_pancmas").click(function   () {

  	contpanc+=1;


  	$('input[name=panc]').val(contpanc);
  	$('input[name=totalpanc]').val(contpanc*preciopanc);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=panc]').val()>0){
  		$('#listapanc').text("x" + contpanc + " Ración de pan chino ");}
  	})


  $("#btn_pancmenos").click(function   () {

  	contpanc-=1;
  	if(contpanc<0){contpanc=0;}

  	$('input[name=panc]').val(contpanc);
  	$('input[name=totalpanc]').val(contpanc*preciopanc);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=panc]').val()>0){
  		$('#listapanc').text("x" + contpanc + " Ración de pan chino");
  	}
  	else {
  		$('#listapanc').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////            Sopa wanton                           ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_sopawmas").click(function   () {

  	contsopaw+=1;


  	$('input[name=sopaw]').val(contsopaw);
  	$('input[name=totalsopaw]').val(contsopaw*preciosopaw);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=sopaw]').val()>0){
  		$('#listasopaw').text("x" + contsopaw + " Sopa Wantón ");}
  	})


  $("#btn_sopawmenos").click(function   () {

  	contsopaw-=1;
  	if(contsopaw<0){contsopaw=0;}

  	$('input[name=sopaw]').val(contsopaw);
  	$('input[name=totalsopaw]').val(contsopaw*preciosopaw);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=sopaw]').val()>0){
  		$('#listasopaw').text("x" + contsopaw + " Sopa wantón");
  	}
  	else {
  		$('#listasopaw').text("");
  	}
  })
 ////////////////////////////////////////////////////////////////////////
  /////           Sopa Wantón mien                            ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_swantonmienmas").click(function   () {

  	contswantonmien+=1;


  	$('input[name=swantonmien]').val(contswantonmien);
  	$('input[name=totalswantonmien]').val(contswantonmien*precioswantonmien);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=swantonmien]').val()>0){
  		$('#listaswantonmien').text("x" + contswantonmien + " Sopa wantón mien ");}
  	})


  $("#btn_swantonmienmenos").click(function   () {

  	contswantonmien-=1;
  	if(contswantonmien<0){contswantonmien=0;}

  	$('input[name=swantonmien]').val(contswantonmien);
  	$('input[name=totalswantonmien]').val(contswantonmien*precioswantonmien);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=swantonmien]').val()>0){
  		$('#listaswantonmien').text("x" + contswantonmien + " Sopa wantón mien");
  	}
  	else {
  		$('#listaswantonmien').text("");
  	}
  })

      ////////////////////////////////////////////////////////////////////////
  /////                 Chop suey de vegetales                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_csvegetalesmas").click(function   () {

  	contcsvegetales+=1;


  	$('input[name=csvegetales]').val(contcsvegetales);
  	$('input[name=totalcsvegetales]').val(contcsvegetales*preciocsvegetales);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=csvegetales]').val()>0){
  		$('#listacsvegetales').text("x" + contcsvegetales + " Chop suey de vegetales");}
  	})


  $("#btn_csvegetalesmenos").click(function   () {

  	contcsvegetales-=1;
  	if(contcsvegetales<0){contcsvegetales=0;}

  	$('input[name=csvegetales]').val(contcsvegetales);
  	$('input[name=totalcsvegetales]').val(contcsvegetales*preciocsvegetales);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=csvegetales]').val()>0){
  		$('#listacsvegetales').text("x" + contcsvegetales + "Chop suey de vegetales");
  	}
  	else {
  		$('#listacsvegetales').text("");
  	}
  })
      ////////////////////////////////////////////////////////////////////////
  /////                Chop suey de pollo                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cspollomas").click(function   () {

  	contcspollo+=1;


  	$('input[name=cspollo]').val(contcspollo);
  	$('input[name=totalcspollo]').val(contcspollo*preciocspollo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cspollo]').val()>0){
  		$('#listacspollo').text("x" + contcspollo + " Chop suey de pollo");}
  	})


  $("#btn_cspollomenos").click(function   () {

  	contcspollo-=1;
  	if(contcspollo<0){contcspollo=0;}

  	$('input[name=cspollo]').val(contcspollo);
  	$('input[name=totalcspollo]').val(contcspollo*preciocspollo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cspollo]').val()>0){
  		$('#listacspollo').text("x" + contcspollo + " Chop suey de pollo");
  	}
  	else {
  		$('#listacspollo').text("");
  	}
  })
      ////////////////////////////////////////////////////////////////////////
  /////                Chop suey de cerdo                              ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cscerdomas").click(function   () {

  	contcscerdo+=1;


  	$('input[name=cscerdo]').val(contcscerdo);
  	$('input[name=totalcscerdo]').val(contcscerdo*preciocscerdo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cscerdo]').val()>0){
  		$('#listacscerdo').text("x" + contcscerdo + " Chop suey de cerdo");}
  	})


  $("#btn_cscerdomenos").click(function   () {

  	contcscerdo-=1;
  	if(contcscerdo<0){contcscerdo=0;}

  	$('input[name=cscerdo]').val(contcscerdo);
  	$('input[name=totalcscerdo]').val(contcscerdo*preciocscerdo);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cscerdo]').val()>0){
  		$('#listacscerdo').text("x" + contcscerdo + " Chop suey de cerdo");
  	}
  	else {
  		$('#listacscerdo').text("");
  	}
  })
      ////////////////////////////////////////////////////////////////////////
  /////                Chop suey de carne                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cscarnemas").click(function   () {

  	contcscarne+=1;


  	$('input[name=cscarne]').val(contcscarne);
  	$('input[name=totalcscarne]').val(contcscarne*preciocscarne);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cscarne]').val()>0){
  		$('#listacscarne').text("x" + contcscarne + " Chop suey de carne");}
  	})


  $("#btn_cscarnemenos").click(function   () {

  	contcscarne-=1;
  	if(contcscarne<0){contcscarne=0;}

  	$('input[name=cscarne]').val(contcscarne);
  	$('input[name=totalcscarne]').val(contcscarne*preciocscarne);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cscarne]').val()>0){
  		$('#listacscarne').text("x" + contcscarne + " Chop suey de carne");
  	}
  	else {
  		$('#listacscarne').text("");
  	}
  })
      ////////////////////////////////////////////////////////////////////////
  /////                Chop suey de camarones                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cscamaronesmas").click(function   () {

  	contcscamarones+=1;


  	$('input[name=cscamarones]').val(contcscamarones);
  	$('input[name=totalcscamarones]').val(contcscamarones*preciocscamarones);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cscamarones]').val()>0){
  		$('#listacscamarones').text("x" + contcscamarones + " Chop suey de camarones");}
  	})


  $("#btn_cscamaronesmenos").click(function   () {

  	contcscamarones-=1;
  	if(contcscamarones<0){contcscamarones=0;}

  	$('input[name=cscamarones]').val(contcscamarones);
  	$('input[name=totalcscamarones]').val(contcscamarones*preciocscamarones);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cscamarones]').val()>0){
  		$('#listacscamarones').text("x" + contcscamarones + " Chop suey de camarones");
  	}
  	else {
  		$('#listacscamarones').text("");
  	}
  })
      ////////////////////////////////////////////////////////////////////////
  /////                Chop suey de pollo y camarones                               ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_cspolloycmas").click(function   () {

  	contcspolloyc+=1;


  	$('input[name=cspolloyc]').val(contcspolloyc);
  	$('input[name=totalcspolloyc]').val(contcspolloyc*preciocspolloyc);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cspolloyc]').val()>0){
  		$('#listacspolloyc').text("x" + contcspolloyc + " Chop suey de pollo y camarones");}
  	})


  $("#btn_cspolloycmenos").click(function   () {

  	contcspolloyc-=1;
  	if(contcspolloyc<0){contcspolloyc=0;}

  	$('input[name=cspolloyc]').val(contcspolloyc);
  	$('input[name=totalcspolloyc]').val(contcspolloyc*preciocspolloyc);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=cspolloyc]').val()>0){
  		$('#listacspolloyc').text("x" + contcspolloyc + " Chop suey de pollo y camarones");
  	}
  	else {
  		$('#listacspolloyc').text("");
  	}
  })

////////////////////////////////////////////////////////////////////////
  /////            Martes kombo # 1                           //////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_marteskombo1mas").click(function   () {

  	contmarteskombo1+=1;


  	$('input[name=marteskombo1]').val(contmarteskombo1);
  	$('input[name=totalmarteskombo1]').val(contmarteskombo1*preciomarteskombo1);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo1]').val()>0){
  		$('#listamarteskombo1').text("x" + contmarteskombo1 + "Martes de kombo #1");}
  	})


  $("#btn_marteskombo1menos").click(function   () {

  	contmarteskombo1-=1;
  	if(contmarteskombo1<0){contmarteskombo1=0;}


  	$('input[name=marteskombo1]').val(contmarteskombo1);
  	$('input[name=totalmarteskombo1]').val(contmarteskombo1*preciomarteskombo1);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo1]').val()>0){
  		$('#listamarteskombo1').text("x" + contmarteskombo1 + "Martes de kombo #1");
  	}
  	else {
  		$('#listamarteskombo1').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
/////////              Martes kombo # 2                ////////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_marteskombo2mas").click(function   () {

  	contmarteskombo2+=1;

  	$('input[name=marteskombo2]').val(contmarteskombo2);
  	$('input[name=totalmarteskombo2]').val(contmarteskombo2*preciomarteskombo2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo2]').val()>0){
  		$('#listamarteskombo2').text("x" + contmarteskombo2 + " Martes de kombo #2");}
  	})


  $("#btn_marteskombo2menos").click(function   () {

  	contmarteskombo2-=1;
  	if(contmarteskombo2<0){contmarteskombo2=0;}

  	$('input[name=marteskombo2]').val(contmarteskombo2);
  	$('input[name=totalmarteskombo2]').val(contmarteskombo2*preciomarteskombo2);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo2]').val()>0){
  		$('#listamarteskombo2').text("x" + contmarteskombo2 + "Martes de kombo #2");
  	}
  	else {
  		$('#listamarteskombo2').text("");
  	}
  })


  ////////////////////////////////////////////////////////////////////////
  /////                Martes de kombo # 3                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_marteskombo3mas").click(function   () {

  	contmarteskombo3+=1;


  	$('input[name=marteskombo3]').val(contmarteskombo3);
  	$('input[name=totalmarteskombo3]').val(contmarteskombo3*preciomarteskombo3);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo3]').val()>0){
  		$('#listamarteskombo3').text("x" + contmarteskombo3 + "Martes de kombo #3");}
  	})


  $("#btn_marteskombo3menos").click(function   () {

  	contmarteskombo3-=1;
  	if(contmarteskombo3<0){contmarteskombo3=0;}

  	$('input[name=marteskombo3]').val(contmarteskombo3);
  	$('input[name=totalmarteskombo3]').val(contmarteskombo3*preciomarteskombo3);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo3]').val()>0){
  		$('#listamarteskombo3').text("x" + contmarteskombo3 + "Martes de kombo #3");
  	}
  	else {
  		$('#listamarteskombo3').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////              Martes de kombo # 4                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_marteskombo4mas").click(function   () {

  	contmarteskombo4+=1;


  	$('input[name=marteskombo4]').val(contmarteskombo4);
  	$('input[name=totalmarteskombo4]').val(contmarteskombo4*preciomarteskombo4);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo4]').val()>0){
  		$('#listamarteskombo4').text("x" + contmarteskombo4 + " Martes de kombo #4");}
  	})


  $("#btn_marteskombo4menos").click(function   () {

  	contmarteskombo4-=1;
  	if(contmarteskombo4<0){contmarteskombo4=0;}

  	$('input[name=marteskombo4]').val(contmarteskombo4);
  	$('input[name=totalmarteskombo4]').val(contmarteskombo4*preciomarteskombo4);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo4]').val()>0){
  		$('#listamarteskombo4').text("x" + contmarteskombo4 + "Martes de kombo #4");
  	}
  	else {
  		$('#listamarteskombo4').text("");
  	}
  })

  ////////////////////////////////////////////////////////////////////////
  /////                Martes de kombo # 5                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_marteskombo5mas").click(function   () {

  	contmarteskombo5+=1;


  	$('input[name=marteskombo5]').val(contmarteskombo5);
  	$('input[name=totalmarteskombo5]').val(contmarteskombo5*preciomarteskombo5);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo5]').val()>0){
  		$('#listamarteskombo5').text("x" + contmarteskombo5 + " Martes de kombo #5");}
  	})


  $("#btn_marteskombo5menos").click(function   () {

  	contmarteskombo5-=1;
  	if(contmarteskombo5<0){contmarteskombo5=0;}

  	$('input[name=marteskombo5]').val(contmarteskombo5);
  	$('input[name=totalmarteskombo5]').val(contmarteskombo5*preciomarteskombo5);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo5]').val()>0){
  		$('#listamarteskombo5').text("x" + contmarteskombo5 + " Martes de kombo #5");
  	}
  	else {
  		$('#listamarteskombo5').text("");
  	}
  })

    ////////////////////////////////////////////////////////////////////////
  /////            Martes de  kombo # 6                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_marteskombo6mas").click(function   () {

  	contmarteskombo6+=1;


  	$('input[name=marteskombo6]').val(contmarteskombo6);
  	$('input[name=totalmarteskombo6]').val(contmarteskombo6*preciomarteskombo6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo6]').val()>0){
  		$('#listamarteskombo6').text("x" + contmarteskombo6 + " Martes de kombo #6");}
  	})


  $("#btn_marteskombo6menos").click(function   () {

  	contmarteskombo6-=1;
  	if(contmarteskombo6<0){contmarteskombo6=0;}

  	$('input[name=marteskombo6]').val(contmarteskombo6);
  	$('input[name=totalmarteskombo6]').val(contmarteskombo6*preciomarteskombo6);
  	$("#totalCompra").text(sumarTodo());

  	if($('input[name=marteskombo6]').val()>0){
  		$('#listamarteskombo6').text("x" + contmarteskombo6 + "Martes de kombo #6");
  	}
  	else {
  		$('#listamarteskombo6').text("");
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


 	return parseInt($("input[name=totalcombo1]").val())+ parseInt($("input[name=totalcombo2]").val()) + parseInt($("input[name=totalcombo3]").val())+parseInt($("input[name=totalcombo4]").val())+ parseInt($("input[name=totalcombo5]").val()) +  parseInt($("input[name=totalcombo6]").val()) + parseInt($("input[name=totalcombo1duo]").val()) + parseInt($("input[name=totalcombo2duo]").val()) +parseInt($("input[name=totalcombo3duo]").val()) + parseInt($("input[name=totalcombo4duo]").val()) +  parseInt($("input[name=totalkombo1]").val()) +  parseInt($("input[name=totalkombo2]").val()) +  parseInt($("input[name=totalkombo3]").val()) +  parseInt($("input[name=totalkombo4]").val()) +  parseInt($("input[name=totalkombo5]").val()) +  parseInt($("input[name=totalkombo6]").val()) +  parseInt($("input[name=totalvegetariano]").val()) +  parseInt($("input[name=totalpollo]").val())+  parseInt($("input[name=totaljamon]").val())+  parseInt($("input[name=totalcerdo]").val())+  parseInt($("input[name=totalespecial]").val())+  parseInt($("input[name=totalcamarones]").val()) +  parseInt($("input[name=totallmvegetariano]").val()) +  parseInt($("input[name=totallmpollo]").val())+  parseInt($("input[name=totallmcerdo]").val())+  parseInt($("input[name=totallmespecial]").val())+  parseInt($("input[name=totallmcamarones]").val()) +  parseInt($("input[name=totalpagridulce]").val()) +  parseInt($("input[name=totalpsoya]").val()) +  parseInt($("input[name=totalpcurry]").val()) +  parseInt($("input[name=totalpostras]").val()) +  parseInt($("input[name=totalpajonjoli]").val()) +  parseInt($("input[name=totalpasado]").val()) +  parseInt($("input[name=totalcostras]").val()) +  parseInt($("input[name=totalccurry]").val()) +  parseInt($("input[name=totalcbrocoli]").val()) +  parseInt($("input[name=totalcvegetales]").val()) +  parseInt($("input[name=totalcostilla]").val()) +  parseInt($("input[name=totalcerdoa]").val()) +  parseInt($("input[name=totalcerdosyp]").val())+  parseInt($("input[name=totallumpias]").val())+  parseInt($("input[name=totalwantonf]").val())+  parseInt($("input[name=totalfideoss]").val())+  parseInt($("input[name=totalfuyong]").val())+  parseInt($("input[name=totalrefresco2]").val())+  parseInt($("input[name=totallipton]").val())+  parseInt($("input[name=totalrefrescol]").val())+  parseInt($("input[name=totalagua6]").val())+  parseInt($("input[name=totalpanc]").val())+  parseInt($("input[name=totalsopaw]").val())+  parseInt($("input[name=totalswantonmien]").val())+  parseInt($("input[name=totalcsvegetales]").val())+  parseInt($("input[name=totalcspollo]").val())+  parseInt($("input[name=totalcscerdo]").val())+  parseInt($("input[name=totalcscarne]").val())+  parseInt($("input[name=totalcscamarones]").val())+  parseInt($("input[name=totalcspolloyc]").val())+  parseInt($("input[name=totalmarteskombo1]").val()) +  parseInt($("input[name=totalmarteskombo2]").val()) +  parseInt($("input[name=totalmarteskombo3]").val()) +  parseInt($("input[name=totalmarteskombo4]").val()) +  parseInt($("input[name=totalmarteskombo5]").val()) +  parseInt($("input[name=totalmarteskombo6]").val());
 }

</script>
</body>
</html>


