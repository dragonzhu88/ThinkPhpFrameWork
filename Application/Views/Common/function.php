<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 16-6-4
 * Time: 下午9:58
 */

function getAge($year){
    $now = date("Y");
    if($year>$now){
        return 'data error';
    }
    return $now-$year;
}

function get_user_friends(){
    $friends = array(
      array(
          'username' => 'zdc',
          'age' => 30,
          'tags' => array('11','22','33') 
      ),
      array(
          'username' => 'dragon',
          'age' => 35,
          'tags' => array('15','26','83')
      ),
      array(
          'username' => 'hack',
          'age' => 39,
          'tags' => array('71','72','73')
      )
    );

    return $friends;
}

