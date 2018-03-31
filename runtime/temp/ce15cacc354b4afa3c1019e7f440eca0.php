<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/admin\view\index\index.html";i:1522157002;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-VR-FAMILY</title>
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
        <div class="logo"><a href="http://www.sjc.com/static/admin/index.html">VR-FAMLIY V1.0</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="">个人信息</a></dd>
              <dd><a href="">切换帐号</a></dd>
              <dd><a href="./login.html">退出</a></dd>
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
										<a href="./index.html">
												<i class="iconfont">&#xe761;</i>
												欢迎页面
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
								</li>
								<li class="list">
										<a href="javascript:;">
												<i class="iconfont">&#xe70b;</i>
												会员管理
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu opened">
												<li>
														<a href="<?php echo url('Member/memberlist'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																会员列表
														</a>
												</li>
												<li>
														<a href="<?php echo url('Member/memberdel'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																会员删除
														</a>
												</li>
												<li>
														<a href="<?php echo url('Member/memberdel'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																等级管理
														</a>
												</li>
												<li>
														<a href="<?php echo url('Member/memberdel'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																积分管理
														</a>
												</li>
												<li class="current">
														<a href="<?php echo url('Member/memberview'); ?>">
																<i class="iconfont">&#xe6a7;</i>
																浏览记录
														</a>
												</li>
										</ul>
								</li>
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe6a3;</i>
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
												<i class="iconfont">&#xe6a3;</i>
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
												<i class="iconfont">&#xe6a3;</i>
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
												<i class="iconfont">&#xe6a3;</i>
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
								<li class="list" >
										<a href="javascript:;">
												<i class="iconfont">&#xe6a3;</i>
												系统统计
												<i class="iconfont nav_right">&#xe697;</i>
										</a>
										<ul class="sub-menu" style="display:none">
												<li>
														<a href="./echarts1.html">
																<i class="iconfont">&#xe6a7;</i>
																拆线图
														</a>
												</li>
												<li>
														<a href="./echarts2.html">
																<i class="iconfont">&#xe6a7;</i>
																柱状图
														</a>
												</li>
												<li>
														<a href="./echarts3.html">
																<i class="iconfont">&#xe6a7;</i>
																地图
														</a>
												</li>
												<li>
														<a href="./echarts4.html">
																<i class="iconfont">&#xe6a7;</i>
																饼图
														</a>
												</li>
												<li>
														<a href="./echarts5.html">
																<i class="iconfont">&#xe6a7;</i>
																k线图
														</a>
												</li>
												<li>
														<a href="./echarts6.html">
																<i class="iconfont">&#xe6a7;</i>
																仪表图
														</a>
												</li>
												<li>
														<a href="http://echarts.baidu.com/examples.html">
																<i class="iconfont">&#xe6a7;</i>
																更多案例
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
              <legend><a name="default">信息统计</a></legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>统计</th>
                        <th>资讯库</th>
                        <th>图片库</th>
                        <th>产品库</th>
                        <th>用户</th>
                        <th>管理员</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>总数</td>
                        <td>92</td>
                        <td>9</td>
                        <td>0</td>
                        <td>8</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>今日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>昨日</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>本周</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>本月</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">服务器信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="30%">服务器计算机名</th>
                        <td><span id="lbServerName">http://127.0.0.1/</span></td>
                    </tr>
                    <tr>
                        <td>服务器IP地址</td>
                        <td>192.168.1.1</td>
                    </tr>
                    <tr>
                        <td>服务器域名</td>
                        <td>x.xuebingsi.com</td>
                    </tr>
                    <tr>
                        <td>服务器端口 </td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>服务器IIS版本 </td>
                        <td>Microsoft-IIS/6.0</td>
                    </tr>
                    <tr>
                        <td>本文件所在文件夹 </td>
                        <td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
                    </tr>
                    <tr>
                        <td>服务器操作系统 </td>
                        <td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
                    </tr>
                    <tr>
                        <td>系统所在文件夹 </td>
                        <td>C:\WINDOWS\system32</td>
                    </tr>
                    <tr>
                        <td>服务器脚本超时时间 </td>
                        <td>30000秒</td>
                    </tr>
                    <tr>
                        <td>服务器的语言种类 </td>
                        <td>Chinese (People's Republic of China)</td>
                    </tr>
                    <tr>
                        <td>.NET Framework 版本 </td>
                        <td>2.050727.3655</td>
                    </tr>
                    <tr>
                        <td>服务器当前时间 </td>
                        <td>2017-01-01 12:06:23</td>
                    </tr>
                    <tr>
                        <td>服务器IE版本 </td>
                        <td>6.0000</td>
                    </tr>
                    <tr>
                        <td>服务器上次启动到现在已运行 </td>
                        <td>7210分钟</td>
                    </tr>
                    <tr>
                        <td>逻辑驱动器 </td>
                        <td>C:\D:\</td>
                    </tr>
                    <tr>
                        <td>CPU 总数 </td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>CPU 类型 </td>
                        <td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
                    </tr>
                    <tr>
                        <td>虚拟内存 </td>
                        <td>52480M</td>
                    </tr>
                    <tr>
                        <td>当前程序占用内存 </td>
                        <td>3.29M</td>
                    </tr>
                    <tr>
                        <td>Asp.net所占内存 </td>
                        <td>51.46M</td>
                    </tr>
                    <tr>
                        <td>当前Session数量 </td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>当前SessionID </td>
                        <td>gznhpwmp34004345jz2q3l45</td>
                    </tr>
                    <tr>
                        <td>当前系统用户名 </td>
                        <td>NETWORK SERVICE</td>
                    </tr>
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
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>
</html>
