<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp64\www\tp5\public/../application/admin\view\circle\circleedit.html";i:1526509814;}*/ ?>
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
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form"  method="post"  enctype="multipart/form-data" id="uploadForm">
              <input type="hidden" name="circle_id" value="<?php echo $resorce['circle_id']; ?>">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="title" required lay-verify="text"
                        autocomplete="off" value="<?php echo $resorce['resorce_title']; ?>" class="layui-input">
                    </div>

                </div>
                
                <div class="layui-form-item">
                    <label for="L_city" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_city" name="desc" required lay-verify="text"
                        autocomplete="off" value="<?php echo $resorce['resorce_desc']; ?>"
                        class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                        内容
                    </label>
                    <div class="layui-input-inline">
                        <!-- <textarea  id="L_tel" name="tel" autocomplete="off"
                        class="layui-textarea" style="height: 80px;"></textarea>   -->
                        <input type="text" id="L_tel" name="content"
                         autocomplete="on" value="<?php echo $resorce['resorce_content']; ?>"
                          class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                        文件
                    </label>
                    <div class="layui-input-inline">
                        <!-- <textarea  id="L_tel" name="tel" autocomplete="off"
                        class="layui-textarea" style="height: 80px;"></textarea>   -->

                        <input type="file" id="L_tel" name="files" required lay-verify="file"
                         autocomplete="on" value="<?php echo $resorce['resorce_files']; ?>"
                          class="layui-input">

                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tel" class="layui-form-label">
                    </label>
                    <button class="layui-btn" id="circle-edit" type="button">
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

        		$("#circle-edit").click(
         function (){
           var url="<?php echo url('Circle/circleedit'); ?>";
           var data= new FormData($('#uploadForm')[0]);
        		doAjax(url,data);
        });
    </script>
</body>
</html>
