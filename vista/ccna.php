<style>
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
	}
</style>
<h3>Lista Estudiantes CCNA</h3>
<table id="estudiante" width=900 border=4>
<tr bgcolor="green">
<td>ID Estudiante</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Carrera</td>
<td>Carnet</td>
<td>Direccion</td>
<td>Telefono</td>
<td>Modulo</td>
<td>Certificacion</td>
<td>Seccion</td>
<td>Horario</td>
<td>Pago 1</td>
<td>pago 2</td>
<td>pago 3</td>
<td>pago 4</td>
<td>pago 5</td>
<td colspan=10 align="center">Acciones</td>
</tr>
<?php
	while($fila=$registro->fetch_array()){
		$idestu=$fila['idEstudiantes'];
		echo "<tr>";
		echo "<td>".$fila['idEstudiantes']."</td>";
		echo "<td>".$fila['Nombre']."</td>";
		echo "<td>".$fila['Apellido']."</td>";
		echo "<td>".$fila['Carrera']."</td>";
		echo "<td>".$fila['Carnet']."</td>";
		/*echo "<td>".$fila['Direccion']."</td>";
		echo "<td>".$fila['Telefono']."</td>";*/
		echo "<td>".$fila['Modulo']."</td>";
		echo "<td>".$fila['Certificacion']."</td>";
		echo "<td>".$fila['Seccion']."</td>";
		echo "<td>".$fila['Horario']."</td>";
		echo "<td>".$fila['pago1']."</td>";
		echo "<td>".$fila['pago2']."</td>";
		echo "<td>".$fila['pago3']."</td>";
		echo "<td>".$fila['pago4']."</td>";
		echo "<td>".$fila['pago5']."</td>";
		echo "<td>".'<a href="ctrlestudiantes.php?accion=det&idestu='.$idestu.'">Detalle</a>'."</td>";
		echo "<td>".'<a href="ctrlestudiantes.php?accion=del&idestu='.$idestu.'">Eliminar</a>'."</td>";
		echo "<td>".'<a href="ctrlestudiantes.php?accion=mod&idestu='.$idestu.'">Modificar</a>'."</td>";
		echo"</tr>";
	}
?>
</table>
</center>
