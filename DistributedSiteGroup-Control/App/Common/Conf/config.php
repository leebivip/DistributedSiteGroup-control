<?php

return array(
    //'配置项'=>'配置值'
    'LOAD_EXT_CONFIG' => 'db', //加载扩展配置文件    
    'SESSION_AUTO_START' => true, //是否开启session
    'MODULE_DENY_LIST' => array('Common', 'Runtime'), //不允许访问的路径
    'MODULE_ALLOW_LIST' => array('Admin'), //允许访问的模块列表
    'DEFAULT_MODULE' => 'Admin', //默认模块
    'TMPL_TEMPLATE_SUFFIX' => '.tpl'//默认的模板类型为 .tpl类型
);

//这个程序不使用界面  主要是执行远程界面请求
