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
	}	input{
		border-radius: 5px;
		background-color: #def;
	}
	select{
		border-radius: 5px;
		background-color: #def;
	}

</style>
<center>
<h3>Ingesar Estudiantes</h3><br>
<form name="frminstructor" action="ctrlinstrucon.php?accion=ins" method="post">
<table>
	<tr>
		<td>IdEstudiante:</td>
		<td><input type="text" name="txtidEstu" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txtNomb" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><input type="text" name="txtApel" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Carrera:</td>
		<td><input type="text" name="txtCarr" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Carnet:</td>
		<td><input type="text" name="txtCarn" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Direccion:</td>
		<td><input type="text" name="txtDir" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><input type="text" name="txtTel" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" name="txtMo" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Certificacion:</td>
		<td><input type="text" name="txtCer" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><input type="text" name="txtSec" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><input type="text" name="txtHo" required maxlength="45"></td>
	</tr>
	<!--<tr>
		<td>Numero Boleta:</td>
		<td><input type="text" name="txtNum_bo" required maxlength="45"></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><input type="text" name="txtEst" required maxlength="45"></td>
	</tr>-->
	<tr>
		<td colspan='2'>
			<input type='submit' value='Agregar'>&nbsp;
			<input type='reset' value='Cancelar'>
		</td>
	</tr>
</table>
</form>
</center>