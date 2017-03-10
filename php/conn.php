<?php  

function conectar() {

	$con = mysqli_connect("localhost", "root", "", "Catering") or die ("Error sin conexion a BBDD");

	return $con;

}


function desconectar($con) {

	mysql_close($con);

}



?>