<?php
@session_start();
class conexion {
    var $servidor = "localhost";
	var $user = "root";
	var $pass = "";
	var $conex;
	
	public function conectar($bd){
		$misql = new mysqli($this->servidor ,$this->user,$this->pass,$bd);
		if($misql->connect_errno){
			$mensaje="error de conexion: ".$misql->connect_errno;
			
		}
		else{
			$mensaje="conexion exitosa.......... ";
			$this->conex=$misql;
			
		}
		return $mensaje;
	}	
	public function autenticar($usr,$pwd){
		$resLogin=mysqli_query($this->conex,"CALL sp_login('".$usr."','".$pwd."');");
		return $resLogin;
	}

}
$con = new conexion ();
$msj=$con->conectar('academiacisco');
//echo $msj;
$cnn = $con->conex;
//
?>
