<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp64\www\tp5\public/../application/admin\view\web\webadd.html";i:1526477792;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加网址</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="_PUBLIC__/css/font.css">
	  <link rel="stylesheet" href="http://www.sjc.com/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="http://www.sjc.com/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://www.sjc.com/static/admin/js/xadmin.js"></script>
</head>
<body>
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="" method="post" enctype="multipart/form-data" id="uploadForm">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>标题
												  </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="title" required="" lay-verify="text"
                        autocomplete="off" class="layui-input">
                    </div>
                    <!-- <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>将会成为您唯一的登入名
                    </div> -->
                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>链接
                    </label>
                    <div class="layui-input-inline">
                        <input type="url" id="L_username" name="url" required="" lay-verify="url"
                        autocomplete="on" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="desc" required="" lay-verify="text"
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        填写你的描述
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>时间
                    </label>
                    <div class="layui-input-inline">
                        <input type="date" id="L_repass" name="time" required="" lay-verify="date"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
								<div class="layui-form-item">
                    <label for="pic" class="layui-form-label">
                        <span class="x-red">*</span>内容
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="pic" name="web_pic" required=""
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        上传你的图片
                    </div>
										</div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
										<button  class="layui-btn" id="web-add" type="button">
												增加
										</button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <script>
		$("#web-add").click(
	function (){
		var url="<?php echo url('Web/webadd'); ?>";
		var data= new FormData($('#uploadForm')[0]);
		doAjax(url,data);
	});
    </script>
</body>
</html>
