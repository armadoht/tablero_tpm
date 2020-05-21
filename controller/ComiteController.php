<?php
	class ComiteController extends ControladorBase{
		public function ComiteController(){
			parent::ControladorBase();
		}
		public function index(){
			#Cargar mainView.php
			$this->view("comite",  array("array" => "Bienvenidos a los comites"));
		}

	}
?>