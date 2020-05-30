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
<h3 class="estu">Ingesar Estudiantes</h3><br>
<form name="frmestudiantes" action="ctrlestudiantes.php?accion=ins" method="post" onsubmit="return validarest();">
<table>
	<tr>
		<td>IdEstudiante:</td>
		<td><input type="text" id="IdEstudiante" name="txtidEstu"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" id="Nombre" name="txtNomb"></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><input type="text" id="Apellido" name="txtApel"></td>
	</tr>
	<tr>
		<td>Carrera:</td>
		<td><input type="text" id="Carrera" name="txtCarr"></td>
	</tr>
	<tr>
		<td>Carnet:</td>
		<td><input type="text" id="Carnet" name="txtCarn"></td>
	</tr>
	<tr>
		<td>Direccion:</td>
		<td><input type="text" id="Direccion" name="txtDir"></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><input type="text" id="Telefono" name="txtTel"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" id="Modulo" name="txtMo"></td>
	</tr>
	<tr>
		<td>Certificacion:</td>
		<td><input type="text" id="Certificacion" name="txtCer"></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><input type="text" id="Seccion" name="txtSec"></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><input type="text" id="Horario" name="txtHo"></td>
	</tr>
	<tr>
		<td>pago 1:</td>
		<td><input type="text" id="pago1" name="txtPag1"></td>
	</tr>
	<tr>
		<td>pago 2:</td>
		<td><input type="text" id="pago2" name="txtPag2"></td>
	</tr>
	<tr>
		<td>pago 3:</td>
		<td><input type="text" id="pago3" name="txtPag3"></td>
	</tr>
	<tr>
		<td>pago 4:</td>
		<td><input type="text" id="pago4" name="txtPag4"></td>
	</tr>
	<tr>
		<td>pago 5:</td>
		<td><input type="text" id="pago5" name="txtPag5"></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='submit' class="boton1" id="bottom" value='Agregar'>&nbsp;
			<input type='reset' class="boton2" id="bottom" value='Cancelar'>
		</td>
	</tr>
</table>
</form>
</center>
<script>
	function validarest(){
		var IdEstudiante,Nombre,Apellido,Carrera,Carnet,Direccion,Telefono,Modulo,Certificacion,Seccion,Horario,pago1,pago2,pago3,pago4,pago5;
		IdEstudiante = document.getElementById("IdEstudiante").value;
		Nombre = document.getElementById("Nombre").value;
		Apellido = document.getElementById("Apellido").value;
		Carrera = document.getElementById("Carrera").value;
		Carnet = document.getElementById("Carnet").value;
		Direccion = document.getElementById("Direccion").value;
		Telefono = document.getElementById("Telefono").value;
		Modulo = document.getElementById("Modulo").value;
		Certificacion = document.getElementById("Certificacion").value;
		Seccion = document.getElementById("Seccion").value;
		Horario = document.getElementById("Horario").value;
		pago1 = document.getElementById("pago1").value;
		pago2 = document.getElementById("pago2").value;
		pago3 = document.getElementById("pago3").value;
		pago4 = document.getElementById("pago4").value;
		pago5 = document.getElementById("pago5").value;

		if (IdEstudiante === "") 
		{
			alert("IdEstudiante campo necesario");
			return false;
		}
		else if (Nombre === "") 
		{
			alert("campo nombre necesario");
			return false;
		}
		else if (Apellido === "") 
		{
			alert("campo Apellido necesario");
			return false;
		}
		else if (Carrera ==="") 
		{
			alert("campo carrera necesario");
			return false;
		}
		else if (Carnet ==="") 
		{
			alert("campo carnet necesario");
			return false;
		}
		else if (Direccion ==="")
		{
			alert("campo Direccion necesario");
			return false;
		}
		else if (Telefono ==="") 
		{
			alert("campo Telefono necesario");
			return false;
		}
		else if (Modulo ==="") 
		{
			alert("campo Modulo necesario");
			return false;
		}
		else if (Certificacion ==="") 
		{
			alert("campo Certificacion necesario");
			return false;
		}
		else if (Seccion ==="") 
		{
			alert("campo Seccion necesario");
			return false;
		}
		else if (Horario ==="") 
		{
			alert("campo Horario necesario");
			return false;
		}
		else if (pago1 ==="") 
		{
			alert("campo pago1 necesario");
			return false;
		}
		else if (pago2 ==="") 
		{
			alert("campo pago2 necesario");
			return false;
		}
		else if (pago3 ==="") 
		{
			alert("campo pago3 necesario");
			return false;
		}
		else if (pago4 ==="") 
		{
			alert("campo pago4 necesario");
			return false;
		}
		else if (pago5 ==="") 
		{
			alert("campo pago5 necesario");
			return false;
		}
		else if (isNaN(Carnet)) 
		{
			alert("el carnet no es un numero");
			return false;
		}
		else if (isNaN(Telefono)) 
		{
			alert("el Telefono no es un numero");
			return false;
		}
		else if (isNaN(pago1)) 
		{
			alert("el pago1 no es un numero");
			return false;
		}
		else if (isNaN(pago2)) 
		{
			alert("el pago2 no es un numero");
			return false;
		}
		else if (isNaN(pago3)) 
		{
			alert("el pago3 no es un numero");
			return false;
		}
		else if (isNaN(pago4)) 
		{
			alert("el pago4 no es un numero");
			return false;
		}
		else if (isNaN(pago5)) 
		{
			alert("el pago5 no es un numero");
			return false;
		}
	}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>