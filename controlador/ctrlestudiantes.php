<?php
require_once('../modelo/conexion.php');
require_once('../modelo/modestudiantes.php');
$estudiante = new estudiante();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Estudiantes</title>
</head>
<body>
	<div align="center">
		<?php
		include('../vista/estudiantesmenu.php');
        if ($_GET['accion']=='add') 
		{
			include('../vista/frmestudiantes.php');
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
				$pag1=$_POST['txtPag1'];
				$pag2=$_POST['txtPag2'];
				$pag3=$_POST['txtPag3'];
				$pag4=$_POST['txtPag4'];
				$pag5=$_POST['txtPag5'];

				$resAdd=$estudiante->insertar($idestu,$nomb,$apel,$carr,$carn,$dir,$tel,$mo,$cer,$sec,$ho,$pag1,$pag2,$pag3,$pag4,$pag5,$cnn);
				include('../vista/mensaje.php');
			}
			else
			{
				if ($_GET['accion']=='det') 
				{
					$estudiante->listaruno($_GET['idestu'],$cnn);
					include('../vista/detalleestudiantes.php');
				}
				else
				{
					if ($_GET['accion']=='del') 
					{
						$resAdd=$estudiante->eliminar($_GET['idestu'],$cnn);
						include('../vista/mensaje.php');
					}
					else
					{
						if ($_GET['accion']=='mod') 
						{
							$estudiante->listaruno($_GET['idestu'],$cnn);
							include('../vista/modiestudiantes.php');
						}
						else
						{
							if ($_GET['accion']=='act') 
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
								$pag1=$_POST['txtPag1'];
								$pag2=$_POST['txtPag2'];
								$pag3=$_POST['txtPag3'];
								$pag4=$_POST['txtPag4'];
								$pag5=$_POST['txtPag5'];
								$resAdd=$estudiante->modificar($idestu,$nomb,$apel,$carr,$carn,$dir,$tel,$mo,$cer,$sec,$ho,$pag1,$pag2,$pag3,$pag4,$pag5,$cnn);
								include('../vista/mensaje.php');
							}
						
							else
							{
								if ($_GET['accion']=='lisccna') 
							{
								$registro=$estudiante->listarsecurity($cnn);
								include('../vista/viewestudiantes.php');
							}

							
							else	
							{
								if ($_GET['accion']=='lissecurity') 
								{
									$registro=$estudiante->listarccna($cnn);
									include('../vista/viewestudiantes.php');
								}
							
							else
							{
								$registro=$estudiante->listar($cnn);
								include('../vista/viewestudiantes.php');
							}
							}
						}		
					}
				}
			}
		}}
		?>
	</div>
	
</body>
</html>