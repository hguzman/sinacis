<?php 
	$ced=$_POST["ced"];
	$nom=$_POST["nom"];
	$tel=$_POST["tel"];
	$placa=$_POST["placa"];
	$marca=$_POST["marca"];
	$desc=$_POST["desc"];
	$color=$_POST["color"];
	$db = new PDO('mysql:host=localhost;dbname=sinacis;charset=utf8', 'root', '');
	$result = $db->exec("insert into clientes values('$ced','$nom','$tel','$placa','$marca','$desc','$color')");	
?>