<?php
class certificado{
	var $idcerti;
	var $nombre;
	var $modul;
	var $fechaI;
	var $fechaF;
	var $cicl;
	var $prec;
	var $esta;

	function getidcerti(){
		return $this->idcerti;
	}
	function setidcerti($idcerti){
		$this->idcerti=$idcerti;
	}
	function getnombre(){
		return $this->nombre;
	}
	function setnombre($nombre){
		$this->idcerti=$nombre;
	}
		function getmodul(){
		return $this->modul;
	}
	function setmodul($modul){
		$this->idcerti=$modul;
	}
	function getfechaI(){
		return $this->fechaI;
	}
	function setfechaI($fechaI){
		$this->idcerti=$fechaI;
	}
	function getfechaF(){
		return $this->fechaF;
	}
	function setfechaF($fechaF){
		$this->idcerti=$fechaF;
	}
	function getcicl(){
		return $this->cicl;
	}
	function setcicl($cicl){
		$this->idcerti=$cicl;
	}
	function getprec(){
		return $this->prec;
	}
	function setprec($prec){
		$this->idcerti=$prec;
	}
	function getesta(){
		return $this->esta;
	}
	function setesta($esta){
		$this->idcerti=$esta;
	}

	public function listar($conexion){
		$resultado=mysqli_query($conexion, "call sp_certiAll");
		return $resultado;
	}

	public function insertar($idcerti,$nombre,$modul,$fechaI,$fechaF,$cicl,$prec,$esta,$conexion)
	{
		//$fechaI=date('Y-m-d H:i:s');
		//$fechaF=date('Y-m-s H:i:s');
		$res=mysqli_query($conexion, "call sp_insertarcerti('".$idcerti."','".$nombre."','".$modul."','".$fechaI."','".$fechaF."','".$cicl."','".$prec."','".$esta."');");
		$sentencia="call sp_insertcerti ('".$idcerti."','".$nombre."','".$modul."','".$fechaI."','".$fechaF."','".$cicl."','".$prec."','".$esta."')";

		if($res)
		{
			$mensaje="<br><font color='blue'>Se inserto con Exito</font>";
		}
		else{
			$mensaje="<br>No se pudo insertar: ".mysqli_error($conexion).'<br>'.$sentencia;
		}
		return $mensaje;
	}

	public function listaruno($idcertificacion,$conexion)
	{
		$resultado=mysqli_query($conexion,"call sp_certiXid($idcertificacion);");
		$fila=mysqli_fetch_array($resultado);
		$this->idcerti=$fila['idCertificacion'];
		$this->nombre=$fila['Nombre'];
		$this->modul=$fila['Modulo'];
		$this->fechaI=$fila['Fecha_Inicio'];
		$this->fechaF=$fila['Fecha_Fin'];
		$this->cicl=$fila['Ciclo'];
		$this->prec=$fila['Precio'];
		$this->esta=$fila['Estado'];
	}

	public function eliminar($idcerti,$conexion)
	{
		$resEliminar=mysqli_query($conexion,"call sp_certiDel('".$idcerti."');");
		if($resEliminar)
		{
			$mensaje = "<br><font color='red'>Se Elimino con exito</font>";
		}
		else{
			$mensaje = "<br>No se pudo Eliminar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	}
		public function modificar($idcerti,$nombre,$modul,$fechaI,$fechaF,$cicl,$prec,$esta,$conexion)
	{
		//$fechaI=date('Y-m-d H:i:s');
		//$fechaF=date('Y-m-s H:i:s');
		$res=mysqli_query($conexion, "call sp_modcert('".$idcerti."','".$nombre."','".$modul."','".$fechaI."','".$fechaF."','".$cicl."','".$prec."','".$esta."');");
		if($res)
		{
			$mensaje="<br><font color='blue'>Se modifico con Exito</font>";
		}
		else{
			$mensaje="<br>No se pudo modificar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	}
}
?>