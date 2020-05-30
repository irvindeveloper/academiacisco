<?php
session_start();
if(!isset($_SESSION['vsId']))
{
	header("location:controlador/login.php");
}
include("vista/encabezado.php");
?>
<?php
if($_SESSION['vsNivel']=='admin')
{
	require('vista/menuadmin.php');
}else
{
	require('vista/menuconsulta.php');
}
?>
<tr>
	<td colspan="8" height="400" align="center"><img src="imagenes/ciscoworld.jpg">
	
	</td>
<tr>

