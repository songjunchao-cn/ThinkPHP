<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"C:\wamp64\www\tp5\public/../application/admin\view\web\weblist.html";i:1526516170;s:57:"C:\wamp64\www\tp5\application\admin\view\common\head.html";i:1525311348;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网址管理</title>
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
                            <a href="<?php echo url('member/memberlist'); ?>">
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
                    <ul class="sub-menu opened">
                        <li>
                            <a href="<?php echo url('web/weblist'); ?>">
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
                            <a href="<?php echo url('slider/sliderlist'); ?>">
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
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <xblock>
              <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button>
              <button class="layui-btn" onclick="web_add('添加网址','webadd.html','600','500')"><i class="layui-icon">&#xe608;</i>添加</button>
            </xblock>
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
                           标题
                        </th>
                        <th>
                           链接
                        </th>
                        <th>
                          描述
                        </th>
                        <th>
                            发布时间
                        </th>
                        <th>
                            图片
                        </th>
                        <!-- <th>
                            状态
                        </th> -->
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                  <?php if(is_array($weblist) || $weblist instanceof \think\Collection || $weblist instanceof \think\Paginator): $i = 0; $__LIST__ = $weblist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td>
                            <input type="checkbox" value="" name="web_id" id="<?php echo $vo['web_id']; ?>">
                        </td>
                        <td>
                            <?php echo $vo['web_id']; ?>
                        </td>
                        <td>
                            <?php echo $vo['web_title']; ?>

                        </td>
                        <td >
                            <?php echo $vo['web_url']; ?>
                        </td>
                        <td >
                            <?php echo $vo['web_desc']; ?>
                        </td>
                        <td>
                            <?php echo $vo['web_time']; ?>
                        </td>
                        <td>
                          <?php if($vo['web_pic'] != ''): ?>
                          <img src="http://www.sjc.com/<?php echo $vo['web_pic']; ?>" alt="" width="200">
                          <?php else: ?>
                          无缩略图
                          <?php endif; ?>

                        </img>
                        </td>
                        <!-- <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                已启用
                            </span>
                        </td> -->
                        <td class="td-manage">
                            <!-- <a style="text-decoration:none" onclick="web_stop(this,'10001')" href="javascript:;" title="停用">
                                <i class="layui-icon">&#xe601;</i>
                            </a> -->
                            <a title="编辑" href="javascript:;" onclick="web_edit('编辑','webedit?web_id=<?php echo $vo['web_id']; ?>','500','800')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>

                            <a title="删除" href="javascript:;" onclick="web_del(this,'<?php echo $vo['web_id']; ?>')"
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <xblock>
              <div class="layui-pages" id="pages"></div>
            </xblock>
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2017vr-family v2.3 All Rights Reserved. </div>
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


            layui.use('laypage', function(){
              var laypage = layui.laypage;//分页插件
            //执行laypage实例
            laypage.render({
              elem: 'pages',
              limit:<?php echo $limit; ?>,
              limits:[10,15,20],
              count: <?php echo $count; ?>,
              layout: ['count','prev','page','next','limit','skip'],
              curr:<?php echo $page; ?>,
              jump:function(obj,first){
                console.log(obj);
                if(!first){
                  window.location.href="<?php echo url('admin/web/weblist'); ?>?page=" + obj.curr+'&limit='+obj.limit;
                }
              }
             });
            });

        //批量删除提交
        function delAll (obj) {
           layer.confirm('确认要删除吗？',function(index){
               //捉到所有被选中的，发异步进行删除
               var checkedArr=[];
               $('.layui-table tbody td input[type=checkbox]').each(function(){
                 if($(this).is(':checked')){
                   checkedArr.push($(this).attr('id'));
                   console.log(checkedArr);


                 }
               });
               $.ajax({
                   type: 'POST',
                   url:"<?php echo url('Web/websdel'); ?>",
                   dataType :'json',
                   data:{checkedArr:checkedArr},
                   success:function(data){
                     $(obj).parents("tr").remove();
                     layer.msg('已删除!',{icon:1,time:1000});
                     window.parent.location.reload();
                   },
                   error:function(data){
                     console.log(data.info);
                   },
                 });

               // layer.msg('删除成功', {icon: 1});
           });
        }
         /*用户-添加*/
        function web_add(title,url,w,h){
            x_admin_show(title,url,w,h);
        }
        /*用户-查看*/
        function web_show(title,url,id,w,h){
            x_admin_show(title,url,w,h);
        }

         /*用户-停用*/
        function web_stop(obj,id){
            layer.confirm('确认要停用吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="web_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                $(obj).remove();
                layer.msg('已停用!',{icon: 5,time:1000});
            });
        }

        /*用户-启用*/
        function web_start(obj,id){
            layer.confirm('确认要启用吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="web_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                $(obj).remove();
                layer.msg('已启用!',{icon: 6,time:1000});
            });
        }
        // 用户-编辑
        function web_edit (title,url,id,w,h) {
            x_admin_show(title,url,w,h);
        }
        /*密码-修改*/
        function web_password(title,url,id,w,h){
            x_admin_show(title,url,w,h);
        }
        /*用户-删除*/
        function web_del(obj,id){
            layer.confirm('确认要删除吗？'
            ,function(index){
              $.ajax({
                  type: 'POST',
                  url:"<?php echo url('web/webdel'); ?>",
                  dataType :'json',
                  data:{web_id:id},
                  success:function(data){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                  },
                  error:function(data){
                    console.log(data.msg);
                  },
                });
            });
        }
        </script>
        <script>
          var oSelect = document.querySelector('.layui-table thead tr th input');
          var aSelect = document.querySelectorAll('.layui-table tbody tr td input');

          var status = 0;
          function allselect(){
            if(status == 0){
              status = 1;
              for(var i = 0, len = aSelect.length; i < len; i++){
                aSelect[i].checked = true;
              }
            }else{
                status = 0;
              for(var i = 0, len = aSelect.length; i < len; i++){
                aSelect[i].checked = false;
              }
            }
          }
          oSelect.onclick = allselect;
        </script>
</body>
</html>
