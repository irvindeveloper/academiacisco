<?php
class usuarios
{
	var $id;
	var $nom;
	var $usr;
	var $cla;
	var $idc;
	var $est;
	var $niv;
	
	public function getNombre()
	{
		return $this->nom;
	}
	public function setNombre($n)
	{
		$this->nom=$n;
	}
	
public function login($con,$u,$c)
	{
		$resultado= mysqli_query($con,"CALL sp_Login('".$u."','".$c."');");
		return $resultado;
	}
	public function perfil($con, $i)
	{
		$resultado= mysqli_query($con,"CALL sp_perfil('".$i."');");
		return $resultado;
	}
	public function listar($con)
	{
		$resultado= mysqli_query($con,"CALL sp_TodosUsuarios();");
		return $resultado;
	}
	
	
}
?>