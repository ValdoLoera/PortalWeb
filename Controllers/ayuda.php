<?php
class ayuda extends controller {
	function __construct() {
		parent::__construct();
		$this->vista->render("ayuda/index");
	}
	
	//esta es una funcion para probar lo del URL
	function funcion($param=false) {
		if($param==false){
			echo"<br>Metodo sin parametro";
		}else{
			echo "<br>Metodo con parametro";
		}
	}
}
?>