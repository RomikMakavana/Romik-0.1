<?php

namespace controller;

use models\SiteModel;
use libs\Controller;

class RomikController extends controller {

    public function __construct() {
        // echo SiteModel::name;
    }

    public function actionIndex(){
    	$site = new SiteModel();
        return Controller::view('index');
    }

}