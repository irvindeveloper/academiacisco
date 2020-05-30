<?php
class roles
{
	var $id;
	var $nombr;
	var $usua;
	var $clav;
	var $estad;
	var $nive;

	function getid(){
		return $this->id;
	}
	function setid($id){
		$this->id=$id;
	}
	function getnombr(){
		return $this->nombr;
	}
	function setnombr($nombr){
		$this->id=$nombr;
	}
	function getusua(){
		return $this->usua;
	}
	function setusua($usua){
		$this->id=$usua;
	}
	function getclav(){
		return $this->clav;
	}
	function setclav($clav){
		$this->id=$clav;
	}
	function getestad(){
		return $this->estad;
	}
	function setestad($estad){
		$this->id=$estad;
	}
	function getnive(){
		return $this->nive;
	}
	function setnive($nive){
		$this->id=$nive;
	}

	public function listar($conexion){
		$resultado=mysqli_query($conexion, "call sp_rolesALL");
		return $resultado;
	}

	public function insertar($id,$nombr,$usua,$clav,$estad,$nive,$conexion)
	{
		$res=mysqli_query($conexion, "call sp_insertroles('".$id."','".$nombr."','".$usua."','".$clav."','".$estad."','".$nive."');");
		$sentencia="call sp_insertroles('".$id."','".$nombr."','".$usua."','".$clav."','".$estad."','".$nive."')";
		if($res)
		{
			$mensaje="<br><font color='blue'>Se inserto con exito</font>";
		}
		else{
			$mensaje="<br>No se pudo insertar: ".mysqli_error($conexion).'<br>'.$sentencia;
		}
		return $mensaje;

	}

	public function listaruno($idr,$conexion)
	{
		$resultado=mysqli_query($conexion, "call sp_rolesXId($idr);");
		$fila=mysqli_fetch_array($resultado);
		$this->id=$fila['id'];
		$this->nombr=$fila['nombre'];
		$this->usua=$fila['usuario'];
		$this->clav=$fila['clave'];
		$this->estad=$fila['estado'];
		$this->nive=$fila['nivel'];
	}

	public function eliminar($id,$conexion)
	{
		$resEliminar=mysqli_query($conexion,"call sp_rolesDel('".$id."');");
		if ($resEliminar) 
		{
			$mensaje = "<br><font color='red'>Se Elimino con exito</font>";
		}
		else{
			$mensaje = "<br>No se pudo Eliminar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	} 

	public function modificar($id,$nombr,$usua,$clav,$estad,$nive,$conexion)
	{
		$resMode=mysqli_query($conexion, "call sp_rolesMod('".$id."','".$nombr."','".$usua."','".$clav."','".$estad."','".$nive."');");
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