<?php 
	$iden=$_POST["iden"];
	$nom=$_POST["nom"];
	$corr=$_POST["corr"];
	$dir=$_POST["dir"];
	$tel=$_POST["tel"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("proyectoempresa",$db);
	mysql_query("insert into registroentrada values('$iden','$nom','$corr','$dir','$tel')");
?>