<?php
session_start();
require_once('../modelo/conexion.php');
require_once('../modelo/modinstructor.php');
$instructor = new instructor();
?>
<!DOCTYPE html>
<html >
<head>
<title>CISCO</title>
<link rel="stylesheet" href="css/tarea2.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div align="center">
	<?php
	include('../vista/instructormenu.php');
	if($_GET['accion']=='add')
{
	include('../vista/frminstructor.php');
}
	else
	{
		if($_GET['accion']=='ins') 
		{
			$id=$_POST['txtIdInstru'];
			$nom=$_POST['txtNom'];
			$ape=$_POST['txtApe'];
			$modu=$_POST['txtModu'];
			$cert=$_POST['txtCerti'];
			$secc=$_POST['txtSecc'];
			$hor=$_POST['txtHor'];
			$ciclo=$_POST['txtCiclo'];

			$resAdd=$instructor->insertar($id,$nom,$ape,$modu,$cert,$secc,$hor,$ciclo,$cnn);
			include('../vista/mensaje.php');
		}
		else{
			if ($_GET['accion']=='det') 
			{
				   $instructor->listaruno($_GET['id'],$cnn);
				    include('../vista/detalleinstructor.php');
			}
			else
			{
				if ($_GET['accion']=='del') 
				{
					
						$resAdd=$instructor->eliminar($_GET['id'],$cnn);
						include('../vista/mensaje.php');
									
					
				}
				else
				{
					if ($_GET['accion']=='mod') 
					{
						$instructor->listaruno($_GET['id'],$cnn);
						include('../vista/modiinstructor.php');
					}
					else
					{
						if ($_GET['accion']=='act') 
						{
						$id=$_POST['txtIdInstru'];
						$nom=$_POST['txtNom'];
						$ape=$_POST['txtApe'];
						$modu=$_POST['txtModu'];
						$cert=$_POST['txtCerti'];
						$secc=$_POST['txtSecc'];
						$hor=$_POST['txtHor'];
						$ciclo=$_POST['txtCiclo'];

						$resAdd=$instructor->modificar($id,$nom,$ape,$modu,$cert,$secc,$hor,$ciclo,$cnn);
						include('../vista/mensaje.php');
						}
						else
						{
							$registro=$instructor->listar($cnn);
							include('../vista/viewinstructor.php');
						}
					}
				}
			}
		}
	}
	
		

	?>
	
		<tr>
			<td colspan="8" height="50" align="center" bgcolor="#4db8ff">
					<center><p>Academia Cisco UTEC</p></center>
			</td>
		</tr>
	</div>
	</body>
</table>
	</center>
	<footer>
		<div align="center">
				(C) Derechos Reservados Proceso De Graduacion, 2018
		</div>
	</footer>

</html>