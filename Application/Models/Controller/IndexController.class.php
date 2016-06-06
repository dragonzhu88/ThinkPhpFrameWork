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
//    $emptu_d_model=D();

        $user=D('User');
        dump($user->select());

        $student=D('User');
        dump($student->db(1,'DB_2')->table('user')->select());
    }
}