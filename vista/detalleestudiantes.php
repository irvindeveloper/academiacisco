<style type="text/css">
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
	.estu{
		color: white;
	}
</style>
<center>
<h3 class="estu">Detalle Estudiante</h3>
<div class="container">
<table id="estudiante" width=400 border=4>
	<tr>
		<td>Id Estudiante:</td>
		<td><?php echo $estudiante->idestu; ?></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><?php echo $estudiante->nomb; ?></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><?php echo $estudiante->apel; ?></td>
	</tr>
	<tr>
		<td>Carrera:</td>
		<td><?php echo $estudiante->carr; ?></td>
	</tr>
	<tr>
		<td>Carnet:</td>
		<td><?php echo $estudiante->carn; ?></td>
	</tr>
	<tr>
		<td>Direccion:</td>
		<td><?php echo $estudiante->dir; ?></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><?php echo $estudiante->tel; ?></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><?php echo $estudiante->mo; ?></td>
	</tr>
	<tr>
		<td>Certificado:</td>
		<td><?php echo $estudiante->cer; ?></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><?php echo $estudiante->sec; ?></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><?php echo $estudiante->ho; ?></td>
	</tr>
	<tr>
		<td>pago 1:</td>
		<td><?php echo $estudiante->pag1; ?></td>
	</tr>
	<tr>
		<td>pago 2:</td>
		<td><?php echo $estudiante->pag2; ?></td>
	</tr>
		<tr>
		<td>pago 3:</td>
		<td><?php echo $estudiante->pag3; ?></td>
	</tr>
	<tr>
		<td>pago 4:</td>
		<td><?php echo $estudiante->pag4; ?></td>
	</tr>
		<tr>
		<td>pago 5:</td>
		<td><?php echo $estudiante->pag5; ?></td>
	</tr>
</table>
</center>
