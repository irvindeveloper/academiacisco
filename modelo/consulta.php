<?php
require_once('../modelo/conexion.php');

$tabla="";
$query="SELECT * FROM estudiantes";

if(isset($_POST['estudiantes']))
{
	$q=$conexion->real_escape_string($_POST['estudiantes']);
	$query="SELECT * FROM estudiantes WHERE idEstudiantes LIKE '%".$q."%' or Nombre LIKE '%".$q."%' or Apellidos LIKE '%".$q."%' or Direccion LIKE '%".$q."%' or Telefono LIKE '%".$q."%' or carnet LIKE '%".$q."%' or Carrera LIKE '%".$q."%' or Certificacion LIKE '%".$q."%' or Modulo LIKE '%".$q."%' or Seccion LIKE '%".$q."%' or Horario LIKE '%".$q."%' or pago1 LIKE '%".$q."%' or pago2 LIKE '%".$q."%' or pago3 LIKE '%".$q."%' or pago4 LIKE '%".$q."%' or pago5 LIKE '%".$q."%'"; 
}

$buscarEstudiantes=$conexion->query($query);
if ($buscarEstudiantes->num_rows > 0) 
{
	$tabla.=
	'<table class="table">
		<tr class="bg-primary">
		<td>Id Estudiante</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Direccion</td>
		<td>Telefono</td>
		<td>carnet</td>
		<td>Carrera</td>
		<td>Certificacion</td>
		<td>Modulo</td>
		<td>Seccion</td>
		<td>Horario</td>
		<td>pago1</td>
		<td>pago2</td>
		<td>pago3</td>
		<td>pago4</td>
		<td>pago5</td>
		</tr>';

		while($filaEstudiantes= $buscarEstudiantes->fetch_assoc())
		{
			$table.=
			'<tr>

				<td>'.$filaEstudiantes['idEstudiantes'].'</tr>
				<td>'.$filaEstudiantes['Nombre'].'</tr>
				<td>'.$filaEstudiantes['Apellido'].'</tr>
				<td>'.$filaEstudiantes['Direccion'].'</tr>
				<td>'.$filaEstudiantes['Telefono'].'</tr>
				<td>'.$filaEstudiantes['carnet'].'</tr>
				<td>'.$filaEstudiantes['Carrera'].'</tr>
				<td>'.$filaEstudiantes['Certificacion'].'</tr>
				<td>'.$filaEstudiantes['Modulo'].'</tr>
				<td>'.$filaEstudiantes['Seccion'].'</tr>
				<td>'.$filaEstudiantes['Horario'].'</tr>
				<td>'.$filaEstudiantes['pago1'].'</tr>
				<td>'.$filaEstudiantes['pago2'].'</tr>
				<td>'.$filaEstudiantes['pago3'].'</tr>
				<td>'.$filaEstudiantes['pago4'].'</tr>
				<td>'.$filaEstudiantes['pago5'].'</tr>
			';
		}

		$tabla.='</table>';
}
else{
	$tabla="No se encontraron coincidencias con sus criterios de busqueda.";
}
echo $tabla;
?>