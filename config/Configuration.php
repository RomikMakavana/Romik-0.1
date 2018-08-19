<?php


namespace config;

use config\DBConnection;
use config\Configuration as conf;
/**
 * configuration
 */
class Configuration
{
	/*
	 * Define your base url here
	 */
	const BASE_URL = "http://framework.local/";
	// public const BASE_URL = "http://localhost/MVC-Frame/";
	

	/*
	 * layout out config
	 */
	const LAYOUT_DIR = 'pages/layout/';

	/*
	 * css configuration
	 */
	public static $cssFiles =[
		 'bootstrap\bootstrap.min.css',
		 'style.css',
	];
	
	const CSS_URL = conf::BASE_URL . "css/";
	const JS_URL = conf::BASE_URL . "js/";
	const IMG_URL = "/images/";

	const SITE_PATH = BASE_PATH . '\\';
	const SITE_SRC = conf::SITE_PATH . 'libs/';

//Default module
	const DEFAULT_CONTROLLER = "site";
	const DEFAULT_ACTION = "index";
//Server configurations
	const SERVER_NAME = "localhost";
	const DB_USERNAME = "root";
	const DB_PASSWORD = "";
	const DB_NAME = "romik";
	function __construct()
	{
		
		$dbCon = new DBConnection();
	}

}
?>

