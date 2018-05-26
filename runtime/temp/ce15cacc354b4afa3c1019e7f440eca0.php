<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"C:\wamp64\www\tp5\public/../application/admin\view\index\index.html";i:1526516151;s:57:"C:\wamp64\www\tp5\application\admin\view\common\head.html";i:1525311348;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎页面-VR-FAMILY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="http://www.sjc.com/static/admin/css/font.css">
	  <link rel="stylesheet" href="http://www.sjc.com/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="http://www.sjc.com/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://www.sjc.com/static/admin/js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
      <div class="container">
    <div class="logo"><a href="<?php echo url('Index/index'); ?>">VR-FAMLIY V1.0</a></div>
    <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
    <ul class="layui-nav right" lay-filter="">
      <li class="layui-nav-item">
        <a href="javascript:;"><?php echo \think\Request::instance()->session('adminname'); ?></a>
        <dl class="layui-nav-child"> <!-- 二级菜单 -->
          <dd><a href="<?php echo url('Login/login'); ?>">切换帐号</a></dd>
          <dd><a href="<?php echo url('Index/out'); ?>">退出</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="/">前台首页</a></li>
    </ul>
</div>

    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
				<div class="left-nav">
					<div id="side-nav">
						<ul id="nav">
								<li class="list" current>
										<a href="<?php echo url('Index/index'); ?>">
												<i class="iconfont">&#xe761;</i>
												欢迎页面
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
								</li>
								<li class="list">
										<a href="javascript:;">
												<i class="iconfont">&#xe70b;</i>
												用户管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu">
												<li>
														<a href="<?php echo url('Member/memberlist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																用户列表
														</a>
												</li>
										</ul>
								</li>
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe761;</i>
												网址管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu">
												<li>
														<a href="<?php echo url('Web/weblist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																网址列表
														</a>
												</li>
										</ul>
								</li>
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe761;</i>
												轮播管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu" style="display:none">
												<li>
														<a href="<?php echo url('Slider/sliderlist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																轮播列表
														</a>
												</li>
										</ul>
								</li>
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe761;</i>
												文章管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu" style="display:none">
												<li>
														<a href="<?php echo url('article/articlelist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																文章列表
														</a>
												</li>
										</ul>
								</li>
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe761;</i>
											 圈子管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu" style="display:none">
												<li>
														<a href="<?php echo url('circle/circlelist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																圈子列表
														</a>
												</li>
										</ul>
								</li>
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe761;</i>
												视频管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu" style="display:none">
												<li>
														<a href="<?php echo url('video/videolist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
															视频列表
														</a>
												</li>
										</ul>
								</li>
						</ul>
					</div>
				</div>

        <!-- 左侧菜单结束    -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <!-- <blockquote class="layui-elem-quote">
                注意：每个页面都可以独立设置一个背景主题，如果想全部恢复，请重置。
            </blockquote> -->
            <blockquote class="layui-elem-quote">
                欢迎使用vr-family！<span class="f-14">v1.0</span>
            </blockquote>
            <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default">服务器信息</a></legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>名称</th>
												<th>参数</th>
                    </tr>
                </thead>
                <tbody>
									  <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
											<td><?php echo $key; ?></td>
									    <td><?php echo $vo; ?></td>
                    </tr>
										  <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2018 vr-family All Rights Reserved. 本后台系统由layer&jquery前端框架提供前端技术支持</div>
    </div>
    <!-- 底部结束 -->
    <!-- 背景切换开始 -->
	<div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="http://www.sjc.com/static/admin/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
    </div>
    <!-- 背景切换结束 -->
    <script>
    </script>
</body>
</html>
