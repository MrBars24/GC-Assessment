<?php 
	if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/Constants.php'))
	{
		require_once(APPPATH.'config/'.ENVIRONMENT.'/Constants.php');
	}

	require_once(BASEPATH.'core/Common.php');
	require_once(BASEPATH.'core/Controller.php');

	if(isset($_SERVER['PATH_INFO'])){
		$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
	}
	else{
		if(file_exists(APPPATH.'controllers/'.DEFAULT_CTRL.'.php')){
			require_once(APPPATH.'controllers/'.DEFAULT_CTRL.'.php');
			$temp = DEFAULT_CTRL;
			$ctrl = new $temp();
			$ctrl->index();
		}
	}
	
		
	/*if(basename(SELF,'.php')==='index'){
	}else{
		if(file_exists(APPPATH.'controllers/'.basename(SELF).'.php')){
			echo 'asdf';
			//require_once(APPPATH.'controllers/'.basename(SELF).'.php');
			//$temp = basename(SELF,'.php');
			//$ctrl = new $temp();
			//if(isset($request) > 0){
				//call_user_func_array(array($ctrl,$page),$request);
			//}else{
				//$ctrl->$page();	
			//}
		}
	}*/
		
?>