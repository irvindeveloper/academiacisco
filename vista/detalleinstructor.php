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
	.instru{
		color:white;
		
	}
</style>
<center>
<h3 class="instru">Detalle de Instructor</h3>
<table width=400 border=4>
	<tr>
		<td>Id Instructor:</td>
		<td><?php echo $instructor->id; ?></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><?php echo $instructor->nom; ?></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><?php echo $instructor->ape; ?></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><?php echo $instructor->modu; ?></td>
	</tr>
	<tr>
		<td>Certificacion:</td>
		<td><?php echo $instructor->cert; ?></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><?php echo $instructor->secc; ?></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><?php echo $instructor->hor; ?></td>
	</tr>
</table>
</center>