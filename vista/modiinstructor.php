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
	    border-bottom-left-radius: 5px 10px;
	   border-bottom-right-radius: 5px 10px
	}
	a:hover{
		color: red;
	}
	.instru{
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
<h3 class="instru">Modificar Instructor</h3>
<form name="frmmodiinstru" action="ctrlinstructor.php?accion=act" method="post">
<table>
	<tr>
		<td>IdInstructor:</td>
		<td><input type="text" name="txtIdInstru" readonly value="<?php echo $instructor->id; ?>"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txtNom" value="<?php echo $instructor->nom; ?>"></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><input type="text" name="txtApe" value="<?php echo $instructor->ape; ?>"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" name="txtModu" value="<?php echo $instructor->modu; ?>"></td>
	</tr>
	<tr>
		<td>Certificacion:</td>
		<td><input type="text" name="txtCerti" value="<?php echo $instructor->cert; ?>"></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><input type="text" name="txtSecc" value="<?php echo $instructor->secc; ?>"></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><input type="text" name="txtHor" value="<?php echo $instructor->hor; ?>"></td>
	</tr>
	<tr>
		<td>Ciclo:</td>
		<td><input type="text" name="txtCiclo" value="<?php echo $instructor->ciclo; ?>"></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' class="boton1" value='Modificar'>&nbsp;
		</td>
	</tr>
</table>
</form>
</center>