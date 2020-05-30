<!DOCTYPE html>
<html lang="es-SV"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>CISCO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/tarea2.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
*{
		background: #651923;
	}
	table:nth-child(even){
		 background-color: #4CAF50;
    	 color: white;
	}
	#h{
		color: white;
		font-family: "Times New Roman", Times, serif;
	}
	.rol{
		color: white;
	}
	table{
		width: 100%,
	}
	tr:last-child th {
	  border-bottom: 3px solid #ddd;
	}
	tr:hover {
	  background-color: #f2f2f2;
	  cursor: default;
	}
	td{
		border: 1px solid #000;
		border-radius: 5px;
		color: white;
		
	}
	input{
		border-radius: 5px;
		background-color: #def;
	}
	a{
	   font-family: verdana, arial, sans-serif; 
	   font-size: 8pt; 
	   font-weight: bold; 
	   padding: 4px; 
	   background-color: #ffffcc; 
	   color: #666666; 
	   text-decoration: none; 
	}	input{
		border-radius: 5px;
		background-color: #def;
	}
	.boton1{
	background-color: #4CAF50;
    color: white;
    padding: 8px 8px;
    margin: 8px 5px;
    border: none;
    cursor: pointer;
    width: 45%;
	}
	.boton2{
	background-color: #DF0101;
    color: white;
    padding: 8px 8px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 45%;
	}
	.certi{
		color: white;
	}
</style>
<h2></h2>
<body>
	<font face="Cursive">
	<center>
	<table class="tabla" border="5" cellpadding="0" cellspacing="0" width="100%">
		<tbody id="menu"><tr height="60" align="center" bgcolor=black>
			<!--<td colspan="0"><img src="imagenes/cisco.png" height="99" width="99"></td>
			<td colspan="1"><h1>ESTUDIANTES</h1></td>-->
			<td colspan="3" width="50%">

<?php
					if(isset($_SESSION['vsId']))
					{
						echo "Usuario: ".$_SESSION['vsNombre']."<br>";
						echo "Role: ".$_SESSION['vsNivel']."<br>";
					}
					else
					{
						echo "&nbsp;";
					}	
?>
<a href="../index.php">Inicio</a>
<a href="ctrlestudiantes.php?accion=add">Ingresar Nuevo</a>
<?php

?>
<a href="ctrlestudiantes.php?accion=list">Listar Estudiantes</a>
<a href="ctrlestudiantes.php?accion=lisccna">CCNA SECURITY</a>
<a href="ctrlestudiantes.php?accion=lissecurity">CCNA</a>
<a href="../pdf/reporte.php">Reporte ccna</a>
<a href="../pdf/reporte2.php">Reporte ccna security</a>
<a href="../pdf/reporte3.php">Reporte General</a>
</td>
</tr>
</tbody>
</table>
</center>
</font>
</body>
</html>