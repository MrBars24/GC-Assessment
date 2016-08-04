<?php

define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

$app_folder = 'app';

$system_path = 'vendor';

$view_folder = 'app/views';
//define environtment here ->>
if (($_temp = realpath($system_path))!==FALSE) {
	$system_path = $_temp.DIRECTORY_SEPARATOR;
}else {
	$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
}
if ( ! is_dir($system_path))
{
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
	exit(3); // EXIT_CONFIG
}

// defined constants here

//name of itself
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

//vendor path
define('BASEPATH', $system_path);

//front controller.. base path
define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

//vendor file name dir
define('SYSDIR', basename(BASEPATH));

// The path to the "application" directory
	if (is_dir($app_folder))
	{
		if (($_temp = realpath($app_folder)) !== FALSE)
		{
			$app_folder = $_temp;
		}
		else
		{
			$app_folder = strtr(
				rtrim($app_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	//constant of app_folder
	define('APPPATH', $app_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" directory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{
		if (($_temp = realpath($view_folder)) !== FALSE)
		{
			$view_folder = $_temp;
		}
		else
		{
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);

	//require_once BASEPATH;
	require_once BASEPATH . 'core/Core.php';
?>
