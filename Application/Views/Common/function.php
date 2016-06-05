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