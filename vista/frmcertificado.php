<link rel="stylesheet" href="css/bootstrap.min.css">
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
	}	input{
		border-radius: 5px;
		background-color: #def;
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
	.boton2{
	background-color: #DF0101;
    color: white;
    padding: 8px 8px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 45%;
	}
	.certi{
		color: white;
	}
</style>
<center>
<h3 class="certi">Ingesar Certificado</h3><br>
<form name="frmcerti" action="ctrlcertificado.php?accion=ins" method="post" onsubmit="return validarcerti();">
<table>
	<tr>
		<td>IdCertificado:</td>
		<td><input type="text" id="IdCertificado" name="txtidCerti"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" id="Nombre" name="txtNombre"></td>
	</tr>
	<tr>
		<td>Fecha Inicio:</td>
		<td><input type="text" id="FechaInicio" name="txtFecha_I"></td>
	</tr>
	<tr>
		<td>Fecha Fin:</td>
		<td><input type="text" id="FechaFin" name="txtFecha_F"></td>
	</tr>
	<tr>
		<td>Ciclo</td>
		<td><input type="text" id="Ciclo" name="txtCicl"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" id="Modulo" name="txtModul"></td>
	</tr>
	<tr>
		<td>Precio:</td>
		<td><input type="text" id="Precio" name="txtPrec"></td>
	</tr>
	<tr>
		<td>Estado:</td>
		<td><input type="text" id="Estado" name="txtEsta"></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' class="boton1" value='Agregar'>&nbsp;
			<input type='reset' class="boton2" value='Cancelar'>
		</td>
	</tr>
</table>
</form>
</center>
<script>
	function validarcerti(){
		var IdCertificado,Nombre,FechaInicio,FechaFin,Ciclo,Modulo,Precio,Estado;
		IdCertificado = document.getElementById("IdCertificado").value;
		Nombre = document.getElementById("Nombre").value;
		FechaInicio = document.getElementById("FechaInicio").value;
		FechaFin = document.getElementById("FechaFin").value;
		Ciclo = document.getElementById("Ciclo").value;
		Modulo = document.getElementById("Modulo").value;
		Precio = document.getElementById("Precio").value;
		Estado = document.getElementById("Estado").value;

		if (IdCertificado === "") 
		{
			alert("IdCertificado campo necesario");
			return false;
		}
		else if (Nombre === "") 
		{
			alert("campo nombre necesario");
			return false;
		}
		else if (FechaInicio === "") 
		{
			alert("campo FechaInicio necesario");
			return false;
		}
		else if (FechaFin === "") 
		{
			alert("campo FechaFin necesario");
			return false;
		}
		else if (Ciclo === "") 
		{
			alert("campo Ciclo necesario");
			return false;
		}
		else if (Modulo === "") 
		{
			alert("campo Modulo necesario");
			return false;
		}
		else if (Precio === "") 
		{
			alert("campo Precio necesario");
			return false;
		}
		else if (Estado === "")
		{
			alert("campo Estado necesario");
			return false;
		}
	}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>