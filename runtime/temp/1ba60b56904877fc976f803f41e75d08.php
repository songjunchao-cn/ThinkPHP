<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\tp5\public/../application/index\view\register\register.html";i:1525361134;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://www.sjc.com/static/index/css/register_style.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="header">
	<h1>vr family register</h1>
</div>
<div class="rg-main">
		<div class="form-register">
			<form  method="post" enctype="multipart/form-data" id="uploadForm">
				<div class="img">
					<h2>signup here</h2>
					<input type="file" name="pic" required="" id="userimg" style="position:absolute;opacity:0;"/>
					<label for="userimg">　　
　　　　　 <img src="http://www.sjc.com/static/index/img/logo/vr.svg" alt=""> 　　
　　      </label> 　　
				</div>
				<div class="register-user">
					<span><i class="register-1"></i></span>
					<input type="text" name="username" placeholder="username" required="" id="username"/>
				</div>

				<div class="register-password">
					<span><i class="register-2"></i></span>
					<input type="password" name="password" placeholder="password" required="" id="password"/>
				</div>

				<div class="register-email">
					<span><i class="register-3"></i></span>
					<input type="email" name="email" placeholder="info@example.com" required="" id="email"/>
				</div>

				<div class="register-phone">
					<span><i class="register-4"></i></span>
					<input type="text" name="phone" placeholder="+86" required="" id="phone"/>
				</div>

				<div class="register-btn">
					<input type="button" name="button" value="sign up" id="sign_up"/>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
	$("#sign_up").click(
	function (){
			 var data= new FormData($('#uploadForm')[0]);
			 $.ajax({
					 type : 'POST',
					 url :"<?php echo url('Register/doregister'); ?>",
					 data :data,
					 dataType : 'json',
					 processData: false,
           contentType: false,
					 success : function(res) {
							 if(res.status == 1){
									 alert(res.info);
									 window.location.href = "<?php echo url('Login/login'); ?>";
							 }else{
									 alert(res.info);
							 }
					 },
					 fail:function(){
						 alert('fail');
					 },

			 });
	 });

	</script>
</body>
</html>
