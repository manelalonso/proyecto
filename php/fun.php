<?php  

require_once("conn.php");




function GetCocineros() {

	$con = conectar();

	$query = mysqli_query($con, "SELECT dni,nombre FROM cocinero");

	//desconectar($con);

	return $query;

}


function GetPlatos() {

	$con = conectar();

	$query = mysqli_query($con, "SELECT idplato,nombre FROM plato");

	//desconectar($con);

	return $query;

}

function InsertarPreparar($cocinero, $plato, $fecha) {

	$con = conectar();

	$query = mysqli_query($con, "INSERT INTO preparar(dnicocinero,idplato,fecha) VALUES('$cocinero', '$plato', '$fecha')");

	echo "Preparar guardado correctamente";

	//desconectar($con);

}

function GetClientes() {

	$con = conectar();

	$query = mysqli_query($con, "SELECT * FROM cliente ORDER BY poblacion, apellidos, nombre");

	return $query;

}

function GetPrecioPlato($plato) {

	$con = conectar();

	$query = mysqli_query($con, "SELECT precio FROM plato WHERE idplato = '$plato'");

	return $query;

}


function AcabarConLaExistenciaDelClienteEnLaBaseDeDatosParaSiempreAKABorrarCliente($cliente) {

	$con = conectar();

	$query = mysqli_query($con, "DELETE FROM cliente WHERE nif = '$cliente'");

	echo "Ha muerto.";

}


function UpdatePrecio($idplato, $nuevo) {

	$con = conectar();

	$query = mysqli_query($con, "UPDATE plato SET precio = '$nuevo' WHERE idplato = '$idplato'");

}



?>