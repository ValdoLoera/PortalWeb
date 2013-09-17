<?php
class inicio extends controller{
	function __construct(){
		parent::__construct();
		$this->vista->render("inicio/index");
	}
}
?>