<!DOCTYPE html>
<html lang="es-SV"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>CISCO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/tarea2.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	*{
		background: #651923;
	}
	table:nth-child(even){
		background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 50%;
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
	 border-bottom-left-radius: 5px 10px;
	   border-bottom-right-radius: 5px 10px
	}
	a:hover{
		color: red;
	}
	.cert{
		color: white;
	}
</style>

<h2></h2>
<body>
	<font face="Cursive">
	<center>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr height="60" align="center" bgcolor="#d9d9d9">
			<!--<td colspan="1"><img src="imagenes/cisco.png" height="99" width="99"></td>
			<td colspan="4"><h1 class="cert">Certificado</h1></td>-->
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
<a href="ctrlcertificado.php?accion=add">Ingresar Nuevo</a>
<?php

?>
<a href="ctrlcertificado.php?accion=list">Listar Certificados</a>

</td>
</tr>
</tbody>
</table>
</center>
</font>
</body>
</html>