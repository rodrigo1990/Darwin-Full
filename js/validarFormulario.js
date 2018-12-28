 function validar(){
     
    var mensaje = $("#mensaje").val();
	var nombre = $("#nombre").val();
	var telefono = $("#telefono").val();
	var tipo_evento = $("#tipo-evento option:selected").val();
	var fecha = $("#fecha").val();
	var email = $("#email").val();
	var cantidad_invitados = $("#cantidad-invitados").val();
	var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  	var soloNumeros=/^[0-9]*$/;

  	var nombreEstaValidado=false;
  	var emailEstaValidado=false;
  	var telefonoEstaValidado=false;
  	var tipoEventoEstaValidado=false;
  	var fechaEstaValidado=false;
  	var invitadosEstaValidado=false;

	


  	if(nombre.length==0){

  		$("#nombre-error").fadeIn();
  		nombreEstaValidado=false; 

  	}else{
		$("#nombre-error").fadeOut(); 
		nombreEstaValidado=true; 		
  	} 

  	if(email.length==0||email.search(emailValido)){


  		$("#email-error").fadeIn();
  		emailEstaValidado=false;

  	}else{
		$("#email-error").fadeOut();  	
		emailEstaValidado=true;	
  	}


  	if(telefono.length>13 || telefono.length==0 || telefono.search(soloNumeros)){

  		$("#telefono-error").fadeIn();
  		telefonoEstaValidado=false;

  	}else{

		$("#telefono-error").fadeOut();
		telefonoEstaValidado=true;

  	}

  	if(tipo_evento==0){

  		$("#tipo-evento-error").fadeIn();
  		tipoEventoEstaValidado=false;

  	}else{

		$("#tipo-evento-error").fadeOut();
		tipoEventoEstaValidado=true;

  	}

  	if(fecha==""){

  		$("#fecha-error").fadeIn();
  		fechaEstaValidado=false;

  	}else{

		$("#fecha-error").fadeOut();  
		fechaEstaValidado=true;		
  	}

  	if(cantidad_invitados==0||cantidad_invitados==""){

  		$("#cantidad-invitados-error").fadeIn();
  		invitadosEstaValidado=false;

  	}else{

  		$("#cantidad-invitados-error").fadeOut();
  		invitadosEstaValidado=true;
  	}

	

  	if(nombreEstaValidado==true&&emailEstaValidado==true&&telefonoEstaValidado==true&&tipoEventoEstaValidado==true&&fechaEstaValidado==true&&invitadosEstaValidado==true){
  		
  		$( "body" ).prepend( '<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> </div></div>' );

  		$.ajax({
    			data:{mensaje:mensaje,nombre:nombre,telefono:telefono,tipo_evento:tipo_evento,fecha:fecha,email:email},
    			
    			url:'ajax/enviarEmail.php',
    
    			type:'POST',
    
    			success:function(response){
    
				 	$("#preloader").fadeOut();
                 	$('#myModal').modal('show')
    
    			}
    	});


  	}

}
