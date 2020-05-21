<?php
class ProduccionController extends ControladorBase{
	
	public function ProduccionController(){
		parent::ControladorBase();
	}//.\constructor

	public function index(){
		$this->view("produccion",array("Mensaje" => ""));
	}

	public function error(){
		session_start();
		$this->view("produccion",  array("Mensaje" => "Para guardar un registro todos los campos son oblgatorios"));
	}

	public function registrar(){
		session_start();
		if($_POST["p_anterior"] == '' || $_POST["p_mes"] == '' || $_POST["p_ames"] == '' || $_POST["p_anual"] == '' ){
			/*Campos vacios*/
			header("Location:index.php?controller=Produccion&action=error");
		}else{
			/*Insertar el Registro*/
			$produccion = new Produccion();
			$produccion->setP_anterior($_POST["p_anterior"]);
			$produccion->setP_mes($_POST["p_mes"]);
			$produccion->setP_ames($_POST["p_ames"]);
			$produccion->setP_anual($_POST["p_anual"]);
			$produccion->guardarProduccion();
			$this->index();
		}
	}

	/*	Validar campos en blanco 
		Validar campos en database
		insertar mensajes de ayuda....?
	*/	
}
?>