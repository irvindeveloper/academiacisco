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
		color:white;
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
	.cert{
		color: white;
	}
	.estu{
		color: white;
	}
</style>

<center>
<h3 class="estu">Deatalle Estudiante</h3>
<div class="container">
<table id="estudiante" width=400 border=4>
	<tr>
		<td>Id Estudiante:</td>
		<td><?php echo $instructores->idestu; ?></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><?php echo $instructores->nomb; ?></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><?php echo $instructores->apel; ?></td>
	</tr>
	<tr>
		<td>Carrera:</td>
		<td><?php echo $instructores->carr; ?></td>
	</tr>
	<tr>
		<td>Carnet:</td>
		<td><?php echo $instructores->carn; ?></td>
	</tr>
	<tr>
		<td>Direccion:</td>
		<td><?php echo $instructores->dir; ?></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><?php echo $instructores->tel; ?></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><?php echo $instructores->mo; ?></td>
	</tr>
	<tr>
		<td>Certificado:</td>
		<td><?php echo $instructores->cer; ?></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><?php echo $instructores->sec; ?></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><?php echo $instructores->ho; ?></td>
	</tr>
	<!--<tr>
		<td>Numero Boleta:</td>
		<td><?php echo $instructores->num_bo; ?></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><?php echo $instructores->est; ?></td>
	</tr>-->
</table>
</center>
