<?php
class LoginController extends ControladorBase{
	
	public function LoginController(){
		parent::ControladorBase();
	}//.\constructor

	public function login(){
		$this->view("login", array("Login" => ""));
	}
	/*	Validar campos en blanco 
		Validar campos en database
		insertar mensajes de ayuda....?
	*/
	public function validar(){
		if($_POST["usuario"] == '' || $_POST["password"] == ''){
			$this->login();
		}else{
			/*¿Comó validamos ?*/
			$Login = new Login();
			$Login->setUsuario($_POST["usuario"]);
			$Login->setPassword($_POST["password"]);
			if($Login->validarLogin()){
				session_start();
				$_SESSION["user"] = $_POST["usuario"];
				$this->view("produccion",array("Mensaje" =>"Llenar todos los cambios"));
			}else{
				$this->login();
			}
		}
	}

	public function salir(){
		session_start();
		session_destroy();
		$produccion = new Produccion();
		$array = $produccion->obtenerRegistros();
		$this->view("index",  array("array" => $array));
	}

}
?>