<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/index\view\circle\head.html";i:1526507732;}*/ ?>
﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>circle</title>
		<link rel="stylesheet" href="http://www.sjc.com/static/index/layui/css/layui.css">
		<link rel="stylesheet" href="http://www.sjc.com/static/index/css/circle_global.css">
		<script src="http://www.sjc.com/static/index/layui/layui.js"></script>
		<style>


		</style>
	</head>
	<body>
		<div class="header">
			<div class="main">
				<a class="title"title="">资源圈子</a>
				<div class="nav-user">
					<!-- 登入后的状态 -->
					<a class="avatar">
						<?php if(\think\Request::instance()->session('membername') != ''): ?>
						<img src="http://www.sjc.com/<?php echo \think\Request::instance()->session('memberpic'); ?>" alt="无头像">
						<cite><?php echo \think\Request::instance()->session('membername'); ?></cite>
						<i>已登录</i>
					</a>
					<div class="nav">
						<a href="<?php echo url('Circle/out'); ?>"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退出</a>
					</div>
					<?php else: ?>
					<!-- <img src="http://www.sjc.com/<?php echo \think\Request::instance()->session('memberpic'); ?>" alt="已退出"> -->
					<cite><?php echo \think\Request::instance()->session('membername'); ?></cite>
					<i>未登录</i>
				</a>
				<!-- <div class="nav">
					<a href="javascript:window.location.her"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>登录</a>
				</div> -->
				<?php endif; ?>
				</div>
			</div>
		</div>
	</body>
</html>
