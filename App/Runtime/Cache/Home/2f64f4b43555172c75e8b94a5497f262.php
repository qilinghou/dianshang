<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>童梦网程序安装 - Powered by tongmeng</title>
<link rel="stylesheet" href="/tongmeng/Public/install/images/css.css" />
<script type="text/javascript" src="/tongmeng/Public/js/jquery.min.js"></script>
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h1 class="logo">logo</h1>
					<div class="icon_install">安装向导</div>
					<div class="version">v4</div>
		</div><div class="section">
	<div class="step">
		<ul>
			<li class="on"><em>1</em>检测环境</li>
			<li class="current"><em>2</em>创建数据</li>
			<li><em>3</em>完成安装</li>
		</ul>
	</div>
	<form action="/tongmeng/index.php/Install/save3" method="post">
	<div class="server">
		<table width="100%">
			<tr>
				<td class="td1" width="100">数据库信息</td>
				<td class="td1" width="200">&nbsp;</td>
				<td class="td1">&nbsp;</td>
			</tr>
			<tr>
				<td class="tar">数据库服务器：</td>
				<td><input type="text" name="host" value="localhost" class="input"></td>
				<td><div id="J_dbhost"><span class="gray">数据库服务器地址，一般为localhost</span></div></td>
			</tr>
 
			<tr>
				<td class="tar">数据库用户名：</td>
				<td><input type="text" name="user" value="root" class="input"></td>
				<td><div id="J_dbuser"><span class="gray">数据库用户名</span></div></td>
			</tr>
			<tr>
				<td class="tar">数据库密码：</td>
				<td><input type="password" name="pass" value="" class="input" autoComplete="off"></td>
				<td><div id="J_dbpwd"><span class="gray">数据库密码</span></div></td>
			</tr>
			<tr>
				<td class="tar">数据库名：</td>
				<td><input type="text" name="name" value="tongmeng" class="input"></td>
				<td><div id="J_dbname"><span class="gray">数据库名称</span></div></td>
			</tr>
			<tr>
				<td class="tar">数据库表前缀：</td>
				<td><input type="text" name="prefix" value="tm_" class="input"></td>
				<td><div id="J_dbprefix"><span class="gray">建议使用默认，同一数据库安装多个tongmeng时需修改</span></div></td>
			</tr>
		</table>
		<div id="J_response_tips" style="display:none;"><div class="loading"><span>请稍后...</span></div></div>
	</div>
	<div class="bottom tac">
		<a href="/tongmeng/index.php/Install/save1" class="btn">上一步</a>
		<input type="submit" class="btn btn_submit J_install_btn" value="创建数据">
	</div>
</form>
</section>
	</div>
	<div class="footer">
		&copy; 2015 <a href="" target="_blank">童梦网版权所有</a>
	</div>
</body>
</html>