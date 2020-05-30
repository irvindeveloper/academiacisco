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
	tr:nth-child(even){
	background-color: #ddd;
	}
	tr:hover td{
	background-color: #369681;
	color: white;
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
	th{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}
</style>	
<center>
<h3 class="isntruc">Lista Instructores</h3>
<table width=900 border=4>
<tr bgcolor="green">
<th>ID Estudiante</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Carrera</th>
<th>Carnet</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Modulo</th>
<th>Certificacion</th>
<th>Seccion</th>
<th>Horario</th>
<!--<th>Numero Boleta</th>
<th>Estado</th>-->
<th colspan=10 align="center">Acciones</th>
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
		echo "<td>".$fila['Direccion']."</td>";
		echo "<td>".$fila['Telefono']."</td>";
		echo "<td>".$fila['Modulo']."</td>";
		echo "<td>".$fila['Certificacion']."</td>";
		echo "<td>".$fila['Seccion']."</td>";
		echo "<td>".$fila['Horario']."</td>";
		//echo "<td>".$fila['Numero_boleta']."</td>";
		//echo "<td>".$fila['Estado']."</td>";
		echo "<td>".'<a href="ctrlinstrucon.php?accion=det&idestu='.$idestu.'">Detalle</a>'."</td>";
		/*echo "<td>".'<a href="ctrlestudiantes.php?accion=del&idestu='.$idestu.'">Eliminar</a>'."</td>";
		echo "<td>".'<a href="ctrlestudiantes.php?accion=mod&idestu='.$idestu.'">Modificar</a>'."</td>";
		echo"</tr>";*/
	}
?>
</table>
</center>