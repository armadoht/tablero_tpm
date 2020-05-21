<?php
	class IndexController extends ControladorBase{
		public function IndexController(){
			parent::ControladorBase();
		}
		public function index(){
			#Cargar mainView.php
			$produccion = new Produccion();
			$array = $produccion->obtenerRegistros();
			$this->view("index",  array("array" => $array));
		}

	}
?>