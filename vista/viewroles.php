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
<h3 class="rol">Roles</h3>
<table id="colum" width=600 border=6>
<tr class="t">
<th>ID</th>
<th>Nombre</th>
<th>Usuario</th>
<th>Clave</th>
<th>Estado</th>
<th>Nivel</th>
<th colspan=10 align="center">Acciones</th>
</tr>
<?php
	while($fila=$registro->fetch_array()){
		$id=$fila['id'];
		echo "<tr>";
		echo "<td>".$fila['id']."</td>";
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>".$fila['usuario']."</td>";
		echo "<td>".$fila['clave']."</td>";
		echo "<td>".$fila['estado']."</td>";
		echo "<td>".$fila['nivel']."</td>";
		echo "<td>".'<a href="ctrlroles.php?accion=det&id='.$id.'">Detalle</a>'."</td>";
		echo "<td>".'<a href="ctrlroles.php?accion=del&id='.$id.'">Eliminar</a>'."</td>";
		//echo "<td>".'<a href="ctrlroles.php?accion=mod&id='.$id.'">Modificar</a>'."</td>";
		echo"</tr>";
	}
?>
</table>
</center>