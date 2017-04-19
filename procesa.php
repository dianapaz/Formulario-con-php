<head>
	<meta charset="utf-8">
	<title>Registro Estudiante</title>
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<script type="text/javascript" src="materialize/js/jquery-3.1.1.min.js"></script>
  	<script type="text/javascript" src="materialize/js/javascript.js"></script>
  	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  	
</head>       
<div class="container" align="center">
<a class="waves-effect  blue accent-2 btn" href="index.php"><i class="material-icons left">forward_5</i>Regresar a Formulario</a>
</div>

<?php 
	$file=fopen("datos.txt", "a");

	fwrite($file,$_POST['primerapellido'].";".$_POST['last_name'].";".$_POST['name'].";".$_POST['doc'].";".$_POST['identificacion'].";".$_POST['email']. ";".$_POST['codigo'].";".$_POST['categoria'].";".$_POST['namepro'].";".$_POST['marca'].";".$_POST['cantidad'].";".$_POST['color'].";".$_POST['factura'].";".$_POST['precio'].";".$_POST['impuestos'].";".$_POST['name_vend'].";".$_POST['fecha']. PHP_EOL);
	
	fclose($file);

$file=fopen("datos.txt", "r");
while (!feof($file)) {
    $linea = fgets($file);
         if (!$linea) {
            break;
         }
    $x=explode(";", $linea);
              	
?>
<body>

<div class="container">

	<div class="row">
    	 <div class="col s12 m12">
          <div class="card blue blue darken-2">
            <div class="card-content white-text">
              <span class="card-title">
              <B>INFORMACIÓN FORMULARIO VENTAS</B>
              </span>
              <p>
              <?php echo "Nombre Cliente: ". $x[0]." ".$x[1]." ".$x[2]?><br><?php echo "Tipo documento: ".$x[3]?><br><?php echo "No. Documento: ".$x[4]?><br><?php echo "Correo Electrónico: ".$x[5]?><br><?php echo "Código producto: ".$x[6]?><br><?php echo "Categoría: ".$x[7]?><br><?php echo "Nombre producto: ".$x[8]?><br><?php echo "Marca: ".$x[9] ?><br><?php echo "Cantidad: ".$x[10]?><br><?php echo "Color: ".$x[11]?><br><?php echo "Factura: ".$x[12]?><br><?php echo "Precio: ".$x[13]?><br><?php echo "Impuestos: ".$x[14]?><br><?php echo "Nombre Vendedor: ".$x[15]?><br><?php echo "Fecha venta: ".$x[16];?>
              </p>
            </div>
            
         </div>
        </div>
      </div>
      </div>
</body>
<?php
     }
        fclose($file);
?>