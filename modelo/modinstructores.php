<?php
class instructores{
	var $idestu;
	var $nomb;
	var $apel;
	var $carr;
	var $carn;
	var $dir;
	var $tel;
	var $mo;
	var $cer;
	var $sec;
	var $ho;
	//var $num_bo;
	//var $est;

	function getidestu(){
		return $this->idestu;
	}
	function setidestu($idestu){
		$this->idestu=$idestu;
	}
	function getnom(){
		return $this->nomb;
	}
	function setnomb($nomb){
		$this->idestu=$nomb;
	}
	function getapel(){
		return $this->apel;
	}
	function setapel($apel){
		$this->idestu=$apel;
	}
	function getcarr(){
		return $this->carr;
	}
	function setcarr($carr){
		$this->idestu=$carr;
	}
	function getcarn(){
		return $this->carn;
	}
	function setcarn($carn){
		$this->idestu=$carn;
	}
	function getdir(){
		return $this->dir;
	}
	function setdir($dir){
		$this->idestu=$dir;
	}
	function gettel(){
		return $this->tel;
	}
	function settel($tel){
		$this->idestu=$tel;
	}
	function getmo(){
		return $this->mo;
	}
	function setmo($mo){
		$this->idestu=$mo;
	}
	function getcer(){
		return $this->cer;
	}
	function setcer($cer){
		$this->idestu=$cer;
	}
	function getsec(){
		return $this->sec;
	}
	function setsec($sec){
		$this->idestu=$sec;
	}
	function getho(){
		return $this->ho;
	}
	function setho($ho){
		$this->idestu=$ho;
	}
	/*function getnum_bo(){
		return $this->num_bo;
	}
	function setnum_bo($num_bo){
		$this->idestu=$num_bo;
	}
	function getest(){
		return $this->est;
	}
	function setest($est){
		$this->idestu=$est;
	}*/

	public function listar($conexion){
		$resultado=mysqli_query($conexion, "call sp_estudiantesALL");
		return $resultado;
	}

	public function insertar($idestu,$nomb,$apel,$carr,$carn,$dir,$tel,$mo,$cer,$sec,$ho,$conexion)
	{
		$ho=date('Y-m-d H:i:s');
		$res=mysqli_query($conexion, "call sp_insertestu('".$idestu."','".$nomb."','".$apel."','".$carr."','".$carn."','".$dir."','".$tel."','".$mo."','".$cer."','".$sec."','".$ho."');");
		$sentencia="call sp_insertestu('".$idestu."','".$nomb."','".$apel."','".$carr."','".$carn."','".$dir."','".$tel."','".$mo."','".$cer."','".$sec."','".$ho."')";
		if($res)
		{
			$mensaje="<br><font color='blue'>Se inserto con Exito</font>";
		}
		else{
			$mensaje="<br>No se pudo insertar: ".mysqli_error($conexion).'<br>'.$sentencia;
		}
		return $mensaje;
	}

	public function listaruno($idestudiante,$conexion){
		$resultado=mysqli_query($conexion,"call sp_estudianteXId($idestudiante);");
		$fila = mysqli_fetch_array($resultado);
			$this->idestu=$fila['idEstudiantes'];
			$this->nomb=$fila['Nombre'];
			$this->apel=$fila['Apellido'];
			$this->carr=$fila['Carrera'];
			$this->carn=$fila['Carnet'];
			$this->dir=$fila['Direccion'];
			$this->tel=$fila['Telefono'];
			$this->mo=$fila['Modulo'];
			$this->cer=$fila['Certificacion'];
			$this->sec=$fila['Seccion'];
			$this->ho=$fila['Horario'];
			//$this->num_bo=$fila['Numero_boleta'];
			//$this->est=$fila['Estado'];
		
	}
}
?>