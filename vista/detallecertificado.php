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
	.certi{
		color: white;
	}
</style>
<center>
<h3 class="certi">Detalle de Certificado</h3>
<table width=400 border=4>
	<tr>
		<td>Id Instructor:</td>
		<td><?php echo $certificado->idcerti; ?></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><?php echo $certificado->nombre; ?></td>
	</tr>
	<tr>
		<td>Fecha Inicio:</td>
		<td><?php echo $certificado->fechaI; ?></td>
	</tr>
	<tr>
		<td>Fecha Fin:</td>
		<td><?php echo $certificado->fechaF; ?></td>
	</tr>
	<tr>
		<td>Ciclo:</td>
		<td><?php echo $certificado->cicl; ?></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><?php echo $certificado->modul; ?></td>
	</tr>
	<tr>
		<td>Precio:</td>
		<td><?php echo $certificado->prec; ?></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><?php echo $certificado->esta; ?></td>
	</tr>
</table>
</center>