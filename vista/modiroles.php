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
	    border-bottom-left-radius: 5px 10px;
	   border-bottom-right-radius: 5px 10px
	}
	a:hover{
		color: red;
	}
	.boton1{
	background-color: #4CAF50;
    color: white;
    padding: 8px 8px;
    margin: 8px 5px;
    border: none;
    cursor: pointer;
    width: 45%;
	}
</style>
<center>
<h3>Modificar Rol</h3>
<form name="frmmodiroles" action="ctrlroles.php?accion=act" method="post">
<table>
	<tr>
		<td>IdRol:</td>
		<td><input type="text" name="txtIdRol" readonly value="<?php echo $roles->id; ?>"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txtNombr" value="<?php echo $roles->nombr; ?>"></td>
	</tr>
	<tr>
		<td>Clave:</td>
		<td><input type="text" name="txtClav" value="<?php echo $roles->clav; ?>"></td>
	</tr>
	<tr>
		<td>Usuario:</td>
		<td><input type="text" name="txtUsua" value="<?php echo $roles->usua; ?>"></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><input type="text" name="txtEstad" value="<?php echo $roles->estad; ?>"></td>
	</tr>
	<tr>
		<td>Nivel:</td>
		<td><input type="text" name="txtNive" value="<?php echo $roles->nive; ?>"></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' class="boton1" value='Modificar'>&nbsp;
		</td>
	</tr>
</table>
</form>
</center>