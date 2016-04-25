<?php 
	$ced=$_POST["ced"];
	$nom=$_POST["nom"];
	$tel=$_POST["tel"];
	$placa=$_POST["placa"];
	$marca=$_POST["marca"];
	$desc=$_POST["desc"];
	$color=$_POST["color"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("sinacis",$db);
	mysql_query("insert into clientes values('$ced','$nom','$tel','$placa','$marca','$desc','$color')");
?>