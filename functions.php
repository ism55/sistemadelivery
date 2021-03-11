<?php 

include('delivery.php');



$consmenu = "SELECT plato,precio,id from menus";
$resmenu  = $conex->query($consmenu);

$arreglo = array();

if ($resmenu) {
//      echo "<script>alert('Query correcto')</script>";

} else {
  echo "Error: " . $resmenu . "<br>" . mysqli_error($conex);
}
 foreach ($resmenu as $row_menu){ // aca puedes hacer la consulta e iterarla con each. 
            
    
              $plato =$row_menu['plato'];
              $precio = $row_menu['precio'];
              $id =$row_menu['id'];

              $arreglo[$id]=$precio;
             
          


        }
      
?>


<script>
var contcombo1 = 0;
var contcombo2 = 0;
var contcombo3 = 0;
var contcombo4 = 0;
var contcombo5 = 0;
var contcombo6 = 0;
var contcombo7 = 0;
var contcombo1duo = 0;
var contcombo2duo = 0;
var contcombo3duo = 0;
var contcombo4duo = 0;
var contcombo5duo = 0;
var contcombo6duo = 0;
var contcombo7duo = 0;
var contkombo1 = 0;
var contkombo2 = 0;
var contkombo3 = 0;
var contkombo4 = 0;
var contkombo5 = 0;
var contkombo6 = 0;
var contkombo7 = 0;
var contkombo8 = 0;
var contvegetariano = 0;
var contpollo = 0;
var contjamon = 0;
var contcerdo = 0;
var contespecial = 0;
var contcamarones = 0;
var contkowloon = 0;
var contpolloycamarones = 0;
var contlmvegetariano = 0;
var contlmpollo = 0;
var contlmcerdo = 0;
var contlmespecial = 0;
var contlmcamarones = 0;
var contpagridulce = 0;
var contpsoya = 0;
var contpcurry = 0;
var contpostras = 0;
var contpajonjoli = 0;
var contpasado = 0;
var contcostras = 0;
var contccurry = 0;
var contcbrocoli = 0;
var contcvegetales = 0;
var contcostilla = 0;
var contcerdoa = 0;
var contcerdosyp = 0;
var contlumpias = 0;
var contwantonf = 0;
var contfideoss = 0;
var contfuyong = 0;
var contrefresco2 = 0;
var contrefresco1 = 0;
var contlipton = 0;
var contrefrescol = 0;
var contagua6 = 0;
var contpanc = 0;
var contsopaw = 0;
var contswantonmien = 0;
var contcsvegetales = 0;
var contcspollo = 0;
var contcscarne = 0;
var contcscerdo = 0;
var contcscamarones = 0;
var contcspolloyc = 0;
var contcsjamon = 0;
var contcsespecial = 0;
var contcskowloon = 0;
var contmarteskombo1 = 0;
var contmarteskombo2 = 0;
var contmarteskombo3 = 0;
var contmarteskombo4 = 0;
var contmarteskombo5 = 0;
var contmarteskombo6 = 0;
var contcomboclasico1 = 0;
var contcomboclasico2 = 0;
var contcombosuper1 = 0;
var contcombosuper2 = 0;
var contcombosuper3 = 0;
var contmarteskombo6 = 0;
var contlmkowloon = 0;
var contlmcarne = 0;
var contlmpolloycamarones = 0;
var contcmvegetariano = 0;
var contcmpollo = 0;
var contcmcerdo = 0;
var contcmespecial = 0;
var contcmkowloon = 0;
var contcmcarne = 0;
var contcmcamarones = 0;
var contcmpolloycamarones = 0;
var contcerdocurry = 0;
var contcerdoostra = 0;
var contcostillaunidad = 0;
var contracionlumpias = 0;
var totalglobal = 0;

<?php
echo "var precioMegaCombo1 = $arreglo[1];\n";
echo "var precioMegaCombo2 = $arreglo[3];\n";
echo "var precioMegaCombo3 = $arreglo[4];\n";
echo "var precioMegaCombo4 = $arreglo[5];\n";
echo "var precioMegaCombo5 = $arreglo[6];\n";
echo "var precioMegaCombo6 = $arreglo[7];\n";
echo "var precioMegaCombo7 = $arreglo[8];\n";
echo "var precioCombo1duo = $arreglo[9];\n";
echo "var precioCombo2duo = $arreglo[10];\n";
echo "var precioCombo3duo = $arreglo[11];\n";
echo "var precioCombo4duo = $arreglo[12];\n";
echo "var precioCombo5duo = $arreglo[13];\n";
echo "var precioCombo6duo = $arreglo[14];\n";
echo "var precioCombo7duo = $arreglo[15];\n";
echo "var preciokombo1 = $arreglo[16];\n";
echo "var preciokombo2 = $arreglo[17];\n";
echo "var preciokombo3 = $arreglo[18];\n";
echo "var preciokombo4 = $arreglo[19];\n";
echo "var preciokombo5 = $arreglo[20];\n";
echo "var preciokombo6 = $arreglo[21];\n";
echo "var preciokombo7 = $arreglo[22];\n";
echo "var preciokombo8 = $arreglo[23];\n";
echo "var preciovegetariano = $arreglo[24];\n";
echo "var preciopollo = $arreglo[25];\n";
echo "var preciojamon = $arreglo[26];\n";
echo "var preciocerdo = $arreglo[27];\n";
echo "var precioespecial = $arreglo[28];\n";
echo "var preciocamarones = $arreglo[29];\n";
echo "var preciokowloon = $arreglo[30];\n";
echo "var preciopolloycamarones = $arreglo[31];\n";
echo "var preciolmvegetariano = $arreglo[32];\n";
echo "var preciolmpollo = $arreglo[33];\n";
echo "var preciolmcerdo = $arreglo[34];\n";
echo "var preciolmespecial = $arreglo[35];\n";
echo "var preciolmcamarones = $arreglo[36];\n";
echo "var preciolmkowloon = $arreglo[37];\n";
echo "var preciolmcarne = $arreglo[38];\n";
echo "var preciolmpolloycamarones = $arreglo[39];\n";
echo "var preciopagridulce = $arreglo[40];\n";
echo "var preciopsoya = $arreglo[41];\n";
echo "var preciopcurry = $arreglo[42];\n";
echo "var preciopostras = $arreglo[43];\n";
echo "var preciopajonjoli = $arreglo[44];\n";
echo "var preciopasado = $arreglo[45];\n";
echo "var preciocostras = $arreglo[46];\n";
echo "var precioccurry = $arreglo[47];\n";
echo "var preciocbrocoli = $arreglo[48];\n";
echo "var preciocvegetales = $arreglo[49];\n";
echo "var preciocostilla = $arreglo[50];\n";
echo "var preciocerdoa = $arreglo[51];\n";
echo "var preciocerdosyp = $arreglo[52];\n";
echo "var preciolumpias = $arreglo[53];\n";
echo "var preciowantonf = $arreglo[54];\n";
echo "var preciofideoss = $arreglo[55];\n";
echo "var preciofuyong = $arreglo[56];\n";
echo "var preciorefresco2 = $arreglo[57];\n";
echo "var preciolipton = $arreglo[58];\n";
echo "var preciorefrescol = $arreglo[59];\n";
echo "var precioagua6 = $arreglo[74];\n";
echo "var preciopanc = $arreglo[60];\n";
echo "var preciosopaw = $arreglo[61];\n";
echo "var precioswantonmien = $arreglo[62];\n";
echo "var preciocsvegetales = $arreglo[63];\n";
echo "var preciocspollo = $arreglo[64];\n";
echo "var preciocscerdo = $arreglo[65];\n";
echo "var preciocscarne = $arreglo[66];\n";
echo "var preciocscamarones = $arreglo[67];\n";
echo "var preciocspolloyc = $arreglo[68];\n";
echo "var preciocomboclasico1 = $arreglo[69];\n";
echo "var preciocomboclasico2 = $arreglo[70];\n";
echo "var preciocombosuper1 = $arreglo[71];\n";
echo "var preciocombosuper2 = $arreglo[72];\n";
echo "var preciocombosuper3 = $arreglo[73];\n";
echo "var preciocmvegetariano = $arreglo[149];\n";
echo "var preciocmpollo = $arreglo[150];\n";
echo "var preciocmcerdo = $arreglo[151];\n";
echo "var preciocmespecial = $arreglo[152];\n";
echo "var preciocmkowloon = $arreglo[153];\n";
echo "var preciocmcarne = $arreglo[154];\n";
echo "var preciocmcamarones = $arreglo[155];\n";
echo "var preciocmpolloycamarones = $arreglo[156];\n";
echo "var preciocerdocurry = $arreglo[158];\n";
echo "var preciocerdoostra = $arreglo[157];\n";
echo "var preciocsjamon = $arreglo[159];\n";
echo "var preciocsespecial = $arreglo[160];\n";
echo "var preciocskowloon = $arreglo[161];\n";
echo "var preciocostillaunidad = $arreglo[162];\n";
echo "var precioracionlumpias = $arreglo[163];\n";
echo "var preciorefresco1 = $arreglo[693];\n";
?>
var subtotalCompra = "#subtotalCompra";
var totalCompra = "#totalCompra";
////////////////////////////////////////////////////////////////////////
/////                  MEGA COMBO # 1                           //////////////
///////////////////////////////////////////////////////////////////

$("#btn_combo1mas").click(function () {
  contcombo1 += 1;

  $("input[name=combo1]").val(contcombo1);
  $("input[name=totalcombo1]").val(contcombo1 * precioMegaCombo1);
  $(subtotalCompra).text(sumarTodo());
    
  if ($("input[name=combo1]").val() > 0) {
    $("#listaCombo1").text("x" + contcombo1 + " Combos Mega #1");
  }
});

$("#btn_combo1menos").click(function () {
  contcombo1 -= 1;
  if (contcombo1 < 0) {
    contcombo1 = 0;
  }

  $("input[name=combo1]").val(contcombo1);
  $("input[name=totalcombo1]").val(contcombo1 * precioMegaCombo1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo1]").val() > 0) {
    $("#listaCombo1").text("x" + contcombo1 + " Combos Mega #1");
  } else {
    $("#listaCombo1").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////////                    MEGA  COMBO # 2                ////////////////
///////////////////////////////////////////////////////////////////

$("#btn_combo2mas").click(function () {
  contcombo2 += 1;

  $("input[name=combo2]").val(contcombo2);
  $("input[name=totalcombo2]").val(contcombo2 * precioMegaCombo2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo2]").val() > 0) {
    $("#listaCombo2").text("x" + contcombo2 + " Combos Mega #2");
  }
});

$("#btn_combo2menos").click(function () {
  contcombo2 -= 1;
  if (contcombo2 < 0) {
    contcombo2 = 0;
  }

  $("input[name=combo2]").val(contcombo2);
  $("input[name=totalcombo2]").val(contcombo2 * precioMegaCombo2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo2]").val() > 0) {
    $("#listaCombo2").text("x" + contcombo2 + " Combos Mega #2");
  } else {
    $("#listaCombo2").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                  MEGA COMBO # 3                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo3mas").click(function () {
  contcombo3 += 1;

  $("input[name=combo3]").val(contcombo3);
  $("input[name=totalcombo3]").val(contcombo3 * precioMegaCombo3);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo3]").val() > 0) {
    $("#listaCombo3").text("x" + contcombo3 + " Combos Mega #3");
  }
});

$("#btn_combo3menos").click(function () {
  contcombo3 -= 1;
  if (contcombo3 < 0) {
    contcombo3 = 0;
  }

  $("input[name=combo3]").val(contcombo3);
  $("input[name=totalcombo3]").val(contcombo3 * precioMegaCombo3);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo3]").val() > 0) {
    $("#listaCombo3").text("x" + contcombo3 + " Combos Mega #3");
  } else {
    $("#listaCombo3").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                  MEGA COMBO # 4                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo4mas").click(function () {
  contcombo4 += 1;

  $("input[name=combo4]").val(contcombo4);
  $("input[name=totalcombo4]").val(contcombo4 * precioMegaCombo4);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo4]").val() > 0) {
    $("#listaCombo4").text("x" + contcombo4 + " Combos Mega #4");
  }
});

$("#btn_combo4menos").click(function () {
  contcombo4 -= 1;
  if (contcombo4 < 0) {
    contcombo4 = 0;
  }

  $("input[name=combo4]").val(contcombo4);
  $("input[name=totalcombo4]").val(contcombo4 * precioMegaCombo4);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo4]").val() > 0) {
    $("#listaCombo4").text("x" + contcombo4 + " Combos Mega #4");
  } else {
    $("#listaCombo4").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                  MEGA COMBO # 5                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo5mas").click(function () {
  contcombo5 += 1;

  $("input[name=combo5]").val(contcombo5);
  $("input[name=totalcombo5]").val(contcombo5 * precioMegaCombo5);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo5]").val() > 0) {
    $("#listaCombo5").text("x" + contcombo5 + " Combos Mega #5");
  }
});

$("#btn_combo5menos").click(function () {
  contcombo5 -= 1;
  if (contcombo5 < 0) {
    contcombo5 = 0;
  }

  $("input[name=combo5]").val(contcombo5);
  $("input[name=totalcombo5]").val(contcombo5 * precioMegaCombo5);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo5]").val() > 0) {
    $("#listaCombo5").text("x" + contcombo5 + " Combos Mega #5");
  } else {
    $("#listaCombo5").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                  MEGA COMBO # 6                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo6mas").click(function () {
  contcombo6 += 1;

  $("input[name=combo6]").val(contcombo6);
  $("input[name=totalcombo6]").val(contcombo6 * precioMegaCombo6);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo6]").val() > 0) {
    $("#listaCombo6").text("x" + contcombo6 + " Combos Mega #6");
  }
});

$("#btn_combo6menos").click(function () {
  contcombo6 -= 1;
  if (contcombo6 < 0) {
    contcombo6 = 0;
  }

  $("input[name=combo6]").val(contcombo6);
  $("input[name=totalcombo6]").val(contcombo6 * precioMegaCombo6);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo6]").val() > 0) {
    $("#listaCombo6").text("x" + contcombo6 + " Combos Mega #6");
  } else {
    $("#listaCombo6").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                  MEGA COMBO # 7                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo7mas").click(function () {
  contcombo7 += 1;

  $("input[name=combo7]").val(contcombo7);
  $("input[name=totalcombo7]").val(contcombo7 * precioMegaCombo7);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo7]").val() > 0) {
    $("#listaCombo7").text("x" + contcombo7 + " Combos Mega #7");
  }
});

$("#btn_combo7menos").click(function () {
  contcombo7 -= 1;
  if (contcombo7 < 0) {
    contcombo7 = 0;
  }

  $("input[name=combo7]").val(contcombo7);
  $("input[name=totalcombo7]").val(contcombo7 * precioMegaCombo7);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo7]").val() > 0) {
    $("#listaCombo7").text("x" + contcombo7 + " Combos Mega #7");
  } else {
    $("#listaCombo7").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   COMBO DUO # 1                           //////////////
///////////////////////////////////////////////////////////////////

$("#btn_combo1duomas").click(function () {
  contcombo1duo += 1;

  $("input[name=combo1duo]").val(contcombo1duo);
  $("input[name=totalcombo1duo]").val(contcombo1duo * precioCombo1duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo1duo]").val() > 0) {
    $("#listaCombo1duo").text("x" + contcombo1duo + " Combos Duo #1");
  }
});

$("#btn_combo1duomenos").click(function () {
  contcombo1duo -= 1;
  if (contcombo1duo < 0) {
    contcombo1duo = 0;
  }

  $("input[name=combo1duo]").val(contcombo1duo);
  $("input[name=totalcombo1duo]").val(contcombo1duo * precioCombo1duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo1duo]").val() > 0) {
    $("#listaCombo1duo").text("x" + contcombo1duo + " Combos Duo #1");
  } else {
    $("#listaCombo1duo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////////                      COMBO DUO # 2                ////////////////
///////////////////////////////////////////////////////////////////

$("#btn_combo2duomas").click(function () {
  contcombo2duo += 1;

  $("input[name=combo2duo]").val(contcombo2duo);
  $("input[name=totalcombo2duo]").val(contcombo2duo * precioCombo2duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo2duo]").val() > 0) {
    $("#listaCombo2duo").text("x" + contcombo2duo + " Combos Duo #2");
  }
});

$("#btn_combo2duomenos").click(function () {
  contcombo2duo -= 1;
  if (contcombo2duo < 0) {
    contcombo2duo = 0;
  }

  $("input[name=combo2duo]").val(contcombo2duo);
  $("input[name=totalcombo2duo]").val(contcombo2duo * precioCombo2duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo2duo]").val() > 0) {
    $("#listaCombo2duo").text("x" + contcombo2duo + " Combos Duo #2");
  } else {
    $("#listaCombo2duo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   COMBO DUO # 3                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo3duomas").click(function () {
  contcombo3duo += 1;

  $("input[name=combo3duo]").val(contcombo3duo);
  $("input[name=totalcombo3duo]").val(contcombo3duo * precioCombo3duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo3duo]").val() > 0) {
    $("#listaCombo3duo").text("x" + contcombo3duo + " Combos Duo #3");
  }
});

$("#btn_combo3duomenos").click(function () {
  contcombo3duo -= 1;
  if (contcombo3duo < 0) {
    contcombo3duo = 0;
  }

  $("input[name=combo3duo]").val(contcombo3duo);
  $("input[name=totalcombo3duo]").val(contcombo3duo * precioCombo3duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo3duo]").val() > 0) {
    $("#listaCombo3duo").text("x" + contcombo3duo + " Combos Duo #3");
  } else {
    $("#listaCombo3duo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   COMBO DUO # 4                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo4duomas").click(function () {
  contcombo4duo += 1;

  $("input[name=combo4duo]").val(contcombo4duo);
  $("input[name=totalcombo4duo]").val(contcombo4duo * precioCombo4duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo4duo]").val() > 0) {
    $("#listaCombo4duo").text("x" + contcombo4duo + " Combos Duo #4");
  }
});

$("#btn_combo4duomenos").click(function () {
  contcombo4duo -= 1;
  if (contcombo4duo < 0) {
    contcombo4duo = 0;
  }

  $("input[name=combo4duo]").val(contcombo4duo);
  $("input[name=totalcombo4duo]").val(contcombo4duo * precioCombo4duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo4duo]").val() > 0) {
    $("#listaCombo4duo").text("x" + contcombo4duo + " Combos Duo #4");
  } else {
    $("#listaCombo4duo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   COMBO DUO # 5                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo5duomas").click(function () {
  contcombo5duo += 1;

  $("input[name=combo5duo]").val(contcombo5duo);
  $("input[name=totalcombo5duo]").val(contcombo5duo * precioCombo5duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo5duo]").val() > 0) {
    $("#listaCombo5duo").text("x" + contcombo5duo + " Combos Duo #5");
  }
});

$("#btn_combo5duomenos").click(function () {
  contcombo5duo -= 1;
  if (contcombo5duo < 0) {
    contcombo5duo = 0;
  }

  $("input[name=combo5duo]").val(contcombo5duo);
  $("input[name=totalcombo5duo]").val(contcombo5duo * precioCombo5duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo5duo]").val() > 0) {
    $("#listaCombo5duo").text("x" + contcombo5duo + " Combos Duo #5");
  } else {
    $("#listaCombo5duo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   COMBO DUO # 6                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo6duomas").click(function () {
  contcombo6duo += 1;

  $("input[name=combo6duo]").val(contcombo6duo);
  $("input[name=totalcombo6duo]").val(contcombo6duo * precioCombo6duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo6duo]").val() > 0) {
    $("#listaCombo6duo").text("x" + contcombo6duo + " Combos Duo #6");
  }
});

$("#btn_combo6duomenos").click(function () {
  contcombo6duo -= 1;
  if (contcombo6duo < 0) {
    contcombo6duo = 0;
  }

  $("input[name=combo6duo]").val(contcombo6duo);
  $("input[name=totalcombo6duo]").val(contcombo6duo * precioCombo6duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo6duo]").val() > 0) {
    $("#listaCombo6duo").text("x" + contcombo6duo + " Combos Duo #6");
  } else {
    $("#listaCombo6duo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   COMBO DUO # 7                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_combo7duomas").click(function () {
  contcombo7duo += 1;

  $("input[name=combo7duo]").val(contcombo7duo);
  $("input[name=totalcombo7duo]").val(contcombo7duo * precioCombo7duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo7duo]").val() > 0) {
    $("#listaCombo7duo").text("x" + contcombo7duo + " Combos Duo #7");
  }
});

$("#btn_combo7duomenos").click(function () {
  contcombo7duo -= 1;
  if (contcombo7duo < 0) {
    contcombo7duo = 0;
  }

  $("input[name=combo7duo]").val(contcombo7duo);
  $("input[name=totalcombo7duo]").val(contcombo7duo * precioCombo7duo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combo7duo]").val() > 0) {
    $("#listaCombo7duo").text("x" + contcombo7duo + " Combos Duo #7");
  } else {
    $("#listaCombo7duo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   kombo # 1                           //////////////
///////////////////////////////////////////////////////////////////

$("#btn_kombo1mas").click(function () {
  contkombo1 += 1;

  $("input[name=kombo1]").val(contkombo1);
  $("input[name=totalkombo1]").val(contkombo1 * preciokombo1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo1]").val() > 0) {
    $("#listakombo1").text("x" + contkombo1 + " kombo #1");
  }
});

$("#btn_kombo1menos").click(function () {
  contkombo1 -= 1;
  if (contkombo1 < 0) {
    contkombo1 = 0;
  }

  $("input[name=kombo1]").val(contkombo1);
  $("input[name=totalkombo1]").val(contkombo1 * preciokombo1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo1]").val() > 0) {
    $("#listakombo1").text("x" + contkombo1 + " kombo #1");
  } else {
    $("#listakombo1").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////////                     kombo # 2                ////////////////
///////////////////////////////////////////////////////////////////

$("#btn_kombo2mas").click(function () {
  contkombo2 += 1;

  $("input[name=kombo2]").val(contkombo2);
  $("input[name=totalkombo2]").val(contkombo2 * preciokombo2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo2]").val() > 0) {
    $("#listakombo2").text("x" + contkombo2 + " kombo #2");
  }
});

$("#btn_kombo2menos").click(function () {
  contkombo2 -= 1;
  if (contkombo2 < 0) {
    contkombo2 = 0;
  }

  $("input[name=kombo2]").val(contkombo2);
  $("input[name=totalkombo2]").val(contkombo2 * preciokombo2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo2]").val() > 0) {
    $("#listakombo2").text("x" + contkombo2 + " kombo #2");
  } else {
    $("#listakombo2").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   kombo # 3                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_kombo3mas").click(function () {
  contkombo3 += 1;

  $("input[name=kombo3]").val(contkombo3);
  $("input[name=totalkombo3]").val(contkombo3 * preciokombo3);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo3]").val() > 0) {
    $("#listakombo3").text("x" + contkombo3 + " kombo #3");
  }
});

$("#btn_kombo3menos").click(function () {
  contkombo3 -= 1;
  if (contkombo3 < 0) {
    contkombo3 = 0;
  }

  $("input[name=kombo3]").val(contkombo3);
  $("input[name=totalkombo3]").val(contkombo3 * preciokombo3);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo3]").val() > 0) {
    $("#listakombo3").text("x" + contkombo3 + " kombo #3");
  } else {
    $("#listakombo3").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   kombo # 4                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_kombo4mas").click(function () {
  contkombo4 += 1;

  $("input[name=kombo4]").val(contkombo4);
  $("input[name=totalkombo4]").val(contkombo4 * preciokombo4);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo4]").val() > 0) {
    $("#listakombo4").text("x" + contkombo4 + " kombo #4");
  }
});

$("#btn_kombo4menos").click(function () {
  contkombo4 -= 1;
  if (contkombo4 < 0) {
    contkombo4 = 0;
  }

  $("input[name=kombo4]").val(contkombo4);
  $("input[name=totalkombo4]").val(contkombo4 * preciokombo4);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo4]").val() > 0) {
    $("#listakombo4").text("x" + contkombo4 + " kombo #4");
  } else {
    $("#listakombo4").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   kombo # 5                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_kombo5mas").click(function () {
  contkombo5 += 1;

  $("input[name=kombo5]").val(contkombo5);
  $("input[name=totalkombo5]").val(contkombo5 * preciokombo5);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo5]").val() > 0) {
    $("#listakombo5").text("x" + contkombo5 + " kombo #5");
  }
});

$("#btn_kombo5menos").click(function () {
  contkombo5 -= 1;
  if (contkombo5 < 0) {
    contkombo5 = 0;
  }

  $("input[name=kombo5]").val(contkombo5);
  $("input[name=totalkombo5]").val(contkombo5 * preciokombo5);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo5]").val() > 0) {
    $("#listakombo5").text("x" + contkombo5 + " kombo #5");
  } else {
    $("#listakombo5").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   kombo # 6                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_kombo6mas").click(function () {
  contkombo6 += 1;

  $("input[name=kombo6]").val(contkombo6);
  $("input[name=totalkombo6]").val(contkombo6 * preciokombo6);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo6]").val() > 0) {
    $("#listakombo6").text("x" + contkombo6 + " kombo #6");
  }
});

$("#btn_kombo6menos").click(function () {
  contkombo6 -= 1;
  if (contkombo6 < 0) {
    contkombo6 = 0;
  }

  $("input[name=kombo6]").val(contkombo6);
  $("input[name=totalkombo6]").val(contkombo6 * preciokombo6);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo6]").val() > 0) {
    $("#listakombo6").text("x" + contkombo6 + " kombo #6");
  } else {
    $("#listakombo6").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   kombo # 7                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_kombo7mas").click(function () {
  contkombo7 += 1;

  $("input[name=kombo7]").val(contkombo7);
  $("input[name=totalkombo7]").val(contkombo7 * preciokombo7);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo7]").val() > 0) {
    $("#listakombo7").text("x" + contkombo7 + " kombo #7");
  }
});

$("#btn_kombo7menos").click(function () {
  contkombo7 -= 1;
  if (contkombo7 < 0) {
    contkombo7 = 0;
  }

  $("input[name=kombo7]").val(contkombo7);
  $("input[name=totalkombo7]").val(contkombo7 * preciokombo7);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo7]").val() > 0) {
    $("#listakombo7").text("x" + contkombo7 + " kombo #7");
  } else {
    $("#listakombo7").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                   kombo # 8                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_kombo8mas").click(function () {
  contkombo8 += 1;

  $("input[name=kombo8]").val(contkombo8);
  $("input[name=totalkombo8]").val(contkombo8 * preciokombo8);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo8]").val() > 0) {
    $("#listakombo8").text("x" + contkombo8 + " kombo #8");
  }
});

$("#btn_kombo8menos").click(function () {
  contkombo8 -= 1;
  if (contkombo8 < 0) {
    contkombo8 = 0;
  }

  $("input[name=kombo8]").val(contkombo8);
  $("input[name=totalkombo8]").val(contkombo8 * preciokombo8);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kombo8]").val() > 0) {
    $("#listakombo8").text("x" + contkombo8 + " kombo #8");
  } else {
    $("#listakombo8").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   Arroz frito vegetariano                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_vegetarianomas").click(function () {
  contvegetariano += 1;

  $("input[name=vegetariano]").val(contvegetariano);
  $("input[name=totalvegetariano]").val(contvegetariano * preciovegetariano);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=vegetariano]").val() > 0) {
    $("#listavegetariano").text(
      "x" + contvegetariano + " Arroz frito vegetariano"
    );
  }
});

$("#btn_vegetarianomenos").click(function () {
  contvegetariano -= 1;
  if (contvegetariano < 0) {
    contvegetariano = 0;
  }

  $("input[name=vegetariano]").val(contvegetariano);
  $("input[name=totalvegetariano]").val(contvegetariano * preciovegetariano);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=vegetariano]").val() > 0) {
    $("#listavegetariano").text(
      "x" + contvegetariano + " Arroz frito vegetariano"
    );
  } else {
    $("#listavegetariano").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                Arroz frito con pollo                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_pollomas").click(function () {
  contpollo += 1;

  $("input[name=pollo]").val(contpollo);
  $("input[name=totalpollo]").val(contpollo * preciopollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pollo]").val() > 0) {
    $("#listapollo").text("x" + contpollo + "Arroz frito con pollo");
  }
});

$("#btn_pollomenos").click(function () {
  contpollo -= 1;
  if (contpollo < 0) {
    contpollo = 0;
  }

  $("input[name=pollo]").val(contpollo);
  $("input[name=totalpollo]").val(contpollo * preciopollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pollo]").val() > 0) {
    $("#listapollo").text("x" + contpollo + " Arroz frito con pollo");
  } else {
    $("#listapollo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                  Arroz frito con Jamon                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_jamonmas").click(function () {
  contjamon += 1;

  $("input[name=jamon]").val(contjamon);
  $("input[name=totaljamon]").val(contjamon * preciojamon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=jamon]").val() > 0) {
    $("#listajamon").text("x" + contjamon + " Arroz frito con jamón");
  }
});

$("#btn_jamonmenos").click(function () {
  contjamon -= 1;
  if (contjamon < 0) {
    contjamon = 0;
  }

  $("input[name=jamon]").val(contjamon);
  $("input[name=totaljamon]").val(contjamon * preciojamon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=jamon]").val() > 0) {
    $("#listajamon").text("x" + contjamon + " Arroz frito con jamón");
  } else {
    $("#listajamon").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Arroz frito con cerdo                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_cerdomas").click(function () {
  contcerdo += 1;

  $("input[name=cerdo]").val(contcerdo);
  $("input[name=totalcerdo]").val(contcerdo * preciocerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdo]").val() > 0) {
    $("#listacerdo").text("x" + contcerdo + " Arroz frito con cerdo");
  }
});

$("#btn_cerdomenos").click(function () {
  contcerdo -= 1;
  if (contcerdo < 0) {
    contcerdo = 0;
  }

  $("input[name=cerdo]").val(contcerdo);
  $("input[name=totalcerdo]").val(contcerdo * preciocerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdo]").val() > 0) {
    $("#listacerdo").text("x" + contcerdo + " Arroz frito con cerdo");
  } else {
    $("#listacerdo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Arroz frito especial                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_especialmas").click(function () {
  contespecial += 1;

  $("input[name=especial]").val(contespecial);
  $("input[name=totalespecial]").val(contespecial * precioespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=especial]").val() > 0) {
    $("#listaespecial").text("x" + contespecial + " Arroz frito especial");
  }
});

$("#btn_especialmenos").click(function () {
  contespecial -= 1;
  if (contespecial < 0) {
    contespecial = 0;
  }

  $("input[name=especial]").val(contespecial);
  $("input[name=totalespecial]").val(contespecial * precioespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=especial]").val() > 0) {
    $("#listaespecial").text("x" + contespecial + "Arroz frito especial");
  } else {
    $("#listaespecial").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Arroz frito con camarones                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_camaronesmas").click(function () {
  contcamarones += 1;

  $("input[name=camarones]").val(contcamarones);
  $("input[name=totalcamarones]").val(contcamarones * preciocamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=camarones]").val() > 0) {
    $("#listacamarones").text(
      "x" + contcamarones + " Arroz frito con camarones"
    );
  }
});

$("#btn_camaronesmenos").click(function () {
  contcamarones -= 1;
  if (contcamarones < 0) {
    contcamarones = 0;
  }

  $("input[name=camarones]").val(contcamarones);
  $("input[name=totalcamarones]").val(contcamarones * preciocamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=camarones]").val() > 0) {
    $("#listacamarones").text(
      "x" + contcamarones + "Arroz frito con camarones"
    );
  } else {
    $("#listacamarones").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Arroz frito con Kowloon                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_kowloonmas").click(function () {
  contkowloon += 1;

  $("input[name=kowloon]").val(contkowloon);
  $("input[name=totalkowloon]").val(contkowloon * preciokowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kowloon]").val() > 0) {
    $("#listakowloon").text("x" + contkowloon + " Arroz frito con kowloon");
  }
});

$("#btn_kowloonmenos").click(function () {
  contkowloon -= 1;
  if (contkowloon < 0) {
    contkowloon = 0;
  }

  $("input[name=kowloon]").val(contkowloon);
  $("input[name=totalkowloon]").val(contkowloon * preciokowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=kowloon]").val() > 0) {
    $("#listakowloon").text("x" + contkowloon + "Arroz frito con kowloon");
  } else {
    $("#listakowloon").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Arroz frito con pollo y camarones                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_polloycamaronesmas").click(function () {
  contpolloycamarones += 1;

  $("input[name=polloycamarones]").val(contpolloycamarones);
  $("input[name=totalpolloycamarones]").val(
    contpolloycamarones * preciopolloycamarones
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=polloycamarones]").val() > 0) {
    $("#listapolloycamarones").text(
      "x" + contpolloycamarones + " Arroz frito con pollo y camarones"
    );
  }
});

$("#btn_polloycamaronesmenos").click(function () {
  contpolloycamarones -= 1;
  if (contpolloycamarones < 0) {
    contpolloycamarones = 0;
  }

  $("input[name=polloycamarones]").val(contpolloycamarones);
  $("input[name=totalpolloycamarones]").val(
    contpolloycamarones * preciopolloycamarones
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=polloycamarones]").val() > 0) {
    $("#listapolloycamarones").text(
      "x" + contpolloycamarones + "Arroz frito con pollo y camarones"
    );
  } else {
    $("#listapolloycamarones").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                   LomMien vegetariano                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmvegetarianomas").click(function () {
  contlmvegetariano += 1;

  $("input[name=lmvegetariano]").val(contlmvegetariano);
  $("input[name=totallmvegetariano]").val(
    contlmvegetariano * preciolmvegetariano
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmvegetariano]").val() > 0) {
    $("#listalmvegetariano").text(
      "x" + contlmvegetariano + "  LomMien vegetariano"
    );
  }
});

$("#btn_lmvegetarianomenos").click(function () {
  contlmvegetariano -= 1;
  if (contlmvegetariano < 0) {
    contlmvegetariano = 0;
  }

  $("input[name=lmvegetariano]").val(contlmvegetariano);
  $("input[name=totallmvegetariano]").val(
    contlmvegetariano * preciolmvegetariano
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmvegetariano]").val() > 0) {
    $("#listalmvegetariano").text(
      "x" + contlmvegetariano + "  LomMien vegetariano"
    );
  } else {
    $("#listalmvegetariano").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 LomMien con pollo                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmpollomas").click(function () {
  contlmpollo += 1;

  $("input[name=lmpollo]").val(contlmpollo);
  $("input[name=totallmpollo]").val(contlmpollo * preciolmpollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmpollo]").val() > 0) {
    $("#listalmpollo").text("x" + contlmpollo + " LomMien con pollo");
  }
});

$("#btn_lmpollomenos").click(function () {
  contlmpollo -= 1;
  if (contlmpollo < 0) {
    contlmpollo = 0;
  }

  $("input[name=lmpollo]").val(contlmpollo);
  $("input[name=totallmpollo]").val(contlmpollo * preciolmpollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmpollo]").val() > 0) {
    $("#listalmpollo").text("x" + contlmpollo + "  LomMien con pollo");
  } else {
    $("#listalmpollo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                  LomMien con cerdo                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmcerdomas").click(function () {
  contlmcerdo += 1;

  $("input[name=lmcerdo]").val(contlmcerdo);
  $("input[name=totallmcerdo]").val(contlmcerdo * preciolmcerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmcerdo]").val() > 0) {
    $("#listalmcerdo").text("x" + contlmcerdo + "  LomMien con cerdo");
  }
});

$("#btn_lmcerdomenos").click(function () {
  contlmcerdo -= 1;
  if (contlmcerdo < 0) {
    contlmcerdo = 0;
  }

  $("input[name=lmcerdo]").val(contlmcerdo);
  $("input[name=totallmcerdo]").val(contlmcerdo * preciolmcerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmcerdo]").val() > 0) {
    $("#listalmcerdo").text("x" + contlmcerdo + "  LomMien con cerdo");
  } else {
    $("#listalmcerdo").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 LomMien especial                                ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmespecialmas").click(function () {
  contlmespecial += 1;

  $("input[name=lmespecial]").val(contlmespecial);
  $("input[name=totallmespecial]").val(contlmespecial * preciolmespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmespecial]").val() > 0) {
    $("#listalmespecial").text("x" + contlmespecial + "  LomMien especial");
  }
});

$("#btn_lmespecialmenos").click(function () {
  contlmespecial -= 1;
  if (contlmespecial < 0) {
    contlmespecial = 0;
  }

  $("input[name=lmespecial]").val(contlmespecial);
  $("input[name=totallmespecial]").val(contlmespecial * preciolmespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmespecial]").val() > 0) {
    $("#listalmespecial").text("x" + contlmespecial + " LomMien especial");
  } else {
    $("#listalmespecial").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                  LomMien con camarones                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmcamaronesmas").click(function () {
  contlmcamarones += 1;

  $("input[name=lmcamarones]").val(contlmcamarones);
  $("input[name=totallmcamarones]").val(contlmcamarones * preciolmcamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmcamarones]").val() > 0) {
    $("#listalmcamarones").text(
      "x" + contlmcamarones + " LomMien con camarones"
    );
  }
});

$("#btn_lmcamaronesmenos").click(function () {
  contlmcamarones -= 1;
  if (contlmcamarones < 0) {
    contlmcamarones = 0;
  }

  $("input[name=lmcamarones]").val(contlmcamarones);
  $("input[name=totallmcamarones]").val(contlmcamarones * preciolmcamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmcamarones]").val() > 0) {
    $("#listalmcamarones").text(
      "x" + contlmcamarones + " LomMien con camarones"
    );
  } else {
    $("#listalmcamarones").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                  LomMien con kowloon                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmkowloonmas").click(function () {
  contlmkowloon += 1;

  $("input[name=lmkowloon]").val(contlmkowloon);
  $("input[name=totallmkowloon]").val(contlmkowloon * preciolmkowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmkowloon]").val() > 0) {
    $("#listalmkowloon").text("x" + contlmkowloon + " LomMien con kowloon");
  }
});

$("#btn_lmkowloonmenos").click(function () {
  contlmkowloon -= 1;
  if (contlmkowloon < 0) {
    contlmkowloon = 0;
  }

  $("input[name=lmkowloon]").val(contlmkowloon);
  $("input[name=totallmkowloon]").val(contlmkowloon * preciolmkowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmkowloon]").val() > 0) {
    $("#listalmkowloon").text("x" + contlmkowloon + " LomMien con kowloon");
  } else {
    $("#listalmkowloon").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                  LomMien con carne                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmcarnemas").click(function () {
  contlmcarne += 1;

  $("input[name=lmcarne]").val(contlmcarne);
  $("input[name=totallmcarne]").val(contlmcarne * preciolmcarne);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmcarne]").val() > 0) {
    $("#listalmcarne").text("x" + contlmcarne + " LomMien con carne");
  }
});

$("#btn_lmcarnemenos").click(function () {
  contlmcarne -= 1;
  if (contlmcarne < 0) {
    contlmcarne = 0;
  }

  $("input[name=lmcarne]").val(contlmcarne);
  $("input[name=totallmcarne]").val(contlmcarne * preciolmcarne);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmcarne]").val() > 0) {
    $("#listalmcarne").text("x" + contlmcarne + " LomMien con carne");
  } else {
    $("#listalmcarne").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                  LomMien con pollo y camarones                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_lmpolloycamaronesmas").click(function () {
  contlmpolloycamarones += 1;

  $("input[name=lmpolloycamarones]").val(contlmpolloycamarones);
  $("input[name=totallmpolloycamarones]").val(
    contlmpolloycamarones * preciolmpolloycamarones
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmpolloycamarones]").val() > 0) {
    $("#listalmpolloycamarones").text(
      "x" + contlmpolloycamarones + " LomMien con pollo y camarones"
    );
  }
});

$("#btn_lmpolloycamaronesmenos").click(function () {
  contlmpolloycamarones -= 1;
  if (contlmpolloycamarones < 0) {
    contlmpolloycamarones = 0;
  }

  $("input[name=lmpolloycamarones]").val(contlmpolloycamarones);
  $("input[name=totallmpolloycamarones]").val(
    contlmpolloycamarones * preciolmpolloycamarones
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lmpolloycamarones]").val() > 0) {
    $("#listalmpolloycamarones").text(
      "x" + contlmpolloycamarones + " LomMien con pollo y camarones"
    );
  } else {
    $("#listalmpolloycamarones").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Pollo agridulce                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_pagridulcemas").click(function () {
  contpagridulce += 1;

  $("input[name=pagridulce]").val(contpagridulce);
  $("input[name=totalpagridulce]").val(contpagridulce * preciopagridulce);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pagridulce]").val() > 0) {
    $("#listapagridulce").text("x" + contpagridulce + " Pollo agridulce");
  }
});

$("#btn_pagridulcemenos").click(function () {
  contpagridulce -= 1;
  if (contpagridulce < 0) {
    contpagridulce = 0;
  }

  $("input[name=pagridulce]").val(contpagridulce);
  $("input[name=totalpagridulce]").val(contpagridulce * preciopagridulce);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pagridulce]").val() > 0) {
    $("#listapagridulce").text("x" + contpagridulce + " Pollo agridulce");
  } else {
    $("#listapagridulce").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Pollo con soya                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_psoyamas").click(function () {
  contpsoya += 1;

  $("input[name=psoya]").val(contpsoya);
  $("input[name=totalpsoya]").val(contpsoya * preciopsoya);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=psoya]").val() > 0) {
    $("#listapsoya").text("x" + contpsoya + " Pollo con soya");
  }
});

$("#btn_psoyamenos").click(function () {
  contpsoya -= 1;
  if (contpsoya < 0) {
    contpsoya = 0;
  }

  $("input[name=psoya]").val(contpsoya);
  $("input[name=totalpsoya]").val(contpsoya * preciopsoya);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=psoya]").val() > 0) {
    $("#listapsoya").text("x" + contpsoya + " Pollo con soya");
  } else {
    $("#listapsoya").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Pollo con curry                             ///////
///////////////////////////////////////////////////////////////////

$("#btn_pcurrymas").click(function () {
  contpcurry += 1;

  $("input[name=pcurry]").val(contpcurry);
  $("input[name=totalpcurry]").val(contpcurry * preciopcurry);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pcurry]").val() > 0) {
    $("#listapcurry").text("x" + contpcurry + " Pollo con curry");
  }
});

$("#btn_pcurrymenos").click(function () {
  contpcurry -= 1;
  if (contpcurry < 0) {
    contpcurry = 0;
  }

  $("input[name=pcurry]").val(contpcurry);
  $("input[name=totalpcurry]").val(contpcurry * preciopcurry);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pcurry]").val() > 0) {
    $("#listapcurry").text("x" + contpcurry + " Pollo con curry");
  } else {
    $("#listapcurry").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Pollo con ostras                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_postrasmas").click(function () {
  contpostras += 1;

  $("input[name=postras]").val(contpostras);
  $("input[name=totalpostras]").val(contpostras * preciopostras);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=postras]").val() > 0) {
    $("#listapostras").text("x" + contpostras + " Pollo con ostras");
  }
});

$("#btn_postrasmenos").click(function () {
  contpostras -= 1;
  if (contpostras < 0) {
    contpostras = 0;
  }

  $("input[name=postras]").val(contpostras);
  $("input[name=totalpostras]").val(contpostras * preciopostras);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=postras]").val() > 0) {
    $("#listapostras").text("x" + contpostras + " Pollo con ostras");
  } else {
    $("#listapostras").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Pollo con ajonjoli y miel                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_pajonjolimas").click(function () {
  contpajonjoli += 1;

  $("input[name=pajonjoli]").val(contpajonjoli);
  $("input[name=totalpajonjoli]").val(contpajonjoli * preciopajonjoli);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pajonjoli]").val() > 0) {
    $("#listapajonjoli").text(
      "x" + contpajonjoli + " Pollo con ajonjolí y miel"
    );
  }
});

$("#btn_pajonjolimenos").click(function () {
  contpajonjoli -= 1;
  if (contpajonjoli < 0) {
    contpajonjoli = 0;
  }

  $("input[name=pajonjoli]").val(contpajonjoli);
  $("input[name=totalpajonjoli]").val(contpajonjoli * preciopajonjoli);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pajonjoli]").val() > 0) {
    $("#listapajonjoli").text(
      "x" + contpajonjoli + " Pollo con ajonjolí y miel"
    );
  } else {
    $("#listapajonjoli").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Pollo con asado cantonés                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_pasadomas").click(function () {
  contpasado += 1;

  $("input[name=pasado]").val(contpasado);
  $("input[name=totalpasado]").val(contpasado * preciopasado);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pasado]").val() > 0) {
    $("#listapasado").text("x" + contpasado + " Pollo con asado cantonés");
  }
});

$("#btn_pasadomenos").click(function () {
  contpasado -= 1;
  if (contpasado < 0) {
    contpasado = 0;
  }

  $("input[name=pasado]").val(contpasado);
  $("input[name=totalpasado]").val(contpasado * preciopasado);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=pasado]").val() > 0) {
    $("#listapasado").text("x" + contpasado + " Pollo con asado cantonés");
  } else {
    $("#listapasado").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Carne con ostras                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_costrasmas").click(function () {
  contcostras += 1;

  $("input[name=costras]").val(contcostras);
  $("input[name=totalcostras]").val(contcostras * preciocostras);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=costras]").val() > 0) {
    $("#listacostras").text("x" + contcostras + " Carne con ostras");
  }
});

$("#btn_costrasmenos").click(function () {
  contcostras -= 1;
  if (contcostras < 0) {
    contcostras = 0;
  }

  $("input[name=costras]").val(contcostras);
  $("input[name=totalcostras]").val(contcostras * preciocostras);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=costras]").val() > 0) {
    $("#listacostras").text("x" + contcostras + " Carne con ostras");
  } else {
    $("#listacostras").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                Carne con curry                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_ccurrymas").click(function () {
  contccurry += 1;

  $("input[name=ccurry]").val(contccurry);
  $("input[name=totalccurry]").val(contccurry * precioccurry);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=ccurry]").val() > 0) {
    $("#listaccurry").text("x" + contccurry + " Carne con curry");
  }
});

$("#btn_ccurrymenos").click(function () {
  contccurry -= 1;
  if (contccurry < 0) {
    contccurry = 0;
  }

  $("input[name=ccurry]").val(contccurry);
  $("input[name=totalccurry]").val(contccurry * precioccurry);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=ccurry]").val() > 0) {
    $("#listaccurry").text("x" + contccurry + " Carne con curry");
  } else {
    $("#listaccurry").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                Carne con brócoli                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cbrocolimas").click(function () {
  contcbrocoli += 1;

  $("input[name=cbrocoli]").val(contcbrocoli);
  $("input[name=totalcbrocoli]").val(contcbrocoli * preciocbrocoli);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cbrocoli]").val() > 0) {
    $("#listacbrocoli").text("x" + contcbrocoli + " Carne con brócoli");
  }
});

$("#btn_cbrocolimenos").click(function () {
  contcbrocoli -= 1;
  if (contcbrocoli < 0) {
    contcbrocoli = 0;
  }

  $("input[name=cbrocoli]").val(contcbrocoli);
  $("input[name=totalcbrocoli]").val(contcbrocoli * preciocbrocoli);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cbrocoli]").val() > 0) {
    $("#listacbrocoli").text("x" + contcbrocoli + " Carne con brócoli");
  } else {
    $("#listacbrocoli").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Carne con vegetales chinos                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_cvegetalesmas").click(function () {
  contcvegetales += 1;

  $("input[name=cvegetales]").val(contcvegetales);
  $("input[name=totalcvegetales]").val(contcvegetales * preciocvegetales);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cvegetales]").val() > 0) {
    $("#listacvegetales").text(
      "x" + contcvegetales + " Carne con vegetales chinos"
    );
  }
});

$("#btn_cvegetalesmenos").click(function () {
  contcvegetales -= 1;
  if (contcvegetales < 0) {
    contcvegetales = 0;
  }

  $("input[name=cvegetales]").val(contcvegetales);
  $("input[name=totalcvegetales]").val(contcvegetales * preciocvegetales);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cvegetales]").val() > 0) {
    $("#listacvegetales").text(
      "x" + contcvegetales + " Carne con vegetales chinos"
    );
  } else {
    $("#listacvegetales").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Costillas                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_costillamas").click(function () {
  contcostilla += 1;

  $("input[name=costilla]").val(contcostilla);
  $("input[name=totalcostilla]").val(contcostilla * preciocostilla);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=costilla]").val() > 0) {
    $("#listacostilla").text("x" + contcostilla + " Racion de costillas");
  }
});

$("#btn_costillamenos").click(function () {
  contcostilla -= 1;
  if (contcostilla < 0) {
    contcostilla = 0;
  }

  $("input[name=costilla]").val(contcostilla);
  $("input[name=totalcostilla]").val(contcostilla * preciocostilla);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=costilla]").val() > 0) {
    $("#listacostilla").text("x" + contcostilla + " Ración de costillas");
  } else {
    $("#listacostilla").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Cerdo con asado                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_cerdoamas").click(function () {
  contcerdoa += 1;

  $("input[name=cerdoa]").val(contcerdoa);
  $("input[name=totalcerdoa]").val(contcerdoa * preciocerdoa);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdoa]").val() > 0) {
    $("#listacerdoa").text("x" + contcerdoa + " Cerdo asado");
  }
});

$("#btn_cerdoamenos").click(function () {
  contcerdoa -= 1;
  if (contcerdoa < 0) {
    contcerdoa = 0;
  }

  $("input[name=cerdoa]").val(contcerdoa);
  $("input[name=totalcerdoa]").val(contcerdoa * preciocerdoa);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdoa]").val() > 0) {
    $("#listacerdoa").text("x" + contcerdoa + " Cerdo asado");
  } else {
    $("#listacerdoa").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Cerdo con sal y pimienta                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_cerdosypmas").click(function () {
  contcerdosyp += 1;

  $("input[name=cerdosyp]").val(contcerdosyp);
  $("input[name=totalcerdosyp]").val(contcerdosyp * preciocerdosyp);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdosyp]").val() > 0) {
    $("#listacerdosyp").text("x" + contcerdosyp + " Cerdo con sal y pimienta");
  }
});

$("#btn_cerdosypmenos").click(function () {
  contcerdosyp -= 1;
  if (contcerdosyp < 0) {
    contcerdosyp = 0;
  }

  $("input[name=cerdosyp]").val(contcerdosyp);
  $("input[name=totalcerdosyp]").val(contcerdosyp * preciocerdosyp);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdosyp]").val() > 0) {
    $("#listacerdosyp").text("x" + contcerdosyp + " Cerdo con sal y pimienta");
  } else {
    $("#listacerdosyp").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Cerdo con curry                          ///////
///////////////////////////////////////////////////////////////////

$("#btn_cerdocurrymas").click(function () {
  contcerdocurry += 1;

  $("input[name=cerdocurry]").val(contcerdocurry);
  $("input[name=totalcerdocurry]").val(contcerdocurry * preciocerdocurry);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdocurry]").val() > 0) {
    $("#listacerdocurry").text("x" + contcerdocurry + " Cerdo con curry");
  }
});

$("#btn_cerdocurrymenos").click(function () {
  contcerdocurry -= 1;
  if (contcerdocurry < 0) {
    contcerdocurry = 0;
  }

  $("input[name=cerdocurry]").val(contcerdocurry);
  $("input[name=totalcerdocurry]").val(contcerdocurry * preciocerdocurry);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdocurry]").val() > 0) {
    $("#listacerdocurry").text("x" + contcerdocurry + " Cerdo con curry");
  } else {
    $("#listacerdocurry").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Cerdo con ostra                         ///////
///////////////////////////////////////////////////////////////////

$("#btn_cerdoostramas").click(function () {
  contcerdoostra += 1;

  $("input[name=cerdoostra]").val(contcerdoostra);
  $("input[name=totalcerdoostra]").val(contcerdoostra * preciocerdoostra);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdoostra]").val() > 0) {
    $("#listacerdoostra").text("x" + contcerdoostra + " Cerdo con ostra");
  }
});

$("#btn_cerdoostramenos").click(function () {
  contcerdoostra -= 1;
  if (contcerdoostra < 0) {
    contcerdoostra = 0;
  }

  $("input[name=cerdoostra]").val(contcerdoostra);
  $("input[name=totalcerdoostra]").val(contcerdoostra * preciocerdoostra);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cerdoostra]").val() > 0) {
    $("#listacerdoostra").text("x" + contcerdoostra + " Cerdo con ostra");
  } else {
    $("#listacerdoostra").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Lumpias                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_lumpiasmas").click(function () {
  contlumpias += 1;

  $("input[name=lumpias]").val(contlumpias);
  $("input[name=totallumpias]").val(contlumpias * preciolumpias);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lumpias]").val() > 0) {
    $("#listalumpias").text("x" + contlumpias + " Lumpia");
  }
});

$("#btn_lumpiasmenos").click(function () {
  contlumpias -= 1;
  if (contlumpias < 0) {
    contlumpias = 0;
  }

  $("input[name=lumpias]").val(contlumpias);
  $("input[name=totallumpias]").val(contlumpias * preciolumpias);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lumpias]").val() > 0) {
    $("#listalumpias").text("x" + contlumpias + " lumpia");
  } else {
    $("#listalumpias").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////              Racion   Lumpias                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_racionlumpiasmas").click(function () {
  contracionlumpias += 1;

  $("input[name=racionlumpias]").val(contracionlumpias);
  $("input[name=totalracionlumpias]").val(
    contracionlumpias * precioracionlumpias
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=racionlumpias]").val() > 0) {
    $("#listaracionlumpias").text("x" + contracionlumpias + "Ración Lumpia");
  }
});

$("#btn_racionlumpiasmenos").click(function () {
  contracionlumpias -= 1;
  if (contracionlumpias < 0) {
    contracionlumpias = 0;
  }

  $("input[name=racionlumpias]").val(contracionlumpias);
  $("input[name=totalracionlumpias]").val(
    contracionlumpias * precioracionlumpias
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=racionlumpias]").val() > 0) {
    $("#listaracionlumpias").text("x" + contracionlumpias + " Ración lumpia");
  } else {
    $("#listaracionlumpias").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Wantón frito                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_wantonfmas").click(function () {
  contwantonf += 1;

  $("input[name=wantonf]").val(contwantonf);
  $("input[name=totalwantonf]").val(contwantonf * preciowantonf);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=wantonf]").val() > 0) {
    $("#listawantonf").text("x" + contwantonf + " Wantón frito");
  }
});

$("#btn_wantonfmenos").click(function () {
  contwantonf -= 1;
  if (contwantonf < 0) {
    contwantonf = 0;
  }

  $("input[name=wantonf]").val(contwantonf);
  $("input[name=totalwantonf]").val(contwantonf * preciowantonf);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=wantonf]").val() > 0) {
    $("#listawantonf").text("x" + contwantonf + " Wantón frito");
  } else {
    $("#listawantonf").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                Fideos singapur                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_fideossmas").click(function () {
  contfideoss += 1;

  $("input[name=fideoss]").val(contfideoss);
  $("input[name=totalfideoss]").val(contfideoss * preciofideoss);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=fideoss]").val() > 0) {
    $("#listafideoss").text("x" + contfideoss + " fideos singapur");
  }
});

$("#btn_fideossmenos").click(function () {
  contfideoss -= 1;
  if (contfideoss < 0) {
    contfideoss = 0;
  }

  $("input[name=fideoss]").val(contfideoss);
  $("input[name=totalfideoss]").val(contfideoss * preciofideoss);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=fideoss]").val() > 0) {
    $("#listafideoss").text("x" + contfideoss + " fideos singapur");
  } else {
    $("#listafideoss").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Fu yong                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_fuyongmas").click(function () {
  contfuyong += 1;

  $("input[name=fuyong]").val(contfuyong);
  $("input[name=totalfuyong]").val(contfuyong * preciofuyong);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=fuyong]").val() > 0) {
    $("#listafuyong").text("x" + contfuyong + " Fu yong");
  }
});

$("#btn_fuyongmenos").click(function () {
  contfuyong -= 1;
  if (contfuyong < 0) {
    contfuyong = 0;
  }

  $("input[name=fuyong]").val(contfuyong);
  $("input[name=totalfuyong]").val(contfuyong * preciofuyong);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=fuyong]").val() > 0) {
    $("#listafuyong").text("x" + contfuyong + " Fu yong");
  } else {
    $("#listafuyong").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                Costilla unidad                           ///////
///////////////////////////////////////////////////////////////////

$("#btn_costillaunidadmas").click(function () {
  contcostillaunidad += 1;

  $("input[name=costillaunidad]").val(contcostillaunidad);
  $("input[name=totalcostillaunidad]").val(
    contcostillaunidad * preciocostillaunidad
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=costillaunidad]").val() > 0) {
    $("#listacostillaunidad").text(
      "x" + contcostillaunidad + " Costilla unidad"
    );
  }
});

$("#btn_costillaunidadmenos").click(function () {
  contcostillaunidad -= 1;
  if (contcostillaunidad < 0) {
    contcostillaunidad = 0;
  }

  $("input[name=costillaunidad]").val(contcostillaunidad);
  $("input[name=totalcostillaunidad]").val(
    contcostillaunidad * preciocostillaunidad
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=costillaunidad]").val() > 0) {
    $("#listacostillaunidad").text(
      "x" + contcostillaunidad + " Costilla unidad"
    );
  } else {
    $("#listacostillaunidad").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                Refresco 1.5 lts                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_refresco2mas").click(function () {
  contrefresco2 += 1;

  $("input[name=refresco2]").val(contrefresco2);
  $("input[name=totalrefresco2]").val(contrefresco2 * preciorefresco2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=refresco2]").val() > 0) {
    $("#listarefresco2").text("x" + contrefresco2 + " Refresco 1.5 lts");
  }
});

$("#btn_refresco2menos").click(function () {
  contrefresco2 -= 1;
  if (contrefresco2 < 0) {
    contrefresco2 = 0;
  }

  $("input[name=refresco2]").val(contrefresco2);
  $("input[name=totalrefresco2]").val(contrefresco2 * preciorefresco2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=refresco2]").val() > 0) {
    $("#listarefresco2").text("x" + contrefresco2 + "Refresco 1.5 lts");
  } else {
    $("#listarefresco2").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Refresco 1 lts                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_refresco1mas").click(function () {
  contrefresco1 += 1;

  $("input[name=refresco1]").val(contrefresco1);
  $("input[name=totalrefresco1]").val(contrefresco1 * preciorefresco1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=refresco1]").val() > 0) {
    $("#listarefresco1").text("x" + contrefresco1 + " Refresco 1 lts");
  }
});

$("#btn_refresco1menos").click(function () {
  contrefresco1 -= 1;
  if (contrefresco1 < 0) {
    contrefresco1 = 0;
  }

  $("input[name=refresco1]").val(contrefresco1);
  $("input[name=totalrefresco1]").val(contrefresco1 * preciorefresco1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=refresco1]").val() > 0) {
    $("#listarefresco1").text("x" + contrefresco1 + "Refresco 1 lts");
  } else {
    $("#listarefresco1").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                 Lipton                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_liptonmas").click(function () {
  contlipton += 1;

  $("input[name=lipton]").val(contlipton);
  $("input[name=totallipton]").val(contlipton * preciolipton);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lipton]").val() > 0) {
    $("#listalipton").text(
      "x" + contlipton + " liptón 1.5 Lts (Durazno, verde, limón)"
    );
  }
});

$("#btn_liptonmenos").click(function () {
  contlipton -= 1;
  if (contlipton < 0) {
    contlipton = 0;
  }

  $("input[name=lipton]").val(contlipton);
  $("input[name=totallipton]").val(contlipton * preciolipton);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=lipton]").val() > 0) {
    $("#listalipton").text(
      "x" + contlipton + " liptón 1.5 Lts(Durazno, verde, limón)"
    );
  } else {
    $("#listalipton").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////           Refresco lata                           ///////
///////////////////////////////////////////////////////////////////

$("#btn_refrescolmas").click(function () {
  contrefrescol += 1;

  $("input[name=refrescol]").val(contrefrescol);
  $("input[name=totalrefrescol]").val(contrefrescol * preciorefrescol);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=refrescol]").val() > 0) {
    $("#listarefrescol").text("x" + contrefrescol + "Refresco lata");
  }
});

$("#btn_refrescolmenos").click(function () {
  contrefrescol -= 1;
  if (contrefrescol < 0) {
    contrefrescol = 0;
  }

  $("input[name=refrescol]").val(contrefrescol);
  $("input[name=totalrefrescol]").val(contrefrescol * preciorefrescol);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=refrescol]").val() > 0) {
    $("#listarefrescol").text("x" + contrefrescol + " Refresco lata");
  } else {
    $("#listarefrescol").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////             Agua 600ml                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_agua6mas").click(function () {
  contagua6 += 1;

  $("input[name=agua6]").val(contagua6);
  $("input[name=totalagua6]").val(contagua6 * precioagua6);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=agua6]").val() > 0) {
    $("#listaagua6").text("x" + contagua6 + " Agua 600 ml");
  }
});

$("#btn_agua6menos").click(function () {
  contagua6 -= 1;
  if (contagua6 < 0) {
    contagua6 = 0;
  }

  $("input[name=agua6]").val(contagua6);
  $("input[name=totalagua6]").val(contagua6 * precioagua6);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=agua6]").val() > 0) {
    $("#listaagua6").text("x" + contagua6 + " Agua 600 ml");
  } else {
    $("#listaagua6").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////            Ración de pan chino                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_pancmas").click(function () {
  contpanc += 1;

  $("input[name=panc]").val(contpanc);
  $("input[name=totalpanc]").val(contpanc * preciopanc);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=panc]").val() > 0) {
    $("#listapanc").text("x" + contpanc + " Ración de pan chino ");
  }
});

$("#btn_pancmenos").click(function () {
  contpanc -= 1;
  if (contpanc < 0) {
    contpanc = 0;
  }

  $("input[name=panc]").val(contpanc);
  $("input[name=totalpanc]").val(contpanc * preciopanc);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=panc]").val() > 0) {
    $("#listapanc").text("x" + contpanc + " Ración de pan chino");
  } else {
    $("#listapanc").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////            Sopa wanton                           ///////
///////////////////////////////////////////////////////////////////

$("#btn_sopawmas").click(function () {
  contsopaw += 1;

  $("input[name=sopaw]").val(contsopaw);
  $("input[name=totalsopaw]").val(contsopaw * preciosopaw);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=sopaw]").val() > 0) {
    $("#listasopaw").text("x" + contsopaw + " Sopa Wantón ");
  }
});

$("#btn_sopawmenos").click(function () {
  contsopaw -= 1;
  if (contsopaw < 0) {
    contsopaw = 0;
  }

  $("input[name=sopaw]").val(contsopaw);
  $("input[name=totalsopaw]").val(contsopaw * preciosopaw);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=sopaw]").val() > 0) {
    $("#listasopaw").text("x" + contsopaw + " Sopa wantón");
  } else {
    $("#listasopaw").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////           Sopa Wantón mien                            ///////
///////////////////////////////////////////////////////////////////

$("#btn_swantonmienmas").click(function () {
  contswantonmien += 1;

  $("input[name=swantonmien]").val(contswantonmien);
  $("input[name=totalswantonmien]").val(contswantonmien * precioswantonmien);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=swantonmien]").val() > 0) {
    $("#listaswantonmien").text("x" + contswantonmien + " Sopa wantón mien ");
  }
});

$("#btn_swantonmienmenos").click(function () {
  contswantonmien -= 1;
  if (contswantonmien < 0) {
    contswantonmien = 0;
  }

  $("input[name=swantonmien]").val(contswantonmien);
  $("input[name=totalswantonmien]").val(contswantonmien * precioswantonmien);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=swantonmien]").val() > 0) {
    $("#listaswantonmien").text("x" + contswantonmien + " Sopa wantón mien");
  } else {
    $("#listaswantonmien").text("");
  }
});

////////////////////////////////////////////////////////////////////////
/////                 Chop suey de vegetales                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_csvegetalesmas").click(function () {
  contcsvegetales += 1;

  $("input[name=csvegetales]").val(contcsvegetales);
  $("input[name=totalcsvegetales]").val(contcsvegetales * preciocsvegetales);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=csvegetales]").val() > 0) {
    $("#listacsvegetales").text(
      "x" + contcsvegetales + " Chop suey de vegetales"
    );
  }
});

$("#btn_csvegetalesmenos").click(function () {
  contcsvegetales -= 1;
  if (contcsvegetales < 0) {
    contcsvegetales = 0;
  }

  $("input[name=csvegetales]").val(contcsvegetales);
  $("input[name=totalcsvegetales]").val(contcsvegetales * preciocsvegetales);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=csvegetales]").val() > 0) {
    $("#listacsvegetales").text(
      "x" + contcsvegetales + "Chop suey de vegetales"
    );
  } else {
    $("#listacsvegetales").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de pollo                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_cspollomas").click(function () {
  contcspollo += 1;

  $("input[name=cspollo]").val(contcspollo);
  $("input[name=totalcspollo]").val(contcspollo * preciocspollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cspollo]").val() > 0) {
    $("#listacspollo").text("x" + contcspollo + " Chop suey de pollo");
  }
});

$("#btn_cspollomenos").click(function () {
  contcspollo -= 1;
  if (contcspollo < 0) {
    contcspollo = 0;
  }

  $("input[name=cspollo]").val(contcspollo);
  $("input[name=totalcspollo]").val(contcspollo * preciocspollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cspollo]").val() > 0) {
    $("#listacspollo").text("x" + contcspollo + " Chop suey de pollo");
  } else {
    $("#listacspollo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de cerdo                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cscerdomas").click(function () {
  contcscerdo += 1;

  $("input[name=cscerdo]").val(contcscerdo);
  $("input[name=totalcscerdo]").val(contcscerdo * preciocscerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cscerdo]").val() > 0) {
    $("#listacscerdo").text("x" + contcscerdo + " Chop suey de cerdo");
  }
});

$("#btn_cscerdomenos").click(function () {
  contcscerdo -= 1;
  if (contcscerdo < 0) {
    contcscerdo = 0;
  }

  $("input[name=cscerdo]").val(contcscerdo);
  $("input[name=totalcscerdo]").val(contcscerdo * preciocscerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cscerdo]").val() > 0) {
    $("#listacscerdo").text("x" + contcscerdo + " Chop suey de cerdo");
  } else {
    $("#listacscerdo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de carne                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_cscarnemas").click(function () {
  contcscarne += 1;

  $("input[name=cscarne]").val(contcscarne);
  $("input[name=totalcscarne]").val(contcscarne * preciocscarne);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cscarne]").val() > 0) {
    $("#listacscarne").text("x" + contcscarne + " Chop suey de carne");
  }
});

$("#btn_cscarnemenos").click(function () {
  contcscarne -= 1;
  if (contcscarne < 0) {
    contcscarne = 0;
  }

  $("input[name=cscarne]").val(contcscarne);
  $("input[name=totalcscarne]").val(contcscarne * preciocscarne);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cscarne]").val() > 0) {
    $("#listacscarne").text("x" + contcscarne + " Chop suey de carne");
  } else {
    $("#listacscarne").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de camarones                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_cscamaronesmas").click(function () {
  contcscamarones += 1;

  $("input[name=cscamarones]").val(contcscamarones);
  $("input[name=totalcscamarones]").val(contcscamarones * preciocscamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cscamarones]").val() > 0) {
    $("#listacscamarones").text(
      "x" + contcscamarones + " Chop suey de camarones"
    );
  }
});

$("#btn_cscamaronesmenos").click(function () {
  contcscamarones -= 1;
  if (contcscamarones < 0) {
    contcscamarones = 0;
  }

  $("input[name=cscamarones]").val(contcscamarones);
  $("input[name=totalcscamarones]").val(contcscamarones * preciocscamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cscamarones]").val() > 0) {
    $("#listacscamarones").text(
      "x" + contcscamarones + " Chop suey de camarones"
    );
  } else {
    $("#listacscamarones").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de pollo y camarones                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_cspolloycmas").click(function () {
  contcspolloyc += 1;

  $("input[name=cspolloyc]").val(contcspolloyc);
  $("input[name=totalcspolloyc]").val(contcspolloyc * preciocspolloyc);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cspolloyc]").val() > 0) {
    $("#listacspolloyc").text(
      "x" + contcspolloyc + " Chop suey de pollo y camarones"
    );
  }
});

$("#btn_cspolloycmenos").click(function () {
  contcspolloyc -= 1;
  if (contcspolloyc < 0) {
    contcspolloyc = 0;
  }

  $("input[name=cspolloyc]").val(contcspolloyc);
  $("input[name=totalcspolloyc]").val(contcspolloyc * preciocspolloyc);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cspolloyc]").val() > 0) {
    $("#listacspolloyc").text(
      "x" + contcspolloyc + " Chop suey de pollo y camarones"
    );
  } else {
    $("#listacspolloyc").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de jamon                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_csjamonmas").click(function () {
  contcsjamon += 1;

  $("input[name=csjamon]").val(contcsjamon);
  $("input[name=totalcsjamon]").val(contcsjamon * preciocsjamon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=csjamon]").val() > 0) {
    $("#listacsjamon").text("x" + contcsjamon + " Chop suey de jamón");
  }
});

$("#btn_csjamonmenos").click(function () {
  contcsjamon -= 1;
  if (contcsjamon < 0) {
    contcsjamon = 0;
  }

  $("input[name=csjamon]").val(contcsjamon);
  $("input[name=totalcsjamon]").val(contcsjamon * preciocsjamon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=csjamon]").val() > 0) {
    $("#listacsjamon").text("x" + contcsjamon + " Chop suey de jamón");
  } else {
    $("#listacsjamon").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey  especial                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_csespecialmas").click(function () {
  contcsespecial += 1;

  $("input[name=csespecial]").val(contcsespecial);
  $("input[name=totalcsespecial]").val(contcsespecial * preciocsespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=csespecial]").val() > 0) {
    $("#listacsespecial").text("x" + contcsespecial + " Chop suey especial");
  }
});

$("#btn_csespecialmenos").click(function () {
  contcsespecial -= 1;
  if (contcsespecial < 0) {
    contcsespecial = 0;
  }

  $("input[name=csespecial]").val(contcsespecial);
  $("input[name=totalcsespecial]").val(contcsespecial * preciocsespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=csespecial]").val() > 0) {
    $("#listacsespecial").text("x" + contcsespecial + " Chop suey especial");
  } else {
    $("#listacsespecial").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chop suey de kowloon                               ///////
///////////////////////////////////////////////////////////////////

$("#btn_cskowloonmas").click(function () {
  contcskowloon += 1;

  $("input[name=cskowloon]").val(contcskowloon);
  $("input[name=totalcskowloon]").val(contcskowloon * preciocskowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cskowloon]").val() > 0) {
    $("#listacskowloon").text("x" + contcskowloon + " Chop suey kowloon");
  }
});

$("#btn_cskowloonmenos").click(function () {
  contcskowloon -= 1;
  if (contcskowloon < 0) {
    contcskowloon = 0;
  }

  $("input[name=cskowloon]").val(contcskowloon);
  $("input[name=totalcskowloon]").val(contcskowloon * preciocskowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cskowloon]").val() > 0) {
    $("#listacskowloon").text("x" + contcskowloon + " Chop suey kowloon");
  } else {
    $("#listacskowloon").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                combo clasico 1                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_comboclasico1mas").click(function () {
  contcomboclasico1 += 1;

  $("input[name=comboclasico1]").val(contcomboclasico1);
  $("input[name=totalcomboclasico1]").val(
    contcomboclasico1 * preciocomboclasico1
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=comboclasico1]").val() > 0) {
    $("#listacomboclasico1").text("x" + contcomboclasico1 + " Combo clásico 1");
  }
});

$("#btn_comboclasico1menos").click(function () {
  contcomboclasico1 -= 1;
  if (contcomboclasico1 < 0) {
    contcomboclasico1 = 0;
  }

  $("input[name=comboclasico1]").val(contcomboclasico1);
  $("input[name=totalcomboclasico1]").val(
    contcomboclasico1 * preciocomboclasico1
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=comboclasico1]").val() > 0) {
    $("#listacomboclasico1").text("x" + contcomboclasico1 + " Combo clásico 1");
  } else {
    $("#listacomboclasico1").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                combo clasico 2                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_comboclasico2mas").click(function () {
  contcomboclasico2 += 1;

  $("input[name=comboclasico2]").val(contcomboclasico2);
  $("input[name=totalcomboclasico2]").val(
    contcomboclasico2 * preciocomboclasico2
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=comboclasico2]").val() > 0) {
    $("#listacomboclasico2").text("x" + contcomboclasico2 + " Combo clásico 2");
  }
});

$("#btn_comboclasico2menos").click(function () {
  contcomboclasico2 -= 1;
  if (contcomboclasico2 < 0) {
    contcomboclasico2 = 0;
  }

  $("input[name=comboclasico2]").val(contcomboclasico2);
  $("input[name=totalcomboclasico2]").val(
    contcomboclasico2 * preciocomboclasico2
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=comboclasico2]").val() > 0) {
    $("#listacomboclasico2").text("x" + contcomboclasico2 + " Combo clásico 2");
  } else {
    $("#listacomboclasico2").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                combo super 1                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_combosuper1mas").click(function () {
  contcombosuper1 += 1;

  $("input[name=combosuper1]").val(contcombosuper1);
  $("input[name=totalcombosuper1]").val(contcombosuper1 * preciocombosuper1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combosuper1]").val() > 0) {
    $("#listacombosuper1").text("x" + contcombosuper1 + " Combo súper 1");
  }
});

$("#btn_combosuper1menos").click(function () {
  contcombosuper1 -= 1;
  if (contcombosuper1 < 0) {
    contcombosuper1 = 0;
  }

  $("input[name=combosuper1]").val(contcombosuper1);
  $("input[name=totalcombosuper1]").val(contcombosuper1 * preciocombosuper1);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combosuper1]").val() > 0) {
    $("#listacombosuper1").text("x" + contcombosuper1 + " Combo súper 1");
  } else {
    $("#listacombosuper1").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                combo super 2                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_combosuper2mas").click(function () {
  contcombosuper2 += 1;

  $("input[name=combosuper2]").val(contcombosuper2);
  $("input[name=totalcombosuper2]").val(contcombosuper2 * preciocombosuper2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combosuper2]").val() > 0) {
    $("#listacombosuper2").text("x" + contcombosuper2 + " Combo súper 2");
  }
});

$("#btn_combosuper2menos").click(function () {
  contcombosuper2 -= 1;
  if (contcombosuper2 < 0) {
    contcombosuper2 = 0;
  }

  $("input[name=combosuper2]").val(contcombosuper2);
  $("input[name=totalcombosuper2]").val(contcombosuper2 * preciocombosuper2);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combosuper2]").val() > 0) {
    $("#listacombosuper2").text("x" + contcombosuper2 + " Combo súper 2");
  } else {
    $("#listacombosuper2").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                combo super 3                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_combosuper3mas").click(function () {
  contcombosuper3 += 1;

  $("input[name=combosuper3]").val(contcombosuper3);
  $("input[name=totalcombosuper3]").val(contcombosuper3 * preciocombosuper3);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combosuper3]").val() > 0) {
    $("#listacombosuper3").text("x" + contcombosuper3 + " Combo súper 3");
  }
});

$("#btn_combosuper3menos").click(function () {
  contcombosuper3 -= 1;
  if (contcombosuper3 < 0) {
    contcombosuper3 = 0;
  }

  $("input[name=combosuper3]").val(contcombosuper3);
  $("input[name=totalcombosuper3]").val(contcombosuper3 * preciocombosuper3);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=combosuper3]").val() > 0) {
    $("#listacombosuper3").text("x" + contcombosuper3 + " Combo súper 3");
  } else {
    $("#listacombosuper3").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein vegetariano                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmvegetarianomas").click(function () {
  contcmvegetariano += 1;

  $("input[name=cmvegetariano]").val(contcmvegetariano);
  $("input[name=totalcmvegetariano]").val(
    contcmvegetariano * preciocmvegetariano
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmvegetariano]").val() > 0) {
    $("#listacmvegetariano").text(
      "x" + contcmvegetariano + " Chow mein vegetariano"
    );
  }
});

$("#btn_cmvegetarianomenos").click(function () {
  contcmvegetariano -= 1;
  if (contcmvegetariano < 0) {
    contcmvegetariano = 0;
  }

  $("input[name=cmvegetariano]").val(contcmvegetariano);
  $("input[name=totalcmvegetariano]").val(
    contcmvegetariano * preciocmvegetariano
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmvegetariano]").val() > 0) {
    $("#listacmvegetariano").text(
      "x" + contcmvegetariano + " Chow mein vegetariano"
    );
  } else {
    $("#listacmvegetariano").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein pollo                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmpollomas").click(function () {
  contcmpollo += 1;

  $("input[name=cmpollo]").val(contcmpollo);
  $("input[name=totalcmpollo]").val(contcmpollo * preciocmpollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmpollo]").val() > 0) {
    $("#listacmpollo").text("x" + contcmpollo + " Chow mein pollo");
  }
});

$("#btn_cmpollomenos").click(function () {
  contcmpollo -= 1;
  if (contcmpollo < 0) {
    contcmpollo = 0;
  }

  $("input[name=cmpollo]").val(contcmpollo);
  $("input[name=totalcmpollo]").val(contcmpollo * preciocmpollo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmpollo]").val() > 0) {
    $("#listacmpollo").text("x" + contcmpollo + " Chow mein pollo");
  } else {
    $("#listacmpollo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein cerdo                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmcerdomas").click(function () {
  contcmcerdo += 1;

  $("input[name=cmcerdo]").val(contcmcerdo);
  $("input[name=totalcmcerdo]").val(contcmcerdo * preciocmcerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmcerdo]").val() > 0) {
    $("#listacmcerdo").text("x" + contcmcerdo + " Chow mein cerdo");
  }
});

$("#btn_cmcerdomenos").click(function () {
  contcmcerdo -= 1;
  if (contcmcerdo < 0) {
    contcmcerdo = 0;
  }

  $("input[name=cmcerdo]").val(contcmcerdo);
  $("input[name=totalcmcerdo]").val(contcmcerdo * preciocmcerdo);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmcerdo]").val() > 0) {
    $("#listacmcerdo").text("x" + contcmcerdo + " Chow mein cerdo");
  } else {
    $("#listacmcerdo").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein especial                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmespecialmas").click(function () {
  contcmespecial += 1;

  $("input[name=cmespecial]").val(contcmespecial);
  $("input[name=totalcmespecial]").val(contcmespecial * preciocmespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmespecial]").val() > 0) {
    $("#listacmespecial").text("x" + contcmespecial + " Chow mein especial");
  }
});

$("#btn_cmespecialmenos").click(function () {
  contcmespecial -= 1;
  if (contcmespecial < 0) {
    contcmespecial = 0;
  }

  $("input[name=cmespecial]").val(contcmespecial);
  $("input[name=totalcmespecial]").val(contcmespecial * preciocmespecial);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmespecial]").val() > 0) {
    $("#listacmespecial").text("x" + contcmespecial + " Chow mein especial");
  } else {
    $("#listacmespecial").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein camarones                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmcamaronesmas").click(function () {
  contcmcamarones += 1;

  $("input[name=cmcamarones]").val(contcmcamarones);
  $("input[name=totalcmcamarones]").val(contcmcamarones * preciocmcamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmcamarones]").val() > 0) {
    $("#listacmcamarones").text("x" + contcmcamarones + " Chow mein camarones");
  }
});

$("#btn_cmcamaronesmenos").click(function () {
  contcmcamarones -= 1;
  if (contcmcamarones < 0) {
    contcmcamarones = 0;
  }

  $("input[name=cmcamarones]").val(contcmcamarones);
  $("input[name=totalcmcamarones]").val(contcmcamarones * preciocmcamarones);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmcamarones]").val() > 0) {
    $("#listacmcamarones").text("x" + contcmcamarones + " Chow mein camarones");
  } else {
    $("#listacmcamarones").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein kowloon                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmkowloonmas").click(function () {
  contcmkowloon += 1;

  $("input[name=cmkowloon]").val(contcmkowloon);
  $("input[name=totalcmkowloon]").val(contcmkowloon * preciocmkowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmkowloon]").val() > 0) {
    $("#listacmkowloon").text("x" + contcmkowloon + " Chow mein kowloon");
  }
});

$("#btn_cmkowloonmenos").click(function () {
  contcmkowloon -= 1;
  if (contcmkowloon < 0) {
    contcmkowloon = 0;
  }

  $("input[name=cmkowloon]").val(contcmkowloon);
  $("input[name=totalcmkowloon]").val(contcmkowloon * preciocmkowloon);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmkowloon]").val() > 0) {
    $("#listacmkowloon").text("x" + contcmkowloon + " Chow mein kowloon");
  } else {
    $("#listacmkowloon").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein carne                              ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmcarnemas").click(function () {
  contcmcarne += 1;

  $("input[name=cmcarne]").val(contcmcarne);
  $("input[name=totalcmcarne]").val(contcmcarne * preciocmcarne);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmcarne]").val() > 0) {
    $("#listacmcarne").text("x" + contcmcarne + " Chow mein carne");
  }
});

$("#btn_cmcarnemenos").click(function () {
  contcmcarne -= 1;
  if (contcmcarne < 0) {
    contcmcarne = 0;
  }

  $("input[name=cmcarne]").val(contcmcarne);
  $("input[name=totalcmcarne]").val(contcmcarne * preciocmcarne);
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmcarne]").val() > 0) {
    $("#listacmcarne").text("x" + contcmcarne + " Chow mein carne");
  } else {
    $("#listacmcarne").text("");
  }
});
////////////////////////////////////////////////////////////////////////
/////                Chow mein pollo y camarones                             ///////
///////////////////////////////////////////////////////////////////

$("#btn_cmpolloycamaronesmas").click(function () {
  contcmpolloycamarones += 1;

  $("input[name=cmpolloycamarones]").val(contcmpolloycamarones);
  $("input[name=totalcmpolloycamarones]").val(
    contcmpolloycamarones * preciocmpolloycamarones
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmpolloycamarones]").val() > 0) {
    $("#listacmpolloycamarones").text(
      "x" + contcmpolloycamarones + " Chow mein pollo y camarones"
    );
  }
});

$("#btn_cmpolloycamaronesmenos").click(function () {
  contcmpolloycamarones -= 1;
  if (contcmpolloycamarones < 0) {
    contcmpolloycamarones = 0;
  }

  $("input[name=cmpolloycamarones]").val(contcmpolloycamarones);
  $("input[name=totalcmpolloycamarones]").val(
    contcmpolloycamarones * preciocmpolloycamarones
  );
  $(subtotalCompra).text(sumarTodo());
  
  if ($("input[name=cmpolloycamarones]").val() > 0) {
    $("#listacmpolloycamarones").text(
      "x" + contcmpolloycamarones + " Chow mein pollo y carne"
    );
  } else {
    $("#listacmpolloycamarones").text("");
  }
});

/////////////////////////////////////////////////////////////////////

$("input[name=cliente]").change(function () {
  $("#numCliente").text($("input[name=cliente]").val().replaceAll(' ','').replaceAll("(",'').replaceAll(")",'').replaceAll('-',''));
});

$("select[name=delivery]").change(function () {
  $("#numRepartidor").text($("select[name=delivery]").val());
});

//https://goo.gl/maps/hucD4VrEXJvWdy457

$("select[name=formaRadio]").change(function () {
  $("#formaPago").text($("select[name=formaRadio]").val());
});

$("select[name=sector]").change(function () {
  $("#nombreZona").text(
    $("select[name=sector]").find("option:selected").attr("name")
  );
});

$("input[name=zona]").change(function () {
  $("#linkMapa").text($("input[name=zona]").val());
});

$("input[name=zonaextra]").change(function () {
  $("#zonaextra").text($("input[name=zonaextra]").val());
});

$("input[name=bolivares]").change(function () {
  $("#pagoBs").text($("input[name=bolivares]").val());

  var totalFaltante =
    (isNaN(parseFloat($(subtotalCompra).text()).toFixed(2))
      ? 0
      : parseFloat($(subtotalCompra).text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoUSD").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoUSD").text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoBs").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoBs").text()).toFixed(2) /
        parseFloat($("#tasaDia").val()));
  $("#pagoFaltante").text(
    totalFaltante.toFixed(2) +
      "$" +
      "/" +
      (totalFaltante * parseFloat($("#tasaDia").val(), 10)).toFixed(2) +
      "Bs"
  );
});

$("input[name=dolares]").change(function () {
  $("#pagoUSD").text($("input[name=dolares]").val());
  var totalFaltante =
    (isNaN(parseFloat($(subtotalCompra).text()).toFixed(2))
      ? 0
      : parseFloat($(totalCompra).text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoUSD").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoUSD").text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoBs").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoBs").text()).toFixed(2) /
        parseFloat($("#tasaDia").val()));
  $("#pagoFaltante").text(
    totalFaltante.toFixed(2) +
      "$" +
      "/" +
      (totalFaltante * parseFloat($("#tasaDia").val(), 10)).toFixed(2) +
      "Bs"
  );
});

$("select[name=sector]").change(function () {
  $("#pagoDelivery").text($("select[name=sector]").val());
});

$("select[name=selectDescuento]").change(function () {
   $(subtotalCompra).text(
    (sumarTodo() * parseFloat($("select[name=selectDescuento]").val())).toFixed(2)
  );

  $(totalCompra).text(
    (parseFloat( 
      isNaN(
        parseFloat($(subtotalCompra).text())
        ) ? 0 : parseFloat($(subtotalCompra).text()) + 
    isNaN( 
      parseFloat($("#pagoDelivery").text())
      )  ? 0  :  parseFloat($("#pagoDelivery").text()))).toFixed(2)
    );
});


$("#item1").change(function(){
  $("#listaitem1").text($("#item1").val()); 
})

$("#item2").change(function(){
  $("#listaitem2").text($("#item2").val()); 
})

$("#item3").change(function(){
  $("#listaitem3").text($("#item3").val()); 
})

$("#item4").change(function(){
  $("#listaitem4").text($("#item4").val()); 
})

$("#item5").change(function(){
  $("#listaitem5").text($("#item5").val()); 
})

var intervalo = window.setInterval(function(){
  
  $("#pagoDelivery").text($("select[name=sector]").val());


  $(totalCompra).text(
    parseFloat( 
      (isNaN(
        parseFloat($(subtotalCompra).text())
        ) ? 0 : parseFloat($(subtotalCompra).text())) + 
    (isNaN( 
      parseFloat($("#pagoDelivery").text())
      )  ? 0  :  parseFloat($("#pagoDelivery").text())))
    );

    $(subtotalCompra).text(
    (sumarTodo() * parseFloat($("select[name=selectDescuento]").val())).toFixed(2)
  );

  $("#inputotal").val(
      (isNaN(parseFloat($(totalCompra).text()).toFixed(2))
        ? 0
        : parseFloat($(totalCompra).text()).toFixed(2))
  );
  console.log("Calculando");


  $("#pagoUSD").text($("input[name=dolares]").val());
  var totalFaltante =
    (isNaN(parseFloat($(totalCompra).text()).toFixed(2))
      ? 0
      : parseFloat($(totalCompra).text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoUSD").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoUSD").text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoBs").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoBs").text()).toFixed(2) /
        parseFloat($("#tasaDia").val()));
  $("#pagoFaltante").text(
    totalFaltante.toFixed(2) +
      "$" +
      " /  " +
      (totalFaltante * parseFloat($("#tasaDia").val())).toFixed(2) +
      "Bs"
  );
  $("#pagoBs").text($("input[name=bolivares]").val());

  var totalFaltante =
    (isNaN(parseFloat($(totalCompra).text()).toFixed(2))
      ? 0
      : parseFloat($(totalCompra).text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoUSD").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoUSD").text()).toFixed(2)) -
    (isNaN(parseFloat($("#pagoBs").text()).toFixed(2))
      ? 0
      : parseFloat($("#pagoBs").text()).toFixed(2) /
        parseFloat($("#tasaDia").val()));
  $("#pagoFaltante").text(
    totalFaltante.toFixed(2) +
      "$" +
      " /  " +
      (totalFaltante * parseFloat($("#tasaDia").val(), 10)).toFixed(2) +
      "Bs"
  );

}, 1000);

///////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////

function CopyToClipboard(containerid) {
  // Create a new textarea element and give it id='t'
  let textarea = document.createElement("textarea");
  textarea.id = "t";
  // Optional step to make less noise on the page, if any!
  textarea.style.height = 0;
  // Now append it to your page somewhere, I chose <body>
  document.body.appendChild(textarea);
  // Give our textarea a value of whatever inside the div of id=containerid
  textarea.value = document.getElementById(containerid).innerText;
  // Now copy whatever inside the textarea to clipboard
  let selector = document.querySelector("#t");
  selector.select();
  document.execCommand("copy");
  // Remove the textarea
  document.body.removeChild(textarea);
}

function SendToClient() {
  let textarea = document.createElement("textarea");
  textarea.id = "t";
  // Optional step to make less noise on the page, if any!
  textarea.style.height = 0;
  // Now append it to your page somewhere, I chose <body>
  document.body.appendChild(textarea);
  // Give our textarea a value of whatever inside the div of id=containerid
  document.getElementById("comboslista").innerText;
  textarea.value = document.getElementById("comboslista").innerText;
  var valorTotal = document.getElementById("totalCompra").innerText;

  
    if  ($("#tipoPago").val()=="PayPal"){

      var auxval =
    "Su pedido es:\n\n" +
    textarea.value +
    "\n\n" +
    "Por un total de: " + 
       valorTotal + "$"  + 
    "\n " + 
    "Comisión de PayPal:" + String((0.054 * parseFloat(valorTotal))+0.3)+
    "\n\n"
   +"Total con la comisión de PayPal: " + String((1.054 * parseFloat(valorTotal))+0.3) 
   +"\n\n" +
    "Tasa de cambio: " + String(parseFloat($("#tasaDia").val())) + "Bs"+
        
     "\n\n" +
    "¿Cómo desea pagar?" + 
    "\n\n"+

    "Aceptamos:"+
    "\n"+
    "Banesco bolívares"+
    "\n"+
    "Pago móvil"+
    "\n"+
    "Efectivo dólares"+
    "\n"+
    "PayPal"
    }
    else {
      var auxval =
    "Su pedido es:\n\n" +
    textarea.value +
    "\n\n" +
    "Por un total de: " +
      valorTotal +
    "$" + " / " +   String(parseFloat($("#tasaDia").val()) * parseFloat(valorTotal)) + "Bs" +
    "\n\n" +
    "Tasa de cambio: " + String(parseFloat($("#tasaDia").val())) + "Bs"+
    
    
     "\n\n" +
    "¿Cómo desea pagar?" + 
    "\n\n"+

    "Aceptamos:"+
    "\n"+
    "Banesco bolívares"+
    "\n"+
    "Pago móvil"+
    "\n"+
    "Efectivo dólares"+
    "\n"+
    "PayPal"

    }
    
    
    ;

  document
    .getElementById("enlaceCliente")
    .setAttribute(
      "href",
      "http://wa.me/" +
        $("input[name=cliente]").val().replaceAll(' ','').replaceAll("(",'').replaceAll(")",'').replaceAll('-','') +
        "?" +
        "text=" +
        encodeURIComponent(auxval)
    );

  //+56979184554?text=Hola%20quiero%20contactarlo
  document.body.removeChild(textarea);
}

function SendToDelivery() {
  let textarea = document.createElement("textarea");
  textarea.id = "t";
  // Optional step to make less noise on the page, if any!
  textarea.style.height = 0;
  // Now append it to your page somewhere, I chose <body>
  document.body.appendChild(textarea);
  // Give our textarea a value of whatever inside the div of id=containerid
  document.getElementById("comboslista").innerText;
  textarea.value = document.getElementById("comboslista").innerText;

  var auxval =
    "El pedido es:\n\n" +
    textarea.value +
    "\n\n" +
    "Zona: \n\n" +
    document.getElementById("nombreZona").innerText +
    "\n\n" +
    "Ubicación: \n\n" + 
    document.getElementById("linkMapa").innerText +"\n\n" +
    "Ubicación datos extras: \n\n" +
    document.getElementById("zonaextra").innerText +
    "\n\n" +
    "Contacto del cliente:\n\n" +
    $("input[name=cliente]").val().replaceAll(' ','').replaceAll("(",'').replaceAll(")",'').replaceAll('-','');

  document
    .getElementById("enlaceDelivery")
    .setAttribute(
      "href",
      "http://wa.me/" +
        $("select[name=delivery]").val() +
        "?" +
        "text=" +
        encodeURIComponent(auxval)
    );

  //+56979184554?text=Hola%20quiero%20contactarlo
  document.body.removeChild(textarea);
}

function imprSelec(X) {
  var orden = document.getElementById(X);
  var ventimp = window.open(" ", "popimpr");
  ventimp.document.write(orden.innerHTML);
  ventimp.document.close();
  ventimp.print();
  ventimp.close();
}

function sumarTodo() {
  return (
    (parseFloat($("input[name=totalcombo1]").val()) +
    parseFloat($("input[name=totalcombo2]").val()) +
    parseFloat($("input[name=totalcombo3]").val()) +
    parseFloat($("input[name=totalcombo4]").val()) +
    parseFloat($("input[name=totalcombo5]").val()) +
    parseFloat($("input[name=totalcombo6]").val()) +
    parseFloat($("input[name=totalcombo7]").val()) +
    parseFloat($("input[name=totalcombo1duo]").val()) +
    parseFloat($("input[name=totalcombo2duo]").val()) +
    parseFloat($("input[name=totalcombo3duo]").val()) +
    parseFloat($("input[name=totalcombo4duo]").val()) +
    parseFloat($("input[name=totalcombo5duo]").val()) +
    parseFloat($("input[name=totalcombo6duo]").val()) +
    parseFloat($("input[name=totalcombo7duo]").val()) +
    parseFloat($("input[name=totalkombo1]").val()) +
    parseFloat($("input[name=totalkombo2]").val()) +
    parseFloat($("input[name=totalkombo3]").val()) +
    parseFloat($("input[name=totalkombo4]").val()) +
    parseFloat($("input[name=totalkombo5]").val()) +
    parseFloat($("input[name=totalkombo6]").val()) +
    parseFloat($("input[name=totalkombo7]").val()) +
    parseFloat($("input[name=totalkombo8]").val()) +
    parseFloat($("input[name=totalvegetariano]").val()) +
    parseFloat($("input[name=totalpollo]").val()) +
    parseFloat($("input[name=totaljamon]").val()) +
    parseFloat($("input[name=totalcerdo]").val()) +
    parseFloat($("input[name=totalespecial]").val()) +
    parseFloat($("input[name=totalcamarones]").val()) +
    parseFloat($("input[name=totallmvegetariano]").val()) +
    parseFloat($("input[name=totallmpollo]").val()) +
    parseFloat($("input[name=totallmcerdo]").val()) +
    parseFloat($("input[name=totallmespecial]").val()) +
    parseFloat($("input[name=totallmcamarones]").val()) +
    parseFloat($("input[name=totalpagridulce]").val()) +
    parseFloat($("input[name=totalpsoya]").val()) +
    parseFloat($("input[name=totalpcurry]").val()) +
    parseFloat($("input[name=totalpostras]").val()) +
    parseFloat($("input[name=totalpajonjoli]").val()) +
    parseFloat($("input[name=totalpasado]").val()) +
    parseFloat($("input[name=totalcostras]").val()) +
    parseFloat($("input[name=totalccurry]").val()) +
    parseFloat($("input[name=totalcbrocoli]").val()) +
    parseFloat($("input[name=totalcvegetales]").val()) +
    parseFloat($("input[name=totalcostilla]").val()) +
    parseFloat($("input[name=totalcerdoa]").val()) +
    parseFloat($("input[name=totalcerdosyp]").val()) +
    parseFloat($("input[name=totalcerdocurry]").val()) +
    parseFloat($("input[name=totalcerdoostra]").val()) +
    parseFloat($("input[name=totallumpias]").val()) +
    parseFloat($("input[name=totalwantonf]").val()) +
    parseFloat($("input[name=totalfideoss]").val()) +
    parseFloat($("input[name=totalfuyong]").val()) +
    parseFloat($("input[name=totalrefresco2]").val()) +
    parseFloat($("input[name=totallipton]").val()) +
    parseFloat($("input[name=totalrefrescol]").val()) +
    parseFloat($("input[name=totalrefresco1]").val())+
    parseFloat($("input[name=totalagua6]").val()) +
    parseFloat($("input[name=totalpanc]").val()) +
    parseFloat($("input[name=totalsopaw]").val()) +
    parseFloat($("input[name=totalswantonmien]").val()) +
    parseFloat($("input[name=totalcsvegetales]").val()) +
    parseFloat($("input[name=totalcspollo]").val()) +
    parseFloat($("input[name=totalcscerdo]").val()) +
    parseFloat($("input[name=totalcscarne]").val()) +
    parseFloat($("input[name=totalcscamarones]").val()) +
    parseFloat($("input[name=totalcspolloyc]").val()) +
    parseFloat($("input[name=totalcomboclasico2]").val()) +
    parseFloat($("input[name=totalcomboclasico1]").val()) +
    parseFloat($("input[name=totalcombosuper3]").val()) +
    parseFloat($("input[name=totalcombosuper2]").val()) +
    parseFloat($("input[name=totalcombosuper1]").val()) +
    parseFloat($("input[name=totalkowloon]").val()) +
    parseFloat($("input[name=totalpolloycamarones]").val()) +
    parseFloat($("input[name=totallmkowloon]").val()) +
    parseFloat($("input[name=totallmpolloycamarones]").val()) +
    parseFloat($("input[name=totallmcarne]").val()) +
    parseFloat($("input[name=totalcmvegetariano]").val()) +
    parseFloat($("input[name=totalcmpollo]").val()) +
    parseFloat($("input[name=totalcmcerdo]").val()) +
    parseFloat($("input[name=totalcmespecial]").val()) +
    parseFloat($("input[name=totalcmcamarones]").val()) +
    parseFloat($("input[name=totalcmkowloon]").val()) +
    parseFloat($("input[name=totalcmcarne]").val()) +
    parseFloat($("input[name=totalcmpolloycamarones]").val()) +
    parseFloat($("input[name=totalcsjamon]").val()) +
    parseFloat($("input[name=totalcsespecial]").val()) +
    parseFloat($("input[name=totalcskowloon]").val()) +
    parseFloat($("input[name=totalcostillaunidad]").val()) +
    parseFloat($("input[name=totalracionlumpias]").val()) +
    (isNaN(parseFloat($("input[name=totalitem1]").val()))?0:parseFloat($("input[name=totalitem1]").val())) +
    (isNaN(parseFloat($("input[name=totalitem2]").val()))?0:parseFloat($("input[name=totalitem2]").val())) +
    (isNaN(parseFloat($("input[name=totalitem3]").val()))?0:parseFloat($("input[name=totalitem3]").val())) +
    (isNaN(parseFloat($("input[name=totalitem4]").val()))?0:parseFloat($("input[name=totalitem4]").val())) +
    (isNaN(parseFloat($("input[name=totalitem5]").val()))?0:parseFloat($("input[name=totalitem5]").val()))).toFixed(2)
  );
}

</script>