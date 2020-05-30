<?php
session_start();
require_once('../modelo/conexion.php');
require_once('../modelo/modroles.php');
$roles = new roles();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cisco</title>
</head>
<body>
	<div align="center">
		<?php
			include('../vista/rolesmenu.php');
			if ($_GET['accion']=='add') 
			{
				include('../vista/frmroles.php');
			}
			else
			{
				if ($_GET['accion']=='ins') 
				{
					$id=$_POST['txtIdRol'];
					$nombr=$_POST['txtNombr'];
					$clav=$_POST['txtClav'];
					$usua=$_POST['txtUsua'];
					$estad=$_POST['txtEstad'];
					$nive=$_POST['txtNive'];

					$resAdd=$roles->insertar($id,$nombr,$usua,$clav,$estad,$nive,$cnn);
					include('../vista/mensaje.php');
				}
				else
				{
					if ($_GET['accion']=='det')
					{
						$roles->listaruno($_GET['id'],$cnn);
						include('../vista/detallerol.php');
					}
					else
					{
						if ($_GET['accion']=='del') 
						{
							$resAdd=$roles->eliminar($_GET['id'],$cnn);
							include('../vista/mensaje.php');
						}
						else
						{
							if ($_GET['accion']=='mod') 
							{
								$roles->listaruno($_GET['id']==$cnn);
								include('../vista/modiroles.php');
							}
							else
							{
								if ($_GET['accion']=='act') 
								{
									$id=$_POST['txtIdRol'];
									$nombr=$_POST['txtNombr'];
									$clav=$_POST['txtClav'];
									$usua=$_POST['txtUsua'];
									$estad=$_POST['txtEstad'];
									$nive=$_POST['txtNive'];

										$resAdd=$roles->modificar($id,$nombr,$usua,$clav,$estad,$nive,$cnn);
										include('../vista/mensaje.php');
								}
								else
								{
									$registro=$roles->listar($cnn);
									include('../vista/viewroles.php');
								}
							}
						}
					}
				}
			}
		?>
	</div>
	
</body>
</html>