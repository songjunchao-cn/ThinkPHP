<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/index\view\login\login.html";i:1526516762;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="http://www.sjc.com/static/index/css/login.css">
	<link rel="stylesheet" type="text/css" href="http://www.sjc.com/static/index/css/verify.css">
	<!-- <link rel="stylesheet" href="http://www.sjc.com/static/index/layui/css/layui.css"> -->
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="http://www.sjc.com/static/index/layui/layui.js"></script> -->
	<script type="text/javascript" src="http://www.sjc.com/static/index/js/verify.js" ></script>
</head>
<body>
<h1>VR FAMILY LOGIN</h1>
<main>

	<h3>登录</h3>
	<form class=""  method="post">
	<div class="inputEle">
		<input type="text" name="username" id="username" value="" placeholder="请输入用户名">
	</div>
	<div class="inputEle">
		<input type="password" name="password" id="password" value="" placeholder="请输入密码">
	</div>
	<div class="inputEle">
		<input type="hidden" name="veriry" value="">
		<div id="verify">
		</div>
	<div class="inputEle" id="">
		<button id='btn' type="button">登录</button>
	</div>
	</form>
</div>

</main>
<!-- <script src='http://www.sjc.com/static/index/js/login.js'></script> -->
<script type="text/javascript">

		    $('#verify').slideVerify({
		    	type : 2,		//类型
        		vOffset : 5,	//误差量，根据需求自行调整
		        vSpace : 5,	//间隔
						imgUrl : 'http://www.sjc.com/static/index/img/',
		        imgName : ['bg1.jpg', 'bg2.jpg'],
		        imgSize : {
		        	width: '290px',
		        	height: '130px',
		        },
		        blockSize : {
		        	width: '20px',
		        	height: '20px',
		        },
		        barSize : {
		        	width : '290px',
		        	height : '30px',
		        },
		        ready : function() {
		    	},
		        success : function() {
		        	$('input:hidden').val(1)
		        	//......后续操作
		        },
		        error : function() {
//		        	alert('验证失败！');
             $('input:hidden').val(0)
		        }

		    });
$("#btn").click(
function (){
		 var username = $("#username").val();
		 var password = $("#password").val();
		 var verify = $('input:hidden').val();
		 $.ajax({
				 type : 'POST',
				 url :"<?php echo url('Login/doLogin'); ?>",
				 data : {username:username,password:password,verify:verify},
				 dataType : 'json',
				 success : function(res) {
						 if(res.status == 1){
								 // layer.msg(res.info);
								 	$('input:hidden').val('')
								 window.location.href = "http://www.sjc.com";

						 }else{
								 alert(res.info);
						 }
				 },
				 fail:function(){
					 alert('请检查网络');
				 },

		 });
 });

</script>
</body>
</html>
