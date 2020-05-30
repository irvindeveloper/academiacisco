<?php
require_once('../modelo/conexion.php');
require_once('../modelo/modcertificado.php');
$certificado = new certificado();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Certificado</title>
</head>
<body>
	<?php
	include('../vista/certificadomenu.php');
	if ($_GET['accion']=='add') 
	{
		include('../vista/frmcertificado.php');
	}
	else
	{
		if($_GET['accion']=='ins')
		{
			$idcerti=$_POST['txtidCerti'];
			$nombre=$_POST['txtNombre'];
			$modul=$_POST['txtModul'];
			$fechaI=$_POST['txtFecha_I'];
			$fechaF=$_POST['txtFecha_F'];
			$ciclo=$_POST['txtCicl'];
			$prec=$_POST['txtPrec'];
			$esta=$_POST['txtEsta'];

			$resAdd=$certificado->insertar($idcerti,$nombre,$modul,$fechaI,$fechaF,$ciclo,$prec,$esta,$cnn);
			include('../vista/mensaje.php');
		}
		else
		{
			if ($_GET['accion']=='det') 
			{
				$certificado->listaruno($_GET['idcerti'],$cnn);
				include('../vista/detallecertificado.php');
			}
			else
			{
				if ($_GET['accion']=='del') 
				{
					$resAdd=$certificado->eliminar($_GET['idcerti'],$cnn);
					include('../vista/mensaje.php');
				}
				else
				{
					if ($_GET['accion']=='mod') 
					{
						$certificado->listaruno($_GET['idcerti'],$cnn);
						include('../vista/modicertificado.php');
					}
					else
					{
						if ($_GET['accion']=='act') 
						{
							$idcerti=$_POST['txtidCerti'];
							$nombre=$_POST['txtNombre'];
							$modul=$_POST['txtModul'];
							$fechaI=$_POST['txtFecha_I'];
							$fechaF=$_POST['txtFecha_F'];
							$ciclo=$_POST['txtCicl'];
							$prec=$_POST['txtPrec'];
							$esta=$_POST['txtEsta'];

							$resAdd=$certificado->modificar($idcerti,$nombre,$modul,$fechaI,$fechaF,$ciclo,$prec,$esta,$cnn);
							include('../vista/mensaje.php');
						}
						else
						{
							$registro=$certificado->listar($cnn);
							include('../vista/viewcertificado.php');
						}
					}
				}
			}
		}
	}
	?>
	
</body>
</html>