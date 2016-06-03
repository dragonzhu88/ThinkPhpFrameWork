<?php

namespace User\Controller\Index;


use Think\Controller;


/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-6-2
 * Time: 上午11:34
 */
class index extends Controller
{

    // execute http://localhost/ThinkPhpFrameWork/index.php/User
    public function run(){
        echo 'bind action';
    }

    public function doPrint(){
        echo 'print action';
    }
}