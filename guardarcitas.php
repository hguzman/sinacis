
<?php 
	
	$nom=$_POST["nom"];
	$ced=$_POST["ced"];
	$placa=$_POST["placa"];
	$desc=$_POST["desc"];
	$fecha=$_POST["fecha"];
	$db = new PDO('mysql:host=localhost;dbname=sinacis;charset=utf8', 'root', '');
	$result = $db->exec("insert into citas values('$nom','$ced','$placa','$desc','$fecha')");	
?>


<html>
<head>
	<title></title>
</head>

<body>
<div class="col-md-4">
          <h1>SINACIS</h1>
          <h1> DATOS GUARDADOS EXITOSAMENTE</h1>	
          <hr>
          <img src="gracias.jpg" alt="" class="img-responsive">
                 
        </div>

	<div class="col-md-4">
	
	<img src="mecanico.jpg" alt="" class="img-rounded">
<img src="logosinacis.png" alt="" class="img-circle">
<img src="" alt="" class="img-thumbnail">
                 
        </div>
</body>
</html>

