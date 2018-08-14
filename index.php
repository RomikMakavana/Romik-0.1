<?php

const BASE_PATH = __DIR__;
use config\Router;
use config\Configuration as conf;
use config\DBConnection;
use libs\Error;

function __autoload($classname){
    if(file_exists(BASE_PATH.'\\'.$classname.'.php')){
        include_once $classname.'.php';
    }else{
        Error::message($classname." not found.");
    }
}


ob_start();

$config = new conf(); 
/*
 * call controller config
 */
$remove = explode('/index.php', $_SERVER['SCRIPT_NAME']);
$url = $_SERVER['REQUEST_URI'];
if(!empty($remove[0])){
    $url = str_ireplace($remove[0], '', $url);
}
$url_array = explode("/", $url);
if ($url_array[1] == null):
    $controller = conf::DEFAULT_CONTROLLER;
    $action = conf::DEFAULT_ACTION;
    $parameter = null;
else:
    $controller = $url_array[1];
    if (isset($url_array[2])):
        $url_array[2] != "" ? $action = $url_array[2] : $action = conf::DEFAULT_ACTION;
    else:
        $action = conf::DEFAULT_ACTION;
    endif;
    isset($url_array[3]) ? $parameter = $url_array[3] : $parameter = NULL;
endif;


include_once conf::SITE_PATH . conf::LAYOUT_DIR . 'header.php';

$router = new Router();
define('CONTROLLER', $controller);
$router->callAction($controller, $action, $parameter);

require_once ("config/router.php");
if ($url_array[1] != "index" || $url_array[1] != null):
    include_once 'pages/layout/footer.php';
endif;
?>
<!--change title per page-->
<script type="text/javascript">
    document.title = "<?php echo $title; ?>";
</script>


