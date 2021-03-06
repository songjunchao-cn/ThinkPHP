<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/admin\view\login\login.html";i:1526515225;}*/ ?>
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
    <div class="login-logo"><h1>VR-FAMILY</h1></div>
    <div class="login-box">
        <div class="layui-form layui-form-pane">

            <h3>登录你的帐号</h3>
            <label class="login-title" for="email">帐号</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="email" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input" id="email">
                </div>
            </div>
            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input" id="password">
                </div>
            </div>
            <div class="layui-form-item">
             <input type="text" name="veriryname"  placeholder="请输入验证码"  class="layui-input layui-input-inline" id="veriryname">
						 <img src="<?php echo captcha_src(); ?>" alt="无验证码" onclick="refreshVeriry()" id="veriryimg">
						 <!-- <a href="javascript:refreshVeriry()">刷新</a> -->
            </div>
            <div class="form-actions">
                <button   id="btn">登录</button>
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
					 $("#btn").click(
				function (){
								var email = $("#email").val();
			          var password = $("#password").val();
								var veriryname = $.trim($("#veriryname").val());
				        $.ajax({
				            type : 'POST',
				            url :"<?php echo url('Login/doLogin'); ?>",
				            data : {email:email,password:password,veriryname:veriryname},
				            dataType : 'json',
				            success : function(res) {
				                if(res.status == 1){
				                    layer.msg(res.info);
				                    window.location.href = "<?php echo url('Index/index'); ?>";
				                }else{
				                   layer.alert(res.info);
				                }
				            },
										fail:function(){
											alert('没网');
										},

				        });
				    });
    </script>
		<script>
    function refreshVeriry() {
        var ts = Date.parse(new Date())/1000;
        $('#veriryimg').attr("src", "/captcha?id="+ts);
    }
</script>
</body>
</html>
