<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp64\www\tp5\public/../application/admin\view\circle\circleadd.html";i:1526510767;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>圈子管理-VR-FAMILY</title>
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
            <form class="layui-form" action=""  enctype="multipart/form-data" method="post" id="uploadForm"  >
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>标题
												  </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="title" required=""
                        autocomplete="on" class="layui-input">
                    </div>

                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="desc" required=""
                        autocomplete="on" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>内容
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="content" required=""
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        填写文字
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>时间
                    </label>
                    <div class="layui-input-inline">
                        <input type="date" id="L_repass" name="time" required="" lay-verify="date"
                        autocomplete="on" class="layui-input">
                    </div>
                </div>

								<div class="layui-form-item">
										<label for="L_pic" class="layui-form-label">
												<span class="x-red">*</span>文件
										</label>
										<div class="layui-input-inline">
												<input type="file" id="L_pic" name="files"
												autocomplete="off" class="layui-input">
										</div>
								</div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" id="circle-add" type="button">
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

				$("#circle-add").click(
		 function (){
				var url="<?php echo url('Circle/circleadd'); ?>";
				var data= new FormData($('#uploadForm')[0]);
				doAjax(url,data);
		});
    </script>
</body>
</html>
