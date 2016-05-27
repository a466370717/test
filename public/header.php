<?php 
	echo dirname(__FILE__);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>万众创业234</title>
	<style>
		*{padding: 0px; margin : 0px;border: none}
		html body{width: 100%;min-width: 922px}
		/*顶部图片和登录信息样式*/
		#top{width: 922px;height: 48px;margin: 20px auto;}
		#top img{float: left}
		#top ul{float:left;zoom:1;float: right;}
		#top li{list-style: none;float: right;margin-left:30px;line-height: 48px}
		#top li span{margin:5px;}
		/*主体内容宽度为922px*/
		.center{width: 922px;margin:0 auto;}
		/*导航栏样式*/
		#nav {width: 100%;height: 50px;background: #1260ab}
		#nav div{color: #fff}
		#nav span{line-height: 50px;margin:0px 30px 0px 5px;font-weight: bold;}
		/*搜索栏样式*/
		#search{margin:10px auto;}
		#search label{margin: 0px}
		#search input{width: 120px;height: 40px;vertical-align:middle;margin-right: 4px;float: left;background: #fbfbfb;border: 1px solid #e8e8e8;color:#115faa;font-weight: bold;}
		/*下拉菜单样式*/
		#search select{width: 110px;height: 40px;vertical-align:middle;margin-right:4px;float: left;border: 1px solid #3f88e7;}
		/*搜索输入框样式*/
		#searchInput{width: 420px;height: 40px;}
		
	</style>
</head>
<body>
	<div id="top">
		<img src="img/logo.png" alt="">
		<ul>
			<li><span>您好</span><span>xxxxxxx</span>/<span>用户中心</span>/<span>退出</span></li>
			<li><span>注册</span>/<span>登录</span></li>
		</ul>
	</div>
	<div id="nav">
		<div class="center">
			<span>项目众包</span><span>万众创业</span><span>行业资讯</span><span>优企排行</span>
		</div>
	</div>
	<div id="search" class="center">
		<form>
			<label for="male"></label>
			<input type="button" name="sex" id="male" value="发布项目众包" />
			<label for="female"></label>
			<input type="button" name="sex" id="female" value="发布万众创业" />
			<label for="searchInput"></label>
			<!-- 搜索输入框 -->
			<input type="text" name="sex" id="searchInput" style="width: 420px;height: 38px;border: 1px solid #3f88e7" value="" />
			<!-- 下来菜单 -->
			<select name="" id="">
				<option value ="xiangmuzhongbao">项目众包</option>
				<option value ="saab">Saab</option>
				<option value="opel">Opel</option>
				<option value="audi">Audi</option>
			</select>
			<!-- 搜索按钮 -->
		  	<input type="button" style="width:100px;margin-left: 0px;background: #1260ab;color: #fff;border: 1px solid #1260ab" value="搜索">
		</form>
	</div>
</body>
</html>