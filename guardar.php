<?php 
	$ced=$_POST["ced"];
	$nom=$_POST["nom"];
	$corr=$_POST["corr"];
	$dir=$_POST["dir"];
	$tel=$_POST["tel"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("almacentallerdj",$db);
	mysql_query("insert into clientes values('$ced','$nom','$corr','$dir','$tel')");
?>