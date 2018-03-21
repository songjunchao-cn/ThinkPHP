<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\tp5\public/../application/admin\view\member\memberview.html";i:1521607889;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录-X-admin1.1</title>
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
        <div class="logo"><a href="./index.html">X-ADMIN V1.1</a></div>
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
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="./category.html">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
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
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
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
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">日期范围</label>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div>
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量恢复</button><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            用户名
                        </th>
                        <th>
                            ip
                        </th>
                        <th>
                            访问时间
                        </th>
                        <th>
                            url
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            李四
                        </td>
                        <td>
                            192.168.0.2
                        </td>
                        <td>
                            2015.01.16 22:12:24
                        </td>
                        <td >
                            http://x.xuebingsi.com/
                        </td>
                        <td class="td-manage">
                            <a title="删除" href="javascript:;" onclick="view_del(this,'1')"
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
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
        <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>
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
    <!-- 页面动态效果 -->
    <script>

        layui.use(['laydate'], function(){
          laydate = layui.laydate;//日期插件

          //以上模块根据需要引入
          //



          var start = {
            min: laydate.now()
            ,max: '2099-06-16 23:59:59'
            ,istoday: false
            ,choose: function(datas){
              end.min = datas; //开始日选好后，重置结束日的最小日期
              end.start = datas //将结束日的初始值设定为开始日
            }
          };

          var end = {
            min: laydate.now()
            ,max: '2099-06-16 23:59:59'
            ,istoday: false
            ,choose: function(datas){
              start.max = datas; //结束日选好后，重置开始日的最大日期
            }
          };

          document.getElementById('LAY_demorange_s').onclick = function(){
            start.elem = this;
            laydate(start);
          }
          document.getElementById('LAY_demorange_e').onclick = function(){
            end.elem = this
            laydate(end);
          }

        });

         //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }

            /*浏览-删除*/
            function view_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
        </script>
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
