<?php

class view {
	function __construct() {
		//echo "esta es la vista<br>";
	}
	
	function render($nombre) {
		require 'Views/Header.php';
		require 'Views/'.$nombre.'.php';
		require 'Views/Footer.php';
	}
}

?>