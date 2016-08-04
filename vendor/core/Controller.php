<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GM_Controller{
	
	function __construct(){
		
	}

	function loadpage($page){
		include VIEW_PATH . $page . PHP_EXT;
	}
}

?>