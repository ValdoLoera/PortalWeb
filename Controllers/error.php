<?php
class error extends controller{
	function __construct() {
		parent::__construct();
		$this->vista->render("error/index");;
	}
}