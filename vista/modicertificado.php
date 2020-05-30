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
<h3 class="cert">Modificar Certificado</h3>
<form name="frmmodcerti" action="ctrlcertificado.php?accion=act" method="post">
<table>
	<tr>
		<td>IdCertificado:</td>
		<td><input type="text" name="txtidCerti" readonly value="<?php echo $certificado->idcerti; ?>"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txtNombre" value="<?php echo $certificado->nombre; ?>"></td>
	</tr>
	<tr>
		<td>Fecha Inicio:</td>
		<td><input type="text" name="txtFecha_I" value="<?php echo $certificado->fechaI; ?>"></td>
	</tr>
	<tr>
		<td>Fecha Fin:</td>
		<td><input type="text" name="txtFecha_F" value="<?php echo $certificado->fechaF; ?>"></td>
	</tr>
	<tr>
		<td>Ciclo:</td>
		<td><input type="text" name="txtCicl" value="<?php echo $certificado->cicl; ?>"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" name="txtModul" value="<?php echo $certificado->modul; ?>"></td>
	</tr>
	<tr>
		<td>Precio:</td>
		<td><input type="text" name="txtPrec" value="<?php echo $certificado->prec; ?>"></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><input type="text" name="txtEsta" value="<?php echo $certificado->esta; ?>"></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' class="boton1" value='Modificar'>&nbsp;
		</td>
	</tr>
</table>
</form>
</center>