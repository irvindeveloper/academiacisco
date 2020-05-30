<?php
session_start();
if(isset($_GET['acc'])&&$_GET['acc']==1)
{
	$us=$_POST['txtUser'];
	$pa=$_POST['txtPass'];
	//Llamar la conexion
	require("../modelo/conexion.php");
	//Llamar el modelo
	require("../modelo/modUsuarios.php");
	$oUsuarios = new usuarios();
	$registros = $oUsuarios->login($cnn,$us,$pa);
	$log=$registros->fetch_array();
	if($log['id']!="")
	{
		//Accion
		echo "Bienvenido";
		//Guardar la informacion del usuario autenticado
		$_SESSION['vsId']=$log['id'];
		$_SESSION['vsNombre']=$log['nombre'];
		$_SESSION['vsUsuario']=$log['usuario'];
		$_SESSION['vsNivel']=$log['nivel'];
		//$_SESSION['vsRuta']="http://localhost:8080/dsiw1/";
		header('location:../index.php');
	}
	else
	{
		//Accion
		//header("location:login.php?idacc=0")
		$msjacc="Acceso Denegado...";
		require("../vista/formlogin.php");
		//echo "No hay acceso...";
		//echo "<a href='login.php'>Volver</a>";
	}
}
else
{
	$msjacc="";
	require("../vista/formlogin.php");
}	
?>