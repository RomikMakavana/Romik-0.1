<?php

namespace libs;

use config\Configuration as conf;

class Error {

    public function __construct() {
    }

    public static function message($msg = null){
        if($msg != null){
            include conf::SITE_PATH.'libs\\pages\\error.php';
        }else{
            $msg = 'Someting went wrong';
            include conf::SITE_PATH.'libs\\pages\\error.php';
        }
    }
}