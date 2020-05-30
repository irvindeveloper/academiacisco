<?php
include("encabezado.php");
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Academia Cisco</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	*{
	background:#651923;
	
}

.container{
	 background-color:white;
}

form {
    border: 3px solid #f1f1f1;
    width: 30%;
    color:white;
}

input[type=text], input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    color: white;
}

.button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
.button:hover {
    opacity: 0.8;
}

·img{
	border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
</style>
<div>
	<img src="imagenes/logo.png" width="50%" align="center" alt="">
	</div>
<body>
<tr>
</tr>
<tr>
	<td colspan="8">
<div class="container">
	<section id="content">
		<center><form name="frmLogin" method="POST" action="login.php?acc=1">
			<!--<img src="imagenes/logo.jpg" alt="">-->
			<h1>Academia Cisco</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-5 col-md-3">
						<div class="form-login">
				<input name="txtUser" placeholder="Usuario" maxlength="30" required="" type="text"/>
			</div>
			<div>
				<input name="txtPass" placeholder="Contraseña" maxlength="20" required="" type="password"/>
			</div>
			<div>
				<p align="center"><input class="button" value="ENTRAR" type="submit"></p>
				<?php echo "<font color='red'>".$msjacc."</font>"; ?>
						</div>
					</div>
				</div>
			</div>
		</form>
		</center>
		
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
