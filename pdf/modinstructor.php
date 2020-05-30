<?php
class instructor
{
	var $id;
	var $nom;
	var $ape;
	var $modu;
	var $cert;
	var $secc;
	var $hor;
	
	function getid(){
		return $this->id;
	}
	function setidinstru($id){
		$this->id=$id;
	}
	function getnom(){
		return $this->nom;
	}
	function setnom($nom){
		$this->id=$nom;
	}
	function getape(){
		return $this->ape;
	}
	function setape($ape){
		$this->id=$ape;
	}
	function getmodu(){
		return $this->modu;
	}
	function setmodu($modu){
		$this->id=$modu;
	}
	function getcert(){
		return $this->cert;
	}
	function setcert($cert){
		$this->id=$cert;
	}
	function getsecc(){
		return $this->cert;
	}
	function setsecc($secc){
		$this->id=$secc;
	}
	function gethor(){
		return $this->hor;
	}
	function sethor($hor){
		$this->id=$hor;
	}

	public function listar($conexion){
		$resultado=mysqli_query($conexion, "call sp_instructoresALL");
		return $resultado;
	}

	public function insertar($id,$nom,$ape,$modu,$cert,$secc,$hor,$conexion)
	{
		$res=mysqli_query($conexion, "call sp_insertinstru('".$id."','".$nom."','".$ape."','".$modu."','".$cert."','".$secc."','".$hor."');");
		$sentencia="call sp_insertinstru('".$id."','".$nom."','".$ape."','".$modu."','".$cert."','".$secc."','".$hor."')";
		if($res)
		{
			$mensaje="<br><font color='blue'>Se inserto con exito</font>";
		}
		else{
			$mensaje="<br>No se pudo insertar: ".mysqli_error($conexion).'<br>'.$sentencia;
		}
		return $mensaje;
	}
	public function listaruno($idinstructor,$conexion){
	

		$resultado=mysqli_query($conexion,"call sp_instructorXId($idinstructor);");
		$fila=mysqli_fetch_array($resultado) ;
		$this->id=$fila['idInstructor'];
		$this->nom=$fila['Nombre'];
		$this->ape=$fila['Apellido'];
		$this->modu=$fila['Modulo'];
		$this->cert=$fila['Certificacion'];
		$this->secc=$fila['Seccion'];
		$this->hor=$fila['Horario'];
		
	}

	public function eliminar($id,$conexion)
	{
		$resEliminar=mysqli_query($conexion, "call sp_instructorDel('".$id."');");
		if ($resEliminar) 
		{
			$mensaje = "<br><font color='red'>Se Elimino con exito</font>";
		}
		else{
			$mensaje = "<br>No se pudo Eliminar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	}

	public function modificar($id,$nom,$ape,$modu,$cert,$secc,$hor,$conexion)
	{
		$resMod=mysqli_query($conexion, "call sp_instructorMod('".$id."','".$nom."','".$ape."','".$modu."','".$cert."','".$secc."','".$hor."');");
		if($resMod)
		{
			$mensaje = "<br><font color='red'>Se modifico con exito</font>";
		}
		else{
			$mensaje = "<br>No se pudo modificar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	}
}

?>