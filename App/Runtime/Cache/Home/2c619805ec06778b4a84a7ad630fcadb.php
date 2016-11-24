<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>童梦网程序安装 - Powered by tongmeng</title>
<link rel="stylesheet" href="/tongmeng/Public/install/images/css.css" />
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
			<li class="on"><em>2</em>创建数据</li>
			<li class="current"><em>3</em>完成安装</li>
		</ul>
	</div>
	<form id="J_install_form" action="/tongmeng/index.php/Install/save4" method="post">
	<div class="server">
		<table width="100%">
			<tr>
				<td class="td1" width="100">站点信息</td>
				<td class="td1" width="200">&nbsp;</td>
				<td class="td1">&nbsp;</td>
			</tr>
			<tr>
				<td class="tar">站点名称：</td>
				<td><input type="text" name="title" value="童梦网" class="input"></td>
				<td><div id="J_admin_name"><span class="gray">您的站点名称</span></div></td>
			</tr>
			<tr>
				<td class="tar">站点域名：</td>
				<td><input type="text" name="web_url" value="<?php echo ($_SERVER['HTTP_HOST']); ?>" class="input" autoComplete="off"></td>
				<td><div id="J_admin_pass"><span class="gray">一般不用修改</span></div></td>
			</tr>
			<tr>
				<td class="tar">站点路径：</td>
				<td><input type="text" name="web_path" value="/tongmeng" class="input" autoComplete="off" readonly/></td>
				<td><div id="J_admin_pass"><span class="gray">一般不用修改</span></div></td>
			</tr>
		</table>
	</div>
	<div class="server">
		<table width="100%">
			<tr>
				<td class="td1" width="100">后台管理员信息</td>
				<td class="td1" width="200">&nbsp;</td>
				<td class="td1">&nbsp;</td>
			</tr>
			<tr>
				<td class="tar">管理员帐号：</td>
				<td><input type="text" name="username" value="admin" class="input"></td>
				<td><div id="J_admin_name"><span class="gray">登入后台的用户名</span></div></td>
			</tr>
			<tr>
				<td class="tar">密码：</td>
				<td><input type="password" name="password" id="J_manager_pwd" class="input" autoComplete="off"></td>
				<td><div id="J_admin_pass"><span class="gray">登入后台的密码</span></div></td>
			</tr>
		</table>
	</div>
	<div class="bottom tac">
		<button type="submit" class="btn btn_submit J_install_btn">完成安装</button>
	</div>
</form><script src=""></script>
	<div class="footer">
		&copy; 2015 <a href="" target="_blank">童梦网版权所有</a>
	</div>
</body>
</html>