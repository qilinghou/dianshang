<?php
	//加载数据库配置文件
	require(APP_PATH.'Lib/tm_db.php');
	return array(
		//'配置项'=>'配置值'
		'DB_TYPE'               =>  Sql_type,     // 数据库类型
	    'DB_HOST'               =>  Sql_host, // 服务器地址
	    'DB_NAME'               =>  Sql_name,          // 数据库名
	    'DB_USER'               =>  Sql_user,      // 用户名
	    'DB_PWD'                =>  Sql_pwd,          // 密码
	    'DB_PORT'               =>  Sql_port,        // 端口
	    'DB_PREFIX'             =>  Sql_prefix,    // 数据库表前缀
	    'DB_CHARSET'            =>  Sql_charset,      // 数据库编码默认采用utf8
	    
	    'SHOW_PAGE_TRACE' 		=>	true, 				// 显示页面Trace信息(thinkPHP调试小按钮)

	);