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
<h3 class="instru">Ingesar Instructor</h3><br>
<form name="frminstructor" action="ctrlinstructor.php?accion=ins" method="post" onsubmit="return validar();">
<table>
	<tr>
		<td>IdInstructor:</td>
		<td><input type="text" id="IdInstructor" name="txtIdInstru"></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" id="Nombre" name="txtNom"></td>
	</tr>
	<tr>
		<td>Apellido:</td>
		<td><input type="text" id="Apellido" name="txtApe"></td>
	</tr>
	<tr>
		<td>Modulo:</td>
		<td><input type="text" id="Modulo" name="txtModu"></td>
	</tr>
	<tr>
		<td>Certificado</td>
		<td><input type="text" id="Certificado" name="txtCerti"></td>
	</tr>
	<tr>
		<td>Seccion:</td>
		<td><input type="text" id="Seccion" name="txtSecc"></td>
	</tr>
	<tr>
		<td>Horario:</td>
		<td><input type="text" id="Horario" name="txtHor"></td>
	</tr>
	<tr>
	<td>Ciclo:</td>
	<td><input type="text" id="Ciclo" name="txtCiclo"></td>
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
	function validar(){
		var IdInstructor,Nombre,Apellido,Modulo,Certificado,Seccion,Horario,Ciclo;
		IdInstructor = document.getElementById("IdInstructor").value;
		Nombre = document.getElementById("Nombre").value;
		Apellido = document.getElementById("Apellido").value;
		Modulo = document.getElementById("Modulo").value;
		Certificado = document.getElementById("Certificado").value;
		Seccion = document.getElementById("Seccion").value;
		Horario = document.getElementById("Horario").value;
		Ciclo = document.getElementById("Ciclo").value;

		if (IdInstructor === "") 
		{
			alert("IdInstructor campo necesario");
			return false;
		}
		else if (Nombre === "") 
		{
			alert("campo nombre necesario");
			return false;
		}
		else if (Apellido == "") 
		{
			alert("campo apellido necesario");
			return false;
		}
		else if (Modulo == "") 
		{
			alert("campo modulo necesario");
			return false;
		}
		else if (Certificado == "") 
		{
			alert("campo certificados necesario");
			return false;
		}
		else if (Seccion == "") 
		{
			alert("campo seccion necesario");
			return false;
		}
		else if (Horario == "") 
		{
			alert("campo horario necesario");
			return false;
		}
		else if (Ciclo == "") 
		{
			alert("campo ciclo necesario");
			return false;
		}
	}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>