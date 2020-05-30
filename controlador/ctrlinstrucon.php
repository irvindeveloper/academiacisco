<?php
require_once('../modelo/conexion.php');
require_once('../modelo/modinstructores.php');
$instructores = new instructores();
?>
<!DOCTYPE html>
<html lang="es-SV"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>CISCO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/tarea2.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	include('../vista/instruconmenu.php');
	if ($_GET['accion']=='add') 
	{
		include('../vista/frminstrucon.php');
	}
	else
	{
		if ($_GET['accion']=='ins') 
			{
				$idestu=$_POST['txtidEstu'];
				$nomb=$_POST['txtNomb'];
				$apel=$_POST['txtApel'];
				$carr=$_POST['txtCarr'];
				$carn=$_POST['txtCarn'];
				$dir=$_POST['txtDir'];
				$tel=$_POST['txtTel'];
				$mo=$_POST['txtMo'];
				$cer=$_POST['txtCer'];
				$sec=$_POST['txtSec'];
				$ho=$_POST['txtHo'];
				//$num_bo=$_POST['txtNum_bo'];
				//$est=$_POST['txtEst'];

				$resAdd=$instructores->insertar($idestu,$nomb,$apel,$carr,$carn,$dir,$tel,$mo,$cer,$sec,$ho,$cnn);
				include('../vista/mensaje.php');
			}
			else
			{
				if ($_GET['accion']=='det') 
				{
					$instructores->listaruno($_GET['idestu'],$cnn);
					include('../vista/detalleinstruestu.php');
				}
				else
				{
					$registro=$instructores->listar($cnn);
								include('../vista/viewinstrucon.php');
				}
			}
	}
	?>
	
		<tr>
			<td colspan="8" height="50" align="center" bgcolor="#4db8ff">
					<center><p>Academia Cisco UTEC</p></center>
			</td>
		</tr>
	</tbody></table>
	</center>
	<footer>
		<div align="center">
				(C) Derechos Reservados Proceso De Graduacion, 2018
		</div>
	</footer>
	</font>


</html>