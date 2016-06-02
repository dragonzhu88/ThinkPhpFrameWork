<?php
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
      //  echo 'I an user';
      //  $config=C("");
      //  dump($config);
        echo "index<br>";
        $this->listActionUrl();
    }

    public function _before_index(){
        echo "before index<br>";
    }

    public function _after_index(){
        echo "after index<br>";
    }

    //execute path:http://localhost/ThinkPhpFrameWork/index.php/User/Index/listAction
    public function listAction(){
        echo "list<br>";
    }

    private function listActionUrl(){
        echo 'Current URL mode is:'."C('URL_MODEL')";
        echo "<br>";

        //U（'地址表达式',['参数'],['伪静态后缀'],['显示域名']）
        //地址表达式：[模块/控制器/操作#锚点@域名]？参数1=值&参数2=值....
        //unix大小写敏感 配置URL_CASE_INSENSITIVE不区分大小写
        echo 'User index URL mode is:'."<a href=\"".U('User/Base/index')."\">".U('User/Base/index')."</a>";
        echo "<br>";

        echo 'User edit URL mode is:'."<a href=\"".U('User/Base/edit')."\">".U('User/Base/edit')."</a>";
        echo "<br>";

        echo 'User login URL mode is:'."<a href=\"".U('User/Base/login')."\">".U('User/Base/login')."</a>";
        echo "<br>";
    }
}