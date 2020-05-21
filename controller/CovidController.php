<?php
	class CovidController extends ControladorBase{
		public function CovidController(){
			parent::ControladorBase();
		}
		public function index(){
			$this->view("covid-19",  array("array" => "Mostrar Videos"));
		}

		public function video_dos(){
			$this->view("covid-02",  array("array" => "Mostrar Videos"));
		}

		public function video_tres(){
			$this->view("covid-03",  array("array" => "Mostrar Videos"));
		}

		public function video_cuatro(){
			$this->view("covid-04",  array("array" => "Mostrar Videos"));
		}

		public function video_cinco(){
			$this->view("covid-05",  array("array" => "Mostrar Videos"));
		}

		public function video_seis(){
			$this->view("covid-06",  array("array" => "Mostrar Videos"));
		}

		public function video_siete(){
			$this->view("covid-07",  array("array" => "Mostrar Videos"));
		}

		public function video_ocho(){
			$this->view("covid-08",  array("array" => "Mostrar Videos"));
		}

		public function video_nueve(){
			$this->view("covid-09",  array("array" => "Mostrar Videos"));
		}

	}
?>