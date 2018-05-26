<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp64\www\tp5\public/../application/admin\view\web\webedit.html";i:1526476791;}*/ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>网址编辑</title>
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
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form"  method="post" enctype="multipart/form-data" id="uploadForm">
              <input type="hidden" name="web_id" value="<?php echo $web['web_id']; ?>">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="title" required lay-verify="text"
                        autocomplete="off" value="<?php echo $web['web_title']; ?>" class="layui-input">
                    </div>

                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        链接
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="url" required lay-verify="url"
                        autocomplete="on" value="<?php echo $web['web_url']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_city" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_city" name="desc" required lay-verify="text"
                        autocomplete="off" value="<?php echo $web['web_desc']; ?>"
                        class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                        时间
                    </label>
                    <div class="layui-input-inline">
                        <!-- <textarea  id="L_tel" name="tel" autocomplete="off"
                        class="layui-textarea" style="height: 80px;"></textarea>   -->
                        <input type="date" id="L_tel" name="time" required lay-verify="update"
                         autocomplete="on" value="<?php echo $web['web_time']; ?>"
                          class="layui-input">
                    </div>
                        </div>
                    <div class="layui-form-item">
                        <label for="L_tel" class="layui-form-label">
                            图片
                        </label>
                        <div class="layui-input-inline">
                            <!-- <textarea  id="L_tel" name="tel" autocomplete="off"
                            class="layui-textarea" style="height: 80px;"></textarea>   -->

                            <input type="file" id="L_tel" name="web_pic" required lay-verify="file"
                             autocomplete="on" value="<?php echo $web['web_pic']; ?>"
                              class="layui-input">

                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                    </label>
                    <button class="layui-btn" type="button" id="web-edit">
                        保存
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
    $("#web-edit").click(
  function (){
    var url="<?php echo url('Web/webedit'); ?>";
    var data= new FormData($('#uploadForm')[0]);
    doAjax(url,data);
  });
    </script>
</body>
</html>
