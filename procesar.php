<?php
require 'conexion.php';
$nombre=$_POST["Nom"];
$mail=$_POST["Mail"];
$telefono=$_POST["Telef"];
$sql="INSERT INTO clientes(id_clientes, nombre, mail, telefono) VALUES('', '$nombre', '$mail', '$telefono')";
mysql_query($sql, $con);
if($resultado){
	echo "El registro se almaceno de manera correcta";
}else{
	die.mysql_error();
}
mysql.close($con);
?>