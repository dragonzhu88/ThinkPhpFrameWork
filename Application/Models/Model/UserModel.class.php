<?php
namespace Models\Model;
use Think\Model;

class UserModel extends Model{
//    protected $tablePrefix = 'dragon_';
//    protected $tableName = 'member';
//    protected $trueTableName='dragon_AdminUser';
    protected $_scope = array(
      'latest'=>array(
          'order'=>'create_time desc',
          'limit'=>10
      ),
      'vip'=>array(
           'where'=>array(
            'is_vip'=>1
            )
      )
    );


    public function getLatestUsers(){
       // $result = $this->order('create_time desc')->limit(10)->select();

        $result=$this->scope('latest',array('limit='=>20))->select();
        return $result;
    }

    public function getLatestVIPUsers(){

//        $condition=array(
//            'is_vip'=>1
//        );
//        $result=$this->where($condition)->order('create_time desc')->limit(10)->select();
        $result=$this->scope('vip')->select();

        return $result;
    }

    public function getSomeUsers(){
        $condition=array(
            'is_vip'=>1
        );

        $result = $this
            ->where($condition)
            ->where('create_time <'.strtotime('2015-1-1'))
            ->order('score desc')
            ->limit(10)
            ->select();
        return $result;
    }
}

?>
