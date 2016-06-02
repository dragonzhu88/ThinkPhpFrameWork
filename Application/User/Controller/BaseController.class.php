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
       // echo 'base.index';
       // $this->redirect('edit',"",2,"change");
        $this->ajaxReturn(getTestData(),'json');
    }

    public function edit(){
        echo 'base.edit';
        $this->success("success",U("Base/successFun"),3);

    }

    public function login(){
        echo 'base.login';
        $this->error("error",U("Base/errorFun"),3);
    }

    public function errorFun(){
        echo "error page";
    }

    public function successFun(){
        echo "success page";
    }

    public function getInput(){
        $server = I('server.HTTP_HOST');
        dump($server);
    }

//http://localhost/ThinkPhpFrameWork/index.php/User/Base/valStore/name/localhost
//name为参数名 localhost为参数值
    public function valStore(){
        $user = I('get.name',null);

        if($user == 'localhost'){
            $this->success("hello",U('Base/successFun'),3);
        }else{
            $this->error("error",U('Base/errorFun'),3);
        }
    }

}