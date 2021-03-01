
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


$("select[name=delivery]").change(function (){
	$("#numRepartidor").text($("select[name=delivery]").val());
})

//https://goo.gl/maps/hucD4VrEXJvWdy457

$("select[name=formaRadio]").change(function (){
	$("#formaPago").text($("select[name=formaRadio]").val());
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
