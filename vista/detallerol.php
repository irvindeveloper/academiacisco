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
	}
	.deta{
		color: white;
	}
</style>
<center>
<h3 class="deta">Detalle de Rol</h3>
<table width=400 border=4>
	<tr>
		<td>Id Rol:</td>
		<td><?php echo $roles->id; ?></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><?php echo $roles->nombr; ?></td>
	</tr>
	<tr>
		<td>Clave:</td>
		<td><?php echo $roles->clav; ?></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><?php echo $roles->estad; ?></td>
	</tr>
	<tr>
		<td>Nivel:</td>
		<td><?php echo $roles->nive; ?></td>
	</tr>
</table>
</center>