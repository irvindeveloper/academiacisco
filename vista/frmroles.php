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
	tr{
		width: 25%
		text-align: left;
		color: white;
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
</style>
<center>
<h3 class="rol">Ingesar Rol</h3><br>
<form name="frminstructor" action="ctrlroles.php?accion=ins" method="post" onsubmit="return validarrol();">
<table>
	<tr>
		<td>IdRol:</td>
		<td><input type="text" id="IdRol" name="txtIdRol"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" id="Nombre" name="txtNombr"></td>
	</tr>
	<tr>
		<td>Usuario:</td>
		<td><input type="text" id="Usuario" name="txtUsua"></td>
	</tr>
	<tr>
		<td>Clave:</td>
		<td><input type="text" id="Clave" name="txtClav"></td>
	</tr>
	<tr>
		<td>Estado</td>
		<td><input type="text" id="Estado" name="txtEstad"></td>
	</tr>
	<tr>
		<td>Nivel:</td>
		<td><input type="text" id="Nivel" name="txtNive"></td>
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
	function validarrol(){
		var IdRol,Nombre,Usuario,Clave,Estado,Nivel;

		IdRol = document.getElementById("IdRol").value;
		Nombre = document.getElementById("Nombre").value;
		Usuario = document.getElementById("Usuario").value;
		Clave = document.getElementById("Clave").value;
		Estado = document.getElementById("Estado").value;
		Nivel = document.getElementById("Nivel").value;

		if (IdRol === "") 
		{
			alert("IdRol campo necesario");
			return false;
		}
		else if (Nombre ==="") 
		{
			alert("campo Nombre necesario");
			return false;
		}
		else if (Usuario ==="") 
		{
			alert("campo Usuario necesario");
			return false;
		}
		else if (Clave ==="") 
		{
			alert("campo Clave necesario");
			return false;
		}
		else if (Estado ==="") 
		{
			alert("campo Estado necesario");
			return false;
		}
		else if (Nivel ==="") 
		{
			alert("campo Nivel necesario");
			return false;
		}
	}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
