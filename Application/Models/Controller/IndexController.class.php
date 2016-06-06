<?php
namespace Models\Controller;
use Models\Model\UserModel;
use Think\Controller;
use Think\Model;
use Think\Think;

class IndexController extends Controller {
    public function index(){
      //  $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//    $user_model = new UserModel();
//    $user_m_model=M('User');
//    $user_d_model=D('User');
//    $empty_model=new Model();
//    $empty_m_model=M();
//    $empty_d_model=D();
//
//        $user=D('User');
//        dump($user->select());
//
//        $student=D('User');
//        dump($student->db(1,'DB_2')->table('user')->select());

       //$this->createUser();
       // $this->updateUser(2);
      //  $this->deleteUser(2);
       //$this->listUser();
      //  $this->showUser(1);
        $this->sqlOperations();
    }

    public function createUser(){
        $userAttribute=array(
          'name'=>'zdc',
          'age'=>'77'
        );
        D('User')->add($userAttribute);
    }

    public function updateUser($userId){
        $userUpdateAttribute=array(
            'id'=>$userId,
            'age'=>2
        );

        D('User')->save($userUpdateAttribute);
    }

    public function listUser(){
        dump(D('User')->select());
    }

    public function deleteUser($userId){
        D('User')->delete($userId);
    }

    public function showUser($userId){
        dump(D('User')->find($userId));
    }

    public function sqlOperations(){
        $userModel=D('User');

//        $condition = array(
//            'name' => 'zdc'
//        );

        $condition = array(
            'name' => array('EQ','zdc')
        );

       // $result = $userModel->where("name='zdc'")->select();
        $result = $userModel
            ->where($condition)
            ->order('id desc')
           // ->limit(3)
            ->page(2,10)
            ->fetchSql(true)
            ->select();
        dump($result);

        echo($userModel->getLastSql());
    }
}