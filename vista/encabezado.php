<!DOCTYPE html>
<html lang="es-SV"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Universidad Tecnologica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
<body>
	<font face="Cursive">
	<center>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr height="60" align="center" backgroud="#66000D">
			<td colspan="1"></td>
				<td colspan="3" width="50%">
				<?php
					if(isset($_SESSION['vsId']))
					{
						echo "Usuario: ".$_SESSION['vsNombre']."<br>";
						echo "Role: ".$_SESSION['vsNivel']."<br>";
					}
					else
					{
						echo "&nbsp;";
					}	
				?>
			</td>
		</tr>