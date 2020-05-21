<?php
class Produccion extends EntidadBase{
	private $idProduccion;
	private $p_anterior;
	private $p_mes;
	private $p_ames;
	private $p_anual;

	public function Produccion(){
		$table = "produccion";
		parent::EntidadBase($table);
	}
	/***********GETTER AND SETTER************/

	public function setP_anterior($p_anterior){
		$this->p_anterior = $p_anterior;
	}

	public function getP_anterior(){
		return $this->p_anterior;
	}

	public function setP_mes($p_mes){
		$this->p_mes = $p_mes;
	}
	
	public function getP_mes(){
		return $this->p_mes;
	}

	public function setP_ames($p_ames){
		$this->p_ames = $p_ames;
	}
	
	public function getP_ames(){
		return $this->p_ames;
	}

	public function setP_anual($p_anual){
		$this->p_anual = $p_anual;
	}
	
	public function getP_anual(){
		return $this->p_anual;
	}



	public function guardarProduccion(){
		$fecha = $hoy = date('Y-m-d');
		$query = "INSERT INTO `produccion` (`idProduccion`, `p_anterior`, `p_mes`, `p_ames`, `p_anual`, `fecha`) VALUES (NULL, '$this->p_anterior', '$this->p_mes', '$this->p_ames', '$this->p_anual', '$fecha');";
		$result = $this->db()->query($query);
		return $result;
	}

	public function obtenerRegistros(){
		$fecha = $hoy = date('Y-m-d');
		$query = "SELECT * FROM `produccion` WHERE fecha = '$fecha'";
		$result = $this->db()->query($query);
		if($result->num_rows > 0){
			while ($row = $result->fetch_array()) {
					$resultSet[] = $row;
			}
			return $resultSet;
		}
		return false;
	}



	/*
		INSERT INTO `acceso` (`idAcceso`, `usuario`, `email`, `password`, `fechaRegistro`, `estado`) VALUES (NULL, 'ahuerta', 'ahuerta@grupak.com.mx', 'tic2018!', '2018-10-22', '1');
	*/
		



}