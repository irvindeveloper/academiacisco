<style type="text/css">
	*{
		background: #651923;
	}
	table:nth-child(even){
		background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 70%;
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
		color: white;
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
<h3 class="nombre">Lista Certificado</h3>
<table width=900 border=4>
<tr bgcolor="grey">
<th>ID Certificado</th>
<th>Nombre</th>
<th>Modulo</th>
<th>Fecha Inicio</th>
<th>Fecha Fin</th>
<th>Ciclo</th>
<th>Precio</th>
<th>Estado</th>
<th colspan=10 align="center">Acciones</th>
</tr>
<?php
	while($fila=$registro->fetch_array()){
		$idcerti=$fila['idCertificacion'];
		echo "<tr>";
		echo "<td>".$fila['idCertificacion']."</td>";
		echo "<td>".$fila['Nombre']."</td>";
		echo "<td>".$fila['Modulo']."</td>";
		echo "<td>".$fila['Fecha_Inicio']."</td>";
		echo "<td>".$fila['Fecha_Fin']."</td>";
		echo "<td>".$fila['Ciclo']."</td>";
		echo "<td>".$fila['Precio']."</td>";
		echo "<td>".$fila['Estado']."</td>";
		echo "<td>".'<a href="ctrlcertificado.php?accion=det&idcerti='.$idcerti.'">Detalle</a>'."</td>";
		echo "<td>".'<a href="ctrlcertificado.php?accion=del&idcerti='.$idcerti.'">Eliminar</a>'."</td>";
		echo "<td>".'<a href="ctrlcertificado.php?accion=mod&idcerti='.$idcerti.'">Modificar</a>'."</td>";
		echo"</tr>";
	}
?>
</table>
</center>