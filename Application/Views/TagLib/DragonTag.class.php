<?php
namespace Views\TagLib;
use Think\Template\TagLib;
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-6-6
 * Time: 下午2:58
 */
class DragonTag extends TagLib
{
    protected $tag = array(
      'friends'=>array(
          'attr'=>'uid',
          'close'=>1
      )
    );

    public function _friends($tag,$content){

        $content = 'none data';
        $parse_string='<?php';
        $parse_string.='echo '.$content.';';

        $parse_string.='?>';

        return $parse_string;
    }
}