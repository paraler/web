	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Huayra</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script src="js/login.js" type="text/javascript" charset="utf-8" async defer></script>
		</head>

		<body>
			<div id="header">
				
				<div id="hnav">
					<a href="index.php">home</a>
					<a href="issue.php">issue</a>
					<a href="set.php">set</a>
					<!-- <div class="login_header"><a href="javascript:open();">登录</a></div> -->
					<?php 
						if(isset($_COOKIE['user_id'])&&(basename($SERVER['PHP_SELF'])!='logout.php')){
							echo '<div class=\"logout_header\">
							<a href=\"logout.php\">logout</a></div>';
						}else{
							echo '<div class="login_header">
							<a href="javascript:open();">login</a></div>';
						}
					 ?>
				</div>
			</div>

			
			<div  id="login">
			<div class="login_title">登录会员<span><a href="javascript:close();" class="close_login">关闭</a></span>
			</div>
			<div class="login_content">
				<div class="login_input">
					<label>用&nbsp;户&nbsp;&nbsp;名：</label>
					<input type="text" name="username" class="list_input" id="username" placeholder="请输入用户名" />
				</div>
				<div class="login_input">
					<label>登录密码：</label>
					<input type="password" name="password" class="list_input" id="password" placeholder="请输入密码">
				</div>
			</div>
			<div class="login_button"><button onClick="javascript:check();" id="login_button_submit" name="submit">登录</button>
			</div>
		</div>
			<div class="login-bg"></div>
			<div style="text-align:center;margin:250px 0; font:normal 14px/24px 'MicroSoft YaHei';">
		</div>
		<div id="login_hidden">	
	</div>
	