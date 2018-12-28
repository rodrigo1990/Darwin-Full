<section id="contacto">
	<div class="row form">
		

		
		<form action="">
	  	<h1 class="text-center">CONTACTANOS</h1>		
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y Apellido">
	  					<div class="error" id="nombre-error">Ingrese un nombre</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<input type="text" class="form-control" name="email" id="email"placeholder="Mail">
	  					<div class="error" id="email-error">Ingrese un email valido</div>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Tel de contacto">
	  					<div class="error" id="telefono-error">Ingrese un telefono</div>		
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-6">
	  					<select name="tipo-evento" id="tipo-evento" class="form-control form-small">
			  				<option value="0">Elegir tipo de evento</option>
			  				<option value="Social">Social</option>
			  				<option value="Corporativo">Corporativo</option>
	  					</select>		
	  					<div class="error" id="tipo-evento-error">Ingrese un tipo de evento</div>
	  				</div>
	  				
	  				<div class="col-sm-6">
	  					<input type="date" class="form-control form-small" name="fecha" id="fecha" placeholder="Fecha">
	  					<div class="error" id="fecha-error">Ingrese una fecha</div>		
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<input type="number" class="form-control" name="cantidad-invitados" id="cantidad-invitados" placeholder="Cantidad de invitados">
						<div class="error" id="cantidad-invitados-error">Ingrese una cantidad de invitados</div>
	  				</div>
	  			</div>
	  			
	  			<div class="row">
	  				<div class="col-sm-12">
	  					<label for="comentarios">Comentarios:</label>
	  					<textarea name="mensaje" id="mensaje" cols="30" rows="5" id="comentarios" class="form-control"></textarea>		
	  				</div>
	  			</div>

	  			<div class="row">
	  				<div class="col-sm-12">
	  					
	  					<a class="btn" onClick="validar()">ENVIAR</a>		
	  				</div>
	  			</div>
	  		</form>
	</div>

</section>