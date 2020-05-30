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
	.estu{
		color: white;
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
<h3 class="estu">Modificar Estudiantes</h3>
<form name="frmmodiestudiantes" action="ctrlestudiantes.php?accion=act" method="post">
<table>
	<tr>
		<td>IdEstudiantes:</td>
		<td><input type="text" name="txtidEstu" readonly value="<?php echo $estudiante->idestu; ?>"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txtNomb" value="<?php echo $estudiante->nomb; ?>"></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><input type="text" name="txtApel" value="<?php echo $estudiante->apel; ?>"></td>
	</tr>
	<tr>
		<td>Carrera:</td>
		<td><input type="text" name="txtCarr" value="<?php echo $estudiante->carr; ?>"></td>
	</tr>
	<tr>
		<td>Carnet:</td>
		<td><input type="text" name="txtCarn" value="<?php echo $estudiante->carn; ?>"></td>
	</tr>
	<tr>
		<td>Direccion:</td>
		<td><input type="text" name="txtDir" value="<?php echo $estudiante->dir; ?>"></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><input type="text" name="txtTel" value="<?php echo $estudiante->tel; ?>"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" name="txtMo" value="<?php echo $estudiante->mo; ?>"></td>
	</tr>
	<tr>
		<td>Certificacion:</td>
		<td><input type="text" name="txtCer" value="<?php echo $estudiante->cer; ?>"></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><input type="text" name="txtSec" value="<?php echo $estudiante->sec; ?>"></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><input type="text" name="txtHo" value="<?php echo $estudiante->ho; ?>"></td>
	</tr>
	<tr>
		<td>pago 1:</td>
		<td><input type="text" name="txtPag1" value="<?php echo $estudiante->pag1; ?>"></td>
	</tr>
	<tr>
		<td>pago 2:</td>
		<td><input type="text" name="txtPag2" value="<?php echo $estudiante->pag2; ?>"></td>
	</tr>
		<tr>
		<td>pago 3:</td>
		<td><input type="text" name="txtPag3" value="<?php echo $estudiante->pag3; ?>"></td>
	</tr>
	<tr>
		<td>pago 4:</td>
		<td><input type="text" name="txtPag4" value="<?php echo $estudiante->pag4; ?>"></td>
	</tr>
	<tr>
		<td>pago 5:</td>
		<td><input type="text" name="txtPag5" value="<?php echo $estudiante->pag5; ?>"></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' class="boton1" value='Modificar'>&nbsp;
		</td>
	</tr>
</table>
</form>