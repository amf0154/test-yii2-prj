<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use \yii\web\Controller;
/**
 * Description of AppController
 *
 * @author Gleb
 */
class AppController extends Controller{
    //put your code here
    public function debug($param) {
        echo '<pre>'.print_r($param, true).'</pre>';
        
    }
}
