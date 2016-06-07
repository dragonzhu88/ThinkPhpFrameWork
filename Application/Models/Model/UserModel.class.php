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

    public function sqlSearch(){
        //string
        $conditionString = 'status=1 OR is_vip=1';

        //array
        $conditionArray = array(
          'status'=>1,
            'is_vip'=>1,
            '_logic'=>'OR'
        );

        //instance
        $conditionClass = new \stdClass();
        $conditionClass->status=1;
        $conditionClass->is_vip=1;
        $conditionClass->_logic='OR';

    }

    public function sqlExpress(){

        //eq =
        //neq <>
        //gt >
        //egt >=
        //lt <
        //elt <=
        //between
        //not between
        //in
        //not in

        $condition=array(
            'name'=>array('eq','dragon'),
            'email'=>array('like','%zdc%'),
            'age'=>array('between',20,35),
            'id'=>array('not in',1,6,99),
            'score'=>array('egt',100),
            'score'=>array('exp'=>'score+2')
        );
    }

    public function sqlFastSearch(){
        $condition=array(
          'name|email|mobile'=>I('post.account'),
            'passwd'=>md5(I('post.passwd'))
        );
    }

    public function sqlAreaSearch(){
        $condition=array(
            'age'=>array(
                array('egt',18),
                array('elt',35)
            ),
            'score'=>array(
                array('elt',99),
                array('egt',1000),
                'or'
            )

        );
    }

    public function sqlConstructSearch(){
        $subCondition=array(
            'status'=>1,
            'age'=>array('gt',18),
            '_logic'=>'and'
        );

        $condition=array(
            '_string'=>'status=1 AND age>18',
            '_query'=>'status=1&age>18&_logic=and',
            '_cpmplex'=>$subCondition
        );
    }

    public function sqlStatisticsSearch(){
        $this->count();
        $this->max('age');
        $this->min('age');
        $this->avg('age');
        $this->sum('age');
    }

    public function sqlOriginSearch(){
        M()->query('select * from dragon_study WHERE id=1');
        M()->execute('update dragon_study set age=11 WHERE id=1');
    }

    public function sqlDynamicSearch(){
        $this->getFieldByUsername('dragon','email');
        $this->getByUsername('zdc');
    }

}
y
?>
