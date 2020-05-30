<?php
session_start();
	require("../modelo/conexion.php");
	require("../modelo/modUsuarios.php");
	$oUsuarios = new usuarios();
	include("../vista/encabezado.php");
?>

<?php
{
	$registros = $oUsuarios->listar($cnn);
	require("../vista/listaUsuarios.php");
}
include("../vista/piepagina.php");
?>
