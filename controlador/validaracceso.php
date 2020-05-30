<?php
//session_start();
if(!isset($_SESSION['vsId']))
{
	header("location:controlador/login.php");
}
?>