<?php

require_once('config/global.php');
require_once('core/ControladorBase.php');
require_once('core/ControladorFrontal.func.php');

//CONTROLADOR PRINCIPAL...
if(isset($_GET["controller"]) && $_GET["controller"] == "Login"){
	$controllerObj = cargarControladorLogin();
}else if(isset($_GET["controller"])  && $_GET["controller"] == 'Covid' ){
	$controllerObj = cargarControladorCovid();
}else if(isset($_GET["controller"])  && $_GET["controller"] == 'Comite' ){
	$controllerObj = cargarControladorComite();
}else{
	$controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
}
lanzarAccion($controllerObj);

?>