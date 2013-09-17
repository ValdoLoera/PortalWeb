<?php

//la clase controlador que sera heredada por todo los controladores
class controller {
	function __construct() {
		//este controlador crear un objeto de la vista
		//echo "Controlador Principal<br>";
		$this->vista=new view();
	}
}
?>