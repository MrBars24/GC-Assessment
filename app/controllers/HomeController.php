<?php

class HomeController extends GM_Controller{
	public $id;

	function index(){
		$this->loadpage('template/header');
		$this->loadpage('home');
		$this->loadpage('template/footer');
	}
}

?>