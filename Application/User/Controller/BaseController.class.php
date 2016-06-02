<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-6-2
 * Time: 下午12:12
 */

namespace User\Controller;
use Think\Controller;

class BaseController extends Controller
{
    public function index(){
        echo 'base.index';
    }

    public function edit(){
        echo 'base.edit';
    }

    public function login(){
        echo 'base.login';
    }

}