<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'study',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '1',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
    'LOAD_EXT_CONFIG'       =>  'user,upload',
    //'ACTION_SUFFIX'         =>  'Action', //操作方法后缀 开启后只有该后缀的函数有效
    //'ACTION_BIND_CLASS'     =>  true, //绑定控制器
    'URL_MODEL'             => 1, //URL模式 有四种 普通：0 PathInfo：1 ReWrite：2 兼容模式：3
    //'URL_HTML_SUFFIX'       => 'shtml', 伪静态后缀
);