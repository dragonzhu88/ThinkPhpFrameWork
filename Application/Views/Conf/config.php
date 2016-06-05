<?php
return array(
	//'配置项'=>'配置值'
    //'DEFAULT_V_LAYER' => 'Template', //自定义视图结构 默认是View文件夹下
   // 'TMPL_TEMPLATE_SUFFIX' => '.dragon', //自定义模板文件后缀
   // 'TMPL_FILE_DEPR' => '_',//链接符
   // 'VIEW_PATH' => './Theme/Views/', //自定义视图文件目录
    'DEFAULT_THEME' => 'default',
    'TMPL_DETECT_THEME' => 'true',
    'THEME_LIST' => 'default,admin',
  //  'TMPL_L_DELIM' =>'{{', //左界定符
  //  'TMPL_R_DELIM' =>'}}', //右界定符
    'TMPL_PARSE_STRING' => array(
        '__CDN__'=>'./Cdn'
    )
);