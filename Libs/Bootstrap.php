<?php
class Bootstrap{
	function __construct() {
		
		//estraer la direccion URL
		$url= isset($_GET['url'])?$_GET['url']: null;
		//divide la direccion para crear una array
		// ejemplo: URL= inicio/algo/13 = contolador=inicio metodo=algo parametros=13
		$url=rtrim($url,'/');
		$url=explode('/',$url);
		
		//print_r($url);
		
		//verifica si pusimos un conrolador si no carga el inicio por defecto
		if(empty($url[0])){
			require 'Controllers/inicio.php';
			$controlador=new inicio();
			return false;
		}
		
		//de lo contrario verifica si el archivo existe
		$archivo='Controllers/'.$url[0].'.php';
		if(file_exists($archivo)){
			//si existe llama el archivo del controlador
			require $archivo;
		}else{
			//si no existe carga el controlador de error
			require 'Controllers/error.php';
			$controlador=new error();
			return false;
		}
		
		$controlador=new $url[0]();
		
		//verifica si contiene algun metodo y/o parametro
		if(isset($url[1])){
			if(isset($url[2])){
				$controlador->$url[1]($url[2]);
			}else{
				$controlador->$url[1]();
			}
		}
		
	}
}
?>