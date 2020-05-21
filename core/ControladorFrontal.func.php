<?php

	function cargarControlador($controller){
		$controlador = ucwords($controller).'Controller';
		$strFileController = "controller/".$controlador."php";
		if(!is_file($strFileController)){
			$strFileController="controller/".ucwords(CONTROLADOR_DEFECTO)."Controller.php";
		}
		require_once $strFileController;
		$controllerObj = new $controlador();
		return $controllerObj;
	}

	/**Videos */

	function cargarControladorCovid(){
		$controlador = "controller/CovidController.php";
		require_once $controlador;
		$controllerObj = new CovidController();
		return $controllerObj;
	}


	/*Controlador Login*/
	function cargarControladorLogin(){
		$controlador = "controller/LoginController.php";
		require_once $controlador;
		$controllerObj = new LoginController();
		return $controllerObj;
	}
	/*Controlador Produccion*/
	function cargarControladorProduccion(){
		$controlador = "controller/ProduccionController.php";
		require_once $controlador;
		$controllerObj = new ProduccionController();
		return $controllerObj;
	}

	/*Controlador Comite*/
	function cargarControladorComite(){
		$controlador = "controller/ComiteController.php";
		require_once $controlador;
		$controllerObj = new ComiteController();
		return $controllerObj;
	}

	function cargarAction($controllerObj,$action){
		$accion = $action;
		$controllerObj->$accion();
	}

	function lanzarAccion($controllerObj){
		if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
			cargarAction($controllerObj,$_GET["action"]);
		}else{
			cargarAction($controllerObj,ACCION_DEFECTO);
		}
	}

?>