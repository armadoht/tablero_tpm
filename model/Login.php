<?php
class Login extends EntidadBase{
	private $idAcceso;
	private $usuario;
	private $emanil;
	private $password;
	private $fechaRegistro;
	private $estado;

	public function Login(){
		$table = "acceso";
		parent::EntidadBase($table);
	}
	/***********GETTER AND SETTER************/

	public function getIdAcceso(){
		return $this->idAcceso;
	}
	public function setIdAcceso($idAcceso){
		$this->idAcceso = $idAcceso;
	}

	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}

	public function getFechaRegistro(){
		return $this->password;
	}
	public function setFechaRegistro($fechaRegistro){
		$this->fechaRegistro = $fechaRegistro;
	}

	public function getEstado(){
		return $this->estado;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function validarLogin(){
		$query = "SELECT * FROM acceso WHERE usuario='$this->usuario' and password='$this->password'";
		$result = $this->db()->query($query);
		if($result->num_rows > 0){
			return true;
		}else{
			return false;
		}
	}

	/*
		INSERT INTO `acceso` (`idAcceso`, `usuario`, `email`, `password`, `fechaRegistro`, `estado`) VALUES (NULL, 'ahuerta', 'ahuerta@grupak.com.mx', 'tic2018!', '2018-10-22', '1');
	*/
		



}