<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\tp5\public/../application/admin\view\register\register.html";i:1523594200;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台注册</title>
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
    <div class="login-logo"><h1>VR-FAMILY</h1></div>
    <div class="login-box">
        <div class="layui-form layui-form-pane">

            <h3>注册你的帐号</h3>
            <label class="login-title" for="email">帐号</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="email" lay-verify="required" placeholder="邮箱" autocomplete="off" class="layui-input" id="email">
                </div>
            </div>
              <label class="login-title" for="adminname">昵称</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="adminname" lay-verify="required" placeholder="昵称" autocomplete="off" class="layui-input" id="admdin_name">
                </div>
            </div>
            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="password" lay-verify="required" placeholder="密码" autocomplete="off" class="layui-input" id="password">
                </div>
            </div>

            <div class="form-actions">
                <button   id="btn">注册</button>
            </div>
						<input type="hidden" value="<?php echo url('Login/login'); ?>" name="login" />
        </div>
    </div>
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
    <script>
        // $(function  () {
        //     layui.use('form', function(){
        //       var form = layui.form();
        //       //监听提交
        //       form.on('submit(login)', function(data){
        //         layer.msg(JSON.stringify(data.field),function(){
        //             location.href='index.html'
        //         });
        //         return false;
        //       });
        //     });
        // })
					 $("#btn").click(
				function (){

				        // var email = $('input[name="email"]').val();
				        // var password = $('input[name="password"]').val();
								var email = $("#email").val();

			          var password = $("#password").val();
                var adminname  = $("#adminname").val();

				        $.ajax({
				            type : 'POST',
				            url :"<?php echo url('Register/doregister'); ?>",
				            data : {email:email,password:password,adminname:adminname},
				            dataType : 'json',
				            success : function(res) {
				                if(res.status == 1){
				                    alert(res.info);
				                    window.location.href = "<?php echo url('Login/login'); ?>";
				                }else{
				                    alert(res.info);
				                }
				            },
										fail:function(){
											alert('没网');
										},

				        });
				    });
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