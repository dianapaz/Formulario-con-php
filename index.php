<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario Ventas</title>
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<script type="text/javascript" src="materialize/js/jquery-3.1.1.min.js"></script>
  	<script type="text/javascript" src="materialize/js/javascript.js"></script>
  	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</head>
<body>
	<nav>
    	<div class="nav-wrapper blue darken-1">
			<h5 class="brand-logo center" >FORMULARIO DE VENTAS</h5>
       		<ul id="nav-mobile" class="right hide-on-med-and-down">
 	        	<li><a>Salir</a></li>
       		</ul>
       		<ul id="nav-mobile" class="right hide-on-med-and-down">
          		<li><i class="material-icons prefix">power_settings_new</i></li>
     		</ul>
     		<ul id="nav-mobile" class="right hide-on-med-and-down">
      			<a class="btn btn-floating pulse  blue lighten-2"><i class="material-icons">menu</i></a>
     		</ul>
    	</div>
  </nav>

<form method="POST" action="procesa.php">
<BR>
	<div class="container">
		<FIELDSET style="border:6px groove #82b1ff";>
		<legend style="background:#82b1ff";>Información Comprador </legend>
</BT>
		
		<div class="row">
   			<div class="row">
       			<div class="input-field col s4">
          			<input id="primerapellido" type="text" class="validate" name="primerapellido">
          			<label for="primerapellido">Primer Apellido</label>
        		</div>
        		<div class="input-field col s4">
          			<input id="last_name" type="text" class="validate" name="last_name">
          			<label for="last_name">Segundo Apellido</label>
        		</div>
				<div class="input-field col s4">
          			<i class="material-icons prefix">account_circle</i>
          			<input id="name" type="text" class="validate" name="name">
          			<label for="name">Nombres</label>
        		</div>
      		</div>
   		</div>

		<div class="row">
	    	<div class="input-field col s4">
    			<select class="validate" name="doc">
     	 			<option value="CC">CC Cédula de ciudadania</option>
     	 			<option value="TI">TI Tarjeta de identidad</option>
       				<option value="CE">CE Cédula de extranjeria</option>
   				</select>
      			<label id="tipodoc">Tipo de documento: </label>
  			</div>

  			<div class="input-field col s4">
    			<i class="material-icons prefix">assignment_ind</i>
    			<input id="identificacion" type="text" class="validate" name="identificacion">     
    			<label for="identificacion">No. Identificación</label>
  			</div>

 			<div class="input-field col s4">
      			<i class="material-icons prefix">email</i>
      			<input id="email" type="email" class="validate" name="email">
      			<label for="email" data-error="wrong" data-success="right">Correo Electrónico:</label>
  			</div>
		</div>
 
</FIELDSET>

	<br>
		<FIELDSET style="border:6px groove #82b1ff";>
			<legend style="background:#82b1ff";>Información Producto</legend>
	
		<div class="row">
   			<div class="input-field col s4">
      			<i class="material-icons prefix">dialpad</i>
      			<input id="codigo" type="tel" class="validate" name="codigo">
     			  <label for="codigo">Código:</label>
 			</div>

 			<div class="input-field col s4">
    			<select class="validate" id="categoria" name="categoria">
    				<option value="Seleccione">Seleccione...</option>
      			<option value="Ropa_Deportiva">Ropa Deportiva</option>
   	 				<option value="Ropa_Formal">Ropa Formal</option>    				
   	 				<option value="Ropa_Interior">Ropa Interior</option>
   				</select>
      			<label for="categoria">Categoría: </label>
  			</div>

 			<div class="input-field col s4">
         		<input id="namepro" type="text" class="validate" name="namepro">
          		<label for="namepro">Nombre producto:</label>
        	</div>
    	</div>

    	<div class="row">
  			<div class="input-field col s3">
      			<i class="material-icons prefix">description</i>
      			<input id="marca" type="text" class="validate" name="marca">
      			<label for="marca">Marca:</label>
  			</div>

  			<div class="input-field col s3">
  		    	<input id="cantidad" type="text" class="validate" name="cantidad">
      			<label for="cantidad">Cantidad:</label>
  			</div>

  			<div class="input-field col s3">
  		    	<input id="color" type="text" class="validate" name="color">
      			<label for="color">Color:</label>
  			</div>

  			<div class="input-field col s3">
  				<img src="producto.jpg" width="180" alt="" class="circle">
  			</div>
		</div>

		<div class="row">
  			<div class="col s4">
  				<i class="material-icons prefix">done_all</i>
  	 			<label for="talla">Talla:</label>
   	 		<p>
   				<input type="radio" name="talla" id="s" />
   				<label for="s">S</label>

				  <input type="radio" name="talla" id="m" />
   				<label for="m">M</label>   	

   				<input type="radio" name="talla" id="l" />
   				<label for="l">L</label>

   				<input type="radio" name="talla" id="xl" />
   				<label for="xl">XL</label>			
     		</p>
			</div>

    		<div class="col s4">
   				<i class="material-icons prefix">info_outline</i>
   				<label for="info">Desea Recibir información por email:</label>
    				<div class="switch">
   		 		<label>No
     		 	<input type="checkbox">
      			<span class="lever"></span>
     		 	Sí </label>
 	 		</div>
 		</div>

   			<div class="col s4">
				<label for="archivo">Subir una foto:</label>
    			<div class="file-field input-field">
      			<div class="btn  blue lighten-2">
      	  			<span>Subir</span>
        			<input type="file">
      			</div>
      			<div class="file-path-wrapper">
        			<input class="file-path validate" type="text">
      			</div>
   				</div>
 			</div>
		</div>
</FIELDSET>

	<br>
		<FIELDSET style="border:6px groove #82b1ff";>
			<legend style="background:#82b1ff";>Información Venta</legend>

		<div class="row">
			<div class="input-field col s3">
      			<i class="material-icons prefix">assignment</i>
      			<input id="factura" type="text" class="validate" name="factura">
      			<label for="factura">No. Factura:</label>
  			</div>

  			<div class="input-field col s3">
      			<input id="precio" type="text" class="validate" name="precio">
      			<label for="precio">Precio:</label>
  			</div>

  			<div class="input-field col s3">
    			<select class="validate" name="impuestos">
    				<option value="Seleccione">Seleccione...</option>
     				<option value="4%">4%</option>	 			
     				<option value="9%">9%</option>
       				<option value="16%">16%</option>
       				<option value="19%">19%</option>
   				</select>
      			<label for="impuestos">Impuestos: </label>
  			</div>

  			<div class="input-field col s3">
      			<input id="estado" type="text" class="validate">
      			<label for="estado">Estado:</label>
  			</div>
		</div>

		<div class="row"> 
			<div class="input-field col s4">
        		<input id="name_vend" type="text" class="validate" name="name_vend">
        		<label for="name_vend">Nombre del Vendedor: </label>
    		</div>

    		<div class="input-field col s4">
        		<input id="identificacion_vend" type="text" class="validate">
        		<label for="identificacion_vend">No. Identificación: </label>
    		</div>

   			<div class="col s4">
    			<i class="material-icons prefix">today</i>
    			<label for="fecha">Fecha Venta:</label>
    			<input type="date" class="datepicker" id="fecha" name="fecha" class="validate"\>
    		</div>
    	</div>

</FIELDSET>


	<div class="row"> 
		<div class="container" align="center">
      <BR>
			<button class="btn waves-effect waves-light  blue lighten-2" type="submit" name="action">Enviar Formulario
   			<i class="material-icons right">send</i>
 			</button>
      </BR>
  		</div> 
  	</div>
</div>

<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large  blue lighten-2">
      <i class="large material-icons">settings</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
</div>

</form>

</body>
</html>