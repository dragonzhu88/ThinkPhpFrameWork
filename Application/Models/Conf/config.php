<?php
return array(
	//'配置项'=>'配置值'
//分布式服务器配置
//    'DB_TYPE'               =>  'mysql',     // 数据库类型
//    'DB_HOST'               =>  'localhost,192.168.1.100,192.168.1.122', // 服务器地址
//    'DB_NAME'               =>  'study',          // 数据库名
//    'DB_USER'               =>  'root,root1,root2,root3',      // 用户名
//    'DB_PWD'                =>  '1,123,666,888',          // 密码
//    'DB_PORT'               =>  '3306',        // 端口
//    'DB_PREFIX'             =>  'Dragon_',    // 数据库表前缀
//
//    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
//    'DB_DEPLOY_TYPE'        =>  1, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
//    'DB_RW_SEPARATE'        =>  true,       // 数据库读写是否分离 主从式有效
//    'DB_MASTER_NUM'         =>  3, // 读写分离后 主服务器数量
//    'DB_SLAVE_NO'           =>  '4', // 指定从服务器序号


    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'study',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '1',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'Dragon_',    // 数据库表前缀



    'DB_2'=>array(
        'DB_TYPE'=>'stu',
        'DB_TYPE'               =>  'mysql',     // 数据库类型
        'DB_HOST'               =>  'localhost', // 服务器地址
        'DB_NAME'               =>  'stu',          // 数据库名
        'DB_USER'               =>  'root',      // 用户名
        'DB_PWD'                =>  '1',          // 密码
        'DB_PORT'               =>  '3306',        // 端口
        'DB_PREFIX'             =>  '',    // 数据库表前缀
    )

);