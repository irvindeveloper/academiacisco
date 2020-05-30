<?php
class estudiante{
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
	var $pag1;
	var $pag2;
	var $pag3;
	var $pag4;
	var $pag5;

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
	function getpag1(){
		return $this->pag1;
	}
	function setpag1($pag1){
		$this->idestu=$pag1;
	}
	function getpag2(){
		return $this->pag2;
	}
	function setpag2($pag2){
		$this->idestu=$pag2;
	}
	
	function getpag3(){
		return $this->pag3;
	}
	function setpag3($pag3){
		$this->idestu=$pag3;
	}
	
	function getpag4(){
		return $this->pag4;
	}
	function setpag4($pag4){
		$this->idestu=$pag4;
	}
	function getpag5(){
		return $this->pag5;
	}
	function setpag5($pag5){
		$this->idestu=$pag5;
	}
	public function ccna($conexion) 
	{
		$resultado= mysqli_query($conexion,"call sp_estudiantesCCNA");
		return $resultado;

	} 
	public function ccnasec($conexion) 
	{
		$resultado= mysqli_query($conexion,"call sp_estudiantessecurity");
		return $resultado;

	}
	public function gener($conexion) 
	{
		$resultado= mysqli_query($conexion,"call sp_estudiantesALL");
		return $resultado;

	}

	public function listar($conexion)
	{
		$resultado=mysqli_query($conexion,"call sp_estudiantesALL");
		return $resultado;
	}

	public function insertar($idestu,$nomb,$apel,$carr,$carn,$dir,$tel,$mo,$cer,$sec,$ho,$pag1,$pag2,$pag3,$pag4,$pag5,$conexion)
	{
		$ho=date('Y-m-d H:i:s');
		$res=mysqli_query($conexion, "call sp_insertestu('".$idestu."','".$nomb."','".$apel."','".$carr."','".$carn."','".$dir."','".$tel."','".$mo."','".$cer."','".$sec."','".$ho."','".$pag1."','".$pag2."','".$pag3."','".$pag4."','".$pag5."');");
		$sentencia="call sp_insertestu('".$idestu."','".$nomb."','".$apel."','".$carr."','".$carn."','".$dir."','".$tel."','".$mo."','".$cer."','".$sec."','".$ho."','".$pag1."','".$pag2."','".$pag3."','".$pag4."','".$pag5."')";
		if($res)
		{
			$mensaje="<br><font color='blue'>Se inserto con Exito</font>";
		}
		else{
			$mensaje="<br>No se pudo insertar: ".mysqli_error($conexion).'<br>'.$sentencia;
		}
		return $mensaje;
	}

	public function listaruno($idestudiante,$conexion)
	{
		$resultado=mysqli_query($conexion,"call sp_estudianteXId($idestudiante);");
		$fila=mysqli_fetch_array($resultado);
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
		$this->pag1=$fila['pago1'];
		$this->pag2=$fila['pago2'];
		$this->pag3=$fila['pago3'];
		$this->pag4=$fila['pago4'];
		$this->pag5=$fila['pago5'];
	}

	public function eliminar($idestu,$conexion)
	{
		$resEliminar=mysqli_query($conexion,"call sp_estudianteDel('".$idestu."');");
		if($resEliminar)
		{
			$mensaje = "<br><font color='red'>Se Elimino con exito</font>";
		}
		else{
			$mensaje = "<br>No se pudo Eliminar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	}
	public function modificar($idestu,$nomb,$apel,$carr,$carn,$dir,$tel,$mo,$cer,$sec,$ho,$pag1,$pag2,$pag3,$pag4,$pag5,$conexion)
	{
		$ho=date('Y-m-d H:i:s');
		$resMod=mysqli_query($conexion, "call 	sp_modestu('".$idestu."','".$nomb."','".$apel."','".$carr."','".$carn."','".$dir."','".$tel."','".$mo."','".$cer."','".$sec."','".$ho."','".$pag1."','".$pag2."','".$pag3."','".$pag4."','".$pag5."');");
			if($resMod)
		{
			$mensaje = "<br><font color='red'>Se modifico con exito</font>";
		}
		else{
			$mensaje = "<br>No se pudo modificar: ".mysqli_error($conexion).'<br>';
		}
		return $mensaje;
	}

	public function listarccna($conexion)
	{
		$resultado=mysqli_query($conexion,"call sp_estudiantesCCNA");
		return $resultado;
	}

	public function listarsecurity($conexion)
	{
		$resultado=mysqli_query($conexion,"call sp_estudiantessecurity");
		return $resultado;
	}
	
}
?>