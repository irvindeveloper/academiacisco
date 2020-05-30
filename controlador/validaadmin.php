<?php
session_start();
if(!isset($_SESSION['vsId'])||$_SESSION['vsNivel']=='invitado')
{
	header("location:../index.php");
}
?>