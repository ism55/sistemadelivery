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
              <!--  ################################################################# -->
              <!--                    COMBO #1                  -->
              <!--  ################################################################# -->

              <div class="container">
                <div class="row form-group">
                  <div class="col">
                    <label for="btn_combo1mas" class="col-form-label">Combo 1</label>
                  </div>
                  <div class="col">
                    <label  class="col-form-label">Agregar</label>
                    <button type="button" id="btn_combo1mas" class="btn btn-lg btn-primary btn-block">+</button>
                  </div>
                  <div class="col">
                    <label  class="col-form-label">Quitar</label>
                    <button type="button" id="btn_combo1menos" class="btn btn-lg btn-primary btn-block">-</button>
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
                <!--                    COMBO #2                  -->
                <!--  ################################################################# -->

                <div class="row form-group">
                  <div class="col">
                    <label for="btn_combo2mas" class="col-form-label">Combo 2</label>
                  </div>
                  <div class="col">
                    <label  class="col-form-label">Agregar</label>
                    <button type="button" id="btn_combo2mas" class="btn btn-lg btn-primary btn-block">+</button>
                  </div>
                  <div class="col">
                    <label class="col-form-label">Quitar</label>
                    <button type="button" id="btn_combo2menos" class="btn btn-lg btn-primary btn-block">-</button>
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
                <!--                    COMBO #3                  -->
                <!--  ################################################################# -->
                <div class="row form-group">
                  <div class="col">
                    <label for="btn_combo3mas" class="col-form-label">Combo 3</label>
                  </div>
                  <div class="col">
                    <label  class="col-form-label">Agregar</label>
                    <button type="button" id="btn_combo3mas" class="btn btn-lg btn-primary btn-block">+</button>
                  </div>
                  <div class="col">
                    <label class="col-form-label">Quitar</label>
                    <button type="button" id="btn_combo3menos" class="btn btn-lg btn-primary btn-block">-</button>
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
                <!--                    IMPRIMIR ORDEN                  -->
                <!--  ################################################################# -->
                <div class="row form-group">
                  <button type="button" class="btn btn-lg btn-primary btn-block" onClick="imprSelec('comboslista')">Imprimir orden</button>
                </div>
                <!--  ################################################################# -->
                <!--                    REGISTRAR ORDEN                 -->
                <!--  ################################################################# -->
                <div class="row form-group">
                  <button type="submit" id="cargar" class="btn btn-lg btn-primary btn-block">Cargar a Base de Datos</button>
                </div>
                
              </div>

              
              

            </form>
            <!--  ################################################################# -->
            <!--                    RECIBO DE COMPRA          -->
            <!--  ################################################################# -->
          </div>
          <div class="col">
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





    </main>

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
    var totalglobal = 0;
    var precioCombo1 = 15;
    var precioCombo2 = 15;
    var precioCombo3 = 20;
  ////////////////////////////////////////////////////////////////////////
  /////                 COMBO # 1                           //////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo1mas").click(function   () {

    contcombo1+=1;
    

    $('input[name=combo1]').val(contcombo1);
    $('input[name=totalcombo1]').val(contcombo1*precioCombo1);
    $("#totalCompra").text(sumarTodo());

    if($('input[name=combo1]').val()>0){
      $('#listaCombo1').text("x" + contcombo1 + " Combos #1");}
    })


  $("#btn_combo1menos").click(function   () {

    contcombo1-=1;
    if(contcombo1<0){contcombo1=0;}
     

      $('input[name=combo1]').val(contcombo1);
      $('input[name=totalcombo1]').val(contcombo1*precioCombo1);
      $("#totalCompra").text(sumarTodo());

      if($('input[name=combo1]').val()>0){
        $('#listaCombo1').text("x" + contcombo1 + " Combos #1");
      }
      else {
        $('#listaCombo1').text("");
      }
    })

  ////////////////////////////////////////////////////////////////////////
/////////                        COMBO # 2                ////////////////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo2mas").click(function   () {

    contcombo2+=1;
   
    $('input[name=combo2]').val(contcombo2);
    $('input[name=totalcombo2]').val(contcombo2*precioCombo2);
    $("#totalCompra").text(sumarTodo());

    if($('input[name=combo2]').val()>0){
      $('#listaCombo2').text("x" + contcombo2 + " Combos #2");}
    })


  $("#btn_combo2menos").click(function   () {

    contcombo2-=1;
    if(contcombo2<0){contcombo2=0;}

    $('input[name=combo2]').val(contcombo2);
    $('input[name=totalcombo2]').val(contcombo2*precioCombo2);
    $("#totalCompra").text(sumarTodo());

    if($('input[name=combo2]').val()>0){
      $('#listaCombo2').text("x" + contcombo2 + " Combos #2");
    }
    else {
      $('#listaCombo2').text("");
    }
  })


  ////////////////////////////////////////////////////////////////////////
  /////                  COMBO # 3                                ///////
  ///////////////////////////////////////////////////////////////////

  $("#btn_combo3mas").click(function   () {

    contcombo3+=1;
    

    $('input[name=combo3]').val(contcombo3);
    $('input[name=totalcombo3]').val(contcombo3*precioCombo3);
    $("#totalCompra").text(sumarTodo());

    if($('input[name=combo3]').val()>0){
      $('#listaCombo3').text("x" + contcombo3 + " Combos #3");}
    })


  $("#btn_combo3menos").click(function   () {

    contcombo3-=1;
    if(contcombo3<0){contcombo3=0;}

    $('input[name=combo3]').val(contcombo3);
    $('input[name=totalcombo3]').val(contcombo3*precioCombo3);
    $("#totalCompra").text(sumarTodo());

    if($('input[name=combo3]').val()>0){
      $('#listaCombo3').text("x" + contcombo3 + " Combos #3");
    }
    else {
      $('#listaCombo3').text("");
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


  return parseInt($("input[name=totalcombo1]").val())+ parseInt($("input[name=totalcombo2]").val()) + parseInt($("input[name=totalcombo3]").val()) ;
}

</script>
</body>
</html>


